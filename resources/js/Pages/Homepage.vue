<script setup>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Homepage from "@/Components/Homepage/Homepage.vue";
import MustRead from "@/Components/Homepage/MustRead.vue";
import { ref, onMounted } from "vue";

let headlines = ref([]);

function fetchDataPosts() {
    fetch(
        "https://newsapi.org/v2/top-headlines?country=id&apiKey=efb8274e78c24138ab578fb98d173181"
    )
        .then((response) => response.json())
        .then((articles) => (headlines = articles.articles));
}

onMounted(() => fetchDataPosts());
</script>

<template>
    <div class="container mx-auto">
        <Header />
        <Homepage :headlines="headlines" />
        <MustRead :headlines="headlines" />
        <Footer />
    </div>
</template>
