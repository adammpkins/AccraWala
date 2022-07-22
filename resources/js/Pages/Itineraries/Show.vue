<template>


    <!-- Itinerary Show -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ itinerary.title }}</h1>
                <p>{{ itinerary.gen_narrative }}</p>
                <img :src="baseUrl(itinerary.f_photo)" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">


                <div class="card">
                    <div class="card-header flex">
                        <h4 class="card-title float-start">Stops</h4>
                        <!--Add stop button-->
                        <Link v-if="loggedIn && user.name == itinerary.authorid || loggedIn && user.role === 'admin'"
                              :href="'/itineraries/' + itinerary.id + '/stops/create'" class="btn green-btn float-end">
                            <span
                                class="bi bi-plus"></span>New stop
                        </Link>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Order</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Narrative</th>
                                    <th v-if="loggedIn && user.role === 'admin'" scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(stop, count) in itinerary.stops">
                                    <th scope="row">
                                        <Link :href="'/itineraries/' + itinerary.id + '/stops/' + stop.id">
                                            {{ count + 1 }}
                                        </Link>
                                    </th>
                                    <td>
                                        <Link :href="'/itineraries/' + itinerary.id + '/stops/' + stop.id">
                                            {{ stop.title }}
                                        </Link>
                                    </td>
                                    <td>
                                        <Link :href="'/itineraries/' + itinerary.id + '/stops/' + stop.id">

                                            {{ stop.gen_narrative }}
                                        </Link>
                                    </td>
                                    <td>
                                        <Link v-if="loggedIn && user.role === 'admin'"
                                              :href="'/itineraries/' + itinerary.id + '/stops/' + stop.id + '/edit/'"
                                              class="btn btn-primary">Edit
                                        </Link>
                                        <button v-if="loggedIn && user.role === 'admin'" class="btn btn-danger"
                                                @click="destroy(stop.id)">Delete
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!--        <div class="row">-->
            <!--            <div class="col-md-12">-->
            <!--                <h2>Stops</h2>-->
            <!--                <ul>-->
            <!--                    <li v-for="stop in itinerary.stops">-->
            <!--                        <router-link :to="`/itineraries/${itinerary.id}/stops/${stop.id}`">-->
            <!--                            {{ stop.title }}-->
            <!--                        </router-link>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--            </div>-->
        </div>
    </div>

</template>

<script setup>
import {usePage} from '@inertiajs/inertia-vue3'
import {Inertia} from '@inertiajs/inertia'
import Button from "../../../../vendor/laravel/breeze/stubs/inertia-vue/resources/js/Components/Button";

let props = defineProps({
    itinerary: {
        type: Object,
        required: true
    },
    stops: {
        type: Object,
        required: true
    },
    user: {
        type: Object,
        required: true
    },
    loggedIn: {
        type: Boolean,
        required: true
    },

});


function destroy(id) {
    Inertia.delete('/itineraries/' + props.itinerary.id + '/stops/' + id + '/delete')
}

function baseUrl(path) {
    return process.env.MIX_BASE_URL + 'storage/' + path
}


</script>

<style scoped>

</style>
