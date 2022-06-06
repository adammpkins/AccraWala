<template>
        <form @submit.prevent="submit">


            <div class="row w-75 m-auto">
                <h1>Edit page</h1>
                <div class="col-md-6">
                    <label for="title" >Title</label>
                    <input v-model="form.title" name="title" type="text" class="form-control">
                </div>
                <div class="col-md-6" >
                    <label for="slug">Slug</label>
                    <input v-model="form.slug" name="slug" type="text" class="form-control">
                </div>
            </div>
            <div class="row w-75 m-auto">
                <div class="col-md-12" >
                    <label for="icon">Icon</label>
                    <input v-model="form.icon" name="icon" type="text" class="form-control">
                </div>
            </div>
            <div class="row w-75 mx-auto my-3 h-50">
                <div class="col-md-12">
                    <label for="slug">Body</label>
                    <textarea v-model="form.body" name="body" class="form-control h-100"></textarea>
                </div>
            </div>
            <div class="row w-75 mx-auto justify-content-left">
                <div class="col-auto">
                    <button type="submit" class="btn w-100 green-btn my-3">Submit</button>
                </div>

            </div>
        </form>







</template>

<script setup>

import {useForm} from "@inertiajs/inertia-vue3"
let props = defineProps({
    page: {
        type: Object,
    }
})
let form = useForm({
    title: props.page.title,
    slug: props.page.slug,
    body: props.page.body,
    icon: props.page.icon
});

let submit = () => {
    form.put('/admin/pages/' + props.page.id)
    form.reset()

}

</script>

<style scoped>

</style>
