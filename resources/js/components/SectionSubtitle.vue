<script setup lang="ts">
  interface Data {
    subtitle: string,
  };

  const props = defineProps<Data>();
</script>

<template>
  <div class="text-center">
    <h3 class="text-subtitle uppercase text-sm font-medium">{{ props.subtitle }}</h3>
  </div>
</template>