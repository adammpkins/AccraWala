<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header flex">
                        <h4 class="card-title float-start">Itineraries</h4>
                        <Link v-if="loggedIn" class="btn btn-primary float-end" href="/itineraries/create">New
                            Itinerary
                        </Link>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Title
                                </th>
                                <th>
                                    Narrative
                                </th>
                                <th v-if="loggedIn && user.role === 'admin'">
                                    Actions
                                </th>
                                </thead>
                                <tbody>
                                <tr v-for="itinerary in $page.props.itineraries">

                                    <td v-if="itinerary.approved == true">
                                        <Link :href="'/itineraries/' + itinerary.id">{{ itinerary.title }}</Link>
                                    </td>
                                    <td v-if="itinerary.approved == true">
                                        <Link :href="'/itineraries/' + itinerary.id">{{
                                                itinerary.gen_narrative
                                            }}
                                        </Link>
                                    </td>
                                    <td v-if="itinerary.approved == true" style="width:250px">
                                        <Link v-if="loggedIn && user.role === 'admin'"
                                              :href="'/itineraries/' + itinerary.id + '/edit/'"
                                              class="btn btn-primary it-btn">Edit
                                        </Link>
                                        <button
                                            v-if="loggedIn && $page.props.auth.user.role == 'admin' && itinerary.approved == false"
                                            class="btn green-btn mx-2 it-btn" @click="approve(itinerary.id)">
                                            <span class="bi bi-check-square"></span> Approve
                                        </button>
                                        <button v-if="loggedIn && user.role === 'admin'" class="btn btn-danger it-btn"
                                                @click="destroy(itinerary.id)">Delete
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="loggedIn && $page.props.auth.user.role == 'admin'" class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header flex">
                        <h4 class="card-title float-start">Approve Itineraries</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Title
                                </th>
                                <th>
                                    Narrative
                                </th>
                                <th v-if="loggedIn && user.role === 'admin'">
                                    Actions
                                </th>
                                </thead>
                                <tbody>
                                <tr v-for="itinerary in $page.props.itineraries">

                                    <td v-if="itinerary.approved == false">
                                        <Link :href="'/itineraries/' + itinerary.id">{{ itinerary.title }}</Link>
                                    </td>
                                    <td v-if="itinerary.approved == false">
                                        <Link :href="'/itineraries/' + itinerary.id">{{
                                                itinerary.gen_narrative
                                            }}
                                        </Link>
                                    </td>
                                    <td v-if="itinerary.approved == false" style="width:250px">
                                        <Link v-if="loggedIn && user.role === 'admin'"
                                              :href="'/itineraries/' + itinerary.id + '/edit/'"
                                              class="btn btn-primary it-btn">Edit
                                        </Link>
                                        <button
                                            v-if="loggedIn && $page.props.auth.user.role == 'admin' && itinerary.approved == false"
                                            class="btn green-btn mx-2 it-btn" @click="approve(itinerary.id)">
                                            <span class="bi bi-check-square"></span> Approve
                                        </button>
                                        <button v-if="loggedIn && user.role === 'admin'" class="btn btn-danger it-btn"
                                                @click="destroy(itinerary.id)">Delete
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Index",
    data() {

    },
    methods: {
        editItinerary(itinerary) {
            console.log(itinerary);
        },

        createItinerary() {
            console.log("createItinerary");
        }
    },
}


</script>
<script setup>
import {Inertia} from "@inertiajs/inertia";

let props = defineProps([
    'itineraries',
    'loggedIn',
    'user'
])

let destroy = (id) => {
    Inertia.delete('/itineraries/' + id + '/delete')
}

let approve = (id) => {
    Inertia.post('/itineraries/' + id + '/approve')
}
</script>

<style scoped>

</style>
