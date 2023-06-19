<script setup>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Homepage from "@/Components/Homepage/Homepage.vue";
import MustRead from "@/Components/Homepage/MustRead.vue";

const endpoint =
    "https://newsapi.org/v2/top-headlines?country=id&apiKey=efb8274e78c24138ab578fb98d173181";

fetch(endpoint)
    .then((articles) => articles.json())
    .then((result) => {
        result.articles.map((item) => {
            const createdBy = item.author;
            const createdAt = item.publishedAt;
            const title = item.title;
            const url = item.url;
            const source = item.source.name;
        });
    });
</script>

<template>
    <div class="container mx-auto">
        <Header />
        <Homepage />
        <MustRead />
        <Footer />
    </div>
</template>
