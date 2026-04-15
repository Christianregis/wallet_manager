<template>
  <Link
    :href="props.href"
    :class="`px-4 py-2 font-semibold text-${props.color}-600 bg-white rounded hover:bg-gray-200`"
  >
    <slot />
  </Link>
</template>
<script lang="ts" setup>
import { Link } from '@inertiajs/vue3';

interface Props{
    href: string;
    color: string;
}

const props =defineProps<Props>();
</script>
