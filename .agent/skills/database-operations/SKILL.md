---
name: database-operations
description: MongoDB and Mongoose operations. Use when creating models, writing queries, optimizing database operations, or handling data migrations. Also use for indexing, aggregation pipelines, and database schema changes.
---

# Database Operations Skill

This skill guides MongoDB/Mongoose operations for the Jinnah Leather Emporium platform.

## MongoDB Connection

Connection is handled in `server/config/database.js` with environment variables from `.env`.

## Model Creation

### Standard Schema Template

```javascript
import mongoose from 'mongoose';

const schemaName = new mongoose.Schema({
  // Required string
  name: {
    type: String,
    required: [true, 'Name is required'],
    trim: true
  },
  
  // String with unique slug
  slug: {
    type: String,
    unique: true,
    lowercase: true
  },
  
  // Reference to another model
  category: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'Category',
    required: true
  },
  
  // Array of embedded documents
  variations: [{
    color: String,
    size: String,
    price: Number,
    stock: Number
  }],
  
  // Enum field
  status: {
    type: String,
    enum: ['active', 'inactive', 'draft'],
    default: 'active'
  },
  
  // Boolean with default
  isActive: {
    type: Boolean,
    default: true
  }
}, {
  timestamps: true  // Adds createdAt and updatedAt
});

// Indexes for performance
schemaName.index({ slug: 1 });
schemaName.index({ category: 1, status: 1 });
schemaName.index({ createdAt: -1 });

// Pre-save middleware (e.g., generate slug)
schemaName.pre('save', function(next) {
  if (this.isModified('name') && !this.slug) {
    this.slug = this.name.toLowerCase().replace(/\s+/g, '-');
  }
  next();
});

export default mongoose.model('ModelName', schemaName);
```

## Common Query Patterns

### Find with Pagination
```javascript
const page = parseInt(req.query.page) || 1;
const limit = parseInt(req.query.limit) || 20;
const skip = (page - 1) * limit;

const items = await Model.find({ isActive: true })
  .populate('category', 'name slug')
  .sort({ createdAt: -1 })
  .skip(skip)
  .limit(limit)
  .lean();

const total = await Model.countDocuments({ isActive: true });
```

### Find with Filters
```javascript
const buildQuery = (filters) => {
  const query = {};
  
  if (filters.category) query.category = filters.category;
  if (filters.status) query.status = filters.status;
  if (filters.search) {
    query.$or = [
      { name: { $regex: filters.search, $options: 'i' } },
      { description: { $regex: filters.search, $options: 'i' } }
    ];
  }
  if (filters.minPrice || filters.maxPrice) {
    query.price = {};
    if (filters.minPrice) query.price.$gte = filters.minPrice;
    if (filters.maxPrice) query.price.$lte = filters.maxPrice;
  }
  
  return query;
};
```

### Aggregation Pipeline Example
```javascript
const stats = await Order.aggregate([
  { $match: { status: 'delivered' } },
  {
    $group: {
      _id: null,
      totalRevenue: { $sum: '$total' },
      avgOrderValue: { $avg: '$total' },
      orderCount: { $sum: 1 }
    }
  }
]);
```

### Update Operations
```javascript
// Update one
await Model.findByIdAndUpdate(id, { $set: updates }, { new: true });

// Update many
await Model.updateMany({ status: 'draft' }, { $set: { status: 'active' } });

// Increment field
await Model.findByIdAndUpdate(id, { $inc: { viewCount: 1 } });

// Push to array
await Model.findByIdAndUpdate(id, { $push: { reviews: newReview } });
```

### Delete Operations
```javascript
// Soft delete (recommended)
await Model.findByIdAndUpdate(id, { isActive: false, deletedAt: new Date() });

// Hard delete
await Model.findByIdAndDelete(id);

// Bulk delete
await Model.deleteMany({ _id: { $in: ids } });
```

## Indexing Best Practices

```javascript
// Single field index
schemaName.index({ email: 1 }, { unique: true });

// Compound index
schemaName.index({ category: 1, status: 1 });

// Text index for search
schemaName.index({ name: 'text', description: 'text' });

// TTL index (auto-expire)
schemaName.index({ expiresAt: 1 }, { expireAfterSeconds: 0 });
```

## Population (Joins)

```javascript
// Single populate
const product = await Product.findById(id)
  .populate('category', 'name slug');

// Multiple populate
const order = await Order.findById(id)
  .populate('user', 'name email')
  .populate('items.product', 'name price images');

// Nested populate
const category = await Category.findById(id)
  .populate({
    path: 'products',
    populate: { path: 'brand', select: 'name' }
  });
```

## Transaction Example

```javascript
const session = await mongoose.startSession();
session.startTransaction();

try {
  const order = await Order.create([{ ...orderData }], { session });
  
  await Product.updateMany(
    { _id: { $in: productIds } },
    { $inc: { stock: -1 } },
    { session }
  );
  
  await session.commitTransaction();
} catch (error) {
  await session.abortTransaction();
  throw error;
} finally {
  session.endSession();
}
```

## Performance Tips

1. **Always use `.lean()`** for read-only queries
2. **Index frequently queried fields**
3. **Use projection** to limit returned fields: `.select('name price')`
4. **Avoid large arrays** in documents (use references instead)
5. **Use aggregation** for complex data transformations

## Checklist

- [ ] Schema has proper validation
- [ ] Indexes added for query fields
- [ ] Pre/post hooks if needed
- [ ] Timestamps enabled
- [ ] Population paths defined
- [ ] Error handling for duplicates
