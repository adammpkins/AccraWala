<template>
    <div class="mx-auto py-3 content justify-content-center">
        <h1>{{page.title}}</h1>
        <div class="page-body" :v-html="page.body">
        </div>

    </div>
</template>

<script setup>

let props = defineProps([
    'page'
])

</script>
