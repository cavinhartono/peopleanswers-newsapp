<script setup>
const endpoint =
    "https://newsapi.org/v2/top-headlines?country=id&apiKey=efb8274e78c24138ab578fb98d173181";

fetch(endpoint)
    .then((article) => article.json())
    .then((result) => result.article);
</script>
