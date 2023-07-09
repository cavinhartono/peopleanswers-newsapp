<script setup>
import Title from "@/Components/Title.vue";
import Info from "@/Components/InfoPost.vue";

defineProps({
    category: String,
    title: String,
    createdBy: String,
    createdAt: String,
});
</script>

<template>
    <div class="w-full p-4 flex items-center gap-8">
        <div class="img w-max h-max">
            <slot />
        </div>
        <div>
            <label class="text-lowercase">{{ category }}</label>
            <Title class="pt-1 pb-2 max-w-[500px]">{{ title }}</Title>
            <Info :name="createdBy" :datetime="createdAt" />
        </div>
    </div>
</template>
