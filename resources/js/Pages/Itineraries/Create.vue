<template>
    <form @submit.prevent="submit">
        <div class="row w-75 m-auto">
            <h1>Create a new itinerary</h1>
            <div class="col-md-6">
                <label for="title">Title</label>
                <input v-model="form.title" class="form-control" name="title" placeholder="Itinerary Title" type="text">
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label for="gen_narrative">Narrative</label>
                <textarea v-model="form.gen_narrative" class="form-control" name="gen_narrative"
                          placeholder="Itinerary Narrative"></textarea>
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label for="f_photo">Featured Photo</label>
                <input class="form-control" name="f_photo" type="file" @input="form.f_photo = $event.target.files[0]"/>

            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <button class="btn btn-primary" type="submit">Create Itinerary</button>
            </div>
        </div>
    </form>


</template>


<script setup>
import {useForm} from "@inertiajs/inertia-vue3";


let form = useForm({
    title: '',
    gen_narrative: '',
    f_photo: null,
    stops: []
});


let submit = () => {
    form.post('/itineraries')
    form.reset()
}


</script>

<style scoped>

</style>
