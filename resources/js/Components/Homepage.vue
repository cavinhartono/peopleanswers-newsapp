<script setup>
import Title from "@/Components/Title.vue";
import Post from "@/Components/PostView.vue";
import Info from "./InfoPost.vue";
import { Link, Head } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Homepage" />
    <div class="relative px-10">
        <ul class="w-full">
            <li class="w-full h-[500px]">
                <div class="w-full h-full p-4">
                    <div class="relative w-full h-full">
                        <img
                            src="./Assets/Images/img1.jpg"
                            class="w-full h-full object-cover"
                        />
                        <div class="absolute bottom-0 left-0 p-4 w-[400px]">
                            <label class="text-lowercase text-white-500">
                                Style
                            </label>
                            <Title class="pt-1 pb-2 text-white-500">
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
            <ul class="w-full flex gap-y-4">
                <li class="flex gap-4 justify-between items-center">
                    <Post
                        filename="@/Components/Assets/Images/img1.jpg"
                        title="Bagaimana Hari ini?"
                        createdBy="Bapak Kau"
                        createdAt="Monday, 5 Juni 2023"
                    />
                </li>
                <li class="flex gap-4 justify-between items-center">
                    <Post />
                </li>
                <li class="flex gap-4 justify-between items-center">
                    <Post />
                </li>
            </ul>
        </ul>
    </div>
</template>
