<script setup>
import Subtitle from "@/Components/Subtitle.vue";
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    name: String,
    datetime: String,
});
</script>

<template>
    <Subtitle>
        By <Link :href="name">{{ name }}</Link> - {{ datetime }}
    </Subtitle>
</template>
