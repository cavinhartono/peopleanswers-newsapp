<script setup>
import Title from "@/Components/Title.vue";
import Post from "@/Components/PostView.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <div class="relative px-10">
        <ul class="w-full">
            <li class="w-full h-full">
                <Post
                    src="http://[::1]:5173/resources/js/Components/Assets/Images/img1.jpg"
                    category="style"
                    title="You Are My candy, Girl"
                    created-by="Kevin Hartono Putra"
                    created-at="Wednesday, 24 May 2023"
                />
            </li>
            <ul class="w-full flex gap-y-4">
                <li class="flex gap-4 justify-between items-center">
                    <Post />
                </li>
            </ul>
        </ul>
    </div>
</template>
