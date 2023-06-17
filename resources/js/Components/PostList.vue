<script setup>
import Title from "@/Components/Title.vue";
import Info from "@/Components/InfoPost.vue";

defineProps({
    filename: String,
    category: String,
    title: String,
    createdBy: String,
    createdAt: String,
});
</script>

<template>
    <div class="w-full p-4">
        <div class="img w-max h-max">
            <img :alt="title" :src="filename" class="w-full h-[300px]" />
        </div>
        <div>
            <label class="text-lowercase">{{ category }}</label>
            <Title class="pt-1 pb-2">{{ title }}</Title>
            <Info :name="createdBy" :datetime="createdAt" />
        </div>
    </div>
</template>
