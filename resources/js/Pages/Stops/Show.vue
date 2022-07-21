<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ props.stop.title }}</h1>
                <p>{{ props.stop.gen_narrative }}</p>
                <img :alt="props.stop.title" :src="assetUrl(props.stop.photo)">
            </div>
        </div>
    </div>

</template>

<script setup>
let props = defineProps({
    stop: {
        type: Object,
        required: true
    },
    itinerary: {
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
