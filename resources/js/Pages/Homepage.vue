<script setup>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Homepage from "@/Components/Homepage/Homepage.vue";
import MustReads from "@/Components/Homepage/MustRead.vue";

const endpoint =
    "https://newsapi.org/v2/top-headlines?country=id&apiKey=efb8274e78c24138ab578fb98d173181";

fetch(endpoint)
    .then((articles) => articles.json())
    .then((result) => console.log(result.articles));
</script>

<template>
    <div class="container mx-auto">
        <Header />
        <Homepage />
        <MustReads />
        <Footer />
    </div>
</template>
