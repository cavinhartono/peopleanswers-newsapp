<script setup>
defineProps({
    type: {
        type: String,
        style: String,
        default: "submit",
    },
});
</script>

<template>
    <button :type="default" :class="`btn ${style}`">
        <span class="icon"> <slot name="icon" /> </span>
        <span class="label"> <slot name="name" /> </span>
    </button>
</template>
