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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">課表列表</h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex mx-2 my-5">
                        <Link href="/addclasslist" class="px-5 h-[50px] bg-green-200 rounded-lg flex justify-center items-center">新增</Link>
                    </div>
                    <div class="flex justify-center">
                        <table class="w-[900px] text-center border-collapse border border-slate-400 mb-5">
                            <thead>
                                <tr>
                                    <th class="border border-slate-400 w-[100px]">序號</th>
                                    <th class="border border-slate-400">學年</th>
                                    <th class="border border-slate-400">學期</th>
                                    <th class="border border-slate-400 w-[250px]">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-400">1</td>
                                    <td class="border border-slate-400">113</td>
                                    <td class="border border-slate-400">上</td>
                                    <td class="border border-slate-400">
                                        <div class="flex justify-center gap-3">
                                            <Link href="" class=" bg-green-200 rounded-lg p-2">寄送</Link>
                                            <Link href="/editclasslist" class=" bg-yellow-200 rounded-lg p-2">編輯</Link>
                                            <Link href="" class=" bg-red-200 rounded-lg p-2">刪除</Link>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-400">2</td>
                                    <td class="border border-slate-400">113</td>
                                    <td class="border border-slate-400">下</td>
                                    <td class="border border-slate-400">
                                        <div class="flex justify-center gap-3">
                                            <Link href="" class=" bg-green-200 rounded-lg p-2">寄送</Link>
                                            <Link href="/editclasslist" class=" bg-yellow-200 rounded-lg p-2">編輯</Link>
                                            <Link href="" class=" bg-red-200 rounded-lg p-2">刪除</Link>
                                        </div>
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