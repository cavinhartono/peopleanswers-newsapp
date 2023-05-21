<script setup>
import Title from "@/Components/Title.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <header
        class="absolute top-0 left-0 px-10 py-6 w-full flex justify-between items-center"
    >
        <menu class="menu">
            <span class="icon">
                <i class="ri-menu-fill"></i>
            </span>
        </menu>
        <Title>peopleanswers</Title>
        <div class="search">
            <span class="icon">
                <i class="ri-search-line"></i>
            </span>
        </div>
    </header>
    <nav class="navigation">
        <ul class="nav">
            <li class="list"><Link href="/" class="link">Featurus</Link></li>
            <li class="list"><Link href="/styles" class="link"></Link></li>
            <li class="list"><Link href="/travels" class="link"></Link></li>
            <li class="list"><Link href="/opinion" class="link"></Link></li>
        </ul>
    </nav>
</template>
