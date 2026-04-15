<template>
    <button
        :class="[
            'px-4 py-2 rounded font-semibold transition-colors duration-200',
            variantClasses,
            sizeClasses,
            width === 'full' ? 'w-full' : 'w-auto',
            { 'opacity-50 cursor-not-allowed': disabled }
        ]"
        :disabled="disabled"
    >
        <slot />
    </button>
</template>

<script setup lang="ts">
import { computed } from 'vue';

interface Props {
    variant?: 'primary' | 'secondary' | 'danger'
    width?: 'full' | 'auto'
    size?: 'sm' | 'md' | 'lg'
    disabled?: boolean
}

const props = withDefaults(defineProps<Props>(), {
    variant: 'primary',
    size: 'md',
    disabled: false
})

const variantClasses = computed(() => {
    const variants = {
        primary: 'bg-blue-600 text-white hover:bg-blue-700',
        secondary: 'bg-gray-300 text-gray-800 hover:bg-gray-400',
        danger: 'bg-red-600 text-white hover:bg-red-700'
    }
    return variants[props.variant]
})

const sizeClasses = computed(() => {
    const sizes = {
        sm: 'px-2 py-1 text-sm',
        md: 'px-4 py-2 text-base',
        lg: 'px-6 py-3 text-lg'
    }
    return sizes[props.size]
})
</script>
