
<script setup>
import "leaflet/dist/leaflet.css"
import { LMap, LTileLayer, LGeoJson, LPolyline, LMarker } from "@vue-leaflet/vue-leaflet";


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    routeShapes: Object,

});



</script>
<script>

export default {


    components: {
        LMap,
        LTileLayer,
        LPolyline,
        LMarker
    },
    data() {
        return {
            zoom: 13,
        };
    },
    computed: {
        polylines() {
            const polylines = [];
            this.routeShapes.forEach((route) => {
                const polyline = route.shapes.map((e) => [e.lat, e.lng])
                polylines.push(polyline);
            })
            return polylines
        }
    }
};


</script>



<template>
<Head>
    <title>Home</title>
</Head>
<!--<div v-for="(polyline, index) in polylines">-->
<!--    {{index}}-->
<!--</div>-->
        <l-map ref="map" id="map" v-model:zoom="zoom" :center="[5.59, -0.27]">

            <l-tile-layer
                url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
                layer-type="base"
                name="OpenStreetMap"
            ></l-tile-layer>

            <l-polyline
                v-for="(polyline, index) in polylines"
                :key="index"
                :lat-lngs="polyline"
                :color="(index % 2 === 0) ? 'green' : (index%3 === 0) ? 'yellow' : 'red'"
            />

        </l-map>
</template>

