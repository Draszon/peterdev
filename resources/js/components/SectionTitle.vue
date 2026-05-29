<script setup lang="ts">
  interface Data {
    title: string,
  };

  const props = defineProps<Data>();
</script>

<template>
  <div class="text-center">
    <h1 class="text-5xl md:text-6xl font-ubuntu font-bold">{{ props.title }}</h1>
  </div>
</template>