<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ props.stationmedia.title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>{{ props.stationmedia.description }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img :alt="props.stationmedia.title" :src="assetUrl(props.stationmedia.file)">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>{{ props.stationmedia.station.stationname }}</p>
            </div>
        </div>
    </div>


</template>

<script setup>

let props = defineProps({
    stationmedia: {
        type: Object,
        required: true
    }
});

function assetUrl(path) {
    return process.env.MIX_BASE_URL + 'storage/' + path
}

</script>

<style scoped>

</style>
