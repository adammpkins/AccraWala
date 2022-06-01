<template>


    <div class="row top-bar">
        <div class="col-12">
            <img src="/img/aw-logo.jpg" class="my-4 aw-logo float-start" alt="" />
            <Link class="float-end btn green-btn my-4 mx-5" v-if="!$page.props.auth.user" href="/login">Login</Link>
            <Link class="float-end btn green-btn my-sm-4 mb-4" v-if="!$page.props.auth.user" href="/register"><i class="bi bi-person-plus-fill" /> Create new account</Link>
        </div>

    </div>
    <div class="row div-wrap">
    <Nav />
    <slot />
    </div>
</template>

<script>
import Nav from "@/Components/Nav";
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Nav,
        Link
    }
}
</script>
