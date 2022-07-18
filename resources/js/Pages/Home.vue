<script setup>
import "leaflet/dist/leaflet.css"
import {LMap, LTileLayer, LPolyline, LMarker, LIcon, LPopup} from "@vue-leaflet/vue-leaflet";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    routeShapes: Object,
    stations: Object,
    itineraries: Object
});
</script>
<script>

export default {

    data() {
        return {
            zoom: 13,
        };
    },
    computed: {},
    methods: {
        getPolyLine(routeid) {
            const polyline = this.routeShapes.find((route) => route.routeid == routeid).shapes.map((e) => [e.lat, e.lng]);
            return polyline
        },

    },


}


</script>
<template>
    <Head>
        <title>Home</title>
    </Head>

    <!--    <div v-for="(routeShape, index) in routeShapes" :key="index">-->
    <!--        {{ routeShape.routeid }} {{ routeShape.routename }}-->

    <!--    </div>-->


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
        >
            <l-icon :icon-size="[15,15]" :icon-url="'/img/bus.png'"/>
            <l-popup>
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

