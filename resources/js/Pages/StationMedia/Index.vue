<template>
    <div>
        <!--Index of StationMedia-->
        <div class="container mt-2">
            <h1 class="float-start">Media</h1>
            <Link v-if="loggedIn" class="btn green-btn float-end" href="/media/create">
                <span class="bi bi-plus"></span>New Media
            </Link>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Station</th>
                    <th v-if="loggedIn && $page.props.auth.user.role == 'admin'" scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="stationmedia in stationmedia">
                    <th scope="row">
                        <Link :href="'/media/' + stationmedia.id">
                            {{ stationmedia.id }}
                        </Link>
                    </th>
                    <td>
                        <Link :href="'/media/' + stationmedia.id">{{ stationmedia.title }}</Link>
                    </td>
                    <td>
                        <Link :href="'/media/' + stationmedia.id">{{ stationmedia.description }}</Link>
                    </td>
                    <td>
                        <Link :href="'/media/' + stationmedia.id">{{ stationmedia.station.stationname }}</Link>
                    </td>
                    <td>
                        <Link v-if="loggedIn && $page.props.auth.user.role == 'admin'"
                              :href="'/media/' + stationmedia.id + '/edit/'" class="btn green-btn mx-2">
                            <span class="bi bi-pencil"></span> Edit
                        </Link>
                        <button v-if="loggedIn && $page.props.auth.user.role == 'admin'" class="btn red-btn"
                                @click="update(stationmedia.id)"><span class="bi bi-trash"></span>
                            Delete
                        </button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

</template>

<script setup>
import {Inertia} from "@inertiajs/inertia";

import {useForm} from "@inertiajs/inertia-vue3";


let props = defineProps({
    stationmedia: {
        type: Object,
        required: true
    },
    loggedIn: {
        type: Boolean,
        required: true
    },
});

let form = useForm({
    title: props.stationmedia.title,
    description: props.stationmedia.description,
    station_id: props.stationmedia.station_id,
    file: null
});


function update(id) {
    swal.fire({
        title: 'Are you sure?',
        text: "You're updating a media item!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, update it!'
    }).then((result) => {
        if (result.value) {
            Inertia.patch('/media/' + id + '/update/');
        }
    })

}

</script>

<style scoped>

</style>
