<template>
    <div class="mx-auto py-3 content justify-content-center">
        <Link href="/admin/pages/create">
            <a class="btn green float-end">Create a new page</a>
        </Link>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="page in pages">
                <th scope="row">{{page.id}}</th>
                <td>{{page.title}}</td>
                <td>{{page.slug}}</td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<script setup>
import {Link} from "@inertiajs/inertia-vue3";

const props = defineProps([
    'pages'
])
</script>

<style scoped>

</style>
