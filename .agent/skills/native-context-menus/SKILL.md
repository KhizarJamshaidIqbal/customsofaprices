---
name: native-context-menus
description: Use when implementing native context menus (long-press menus) in React Native with Zeego. Provides native iOS and Android look without custom styling, supports submenus, groups, icons, and checkable items.
---

# Native Context Menus (Long-Press Menu)

## Overview

Implement native context menus using Zeego ContextMenu - triggered by long-press on iOS/Android and right-click on web. Uses each platform's built-in native menu component for authentic appearance with no custom styling needed.

**Core principle:** Let the platform handle styling - Zeego renders native menu components on iOS/Android and Radix UI on web.

## When to Use

- Adding long-press context menus to list items or cards
- Implementing right-click menus on web
- Need for native iOS/Android menu appearance
- Submenus, groups, checkable items, or icons required
- Want consistent cross-platform menu behavior

## Platform Behavior

| Platform | Trigger | Component Used |
|----------|---------|----------------|
| iOS | Long-press | Native iOS context menu |
| Android | Long-press | Native Android menu |
| Web | Right-click | Radix UI Context Menu |

## Installation

```bash
npm install zeego
# or
yarn add zeego
```

Follow Zeego's [getting started guide](https://zeego.dev/start) for platform-specific setup.

## The Process

### Step 1: Basic Context Menu

```tsx
import * as ContextMenu from 'zeego/context-menu';

function MyContextMenu() {
  return (
    <ContextMenu.Root>
      <ContextMenu.Trigger>
        <YourTriggerComponent />
      </ContextMenu.Trigger>
      
      <ContextMenu.Content>
        <ContextMenu.Item 
          key="edit" 
          onSelect={() => console.log('Edit selected')}
        >
          <ContextMenu.ItemTitle>Edit</ContextMenu.ItemTitle>
        </ContextMenu.Item>
        
        <ContextMenu.Item 
          key="delete" 
          destructive
          onSelect={() => console.log('Delete selected')}
        >
          <ContextMenu.ItemTitle>Delete</ContextMenu.ItemTitle>
        </ContextMenu.Item>
      </ContextMenu.Content>
    </ContextMenu.Root>
  );
}
```

### Step 2: Adding Icons (SF Symbols on iOS)

```tsx
<ContextMenu.Item key="share">
  <ContextMenu.ItemIcon
    ios={{
      name: 'square.and.arrow.up', // SF Symbol name
      pointSize: 18,
    }}
  />
  <ContextMenu.ItemTitle>Share</ContextMenu.ItemTitle>
</ContextMenu.Item>
```

### Step 3: Grouping Items

```tsx
<ContextMenu.Content>
  <ContextMenu.Group>
    <ContextMenu.Label>Actions</ContextMenu.Label>
    <ContextMenu.Item key="copy">
      <ContextMenu.ItemTitle>Copy</ContextMenu.ItemTitle>
    </ContextMenu.Item>
    <ContextMenu.Item key="paste">
      <ContextMenu.ItemTitle>Paste</ContextMenu.ItemTitle>
    </ContextMenu.Item>
  </ContextMenu.Group>
  
  <ContextMenu.Separator />
  
  <ContextMenu.Group>
    <ContextMenu.Item key="settings">
      <ContextMenu.ItemTitle>Settings</ContextMenu.ItemTitle>
    </ContextMenu.Item>
  </ContextMenu.Group>
</ContextMenu.Content>
```

### Step 4: Submenus

```tsx
<ContextMenu.Content>
  <ContextMenu.Sub>
    <ContextMenu.SubTrigger key="sub-menu-trigger">
      <ContextMenu.ItemTitle>More Options</ContextMenu.ItemTitle>
    </ContextMenu.SubTrigger>
    
    <ContextMenu.SubContent>
      <ContextMenu.Item key="option-1">
        <ContextMenu.ItemTitle>Option 1</ContextMenu.ItemTitle>
      </ContextMenu.Item>
      <ContextMenu.Item key="option-2">
        <ContextMenu.ItemTitle>Option 2</ContextMenu.ItemTitle>
      </ContextMenu.Item>
    </ContextMenu.SubContent>
  </ContextMenu.Sub>
</ContextMenu.Content>
```

### Step 5: Checkbox Items

```tsx
const [checked, setChecked] = useState(false);

<ContextMenu.CheckboxItem
  key="toggle-feature"
  value={checked ? 'on' : 'off'}
  onValueChange={(value) => setChecked(value === 'on')}
>
  <ContextMenu.ItemIndicator />
  <ContextMenu.ItemTitle>Enable Feature</ContextMenu.ItemTitle>
</ContextMenu.CheckboxItem>
```

### Step 6: iOS Preview (Optional)

