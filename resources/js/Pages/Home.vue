<template>
    <div class="home-container" style="height: 100%; width: 100%;">
        <Head>
            <title>Home</title>
        </Head>
        <vue-final-modal v-model="showModal" classes="flex justify-center items-center "
                         content-class="m-auto w-50  p-4 border rounded bg-white overflow-auto"
                         name="stop_modal">
            <span class="modal__title d-flex justify-content-center" v-html="modalTitle.title"></span>
            <div class="modal__content d-flex justify-content-center">
                <div class="row">
                    <img :alt="modalTitle.title" :src="assetUrl(modalPhoto.photo)"/>
                </div>
            </div>
            <div class="modal__content d-flex justify-content-center">
                <div class="row">
                    <p>{{ modalBody.body }}</p>
                </div>
            </div>
        </vue-final-modal>

        <l-map id="map" ref="map" v-model:zoom="zoom" :center="center.center" :options="{preferCanvas: true}"
               @ready="showOnReady()">
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
                ref="stationRefs"
                :lat-lng="[station.lat, station.lon]"
                :options="{title: station.stationname}"
                autoPanOnFocus="true"
                keyboard="true"
                @click="closeAll()"
            >
                <l-icon :icon-size="[18,18]" :icon-url="hasItinerary(station)"/>
                <l-popup>

                    <button
                        v-if="hasMedia(station)"
                        @click="showMedias(station)">
                        Show Media
                    </button>
                    <ul>
                        <span v-for="media in stationMedia" v-show="showMediaControl.show == true">
                            <li>
                                <button @click="showMedia(station, media)">
                                    {{ media.title }}
                                </button>
                            </li>
                        </span>
                    </ul>

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
                                    }}</button>
                                </li>
                                <ul>
                                    <div
                                        v-if="itinerary.stops.find((stop) => stop.station_id == station.id) && showItineraryControl.itinerary == itinerary">
                                            <div v-for="stop in itinerary.stops">
                                                <span v-if="stop.station_id == station.id">
                                                    <li>
                                                        <button v-if="stop.order == 1"
                                                                disabled>Start of Itinerary</button>
                                                        <button v-else
                                                                @click="prevStop(itinerary.stops,station,stations,stop,itinerary)">Previous Stop</button>
                                                    </li>
                                                    <li><button
                                                        @click="openModalExample(itinerary,station,stop)">Open Stop: {{
                                                            stop.title
                                                        }}</button></li>
                                                    <li>
    <!--                                                    Button using v-if to show/hide button if there is no next stop-->

                                                        <button
                                                            v-if="stop.order == itinerary.stops.length" disabled>End of Itinerary</button>
                                                        <button v-else
                                                                @click="nextStop(itinerary.stops,station,stations,stop,itinerary)">Next Stop</button></li>
                                                </span>
                                            </div>
                                    </div>
                                </ul>
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
                v-for="(routeShape, index) in routeshapes.routeShapes"
                :key="index"
                :color="'#' + Math.floor(Math.random() * 16777215).toString(16)"
                :lat-lngs="getPolyLine(routeShape.routeid)"

            >

                <l-popup>
                    <p><strong>Route:</strong> {{ routeShape.routename }}</p>
                </l-popup>

            </l-polyline>
        </l-map>
    </div>
</template>
<script setup>
import "leaflet/dist/leaflet.css"
import {LMap, LTileLayer, LPolyline, LMarker, LIcon, LPopup} from "@vue-leaflet/vue-leaflet";
import {reactive, ref, onMounted, inject} from "vue";
import {$vfm, VueFinalModal, ModalsContainer} from "vue-final-modal";
import axios from "axios";


let props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    stations: Object,
    itineraries: Object,
    stationMedia: Object,
});
let routeshapes = reactive({
    routeShapes: [],
});


axios.get("/api/route-shapes").then(function (response) {
    routeshapes.routeShapes = response.data;
});
let showItineraryControl = reactive({show: false, itinerary: null});
let showItinerariesControl = reactive({show: false});
let showMediaControl = reactive({show: false});
let modalTitle = reactive({title: "Next Stop"});
let modalBody = reactive({body: "Next Stop"});
let modalPhoto = reactive({photo: ""});
let center = reactive({center: [5.59, -0.27]});
let map = ref(null);
const stationRefs = ref([])
let showModal = ref(false);
let zoom = ref(13);


function assetUrl(path) {
    return process.env.MIX_BASE_URL + 'storage/' + path
}

function showMedias(station) {
    showMediaControl.show = true;
}

function showMedia(station, media) {
    modalTitle.title = '<h2>' + media.title + '</h2>';
    modalBody.body = media.description;
    modalPhoto.photo = media.file;
    showModal.value = true;
}

function hasMedia(station) {
    let media = props.stationMedia.find(media => media.station_id == station.id);
    if (media) {
        return true;
    } else {
        return false;
    }
}

function hasItinerary(station) {
    let stops = props.itineraries.find(itinerary => itinerary.stops.find(stop => stop.station_id == station.id));
    let media = props.stationMedia.find(media => media.station_id == station.id);
    if (stops && media) {
        return "/img/bus-green.png";
    } else if (stops) {
        return "/img/bus-red.png";
    } else if (media) {
        return "/img/bus-yellow.png";
    } else {
        return "/img/bus.png";
    }
}

function showOnReady() {
    console.log(process.env.MIX_BASE_URL);

}

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
    showMediaControl.show = false;
}


function nextStop(stops, station, stations, currentStop, itinerary) {
    let nextStop = stops.find((stop) => stop.itinerary_id == itinerary.id && stop.order == currentStop.order + 1);
    let nextStation = stations.find((station) => station.id == nextStop.station_id);
    if (nextStop) {

        let nextStopMarker = stationRefs.value.find((marker) => marker.options.title == nextStation.stationname);
        nextStopMarker.leafletObject.openPopup();


    } else {
        swal.fire({
            title: "No Next Stop",
            text: "There are no more stops for this itinerary",
            icon: "warning",
            button: "OK"
        });
    }
}

function prevStop(stops, station, stations, currentStop, itinerary) {
    let prevStop = stops.find((stop) => stop.itinerary_id == itinerary.id && stop.order == currentStop.order - 1);
    if (prevStop) {
        let prevStation = stations.find((station) => station.id == prevStop.station_id);

        let prevStopMarker = stationRefs.value.find((marker) => marker.options.title == prevStation.stationname);
        prevStopMarker.leafletObject.openPopup();
    } else {
        swal.fire({
            title: "No Previous Stop",
            text: "There are no previous stops for this itinerary",
            icon: "warning",
            button: "OK"
        });
    }
}

function openModalExample(itinerary, station, stop) {
    modalTitle.title = stop.title;
    modalBody.body = stop.body;
    modalPhoto.photo = stop.photo;
    center.center = [station.lat, station.lon];
    $vfm.show('stop_modal')
}

function getPolyLine(routeid) {
    let routeShape = routeshapes.routeShapes.find(routeShape => routeShape.routeid == routeid);
    let polyline = routeShape.shapes.map((e) => [e.lat, e.lng]);
    return polyline
}

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

button:disabled,
button[disabled] {
    color: #666666;
    cursor: default;
    text-decoration: none;
}


</style>

