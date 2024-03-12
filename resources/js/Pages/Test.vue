<script>
//引用Link
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';
import testBg from '/images/test.png'

export default {
    components: {
        Link,
        AuthenticatedLayout,
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
    data() {
        return{
            testBg,
        };
    },
};
</script>



<template>
    

    <AuthenticatedLayout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Test</h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
        </template>

        <img :src="testBg" alt="">

        <section class="flex justify-center bg-slate-500">
        
        <div v-for="book in response.books" :key="book.id">
            <p>書名: {{ book.name }}</p>
            <p>價格: {{ book.price }}</p>
        </div>
        <div>Count: {{ response.count }}</div>
        <div>Title: {{ response.title }}</div>
        <Link href="/">回到首頁</Link>
    </section>

    </AuthenticatedLayout>


</template>