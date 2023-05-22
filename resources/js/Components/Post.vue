<script setup>
import Title from "@/Components/Title.vue";
import Info from "@/Components/InfoPost.vue";

defineProps({
    src: String,
    title: String,
    subtitle: String,
    category: String,
    createdby: String,
    createdAt: String,
});
</script>

<template>
    <div class="w-full p-4 flex items-center">
        <div class="img w-full">
            <img :src="src" class="" />
        </div>
        <div>
            <label class="text-lowercase">{{ category }}</label>
            <Title>{{ title }}</Title>
            <Info></Info>
        </div>
    </div>
</template>
