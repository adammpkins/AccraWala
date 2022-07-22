<template>
    <!-- Stop create view -->
    <form @submit.prevent="submit">
        <div class="row w-75 m-auto">
            <h1>Create a Stop</h1>
            <div class="col-md-6">
                <label for="title">Title</label>
                <input v-model="form.title" class="form-control" name="title" placeholder="Itinerary Title" type="text">
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label for="body">Stop Description</label>
                <textarea v-model="form.body" class="form-control" name="body"
                          placeholder="Stop Description"></textarea>
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label for="photo">Photo</label>
                <input class="form-control" name="photo" type="file" @input="form.photo = $event.target.files[0]"/>
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label for="stationid">Station</label>
                <!--Dropdown for stations-->
                <select v-model="form.station_id" class="form-control">
                    <option v-for="station in stations" :value="station.id" name="station_id">
                        {{ station.title }}
                        {{ station.stationname }}
                    </option>
                </select>
            </div>
        </div>

        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <button class="btn btn-primary" type="submit">
                    Create Stop
                </button>
            </div>
        </div>
    </form>
</template>

<script setup>
import {useForm} from "@inertiajs/inertia-vue3";

let props = defineProps({
    stations: {
        type: Object,
        required: true
    },
    itinerary: {
        type: Object,
        required: true
    }
});

let form = useForm({
    title: '',
    body: '',
    photo: null,
    station_id: '',
    itinerary_id: props.itinerary.id

});


let submit = () => {
    form.post('/itineraries/{itinerary_id}/stops')
    form.reset()
}

</script>

<style scoped>

</style>
