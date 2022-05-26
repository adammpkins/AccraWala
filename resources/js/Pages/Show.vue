<template>
    <div class="mx-auto py-3 content justify-content-center">
        <h1>{{page.title}}</h1>
        <div class="page-body">
            <span v-html="page.body"></span>
        </div>

    </div>
</template>

<script setup>

let props = defineProps([
    'page'
])

</script>
