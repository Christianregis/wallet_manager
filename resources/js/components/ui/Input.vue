<template>
    <div class="w-full">
        <label v-if="label" :for="id" class="block mb-2 text-sm font-medium text-gray-700">
            {{ label }}
            <span v-if="required" class="text-red-500">*</span>
        </label>
        <input
            :id="id"
            :value="modelValue"
            :type="type"
            :placeholder="placeholder"
            :disabled="disabled"
            :required="required"
            @input="$emit('update:modelValue', $event.target.value)"
            class="w-full px-4 py-2 transition border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
    </div>
</template>

<script setup>
defineProps({
    modelValue: String,
    label: String,
    placeholder: String,
    type: {
        type: String,
        default: 'text'
    },
    disabled: Boolean,
    required: Boolean,
    id: String
});

defineEmits(['update:modelValue']);
</script>
