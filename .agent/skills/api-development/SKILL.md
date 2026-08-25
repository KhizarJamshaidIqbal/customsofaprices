---
name: api-development
description: Backend API development for Node.js/Express. Use when creating new API routes, controllers, or models. Also use for updating existing endpoints, adding authentication, or implementing CRUD operations.
---

# API Development Skill

This skill guides the development of backend API endpoints for the Jinnah Leather Emporium e-commerce platform.

## Project Architecture

```
server/
├── routes/          # Express route definitions
├── controllers/     # Business logic handlers
├── models/          # Mongoose schemas
├── middleware/      # Auth, validation middleware
├── services/        # Reusable service functions
└── utils/           # Helper utilities
```

## Creating a New API Endpoint

### Step 1: Create the Model (if needed)
Location: `server/models/<ModelName>.js`

```javascript
import mongoose from 'mongoose';

const modelSchema = new mongoose.Schema({
  // Define fields with types and validation
  name: { type: String, required: true },
  isActive: { type: Boolean, default: true },
  createdAt: { type: Date, default: Date.now }
});

export default mongoose.model('ModelName', modelSchema);
```

### Step 2: Create the Controller
Location: `server/controllers/<name>Controller.js`

Standard CRUD operations to implement:
- `getAll<Name>` - GET / (with pagination)
- `get<Name>ById` - GET /:id
- `get<Name>BySlug` - GET /slug/:slug (if applicable)
- `create<Name>` - POST /
- `update<Name>` - PUT /:id
- `delete<Name>` - DELETE /:id
- `bulkDelete<Name>` - POST /bulk-delete
- `get<Name>Stats` - GET /stats (admin)

### Step 3: Create the Routes
Location: `server/routes/<name>Routes.js`

```javascript
import express from 'express';
import { /* controllers */ } from '../controllers/<name>Controller.js';
import { protect, authorize } from '../middleware/authMiddleware.js';

const router = express.Router();

// Public routes
router.get('/', getAll);
router.get('/:id', getById);

// Protected routes (admin only)
router.post('/', protect, authorize('admin', 'super_admin'), create);
router.put('/:id', protect, authorize('admin', 'super_admin'), update);
router.delete('/:id', protect, authorize('admin', 'super_admin'), remove);

export default router;
```

### Step 4: Register in Server
Add to `server/index.js`:
```javascript
import <name>Routes from './routes/<name>Routes.js';
app.use('/api/<name>', <name>Routes);
```

## Response Format Standard

All API responses should follow this format:

```javascript
// Success response
res.status(200).json({
  success: true,
  data: { /* response data */ },
  message: 'Optional success message'
});

// Error response
res.status(400).json({
  success: false,
  message: 'Error description'
});
```

## Pagination Pattern

```javascript
const page = parseInt(req.query.page) || 1;
const limit = parseInt(req.query.limit) || 20;
const skip = (page - 1) * limit;

const data = await Model.find(query).skip(skip).limit(limit);
const total = await Model.countDocuments(query);

res.json({
  success: true,
  data,
  total,
  page,
  pages: Math.ceil(total / limit)
});
```

## Authentication Middleware Usage

- `protect` - Requires valid JWT token
- `optionalAuth` - Checks for token but allows guest access (sets req.user if valid token present)
- `authorize('admin', 'super_admin')` - Requires specific roles
- `admin` - Shorthand for admin/super_admin check

## API Documentation Update

After creating new endpoints, update the API docs:
Location: `src/pages/api-docs/components/api-routes/data/<name>Endpoints.ts`

```typescript
export const <name>Endpoints: Endpoint[] = [
  {
    method: 'GET',
    path: '/api/<name>',
    description: 'Get all items',
    requiresAuth: false,
    category: '<Category>',
    response: { success: { success: true, data: [] } },
    statusCodes: [{ code: 200, description: 'Items retrieved' }]
  }
];
```

## Checklist

- [ ] Model created with proper validation
- [ ] Controller with all CRUD operations
- [ ] Routes with proper authentication
- [ ] Registered in server/index.js
- [ ] API documentation updated
- [ ] Error handling implemented
- [ ] Tested with Postman/API tester
