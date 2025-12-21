# Skeleton

A loading placeholder component for Laravel applications. Shows animated skeleton screens while content loads. Works with Livewire and Vue 3.

## Installation

```bash
composer require mrshanebarron/skeleton
```

## Livewire Usage

### Basic Text Skeleton

```blade
<livewire:sb-skeleton />
```

### Different Variants

```blade
<livewire:sb-skeleton variant="text" />
<livewire:sb-skeleton variant="title" />
<livewire:sb-skeleton variant="avatar" />
<livewire:sb-skeleton variant="thumbnail" />
<livewire:sb-skeleton variant="card" />
<livewire:sb-skeleton variant="button" />
```

### Multiple Lines

```blade
<livewire:sb-skeleton :count="3" />
```

### Custom Dimensions

```blade
<livewire:sb-skeleton width="200px" height="40px" />
```

### Without Animation

```blade
<livewire:sb-skeleton :animate="false" />
```

### Livewire Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | string | `'text'` | Preset shape |
| `width` | string | `null` | Custom width |
| `height` | string | `null` | Custom height |
| `animate` | boolean | `true` | Pulse animation |
| `count` | number | `1` | Number of skeleton items |

## Vue 3 Usage

### Setup

```javascript
import { SbSkeleton } from './vendor/sb-skeleton';
app.component('SbSkeleton', SbSkeleton);
```

### Basic Usage

```vue
<template>
  <SbSkeleton />
</template>
```

### Variants

```vue
<template>
  <!-- Single line text -->
  <SbSkeleton variant="text" />

  <!-- Larger title line -->
  <SbSkeleton variant="title" />

  <!-- Circular avatar -->
  <SbSkeleton variant="avatar" />

  <!-- Square thumbnail -->
  <SbSkeleton variant="thumbnail" />

  <!-- Large card shape -->
  <SbSkeleton variant="card" />

  <!-- Button shape -->
  <SbSkeleton variant="button" />
</template>
```

### Multiple Lines

```vue
<template>
  <!-- 3 text lines -->
  <SbSkeleton variant="text" :count="3" />
</template>
```

### Custom Dimensions

```vue
<template>
  <SbSkeleton width="100%" height="200px" />
</template>
```

### Card Loading State

```vue
<template>
  <div class="border rounded-lg p-4">
    <template v-if="loading">
      <SbSkeleton variant="thumbnail" class="w-full h-48 mb-4" />
      <SbSkeleton variant="title" class="mb-2" />
      <SbSkeleton variant="text" :count="2" />
    </template>

    <template v-else>
      <img :src="card.image" class="w-full h-48 object-cover rounded mb-4" />
      <h3 class="font-bold">{{ card.title }}</h3>
      <p>{{ card.description }}</p>
    </template>
  </div>
</template>
```

### User List Skeleton

```vue
<template>
  <div v-if="loading" class="space-y-4">
    <div v-for="i in 5" :key="i" class="flex items-center gap-4">
      <SbSkeleton variant="avatar" />
      <div class="flex-1">
        <SbSkeleton variant="title" class="w-1/4 mb-2" />
        <SbSkeleton variant="text" class="w-1/2" />
      </div>
    </div>
  </div>

  <div v-else>
    <!-- Actual user list -->
  </div>
</template>
```

### Article Skeleton

```vue
<template>
  <div v-if="loading">
    <SbSkeleton variant="title" class="w-3/4 mb-4" />
    <div class="flex gap-2 mb-4">
      <SbSkeleton variant="avatar" class="w-6 h-6" />
      <SbSkeleton variant="text" class="w-24" />
      <SbSkeleton variant="text" class="w-20" />
    </div>
    <SbSkeleton variant="card" class="h-64 mb-4" />
    <SbSkeleton variant="text" :count="6" />
  </div>
</template>
```

### Vue Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | String | `'text'` | Shape preset |
| `width` | String | `null` | Custom CSS width |
| `height` | String | `null` | Custom CSS height |
| `animate` | Boolean | `true` | Enable pulse animation |
| `count` | Number | `1` | Number of items to render |

## Variant Reference

| Variant | Description | Default Size |
|---------|-------------|--------------|
| `text` | Single line text | h-4, full width |
| `title` | Heading text | h-6, 75% width |
| `avatar` | User avatar | 40x40px, circular |
| `thumbnail` | Image thumbnail | 80x80px |
| `card` | Card placeholder | h-32, full width |
| `button` | Button shape | h-10, w-24 |

## Features

- **Preset Variants**: Common shapes built-in
- **Custom Sizing**: Override with width/height
- **Animation**: Pulse effect for loading indication
- **Multiple Items**: Render several at once

## Styling

Uses Tailwind CSS:
- Gray background (gray-200)
- Pulse animation
- Rounded corners per variant

## Use Cases

- Page loading states
- Data fetching placeholders
- Image loading
- Form skeleton
- List loading states

## Requirements

- PHP 8.1+
- Laravel 10, 11, or 12
- Tailwind CSS 3.x

## License

MIT License
