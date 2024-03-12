<script>
//引用Link
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';
import schoolBg from '/images/school.png'

export default {
    data() {
        return{
            schoolBg,
        };
    },
};
</script>

<template>
    <img :src="schoolBg" alt="">
</template>
