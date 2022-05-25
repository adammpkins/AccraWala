<template>


    <div class="row top-bar">
        <img src="/img/aw-logo.jpg" class="aw-logo" alt="" />
    </div>
    <div class="row flex-wrap">
    <Nav />
    <slot />
    </div>
</template>

<script>
import Nav from "@/Components/Nav";
export default {
    components: {
        Nav
    }
}
</script>
