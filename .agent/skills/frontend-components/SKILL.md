---
name: frontend-components
description: React component development with TypeScript and Tailwind CSS. Use when creating new UI components, pages, or modifying existing frontend elements. Also applicable for styling, responsive design, and animations.
---

# Frontend Components Skill

This skill guides the development of React components for the Jinnah Leather Emporium e-commerce platform.

## Project Structure

```
src/
├── components/      # Reusable UI components
├── pages/           # Route-based page components
├── hooks/           # Custom React hooks
├── services/        # API service functions
├── store/           # Redux store & slices
├── types/           # TypeScript type definitions
└── utils/           # Helper utilities
```

## Component Creation Guidelines

### File Naming Convention
- Components: `PascalCase.tsx` (e.g., `ProductCard.tsx`)
- Hooks: `useCamelCase.ts` (e.g., `useProductDetail.ts`)
- Services: `camelCaseService.ts` (e.g., `productService.ts`)
- Types: `camelCaseTypes.ts` (e.g., `productTypes.ts`)

### Component Template

```tsx
import React from 'react';

interface ComponentNameProps {
  // Define props
}

const ComponentName: React.FC<ComponentNameProps> = ({ props }) => {
  return (
    <div className="...">
      {/* Component content */}
    </div>
  );
};

export default ComponentName;
```

## Styling Guidelines

### Tailwind CSS Best Practices
- Use utility classes directly in JSX
- Create reusable class combinations for repeated patterns
- Use responsive prefixes: `sm:`, `md:`, `lg:`, `xl:`
- Dark mode: `dark:` prefix

### Color Palette (From Design System)
```css
/* Primary - Brown/Leather tones */
--primary: #8B4513;
--primary-light: #A0522D;
--primary-dark: #654321;

/* Accent - Gold */
--accent: #D4AF37;

/* Neutrals */
--gray-50 to --gray-900
```

### Animation Patterns
```css
/* Hover transitions */
transition-all duration-300 ease-in-out

/* Scale on hover */
hover:scale-105 transform

/* Fade in */
animate-fadeIn
```

## State Management

### Redux Pattern (for global state)
```tsx
// Using useAppSelector and useAppDispatch
import { useAppSelector, useAppDispatch } from '@/store/hooks';
import { fetchProducts } from '@/store/slices/productSlice';

const Component = () => {
  const dispatch = useAppDispatch();
  const { products, loading } = useAppSelector(state => state.products);
  
  useEffect(() => {
    dispatch(fetchProducts());
  }, [dispatch]);
};
```

### Local State (useState for component state)
```tsx
const [isOpen, setIsOpen] = useState(false);
const [formData, setFormData] = useState({ name: '', email: '' });
```

## API Integration

### Service Pattern
```typescript
// src/services/productService.ts
import api from '@/config/api';

export const productService = {
  getAll: async (params?: QueryParams) => {
    const response = await api.get('/products', { params });
    return response.data;
  },
  getById: async (id: string) => {
    const response = await api.get(`/products/${id}`);
    return response.data;
  }
};
```

### Custom Hook Pattern
```typescript
// src/hooks/useProducts.ts
export const useProducts = () => {
  const [products, setProducts] = useState([]);
  const [loading, setLoading] = useState(false);
  
  const fetchProducts = async () => {
    setLoading(true);
    try {
      const data = await productService.getAll();
      setProducts(data);
    } finally {
      setLoading(false);
    }
  };
  
  return { products, loading, fetchProducts };
};
```

## Responsive Design Breakpoints

```css
/* Mobile first approach */
sm: 640px   /* Small devices */
md: 768px   /* Tablets */
lg: 1024px  /* Laptops */
xl: 1280px  /* Desktops */
2xl: 1536px /* Large screens */
```

## Common UI Patterns

### Loading State
```tsx
{loading ? (
  <div className="flex justify-center items-center py-8">
    <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-primary" />
  </div>
) : (
  <Content />
)}
```

### Empty State
```tsx
{items.length === 0 && (
  <div className="text-center py-12">
    <Icon className="mx-auto h-12 w-12 text-gray-400" />
    <h3 className="mt-2 text-sm font-medium text-gray-900">No items</h3>
    <p className="mt-1 text-sm text-gray-500">Get started by creating a new item.</p>
  </div>
)}
```

### Error Handling
```tsx
{error && (
  <div className="bg-red-50 border border-red-200 rounded-lg p-4 text-red-700">
    {error}
  </div>
)}
```

## Checklist

- [ ] TypeScript interfaces defined
- [ ] Component follows naming conventions
- [ ] Responsive design implemented
- [ ] Loading/error states handled
- [ ] Accessibility (aria labels, keyboard navigation)
- [ ] Dark mode support if applicable
- [ ] Performance optimized (useMemo, useCallback where needed)
