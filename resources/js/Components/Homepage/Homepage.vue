<script setup>
import Title from "@/Components/Title.vue";
import Info from "@/Components/InfoPost.vue";
import { Link, Head } from "@inertiajs/inertia-vue3";

defineProps({ headlines: Object });
</script>

<template>
    <Head title="Homepage" />
    <div class="relative px-10">
        <ul class="w-full">
            <li
                class="w-full h-[500px]"
                v-for="(headline, index) in headlines.slice(0, 1)"
                :key="index"
            >
                <div class="w-full h-full">
                    <div class="relative w-full h-full">
                        <img
                            src="@/Components/Assets/Images/img1.jpg"
                            class="w-full h-full object-cover"
                        />
                        <div
                            class="absolute bottom-0 left-0 pl-6 pb-6 w-full before: bg-gradient-to-t from-black-500 to-transparent"
                        >
                            <label class="lowercase text-white-500">
                                {{ headline.source.name }}
                            </label>
                            <Title class="pt-1 pb-2 text-white-500 w-[600px]">
                                {{ headline.title }}
                            </Title>
                            <Info
                                class="text-white-500"
                                :name="headline.author"
                                :datetime="headline.publishedAt"
                            />
                        </div>
                    </div>
                </div>
            </li>
            <ul class="my-4 w-full flex gap-x-4">
                <li
                    class="relative w-full"
                    v-for="(headline, index) in headlines.splice(4, 3)"
                    :key="index"
                >
                    <img
                        src="@/Components/Assets/Images/img1.jpg"
                        class="w-full h-[250px] object-cover"
                    />
                    <div class="w-full my-4">
                        <label class="lowercase text-black-500">
                            {{ headline.source.name }}
                        </label>
                        <Title class="pt-1 pb-2 text-black-500 w-full">
                            {{ headline.title }}
                        </Title>
                        <Info
                            class="text-black-500"
                            :name="headline.author"
                            :datetime="headline.publishedAt"
                        />
                    </div>
                </li>
            </ul>
        </ul>
    </div>
</template>
