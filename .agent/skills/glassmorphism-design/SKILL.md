---
name: glassmorphism-design
description: Use when implementing glassmorphism UI design theme - creating glass-effect components with CSS variables, backdrop blur, and semi-transparent backgrounds. Applicable for UI design, theme creation, and modern web aesthetics.
---

# Glassmorphism Design Theme

## Overview

This skill guides you through implementing a complete Glassmorphism design theme for React/TypeScript projects. Glassmorphism is a modern UI design trend characterized by frosted glass effects, transparency, and layered depth.

**Core principle:** Create stunning, premium UI components using backdrop blur, semi-transparent backgrounds, and subtle shadows to achieve the signature glass effect.

## When to Use

- Creating new UI components with glassmorphism aesthetic
- Implementing a complete design system with glass effects
- Adding modern, premium visual appeal to web applications
- Building components that need to work over gradient or image backgrounds
- User requests glassmorphism, frosted glass, or modern UI design

## The Process

### Step 1: Add CSS Variables

Add glassmorphism design tokens to your `src/index.css` file in the `:root` section:

```css
/* Glassmorphism Design Tokens */
:root {
  --glass-bg: linear-gradient(0deg, rgba(28, 28, 28, 0.52) 0%, rgba(18, 18, 18, 0.52) 100%);
  --glass-shadow: 0px -1px 0px rgba(255, 255, 255, 0.08), 0px 1px 0px rgba(255, 255, 255, 0.08), 0px 0px 0px 1px rgba(255, 255, 255, 0.06);
  --glass-blur: blur(6px);
  --glass-radius: 12px;
  --glass-hover: rgba(255, 255, 255, 0.15);
}

.dark {
  --glass-bg: linear-gradient(0deg, rgba(28, 28, 28, 0.52) 0%, rgba(18, 18, 18, 0.52) 100%);
  --glass-shadow: 0px -1px 0px rgba(255, 255, 255, 0.08), 0px 1px 0px rgba(255, 255, 255, 0.08), 0px 0px 0px 1px rgba(255, 255, 255, 0.06);
  --glass-blur: blur(6px);
  --glass-radius: 12px;
  --glass-hover: rgba(255, 255, 255, 0.15);
}
```

### Step 2: Ensure cn Utility Exists

Verify `src/lib/utils.ts` has the `cn` utility function:

```typescript
import { type ClassValue, clsx } from "clsx";
import { twMerge } from "tailwind-merge";

export function cn(...inputs: ClassValue[]) {
  return twMerge(clsx(inputs));
}
```

### Step 3: Create Component Files

Create components in `src/components/themes/glassmorphism/` directory:

**Core Components:**
- `Button.tsx` - Glass buttons with variants (primary, secondary, destructive, outline, ghost, link, like)
- `Input.tsx` - Glass input field
- `Card.tsx` - Glass card container
- `ProfileCard.tsx` - Glass profile cards (basic and detailed)

**Input Variants:**
- `InputVariants.tsx` - Specialized inputs (with icons, password, search, number, phone, date, textarea, disabled)

**Navigation:**
- `SideNav.tsx` - Glass sidebar navigation
- `TopNav.tsx` - Glass top navigation bar

**Utility Components:**
- `LoadingState.tsx` - Glass loading spinner
- `EmptyState.tsx` - Glass empty state placeholder
- `Dropdown.tsx` - Glass dropdowns (basic, filter, sort, grouped)
- `Modal.tsx` - Glass modal dialog
- `Tooltip.tsx` - Glass tooltip
- `Tag.tsx` - Glass tag/badge
- `Tabs.tsx` - Glass tabs (text, icon, icon+text)
- `Toggle.tsx` - Glass toggle switch
- `Checkbox.tsx` - Glass checkbox
- `Radio.tsx` - Glass radio button
- `Breadcrumb.tsx` - Glass breadcrumb navigation
- `FileUploader.tsx` - Glass file upload area
- `ProfileUploader.tsx` - Glass profile picture uploader
- `ColorSwitch.tsx` - Glass color picker/switch

### Step 4: Apply Glass Styles

Use this pattern consistently across all components:

```typescript
const glassStyles = {
  background: 'var(--glass-bg)',
  boxShadow: 'var(--glass-shadow)',
  backdropFilter: 'var(--glass-blur)',
  borderRadius: 'var(--glass-radius)'
};

// Apply to elements
<div style={glassStyles} className="...">
```

**For circular elements (avatars, icons):**
```typescript
borderRadius: '50%' // Override glass-radius
```

**For grouped elements (input + button):**
```typescript
borderRadius: 'var(--glass-radius) 0 0 var(--glass-radius)' // Left element
borderRadius: '0 var(--glass-radius) var(--glass-radius) 0' // Right element
```

### Step 5: Implement Hover Effects

Always add brightness hover effects:

```typescript
className="hover:brightness-110 transition-all duration-300"
```

### Step 6: Use Proper Background Context

Glassmorphism works best with:
- Gradient backgrounds
- Image backgrounds
- Colorful backgrounds

Example usage:

