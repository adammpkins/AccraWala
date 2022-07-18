<template>
    <form @submit.prevent="submit">
        <div class="row w-75 m-auto">
            <h1>Edit Itinerary</h1>
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
                <label>Current Photo</label>
                <img :src="assetUrl(props.itinerary.f_photo)" alt="featured photo">
            </div>
        </div>
        <br/>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label for="f_photo">Replace Photo</label>
                <input class="form-control" name="f_photo" type="file" @input="fileChange"/>
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label for="authorid">Author Name</label>
                <input v-model="form.authorid" class="form-control" name="authorid" placeholder="Author Name"
                       type="text">
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <button class="btn btn-primary" type="submit">Edit Itinerary</button>
            </div>
        </div>
    </form>

</template>

<script setup>
import {useForm} from "@inertiajs/inertia-vue3";


function assetUrl(path) {
    return process.env.MIX_BASE_URL + 'storage/' + path
}

function fileChange(event) {
    form.f_photo = event.target.files[0]
}

let props = defineProps({
    itinerary: {
        type: Object,
        required: true
    }
})

let form = useForm({
    title: props.itinerary.title,
    gen_narrative: props.itinerary.gen_narrative,
    f_photo: null,
    authorid: props.itinerary.authorid,
    stops: props.itinerary.stops
})
let submit = () => {
    console.log(form.title)
    form.patch('/itineraries/' + props.itinerary.id)
    form.reset()

}
console.log(form)

</script>

<style scoped>

</style>
