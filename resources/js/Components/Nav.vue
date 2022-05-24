      <script setup>
        import { Link } from '@inertiajs/inertia-vue3';

        components: {
            Link
        }


    </script>

    <template>
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 nav-menu">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-90">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <Link href="/" class="nav-link red align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">HOME</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="/about" class="nav-link red px-0 align-middle">
                            <i class="fs-4 bi bi-info-circle"></i> <span class="ms-1 d-none d-sm-inline">ABOUT</span> </Link>
                    </li>
                    <li>
                        <Link href="#" class="nav-link red px-0 align-middle">
                            <i class="fs-4 bi-archive"></i> <span class="ms-1 d-none d-sm-inline">ARCHIVE</span></Link>
                    </li>
                    <li>
                        <Link href="#submenu2" data-bs-toggle="collapse" class="nav-link yellow px-0 align-middle ">
                            <i class="fs-4 bi-bezier2"></i> <span class="ms-1 d-none d-sm-inline">ITINERARY</span></Link>

                    </li>
                    <li>
                        <Link href="#submenu3" data-bs-toggle="collapse" class="nav-link yellow px-0 align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
                                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
                                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
                            </svg> <span class="ms-1 d-none d-sm-inline">EDUCATION</span>
                        </Link>
                    </li>
                    <li>
                        <Link href="#" class="nav-link yellow px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">CONTRIBUTORS</span> </Link>
                    </li>
                    <li>
                        <Link href="#" class="nav-link green px-0 align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                            </svg> <span class="ms-1 d-none d-sm-inline">CITATION</span> </Link>
                    </li>
                    <li>
                        <Link href="#" class="nav-link green px-0 align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-plus" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
                            </svg> <span class="ms-1 d-none d-sm-inline">SUBMISSION</span> </Link>
                    </li>
                    <li>
                        <Link href="#" class="nav-link green px-0 align-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                            </svg> <span class="ms-1 d-none d-sm-inline">ADMIN</span> </Link>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <Link href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">AdamMPkins</span>
                    </Link>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><Link class="dropdown-item" href="#">New project...</Link></li>
                        <li><Link class="dropdown-item" href="#">Settings</Link></li>
                        <li><Link class="dropdown-item" href="#">Profile</Link></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><Link class="dropdown-item" href="#">Sign out</Link></li>
                    </ul>
                </div>
            </div>
        </div>
    </template>

