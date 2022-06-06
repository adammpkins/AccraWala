<template>
    <div class="mx-auto py-3 content justify-content-center">
        <div class="container">
            <h1 class="float-start">Pages</h1>
        <Link  class="btn green-btn float-end" href="/admin/pages/create">
            <span class="bi bi-plus"></span>New page
        </Link>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="page in pages">
                <th scope="row"><Link :href="'/' + page.slug">
                    {{page.id}} </Link></th>
                <td><Link :href="'/' + page.slug">{{page.title}}</Link></td>
                <td><Link :href="'/' + page.slug">{{page.slug}}</Link></td>

                <td><Link :href="'/admin/pages/' + page.id + '/edit/'" class="btn green-btn mx-2"><span class="bi bi-pencil"></span> Edit</Link><button @click="destroy(page.id)" class="btn red-btn" ><span class="bi bi-trash"></span> Delete</button></td>
            </tr>

            </tbody>
        </table>
        </div>
    </div>
</template>



<script setup>
import {Link} from "@inertiajs/inertia-vue3";
import {useForm} from "@inertiajs/inertia-vue3"
import {Inertia} from "@inertiajs/inertia";
let props = defineProps([
    'pages'
])

let destroy = (id) => {
    Inertia.delete('/admin/pages/' + id + '/delete')
}
import { usePage } from '@inertiajs/inertia-vue3'
console.log(usePage().props.value.message)



</script>

<style scoped>

</style>
