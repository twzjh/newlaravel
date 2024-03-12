<script>
//引用Link
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';
import Classlistm from '@/Components/Classlistm.vue';

export default {
    components: {
        Link,
        AuthenticatedLayout,
        Classlistm,
    },
    props: {
        // books: {
        //     type:Array,
        // },
        // count: {
        //     type:Number,
        // },
        // title: {
        //     type:String, 
        // },

        response: {
            type:Object,
        }
    },
};
</script>



<template>
    

    <AuthenticatedLayout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">新增課表</h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
        </template>

        <Classlistm></Classlistm>



    </AuthenticatedLayout>


</template>