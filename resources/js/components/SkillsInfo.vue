<script setup lang="ts">
  interface Input {
    text?: string,
  };

  const props = defineProps<Input>();

</script>

<template>
  <div class="inline-flex w-fit self-start items-center rounded-3xl py-2 px-3 border border-button-background-full gap-2 bg-button-background-quarter text-buble-text">
    <p class="text-xs sm:text-sm font-medium">{{ props.text }}</p>
  </div>
</template>