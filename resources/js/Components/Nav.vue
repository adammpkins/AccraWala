<script setup>
import {Link} from '@inertiajs/inertia-vue3';

components: {
    Link
}


</script>

<template>


    <div class="col-auto col-md-3 col-xl-2 px-0 nav-menu">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-90">
            <ul id="menu" class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                <li class="nav-item">
                    <Link :only="['routeShapes, stations']" class="nav-link red align-middle px-0" href="/">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">HOME</span>
                    </Link>
                </li>
                <li v-for="(page, index) in $page.props.pages" class="nav-item">
                    <Link :class="{'red': index === 0 || index === 1, 'yellow': index > 1, 'green': index > 3}"
                          :href="'/' + page.slug"
                          class="nav-link align-middle px-0">
                        <i :class='page.icon' class="fs-4"></i> <span
                        class="ms-1 d-none d-sm-inline">{{ page.title.toUpperCase() }}</span>
                    </Link>
                </li>
                <li>
                    <Link class="nav-link yellow px-0 align-middle" href="#">
                        <i class="fs-4 bi-archive"></i> <span class="ms-1 d-none d-sm-inline">ARCHIVE</span></Link>
                </li>
                <li>
                    <Link class="nav-link green px-0 align-middle" href="/itineraries">
                        <i class="fs-4 bi-bezier2"></i> <span class="ms-1 d-none d-sm-inline">ITINERARIES</span></Link>

                </li>
                <li>
                    <Link class="nav-link green px-0 align-middle" href="/media">
                        <i class="fs-4 bi bi-envelope-plus"></i> <span class="ms-1 d-none d-sm-inline">SUBMISSION</span>
                    </Link>
                </li>
                <li>
                    <Link v-if="$page.props.auth.user" class="nav-link green px-0 align-middle" href="/admin">
                        <i class="fs-4 bi bi-person-workspace"></i> <span class="ms-1 d-none d-sm-inline">ADMIN</span>
                    </Link>
                </li>
            </ul>
            <hr>
            <div v-if="$page.props.auth.user" class="dropdown pb-3">
                <Link id="dropdownUser1" aria-expanded="false"
                      class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                      data-bs-toggle="dropdown" href="#">
                    <i class="fs-4 bi-person"></i>
                    <span class="d-none d-sm-inline mx-1">{{ $page.props.auth.user.name }}</span>
                </Link>
                <ul aria-labelledby="dropdownUser1" class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li>
                        <Link v-if="$page.props.auth.user.role == 'admin'" class="dropdown-item" href="/admin">Admin
                        </Link>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <Link as="button" class="logout" href="/logout" method="post" type="button">Sign Out</Link>

                    </li>
                </ul>
            </div>

        </div>
    </div>
</template>