```tsx
<ContextMenu.Content>
  <ContextMenu.Preview>
    {() => <YourPreviewComponent />}
  </ContextMenu.Preview>
  
  {/* Menu items */}
</ContextMenu.Content>
```

---

## Component Reference

| Component | Purpose |
|-----------|---------|
| `Root` | Wraps the entire context menu |
| `Trigger` | Element that triggers the menu on long-press |
| `Content` | Container for menu items |
| `Item` | Single menu item (requires unique `key`) |
| `ItemTitle` | Text content for an item |
| `ItemIcon` | Icon for an item (SF Symbols on iOS) |
| `ItemSubtitle` | Subtitle text for an item |
| `Group` | Groups related items with dividers |
| `Label` | Title for a group |
| `Separator` | Visual divider between items |
| `Sub` | Wrapper for submenu |
| `SubTrigger` | Item that opens the submenu |
| `SubContent` | Container for submenu items |
| `CheckboxItem` | Toggleable menu item |
| `ItemIndicator` | Checkmark for checkbox items |
| `Preview` | iOS preview element |

---

## Item Props

| Prop | Platform | Description |
|------|----------|-------------|
| `key` | All | **Required** - Unique identifier |
| `onSelect` | All | Called when item is selected |
| `disabled` | All | Disables the item |
| `destructive` | All | Red/destructive styling |
| `hidden` | iOS/Android | Hides the item |

---

## Complete Example

```tsx
import * as ContextMenu from 'zeego/context-menu';
import { View, Text, Pressable } from 'react-native';

function CardWithContextMenu({ item, onEdit, onDelete, onShare }) {
  return (
    <ContextMenu.Root>
      <ContextMenu.Trigger>
        <Pressable>
          <View style={styles.card}>
            <Text>{item.title}</Text>
          </View>
        </Pressable>
      </ContextMenu.Trigger>
      
      <ContextMenu.Content>
        {/* Main Actions */}
        <ContextMenu.Item key="edit" onSelect={onEdit}>
          <ContextMenu.ItemIcon ios={{ name: 'pencil' }} />
          <ContextMenu.ItemTitle>Edit</ContextMenu.ItemTitle>
        </ContextMenu.Item>
        
        <ContextMenu.Item key="share" onSelect={onShare}>
          <ContextMenu.ItemIcon ios={{ name: 'square.and.arrow.up' }} />
          <ContextMenu.ItemTitle>Share</ContextMenu.ItemTitle>
        </ContextMenu.Item>
        
        <ContextMenu.Separator />
        
        {/* Submenu */}
        <ContextMenu.Sub>
          <ContextMenu.SubTrigger key="more">
            <ContextMenu.ItemTitle>More Options</ContextMenu.ItemTitle>
          </ContextMenu.SubTrigger>
          <ContextMenu.SubContent>
            <ContextMenu.Item key="duplicate">
              <ContextMenu.ItemTitle>Duplicate</ContextMenu.ItemTitle>
            </ContextMenu.Item>
            <ContextMenu.Item key="archive">
              <ContextMenu.ItemTitle>Archive</ContextMenu.ItemTitle>
            </ContextMenu.Item>
          </ContextMenu.SubContent>
        </ContextMenu.Sub>
        
        <ContextMenu.Separator />
        
        {/* Destructive Action */}
        <ContextMenu.Item 
          key="delete" 
          destructive 
          onSelect={onDelete}
        >
          <ContextMenu.ItemIcon ios={{ name: 'trash' }} />
          <ContextMenu.ItemTitle>Delete</ContextMenu.ItemTitle>
        </ContextMenu.Item>
      </ContextMenu.Content>
    </ContextMenu.Root>
  );
}
```

---

## Red Flags

| Problem | Fix |
|---------|-----|
| Menu not appearing | Ensure `Trigger` wraps a valid React Native component |
| Custom styles not working | Native menus don't support custom styling - use native look |
| Items missing keys | Every `Item` and `SubTrigger` needs unique `key` prop |
| Submenu not opening | Use `Sub` > `SubTrigger` + `SubContent` structure |

## Common Mistakes

| Mistake | Fix |
|---------|-----|
| Forgetting `key` prop | Add unique `key` to every Item |
| Styling native menus | Don't - let platform handle appearance |
| Missing `ItemTitle` | Always wrap text in `ItemTitle` |
| Using `textValue` wrong | Required only for React element children in `ItemTitle` |
| Duplicate keys | Ensure keys are unique across entire menu including submenus |

---

## Integration

**Pairs with:**
- `ios-liquid-glass-tabs` - For complete native iOS experience
- `frontend-components` - For React Native component patterns

## The Bottom Line

**Native look, zero custom styling.**

Use Zeego's ContextMenu for authentic platform menus. Let iOS and Android handle the appearance - just define your items and actions.

Docs: https://zeego.dev/components/context-menu
