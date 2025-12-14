<template>
  <div class="space-y-2">
    <div v-for="i in count" :key="i" :class="['bg-gray-200', variantClass, animate ? 'animate-pulse' : '']" :style="customStyle"></div>
  </div>
</template>

<script>
import { computed } from 'vue';

export default {
  name: 'LdSkeleton',
  props: {
    variant: { type: String, default: 'text' },
    width: { type: String, default: null },
    height: { type: String, default: null },
    animate: { type: Boolean, default: true },
    count: { type: Number, default: 1 }
  },
  setup(props) {
    const variants = {
      text: 'h-4 rounded',
      title: 'h-6 rounded w-3/4',
      avatar: 'w-10 h-10 rounded-full',
      thumbnail: 'w-20 h-20 rounded',
      card: 'h-32 rounded-lg',
      button: 'h-10 w-24 rounded-lg'
    };
    const variantClass = computed(() => variants[props.variant] || variants.text);
    const customStyle = computed(() => {
      const styles = [];
      if (props.width) styles.push(`width: ${props.width}`);
      if (props.height) styles.push(`height: ${props.height}`);
      return styles.join('; ');
    });
    return { variantClass, customStyle };
  }
};
</script>
