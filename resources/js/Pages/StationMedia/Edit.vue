<template>
    <div>
        <!--Create form for StationMedia-->
        <form @submit.prevent="submit">
            <div class="row w-75 m-auto">
                <h1>Upload Media</h1>
                <div class="col-md-6">
                    <label for="title">Title</label>
                    <input v-model="form.title" class="form-control" name="title" placeholder="Itinerary Title"
                           type="text">
                </div>
            </div>
            <div class="row w-75 m-auto">
                <div class="col-md-6">
                    <label for="description">Description</label>
                    <textarea v-model="form.description" class="form-control" name="description"
                              placeholder="Itinerary Description"></textarea>
                </div>
            </div>
            <div class="row w-75 m-auto">
                <div class="col-md-6">
                    <label for="station">Station</label>
                    <select v-model="form.station_id" class="form-control">
                        <option v-for="station in stations" :value="station.id" name="station_id">
                            {{ station.stationname }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row w-75 m-auto">
                <div class="col-md-6">
                    <label for="file">File</label>
                    <input class="form-control" name="file" type="file" @input="form.file = $event.target.files[0]"/>
                </div>
            </div>
            <div class="row w-75 m-auto">
                <div class="col-md-6">
                    <button class="btn btn-primary" type="submit">Upload Media</button>
                </div>
            </div>
        </form>
    </div>

</template>

<script setup>
import {useForm} from "@inertiajs/inertia-vue3";


let props = defineProps({
    stations: {
        type: Object,
        required: true
    },
    stationmedia: {
        type: Object,
        required: true
    }
});

let form = useForm({
    title: props.stationmedia.title,
    description: props.stationmedia.description,
    station_id: props.stationmedia.station_id,
    file: null
});

let submit = () => {
    form.patch('/media/' + props.stationmedia.id)
    form.reset()
}


</script>

<style scoped>

</style>
