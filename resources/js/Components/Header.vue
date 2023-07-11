<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import Title from "./Title.vue";
</script>

<template>
    <header class="relative w-full px-10 py-6">
        <div class="w-full flex justify-between items-center">
            <menu
                class="menu z-20"
                onclick="document.querySelector('#nav').classList.toggle('translate-x-[0%]')"
            >
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
        </div>
        <nav class="my-4 w-full border-y border-white-700">
            <ul
                class="w-full flex justify-center items-center text-xl gap-16 py-6"
            >
                <li class="font-bold">
                    <Link href="/" class="link">features</Link>
                </li>
                <li class="font-bold">
                    <Link href="/styles" class="link">styles</Link>
                </li>
                <li class="font-bold">
                    <Link href="/travels" class="link">travels</Link>
                </li>
                <li class="font-bold">
                    <Link href="/opinion" class="link">opinion</Link>
                </li>
            </ul>
        </nav>
    </header>
    <nav
        class="fixed top-0 left-0 w-[400px] max-h-screen bg-black-500 text-white-500 transform translate-x-[-100%] transition z-10"
        id="nav"
    ></nav>
</template>
