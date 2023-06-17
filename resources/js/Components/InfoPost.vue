<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    name: String,
    datetime: String,
});
</script>

<template>
    <h2 class="text-sm text-black-500 opacity-75">
        <slot />
        By
        <Link :href="name" class="hover:underline">
            {{ name }}
        </Link>
        -
        {{ datetime }}
    </h2>
</template>
