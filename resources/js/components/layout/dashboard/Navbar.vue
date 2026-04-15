<template>
  <header class="flex items-center justify-between p-4 bg-white shadow">
    <h1 class="text-xl font-semibold">Dashboard</h1>

    <div class="flex items-center gap-4">
      <span class="text-gray-600">{{ props.name }}</span>
      <img :src="props.avatar!='' ? props.avatar : 'https://i.pravatar.cc/40'" class="w-10 h-10 rounded-full" />
    </div>
  </header>
</template>


<script lang="ts" setup>
interface Props{
    name: string,
    avatar: string
}
const props = defineProps<Props>()
</script>
