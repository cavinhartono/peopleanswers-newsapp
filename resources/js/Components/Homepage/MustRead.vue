<script setup>
import Title from "@/Components/Title.vue";
import PostList from "@/Components/PostList.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <div class="relative px-10">
        <h2 class="text-2xl font-bold text-black-500">
            <label>must-reads</label>
            <i class="ri-arrow-right-up-line"></i>
        </h2>
        <div class="w-full">
            <ul class="flex justify-between gap-8">
                <li class="w-[500px] max-h-full">
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
                                    Style
                                </label>
                                <Title
                                    class="pt-1 pb-2 text-white-500 w-[400px]"
                                >
                                    How to Make Sure 2023 Is Your Best Year Yet
                                </Title>
                                <Info
                                    class="text-white-500"
                                    name="John Doe"
                                    datetime="Wednesday, 24 May 2023"
                                />
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
