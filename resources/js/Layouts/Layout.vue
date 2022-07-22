<template>

    <div class="row top-bar">
        <div class="col-12">
            <img alt="" class="my-4 aw-logo float-start" src="/img/aw-logo.jpg"/>
            <Link v-if="!$page.props.auth.user" class="float-end btn green-btn my-4 mx-5" href="/login">Login</Link>
            <Link v-if="!$page.props.auth.user" class="float-end btn green-btn my-sm-4 mb-4" href="/register"><i
                class="bi bi-person-plus-fill"/> Create new account
            </Link>
            <Link v-if="$page.props.auth.user" class="float-end btn green-btn my-sm-4 mb-4" href="/logout"
                  method="post"><i
                class="bi bi-power-off"/> Logout
            </Link>
        </div>

    </div>
    <div class="row div-wrap">
        <Nav/>
        <div class="mx-auto content">

            <flash-messages/>

            <slot/>
        </div>
    </div>
</template>

<script>
import Nav from "@/Components/Nav";
import FlashMessages from "@/Components/FlashMessages";
import {Link} from "@inertiajs/inertia-vue3";

export default {
    components: {
        Nav,
        Link,
        FlashMessages
    }
}
</script>