```tsx
<div className="min-h-screen p-8" style={{ 
  background: 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' 
}}>
  <GlassCard title="Welcome">
    {/* Your content */}
  </GlassCard>
</div>
```

## Component Architecture

### Button Variants
- `primary` - Default glass button
- `secondary` - Glass button with primary text color
- `destructive` - Red-tinted for dangerous actions
- `outline` - Border variant
- `ghost` - Minimal style
- `link` - Text link style
- `like` - Heart icon with pink color

### Button Sizes
- `sm` - Small (px-4 py-2)
- `md` - Medium (px-6 py-3) - default
- `lg` - Large (px-8 py-4)
- `icon` - Square icon button (w-10 h-10)

### Input Patterns
- Basic input
- Left icon input
- Right icon input
- Password with toggle visibility
- Search with button
- Number stepper
- Phone input
- Date input
- Textarea
- Disabled state

## Best Practices

1. **Backdrop Blur** - Essential for glass effect, always use `var(--glass-blur)`
2. **Semi-transparent backgrounds** - Use rgba colors with opacity 0.4-0.6
3. **Subtle borders** - Use `border-white/20` or `border-white/30`
4. **Shadow layering** - Multiple subtle shadows create depth
5. **Smooth transitions** - Add `transition-all duration-300` for interactive elements
6. **Colorful context** - Glassmorphism needs vibrant backgrounds to shine
7. **Text contrast** - Ensure text remains readable with `text-foreground` and proper opacity
8. **Drop shadows on text** - Use for better readability: `drop-shadow-[0_2px_8px_rgba(0,0,0,0.3)]`

## Red Flags

These indicate improper implementation:

| Problem | Fix |
|---------|-----|
| Glass effect not visible | Add colorful background to parent container |
| Components look flat | Ensure `backdropFilter` is applied with blur |
| Text hard to read | Add drop-shadow or adjust background opacity |
| Hover states feel sluggish | Use `transition-all duration-300` |
| Borders too harsh | Use semi-transparent borders like `border-white/20` |
| Generic appearance | Use curated gradients and avoid plain colors |
| Components don't align properly | Use consistent spacing with Tailwind utilities |

## Common Mistakes

| Mistake | Fix |
|---------|-----|
| Forgetting backdrop-filter | Always include `backdropFilter: 'var(--glass-blur)'` |
| Using solid backgrounds | Use semi-transparent rgba colors |
| Missing CSS variables | Add to both `:root` and `.dark` in index.css |
| Inconsistent border radius | Use `var(--glass-radius)` for consistency |
| No hover feedback | Add `hover:brightness-110` |
| Poor text contrast | Use proper foreground colors and drop-shadows |
| Not using cn utility | Import and use for className merging |
| Missing React.forwardRef | Use for proper ref forwarding in inputs/buttons |

## File Organization

```
src/
├── index.css                          # Add CSS variables here
├── lib/
│   └── utils.ts                       # cn utility function
└── components/
    └── themes/
        └── glassmorphism/
            ├── Button.tsx             # Core button component
            ├── Input.tsx              # Basic input
            ├── InputVariants.tsx      # Specialized inputs
            ├── Card.tsx               # Card container
            ├── ProfileCard.tsx        # Profile cards
            ├── SideNav.tsx            # Sidebar navigation
            ├── TopNav.tsx             # Top navigation
            ├── LoadingState.tsx       # Loading spinner
            ├── EmptyState.tsx         # Empty placeholder
            ├── Dropdown.tsx           # Dropdown variants
            ├── Modal.tsx              # Modal dialog
            ├── Tooltip.tsx            # Tooltip
            ├── Tag.tsx                # Tags/badges
            ├── Tabs.tsx               # Tab variants
            ├── Toggle.tsx             # Toggle switch
            ├── Checkbox.tsx           # Checkbox
            ├── Radio.tsx              # Radio button
            ├── Breadcrumb.tsx         # Breadcrumb
            ├── FileUploader.tsx       # File upload
            ├── ProfileUploader.tsx    # Profile picture
            └── ColorSwitch.tsx        # Color picker
```

## Integration

**Pairs with:**
- `frontend-components` - Use for general React component development
- `brainstorming` - Use when planning new glassmorphism features

## Usage Example

```tsx
import { GlassButton } from '@/components/themes/glassmorphism/Button';
import { GlassInput } from '@/components/themes/glassmorphism/Input';
import { GlassCard } from '@/components/themes/glassmorphism/Card';

function MyApp() {
  return (
    <div className="min-h-screen p-8" style={{ 
      background: 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)' 
    }}>
      <GlassCard title="Welcome" description="Glassmorphism theme">
        <GlassInput placeholder="Enter your email" />
        <GlassButton variant="primary">Submit</GlassButton>
      </GlassCard>
    </div>
  );
}
```

## The Bottom Line

**Glassmorphism requires:**
1. CSS variables for consistent styling
2. Backdrop blur for the glass effect
3. Semi-transparent backgrounds
4. Colorful context backgrounds
5. Subtle shadows and borders

**Result:** Premium, modern UI that wows users at first glance.
