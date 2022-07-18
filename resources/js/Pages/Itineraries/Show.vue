<template>
    <!-- Itinerary Show -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ itinerary.title }}</h1>
                <p>{{ itinerary.gen_narrative }}</p>
                <img alt="" src="{{ itinerary.f_photo }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <h2>Stops</h2>
                <!--Add stop button-->
                <Link :href="'/itineraries/' + itinerary.id + '/stops/create'" class="btn green-btn float-end">
                    <span class="bi bi-plus"></span>New stop
                </Link>
                <ul>
                    <li v-for="stop in itinerary.stops">
                        <Link :href="'/itinerary/' + itinerary.id +'/stops/' + stop.id + '/edit/'">{{
                                stop.title
                            }}
                        </Link>
                    </li>
                </ul>
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

let props = defineProps({
    itinerary: {
        type: Object,
        required: true
    },
    stops: {
        type: Object,
        required: true
    }
})
</script>

<style scoped>

</style>
