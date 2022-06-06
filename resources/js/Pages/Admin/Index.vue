
<script setup>
import "leaflet/dist/leaflet.css"
import { LMap, LTileLayer, LGeoJson } from "@vue-leaflet/vue-leaflet";

import {Link} from '@inertiajs/inertia-vue3';

components: {
    Link
}


defineProps({

});



</script>




<template>
    <Head>
        <title>Admin</title>
    </Head>



    <div class="mx-auto content">
        <h1>Admin</h1>
        <ul>
            <li><Link href="/admin/pages">Pages</Link></li>
        </ul>
    </div>
</template>

