<script setup>
import Title from "@/Components/Title.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <header
        class="absolute top-0 left-0 px-10 py-6 w-full flex justify-between items-center"
    >
        <menu class="menu">
            <span class="icon w-8 h-8">
                <i class="ri-menu-fill"></i>
            </span>
        </menu>
        <Title>peopleanswers</Title>
        <div class="search">
            <span class="icon w-8 h-8">
                <i class="ri-search-line"></i>
            </span>
        </div>
    </header>
    <nav class="w-full border border-white-700">
        <ul class="w-full flex justify-between items-center py-6">
            <li class="font-bold">
                <Link href="/" class="link">Features</Link>
            </li>
            <li class="font-bold">
                <Link href="/styles" class="link">Styles</Link>
            </li>
            <li class="font-bold">
                <Link href="/travels" class="link">Travels</Link>
            </li>
            <li class="font-bold">
                <Link href="/opinion" class="link">Opinion</Link>
            </li>
        </ul>
    </nav>
</template>
