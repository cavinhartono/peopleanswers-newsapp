<script setup>
import Title from "@/Components/Title.vue";
import Info from "@/Components/InfoPost.vue";

defineProps({
    src: String,
    category: String,
    title: String,
    createdBy: String,
    createdAt: String,
});
</script>

<template>
    <div class="w-full p-4 flex gap-6 items-center">
        <div class="img w-max h-max">
            <img :src="src" class="w-[50px] h-[50px]" />
        </div>
        <div>
            <label class="text-lowercase">{{ category }}</label>
            <Title class="pt-1 pb-2">{{ title }}</Title>
            <Info :name="createdBy" :datetime="createdAt" />
        </div>
    </div>
</template>
