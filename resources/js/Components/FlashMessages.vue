<template>
    <div>
        <div v-if="$page.props.flash.success && show">
            <div>
                <!--                exit button-->
                <div class="alert alert-success my-2" role="alert">
                    {{ $page.props.flash.success }}
                    <button class="x-btn float-end" type="button" @click="show = false"><i class="bi bi-x"></i></button>

                </div>
            </div>
        </div>
        <div v-if="($page.props.flash.error || Object.keys($page.props.errors).length > 0) && show">
            <div>
                <div class="alert alert-danger my-2">
                    <div v-if="$page.props.flash.error">{{ $page.props.flash.error }}</div>
                    <div v-else>
                        <span v-if="Object.keys($page.props.errors).length === 1">There is one form error.</span>
                        <span v-else>There are {{ Object.keys($page.props.errors).length }} form errors.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import { usePage } from '@inertiajs/inertia-vue3'

export default {
    updated(){
        if(usePage().props.value.flash.alert){
            Swal.fire(usePage().props.value.flash.alert);
        }
    },
    data() {
        return {
            show: true,
        }
    },
    watch: {
        '$page.props.flash': {
            handler() {
                this.show = true;
            },
            deep: true,
        },
    },
}
</script>
