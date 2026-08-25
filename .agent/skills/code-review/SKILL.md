---
name: code-review
description: Reviews code changes for bugs, style issues, security vulnerabilities, and best practices. Use when reviewing PRs, checking code quality, or auditing existing code.
---

# Code Review Skill

This skill provides guidelines for reviewing code in the Jinnah Leather Emporium project.

## Review Checklist

### 1. Correctness
- [ ] Does the code do what it's supposed to?
- [ ] Are edge cases handled?
- [ ] Does it work with invalid/missing inputs?
- [ ] Are async operations handled correctly?

### 2. Security
- [ ] Input validation on all user inputs
- [ ] SQL/NoSQL injection prevention
- [ ] XSS prevention (sanitized output)
- [ ] Authentication checks on protected routes
- [ ] Authorization checks (role-based access)
- [ ] Sensitive data not logged or exposed
- [ ] API keys/secrets not hardcoded

### 3. Performance
- [ ] No N+1 query problems
- [ ] Database queries optimized with indexes
- [ ] Large arrays/objects paginated
- [ ] Unnecessary re-renders avoided (React)
- [ ] Heavy operations memoized

### 4. Code Style
- [ ] Follows project naming conventions
- [ ] Consistent formatting
- [ ] No unused imports/variables
- [ ] Functions are reasonably sized (<50 lines)
- [ ] No code duplication

### 5. Error Handling
- [ ] Errors caught and handled appropriately
- [ ] User-friendly error messages
- [ ] Errors logged for debugging
- [ ] Graceful degradation

### 6. Testing
- [ ] Unit tests for business logic
- [ ] Edge cases covered
- [ ] Mocks used for external dependencies

## Backend Specific Checks

### Express Routes
```javascript
// ✅ Good: Proper error handling
router.post('/', protect, async (req, res) => {
  try {
    const item = await Model.create(req.body);
    res.status(201).json({ success: true, data: item });
  } catch (error) {
    res.status(500).json({ success: false, message: error.message });
  }
});

// ❌ Bad: No error handling
router.post('/', protect, async (req, res) => {
  const item = await Model.create(req.body);
  res.json(item);
});
```

### Authentication
```javascript
// ✅ Always check for protect middleware on sensitive routes
router.delete('/:id', protect, authorize('admin'), deleteItem);

// ❌ Never expose admin routes without auth
router.delete('/:id', deleteItem); // DANGEROUS!
```

### Input Validation
```javascript
// ✅ Good: Validate before processing
if (!req.body.email || !req.body.password) {
  return res.status(400).json({ message: 'Email and password required' });
}

// ❌ Bad: Trust user input blindly
const user = await User.findOne({ email: req.body.email });
```

## Frontend Specific Checks

### React Components
```tsx
// ✅ Good: Proper dependency array
useEffect(() => {
  fetchData();
}, [userId]); // Re-run when userId changes

// ❌ Bad: Missing dependencies or empty array
useEffect(() => {
  fetchData(userId); // userId not in deps!
}, []);
```

### State Management
```tsx
// ✅ Good: Avoid object mutation
setItems(prev => [...prev, newItem]);

// ❌ Bad: Direct mutation
items.push(newItem);
setItems(items);
```

### Conditional Rendering
```tsx
// ✅ Good: Handle all states
{loading && <Spinner />}
{error && <Error message={error} />}
{data && <Content data={data} />}
{!loading && !error && !data && <Empty />}

// ❌ Bad: Missing states
{data && <Content data={data} />}
```

## Providing Feedback

### Good Feedback Example
```
🔴 **Critical**: The `deleteUser` endpoint lacks authentication.
Any user could delete any account.

**Suggestion**: Add `protect` and `authorize('admin')` middleware.

📍 Location: server/routes/userRoutes.js:25
```

### Feedback Categories
- 🔴 **Critical**: Must fix before merge (security, data loss)
- 🟠 **Important**: Should fix (bugs, bad patterns)
- 🟡 **Minor**: Nice to fix (style, naming)
- 💡 **Suggestion**: Optional improvements

## Common Issues to Watch For

### Backend
1. Missing `await` on async functions
2. Unhandled promise rejections
3. Response already sent errors
4. Memory leaks (event listeners not removed)

### Frontend
1. Missing key props in lists
2. Infinite re-render loops
3. Memory leaks (unmounted component updates)
4. Hardcoded strings (should use i18n)

### Both
1. Console.log left in code
2. TODO comments that should be tickets
3. Commented-out code blocks
4. Magic numbers without constants
