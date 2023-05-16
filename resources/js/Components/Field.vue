<script setup>
defineProps({
    type: {
        type: String,
        label: String,
        style: String,
        placeholder: String,
    },
});
</script>

<template>
    <div class="field">
        <label :for="label" style="text-transform: capitalize">{{
            label
        }}</label>
        <input
            :id="label"
            :type="type"
            :placeholder="placeholder"
            :class="`input ${style}`"
        />
    </div>
</template>
