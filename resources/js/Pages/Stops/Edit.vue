<template>
    <!--Component to edit stops -->
    <form @submit.prevent="submit">
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label for="title">Title</label>
                <input v-model="form.title" class="form-control" name="title" placeholder="Title" type="text">
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label for="body">Body</label>
                <textarea v-model="form.body" class="form-control" name="body" placeholder="Body"></textarea>
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label>Current Photo</label>
                <img :src="assetUrl(props.stop.photo)" alt="featured photo">
            </div>
        </div>
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <label for="photo">Replace Photo</label>
                <input class="form-control" name="photo" placeholder="Photo" type="file">
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
        <!--Submit button-->
        <div class="row w-75 m-auto">
            <div class="col-md-6">
                <button class="btn btn-primary" type="submit">
                    Update Stop
                </button>
            </div>
        </div>
    </form>

</template>
<script setup>
import {useForm} from "@inertiajs/inertia-vue3";

let props = defineProps({
    stop: {
        type: Object,
        required: true
    },
    itinerary: {
        type: Object,
    },
    stations: {
        type: Object,
        required: true
    },
    user: {
        type: Object,
        required: true
    }
});

let form = useForm({
    title: props.stop.title,
    body: props.stop.body,
    photo: null,
    station_id: props.stop.station_id,
});
let submit = () => {
    form.patch('/itineraries/' + props.itinerary.id + '/stops/' + props.stop.id)
        .then(() => {
            swal.fire({
                title: 'Success',
                text: 'Stop updated successfully',
                icon: 'success',
                confirmButtonText: 'OK'
            })
        })

    form.reset()
}

function assetUrl(photo) {
    return process.env.MIX_BASE_URL + 'storage/' + photo;
}
</script>
<style scoped>
</style>
