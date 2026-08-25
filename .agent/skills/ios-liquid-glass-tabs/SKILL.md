---
name: ios-liquid-glass-tabs
description: Use when implementing native iOS bottom tabs with Liquid Glass effect in React Native. Uses react-native-bottom-tabs and @bottom-tabs/react-navigation for iOS 26+ native tab bar experience.
---

# iOS Liquid Glass Bottom Tabs

## Overview

Implement native iOS bottom tabs with the Liquid Glass effect using `react-native-bottom-tabs` and `@bottom-tabs/react-navigation`. This leverages iOS 26's new translucent, glass-like design material that reflects and refracts content behind it.

**Core principle:** Use native iOS components (`UITabBarController`) for authentic performance and automatic Liquid Glass support on iOS 26+.

## When to Use

- Building React Native apps targeting iOS 26+
- Implementing native-feeling bottom tab navigation
- Desire for Liquid Glass translucent tab bar effect
- Need for better performance than JavaScript-based tabs
- User requests iOS-native tab bar experience

## Prerequisites

- Xcode 26 or above
- iOS 26+ deployment target for Liquid Glass
- React Navigation v6+

## Installation

```bash
# Install required packages
npm install @bottom-tabs/react-navigation react-native-bottom-tabs

# For iOS
cd ios && pod install
```

## The Process

### Step 1: Basic Setup

```tsx
import { createNativeBottomTabNavigator } from '@bottom-tabs/react-navigation';

const Tab = createNativeBottomTabNavigator();

function MyTabs() {
  return (
    <Tab.Navigator>
      <Tab.Screen 
        name="Home" 
        component={HomeScreen}
        options={{
          tabBarIcon: ({ focused, color, size }) => (
            <Icon name="home" color={color} size={size} />
          ),
        }}
      />
      <Tab.Screen 
        name="Settings" 
        component={SettingsScreen}
        options={{
          tabBarIcon: ({ focused, color, size }) => (
            <Icon name="settings" color={color} size={size} />
          ),
        }}
      />
    </Tab.Navigator>
  );
}
```

### Step 2: Enable Liquid Glass (iOS 26+)

The native bottom tabs navigator **automatically supports** Liquid Glass on iOS 26+ when built with Xcode 26.

For additional customization:

```tsx
<Tab.Navigator
  screenOptions={{
    // Liquid Glass is automatic on iOS 26+
    // For older iOS, use blur effect:
    tabBarBlurEffect: 'systemDefault', // or 'extraLight', 'dark'
  }}
>
  {/* screens */}
</Tab.Navigator>
```

### Step 3: Direct Liquid Glass with @callstack/liquid-glass

For custom Liquid Glass effects beyond the tab bar:

```bash
npm install @callstack/liquid-glass
```

```tsx
import { LiquidGlass } from '@callstack/liquid-glass';

// Enhance tab icons or custom elements
<LiquidGlass>
  <YourComponent />
</LiquidGlass>
```

### Step 4: Content Behind Tab Bar

**CRITICAL:** For translucent effects to work, content must scroll behind the tab bar.

```tsx
// ✅ CORRECT: FlatList as root component
function HomeScreen() {
  return (
    <FlatList
      data={items}
      renderItem={({ item }) => <Item {...item} />}
      contentContainerStyle={{ paddingBottom: 100 }} // Space for tab bar
    />
  );
}

// ❌ WRONG: SafeAreaView wrapping pushes content above tab bar
function HomeScreen() {
  return (
    <SafeAreaView>
      <FlatList data={items} />
    </SafeAreaView>
  );
}
```

### Step 5: Custom Blur for Older iOS (< iOS 26)

For iOS 18 and below, use BlurView:

```bash
npm install expo-blur
# or
npm install @react-native-community/blur
```

```tsx
import { BlurView } from 'expo-blur';

<Tab.Navigator
  screenOptions={{
    tabBarBackground: () => (
      <BlurView 
        intensity={50} 
        style={StyleSheet.absoluteFill} 
      />
    ),
    tabBarStyle: { 
      position: 'absolute',
      backgroundColor: 'transparent',
    },
  }}
>
  {/* screens */}
</Tab.Navigator>
```

---

## Blur Effect Options

Available `tabBarBlurEffect` values:

| Value | Description |
|-------|-------------|
| `systemDefault` | System default blur |
| `extraLight` | Extra light blur |
| `light` | Light blur |
| `dark` | Dark blur |
| `regular` | Regular blur |
| `prominent` | Prominent blur |

---

## Icon Customization

```tsx
options={{
  tabBarIcon: ({ focused, color, size }) => (
    <Ionicons 
      name={focused ? 'home' : 'home-outline'} 
      color={color} 
      size={size} 
    />
  ),
  tabBarLabel: 'Home',
  tabBarBadge: 3, // Optional badge
}}
```

---

## Red Flags

| Problem | Fix |
|---------|-----|
| Liquid Glass not visible | Ensure iOS 26+ and Xcode 26 |
| No blur behind tab bar | Content must scroll behind, not stop above |
| SafeAreaView blocking effect | Make FlatList/ScrollView the root component |
| Tab bar not translucent | Check `tabBarStyle: { position: 'absolute' }` |

## Common Mistakes

| Mistake | Fix |
|---------|-----|
| Wrapping in SafeAreaView | Use contentContainerStyle padding instead |
| Forgetting pod install | Run `cd ios && pod install` after npm install |
| Using old Xcode | Update to Xcode 26 for Liquid Glass |
| Solid background on tab bar | Set `backgroundColor: 'transparent'` |
| Heavy tab screens | Native tabs render all at once - optimize screens |

---

## Performance Considerations

- **Native tabs render all screens at once** - optimize heavy screens
- Native animations are more performant than JS-based
- Liquid Glass is GPU-accelerated on iOS 26+

---

## Integration

**Pairs with:**
- `frontend-components` - For React Native component patterns
- `glassmorphism-design` - For additional glass-effect styling

## The Bottom Line

**Native + Liquid Glass = Authentic iOS 26 Experience**

Use `@bottom-tabs/react-navigation` with Xcode 26 for automatic Liquid Glass support. Ensure content scrolls behind the tab bar for the translucent effect to be visible.
