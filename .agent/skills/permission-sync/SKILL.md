---
name: permission-sync
description: "REQUIRED when creating any new admin page/view. Ensures permissions are properly defined and integrated across backend and frontend. Use when adding new admin features, routes, or pages that need access control."
---

# Permission Sync Skill

## Overview

When a new admin page/view is created, multiple files MUST be updated to properly integrate it with the Roles & Permissions system. This skill ensures no file is missed.

**Core principle:** New admin feature is NOT complete until permissions are configured.

## When to Use This Skill

**MANDATORY after:**
- Creating new admin pages in `src/pages/admin/`
- Adding new backend routes that need access control
- Creating new controllers with protected actions
- Adding new menu items to AdminSidebar

## Files That Must Be Updated

### 1. Backend: Define Permissions

**File:** `server/config/permissions.js`

Add new permissions to the `systemPermissions` array:

```javascript
// Format: { name: 'feature.action', description: 'Human readable description', group: 'Group Name' }

// View permission (for accessing the page)
{ name: 'auditlog.view', description: 'View audit logs', group: 'Security' },

// Manage permission (for CRUD operations)
{ name: 'auditlog.manage', description: 'Manage audit log settings', group: 'Security' },

// Optional: More granular permissions if needed
{ name: 'auditlog.export', description: 'Export audit logs', group: 'Security' },
{ name: 'auditlog.delete', description: 'Delete audit logs', group: 'Security' },
```

**Available Groups (update Permission model if adding new):**
- User Management
- Product Management
- Content Management
- Blog Management
- Analytics & Reports
- Settings & Configuration
- Security

---

### 2. Backend: Permission Model (If New Group)

**File:** `server/models/Permission.js`

If adding a NEW group, update the enum:

```javascript
group: {
    type: String,
    enum: ['User Management', 'Product Management', 'Content Management', 
           'Blog Management', 'Analytics & Reports', 'Settings & Configuration',
           'Security'], // Add your new group here
    required: true
}
```

---

### 3. Backend: Assign to Default Roles

**File:** `server/config/permissions.js`

Update `defaultRoles` to assign new permissions:

```javascript
export const defaultRoles = {
    super_admin: {
        permissions: ['*'], // Super Admin gets all automatically
        // ...
    },
    admin: {
        permissions: [
            // ... existing permissions
            'auditlog.view',      // Admin can view audit logs
            'auditlog.export',    // Admin can export
            // NOTE: Don't give admin auditlog.delete for security
        ],
        // ...
    },
    editor: {
        permissions: [
            // ... existing permissions
            // Usually editors DON'T get security permissions
        ],
        // ...
    }
};
```

---

### 4. Backend: Protect Routes

**File:** `server/routes/<feature>Routes.js`

Use `checkPermission()` middleware:

```javascript
import { protect, checkPermission } from '../middleware/authMiddleware.js';

const router = express.Router();

// View route - needs view permission
router.get('/', protect, checkPermission('auditlog.view'), getAuditLogs);

// Export route - needs export permission
router.get('/export', protect, checkPermission('auditlog.export'), exportAuditLogs);

// Delete route - needs delete permission
router.delete('/:id', protect, checkPermission('auditlog.delete'), deleteAuditLog);

// Manage route - needs manage permission
router.put('/settings', protect, checkPermission('auditlog.manage'), updateSettings);
```

---

### 5. Frontend: Add to AdminSidebar

**File:** `src/components/admin/AdminSidebar.tsx`

Add menu item with permission check:

```typescript
// In the navItems array:
{
    label: 'Audit Logs',
    icon: ClipboardList,
    path: '/admin/audit-logs',
    requiredPermission: 'auditlog.view' // This permission is checked
}

// Or for nested items:
{
    label: 'Security',
    icon: Shield,
    requiredPermission: 'auditlog.view', // Parent permission
    children: [
        {
            label: 'Audit Logs',
            path: '/admin/audit-logs',
            requiredPermission: 'auditlog.view'
        },
        {
            label: 'Sessions',
            path: '/admin/sessions',
            requiredPermission: 'session.view'
        }
    ]
}
```

