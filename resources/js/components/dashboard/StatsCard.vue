<template>
  <div class="p-4 bg-white rounded shadow">
    <p class="text-gray-500">{{ props.label }}</p>
    <h3 class="mt-2 text-xl font-bold" :class="`text-${props.textColor}`">
      {{ props.value }}
    </h3>
  </div>
</template>
<script setup lang="ts">
interface Props {
  label: string;
  value: string;
  textColor: string;
}

const props = defineProps<Props>();
</script>
