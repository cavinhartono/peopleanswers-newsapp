<script setup>
import Title from "@/Components/Title.vue";
import PostList from "@/Components/PostList.vue";
import { Link } from "@inertiajs/inertia-vue3";

defineProps({ headlines: Object });
</script>

<template>
    <div class="relative px-10">
        <h2 class="text-2xl font-bold text-black-500">
            <label>must-reads</label>
            <i class="ri-arrow-right-up-line"></i>
        </h2>
        <div class="w-full my-4">
            <ul class="w-full flex gap-8">
                <li
                    class="w-full max-h-full"
                    v-for="(headline, index) in headlines.splice(0, 1)"
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
                                <Title
                                    class="pt-1 pb-2 text-white-500 w-[400px]"
                                >
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
                <ul class="relative w-full">
                    <li
                        class="py-4 border-b-2 border-black-200"
                        v-for="(headline, index) in headlines.splice(0, 4)"
                        :key="index"
                    >
                        <PostList
                            :category="headline.source.name"
                            :title="headline.title"
                            :createdBy="headline.author"
                            :createdAt="headline.publishedAt"
                        >
                            <img
                                :alt="headline.title"
                                src="@/Components/Assets/Images/img1.jpg"
                                class="w-full max-h-[100px] object-cover"
                            />
                        </PostList>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
</template>