**How Sidebar Filtering Works:**
```typescript
// The hasPermission() helper in AdminSidebar checks:
// 1. Exact match: 'auditlog.view' === 'auditlog.view'
// 2. Wildcard: '*' grants all permissions (Super Admin)
// 3. Group wildcard: 'auditlog.*' grants all auditlog permissions
```

---

### 6. Run Migration Script

After updating permissions, run the migration:

```bash
cd server
node scripts/migrateRoles.js
```

This syncs permissions to the database and updates default roles.

---

## Complete Checklist

### When Creating a New Admin Page:

- [ ] **Define permissions** in `server/config/permissions.js`
  - [ ] Add `feature.view` permission
  - [ ] Add `feature.manage` / `feature.create` / `feature.edit` / `feature.delete` as needed
  - [ ] Choose appropriate group

- [ ] **Update Permission model** (if new group)
  - [ ] Add group to enum in `server/models/Permission.js`

- [ ] **Assign to default roles** in `server/config/permissions.js`
  - [ ] Add to `defaultRoles.admin.permissions`
  - [ ] Add to `defaultRoles.editor.permissions` (if applicable)

- [ ] **Protect backend routes**
  - [ ] Add `protect` middleware
  - [ ] Add `checkPermission('feature.action')` middleware

- [ ] **Update AdminSidebar**
  - [ ] Add menu item with `requiredPermission`

- [ ] **Run migration**
  - [ ] Execute `node scripts/migrateRoles.js`

- [ ] **Verify**
  - [ ] Super Admin sees the new page
  - [ ] Admin sees/doesn't see based on assigned permissions
  - [ ] Editor sees/doesn't see based on assigned permissions
  - [ ] Unauthorized access returns 403 error

---

## Permission Naming Convention

```
<resource>.<action>

Examples:
- product.view       - View products list
- product.create     - Create new products
- product.edit       - Edit existing products
- product.delete     - Delete products
- product.manage     - Full management (use when view/edit are combined)

- order.view         - View orders
- order.manage       - Process/update orders
- order.cancel       - Cancel orders
- order.refund       - Issue refunds

- analytics.view     - View analytics
- analytics.export   - Export reports

- settings.view      - View settings
- settings.manage    - Change settings
```

---

## Quick Reference: Files to Update

| Step | File Location | What to Update |
|------|--------------|----------------|
| 1 | `server/config/permissions.js` | Add to `systemPermissions` array |
| 2 | `server/config/permissions.js` | Add to `defaultRoles` |
| 3 | `server/models/Permission.js` | Add group to enum (if new) |
| 4 | `server/routes/<feature>Routes.js` | Add `checkPermission()` middleware |
| 5 | `src/components/admin/AdminSidebar.tsx` | Add menu item with `requiredPermission` |
| 6 | Terminal | Run `node scripts/migrateRoles.js` |

---

## Red Flags

**Never:**
- Create admin route without `checkPermission()` middleware
- Use `authorize()` for new routes (it's deprecated, use `checkPermission()`)
- Add sidebar item without `requiredPermission`
- Skip migration after adding permissions

**Always:**
- Define view permission for every admin page
- Use granular permissions (create/edit/delete) for sensitive actions
- Test with different roles before marking complete
- Run migration script after permission changes

---

## Integration with Other Skills

**Use with:**
- **api-development** - Create backend routes first, then use this skill
- **api-sync** - Update API docs after routes are created
- **verification-before-completion** - Test all role access before done

**Workflow:**
1. Use `api-development` to create backend route
2. Use `permission-sync` to add permissions
3. Use `api-sync` to update API docs
4. Use `verification-before-completion` to verify access control works
