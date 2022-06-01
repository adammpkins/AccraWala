<script setup>
import {Link} from '@inertiajs/inertia-vue3';

components: {
    Link
}


</script>

<template>


    <div class="col-auto col-md-3 col-xl-2 px-0 nav-menu">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-90">
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                    <Link href="/" class="nav-link red align-middle px-0">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">HOME</span>
                    </Link>
                </li>
                <li class="nav-item" v-for="(page, index) in $page.props.pages">
                    <Link :href="'/' + page.slug" class="nav-link align-middle px-0" :class="{'red': index === 0 || index === 1, 'yellow': index > 1, 'green': index > 3}">
                        <i class="fs-4" :class='page.icon'></i> <span
                        class="ms-1 d-none d-sm-inline">{{ page.title.toUpperCase() }}</span>
                    </Link>
                </li>
                <li>
                    <Link href="#" class="nav-link yellow px-0 align-middle">
                        <i class="fs-4 bi-archive"></i> <span class="ms-1 d-none d-sm-inline">ARCHIVE</span></Link>
                </li>
                <li>
                    <Link href="#submenu2" data-bs-toggle="collapse" class="nav-link green px-0 align-middle ">
                        <i class="fs-4 bi-bezier2"></i> <span class="ms-1 d-none d-sm-inline">ITINERARY</span></Link>

                </li>
                <li>
                    <Link href="#" class="nav-link green px-0 align-middle">
                        <i class="fs-4 bi bi-envelope-plus"></i> <span class="ms-1 d-none d-sm-inline">SUBMISSION</span>
                    </Link>
                </li>
                <li>
                    <Link href="#" class="nav-link green px-0 align-middle" v-if="$page.props.auth.user">
                        <i class="fs-4 bi bi-person-workspace"></i> <span class="ms-1 d-none d-sm-inline">ADMIN</span>
                    </Link>
                </li>
            </ul>
            <hr>
            <div class="dropdown pb-5" v-if="$page.props.auth.user">
                <Link href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                      id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1">AdamMPkins</span>
                </Link>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li>
                        <Link class="dropdown-item" href="/admin" v-if="$page.props.auth.user">Admin</Link>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <Link href="/logout" method="post" as="button" type="button" class="logout">Sign Out</Link>

                    </li>
                </ul>
            </div>

        </div>
    </div>
</template>

