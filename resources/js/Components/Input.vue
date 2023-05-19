<script setup>
defineProps({
    type: {
        type: String,
        placeholder: String,
        name: String,
    },
});
</script>

<template>
    <div class="w-full">
        <input
            class="w-full outline-none border-none"
            v-model="name"
            :type="type"
            :placeholder="placeholder"
        />
    </div>
</template>
