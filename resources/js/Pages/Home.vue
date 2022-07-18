<template>
    <Head>
        <title>Home</title>
    </Head>

    <!--    <div v-for="(routeShape, index) in routeShapes" :key="index">-->
    <!--        {{ routeShape.routeid }} {{ routeShape.routename }}-->

    <!--    </div>-->
    <vue-final-modal v-model="showModal" classes="flex justify-center items-center "
                     content-class="m-auto w-50 p-4 border rounded bg-white overflow-auto" name="stop_modal">
        <span class="modal__title">{{ modalTitle }}</span>
        <div class="modal__content">
            <p>{{ modalBody }}</p>
        </div>
    </vue-final-modal>
    <l-map id="map" ref="map" v-model:zoom="zoom" :center="[5.59, -0.27]" :options="{preferCanvas: true}">

        <l-tile-layer
            :max-zoom="15"
            :min-zoom="12"
            layer-type="base"
            name="OpenStreetMap"
            updateWhenIdle="true"
            url="https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYWRhbW1wa2lucyIsImEiOiJjbDF3eG5pbzMwNTJ6M2ttcmR2cjN1djIyIn0.mipqBBImzfGcA29e1I4Sew"
        ></l-tile-layer>

        <l-marker
            v-for="station in stations"
            :lat-lng="[station.lat, station.lon]" autoPanOnFocus="true"
            keyboard="true"
            @click="closeAll()"
        >
            <l-icon :icon-size="[15,15]" :icon-url="'/img/bus.png'"/>
            <l-popup>
                <!-- Only show showItineraries button if there are stops with a station_id equal to station.id -->
                <button
                    v-if="itineraries.find(itinerary => itinerary.stops.find(stop => stop.station_id == station.id))"
                    @click="showItineraries()">Show Itineraries
                </button>

                <ul>

                <span v-for="itinerary in itineraries" v-show="showItinerariesControl.show == true">

                    <span
                        v-if="itinerary.stops.find((stop) => stop.station_id == station.id)">
                    <li><button @click="showItinerary(itinerary)">{{
                            itinerary.title
                        }}</button></li>
                    <ul>
                        <div
                            v-if="itinerary.stops.find((stop) => stop.station_id == station.id) && showItineraryControl.itinerary == itinerary">

                                <div v-for="stop in itinerary.stops">
                                    <span v-if="stop.station_id == station.id">
                                        <li><button
                                            @click="openModalExample(itinerary,station,stop)">Open Stop: {{
                                                stop.title
                                            }}</button></li>
                                        <li><button>Next Stop</button></li>
                                    </span>
                                </div>

                        </div>
                    </ul>

                        <!--                        <div-->
                        <!--                            v-show="showItineraryControl.show == true && showItineraryControl.itinerary == itinerary"><strong>Current Stop:</strong></div>-->
                        <!--                        <ul>-->
                        <!--                        <li v-show="showItineraryControl.show == true && showItineraryControl.itinerary == itinerary">-->
                        <!--                            Title:  {{ itinerary.stops.find((stop) => stop.station_id == station.id).title }}</li>-->
                        <!--                        <li v-show="showItineraryControl.show == true && showItineraryControl.itinerary == itinerary">Body: {{-->
                        <!--                                itinerary.stops.find((stop) => stop.station_id == station.id).body-->
                        <!--                            }}</li>-->
                        <!--                        </ul>-->


                    </span>
                </span>
                </ul>

                <p><strong>Station:</strong> {{ station.stationname }}</p>
                <p><strong>Station Number:</strong> {{ station.stationid }}</p>
                <p><strong><a
                    :href="'https://www.google.com/maps/@?api=1&map_action=pano&viewpoint='+ station.lat +'%2C' + station.lon +'&heading=45&pitch=0&fov=80'"
                    target="_blank">Google
                    Street View</a></strong></p>
            </l-popup>
        </l-marker>

        <l-polyline
            v-for="(routeShape, index) in routeShapes"
            :key="index"
            :color="'#' + Math.floor(Math.random() * 16777215).toString(16)"
            :lat-lngs="getPolyLine(routeShape.routeid)"
        >
            <l-popup>

                <p><strong>Route:</strong> {{ routeShape.routename }}</p>
            </l-popup>
        </l-polyline>


    </l-map>


</template>
<script setup>
import "leaflet/dist/leaflet.css"
import {LMap, LTileLayer, LPolyline, LMarker, LIcon, LPopup} from "@vue-leaflet/vue-leaflet";
import {reactive} from "vue";


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    routeShapes: Object,
    stations: Object,
    itineraries: Object
});

let showItineraryControl = reactive({show: false, itinerary: null});
let showItinerariesControl = reactive({show: false});


function showItineraries() {
    showItinerariesControl.show = !showItinerariesControl.show;
}

function showItinerary(itinerary) {
    showItineraryControl.show = !showItineraryControl.show;
    showItineraryControl.itinerary = itinerary;
}

function closeAll() {
    showItinerariesControl.show = false;
    showItineraryControl.show = false;
}


</script>

<script>
import {$vfm, VueFinalModal, ModalsContainer} from 'vue-final-modal';


export default {
    data() {
        return {
            zoom: 13,
            showModal: false,
            modalTitle: '',
            modalBody: '',
        };
    },
    computed: {},
    methods: {
        openModalExample(itinerary, station, stop) {

            this.modalTitle = stop.title;
            this.modalBody = stop.body;
            this.$vfm.show('stop_modal')

        },
        getPolyLine(routeid) {
            const polyline = this.routeShapes.find((route) => route.routeid == routeid).shapes.map((e) => [e.lat, e.lng]);
            return polyline
        },
    },
    components: {
        VueFinalModal,
        ModalsContainer
    }


};


</script>
<style scoped>
button {
    color: #0078A8;
    background-color: transparent;
    border: none;
    text-decoration: underline;
    padding: 0;
    margin: 0;
    cursor: pointer;
}

</style>

