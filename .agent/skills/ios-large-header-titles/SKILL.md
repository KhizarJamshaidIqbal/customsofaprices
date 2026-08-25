---
name: ios-large-header-titles
description: Use when implementing iOS-style large header titles in React Native. Uses React Navigation Native Stack with headerLargeTitle and ScrollView with contentInsetAdjustmentBehavior for native collapse behavior.
---

# Large Header Titles (iOS Style)

## Overview

Implement iOS-style large header titles that collapse into a standard header when scrolling. Uses React Navigation Native Stack with `headerLargeTitle: true` and proper ScrollView configuration.

**Core principle:** Native Stack + ScrollView with `contentInsetAdjustmentBehavior="automatic"` for authentic iOS behavior.

## When to Use

- Building iOS-style screens with large collapsible headers
- Settings pages, profile screens, or list views
- Want native header collapse animation on scroll
- Need transparent header that integrates with content

## Requirements

- React Navigation Native Stack (`@react-navigation/native-stack`)
- React Native 0.64+

## The Process

### Step 1: Configure Screen Options

```tsx
import { createNativeStackNavigator } from '@react-navigation/native-stack';

const Stack = createNativeStackNavigator();

function App() {
  return (
    <Stack.Navigator>
      <Stack.Screen
        name="Settings"
        component={SettingsScreen}
        options={{
          title: 'Settings',
          headerLargeTitle: true,
          headerTransparent: true,
          // Optional: customize large title style
          headerLargeTitleStyle: {
            fontWeight: 'bold',
          },
        }}
      />
    </Stack.Navigator>
  );
}
```

### Step 2: Configure Screen Component

```tsx
import { ScrollView, View, Text } from 'react-native';

function SettingsScreen() {
  return (
    <ScrollView
      style={{ flex: 1 }}
      contentInsetAdjustmentBehavior="automatic"
    >
      {/* Your content here */}
      <View style={{ padding: 16 }}>
        <Text>Settings content...</Text>
      </View>
    </ScrollView>
  );
}
```

---

## Key Configuration

| Setting | Location | Value |
|---------|----------|-------|
| `headerLargeTitle` | Screen options | `true` |
| `headerTransparent` | Screen options | `true` |
| `style` | ScrollView | `{{ flex: 1 }}` |
| `contentInsetAdjustmentBehavior` | ScrollView | `"automatic"` |

---

## Complete Example

```tsx
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { ScrollView, View, Text, StyleSheet } from 'react-native';

const Stack = createNativeStackNavigator();

// Navigator setup
function AppNavigator() {
  return (
    <Stack.Navigator>
      <Stack.Screen
        name="Profile"
        component={ProfileScreen}
        options={{
          title: 'Profile',
          headerLargeTitle: true,
          headerTransparent: true,
          headerBlurEffect: 'regular', // Optional blur effect
          headerLargeTitleStyle: {
            fontWeight: '700',
          },
        }}
      />
    </Stack.Navigator>
  );
}

// Screen component
function ProfileScreen() {
  return (
    <ScrollView
      style={styles.container}
      contentInsetAdjustmentBehavior="automatic"
    >
      <View style={styles.content}>
        <Text style={styles.text}>
          Scroll to see the large title collapse!
        </Text>
        {/* Add enough content to enable scrolling */}
        {Array.from({ length: 20 }).map((_, i) => (
          <View key={i} style={styles.item}>
            <Text>Item {i + 1}</Text>
          </View>
        ))}
      </View>
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
  content: {
    padding: 16,
  },
  text: {
    fontSize: 16,
    marginBottom: 16,
  },
  item: {
    padding: 16,
    backgroundColor: '#f0f0f0',
    marginBottom: 8,
    borderRadius: 8,
  },
});
```

---

## Optional Enhancements

### Blur Effect Header

```tsx
options={{
  headerLargeTitle: true,
  headerTransparent: true,
  headerBlurEffect: 'regular', // 'light', 'dark', 'prominent'
}}
```

### Custom Header Background

```tsx
options={{
  headerLargeTitle: true,
  headerStyle: {
    backgroundColor: '#f8f8f8',
  },
}}
```

### Search Bar Integration

```tsx
options={{
  headerLargeTitle: true,
  headerSearchBarOptions: {
    placeholder: 'Search...',
    onChangeText: (text) => console.log(text),
  },
}}
```

---

## Red Flags

| Problem | Fix |
|---------|-----|
| Large title not showing | Ensure using Native Stack, not JS Stack |
| Header not collapsing | Add `contentInsetAdjustmentBehavior="automatic"` |
| Content hidden behind header | Use `headerTransparent: true` with proper ScrollView |
| Not enough scroll height | Add more content or padding to enable scrolling |

## Common Mistakes

| Mistake | Fix |
|---------|-----|
| Using wrong navigator | Must use `@react-navigation/native-stack` |
| Missing ScrollView style | Add `style={{ flex: 1 }}` |
| Wrong content behavior | Use `contentInsetAdjustmentBehavior="automatic"` |
| FlatList instead of ScrollView | FlatList works too with same props |

---

## Works With FlatList Too

```tsx
function ListScreen() {
  return (
    <FlatList
      style={{ flex: 1 }}
      contentInsetAdjustmentBehavior="automatic"
      data={items}
      renderItem={({ item }) => <ItemComponent {...item} />}
    />
  );
}
```

---

## Integration

**Pairs with:**
- `ios-liquid-glass-tabs` - For complete native iOS navigation
- `native-context-menus` - For native menu interactions

## The Bottom Line

**Native Stack + ScrollView + `contentInsetAdjustmentBehavior`**

Three elements for authentic iOS large title behavior. The header collapses automatically as the user scrolls.
