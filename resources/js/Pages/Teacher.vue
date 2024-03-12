<script>
//引用Link
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';

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
};
</script>



<template>
    

    <AuthenticatedLayout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">教師列表</h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex mx-2 my-5">
                        <button class="w-[50px] bg-green-200">新增</button>  
                    </div>
                    <div class="flex justify-center">
                        <table class="w-[900px] text-center border-collapse border border-slate-400 mb-5">
                            <thead>
                                <tr>
                                    <th class="border border-slate-400">序號</th>
                                    <th class="border border-slate-400">教師姓名</th>
                                    <th class="border border-slate-400">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-400">1</td>
                                    <td class="border border-slate-400">國語</td>
                                    <td class="border border-slate-400">
                                        <button class="bg-yellow-200">編輯</button>
                                        <button class="bg-red-200">刪除</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-400">2</td>
                                    <td class="border border-slate-400">英語</td>
                                    <td class="border border-slate-400">
                                        <button class="bg-yellow-200">編輯</button>
                                        <button class="bg-red-200">刪除</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </AuthenticatedLayout>


</template>