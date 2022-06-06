
<script setup>
import "leaflet/dist/leaflet.css"
import { LMap, LTileLayer, LGeoJson } from "@vue-leaflet/vue-leaflet";




defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,

});



</script>
<script>

export default {
    components: {
        LMap,
        LTileLayer,
    },
    data() {
        return {
            zoom: 13,
        };
    },
};


</script>



<template>
<Head>
    <title>Home</title>
</Head>


        <l-map ref="map" id="map" v-model:zoom="zoom" :center="[5.59, -0.19]">
            <l-tile-layer
                url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
                layer-type="base"
                name="OpenStreetMap"
            ></l-tile-layer>
        </l-map>

</template>

