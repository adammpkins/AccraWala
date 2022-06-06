<template>

        <h1>{{page.title}}</h1>
        <div class="page-body">
            <span v-html="page.body"></span>
        </div>

</template>

<script setup>

let props = defineProps([
    'page'
])

</script>
