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
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">課程列表</h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex m-5">
                        <Link href="/addclass" class="px-5 h-[50px] bg-green-200 rounded-lg flex justify-center items-center">新增</Link>
                    </div>
                    <div class="flex justify-center mb-5">
                        <table class="w-11/12 text-center border-collapse border border-slate-400">
                            <thead>
                                <tr>
                                    <th class="border border-slate-400">序號</th>
                                    <th class="border border-slate-400">課程名稱</th>
                                    <th class="border border-slate-400">課程照片</th>
                                    <th class="border border-slate-400">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-slate-400">1</td>
                                    <td class="border border-slate-400">國語</td>
                                    <td class="border border-slate-400 flex justify-center">
                                        <img src="https://fakeimg.pl/250x200/">
                                    </td>
                                    <td class="border border-slate-400">
                                        <div class="flex justify-center gap-3">
                                            <Link href="/editclass" class=" bg-green-200 rounded-lg p-2">編輯</Link>
                                            <Link href="/editclass" class=" bg-red-200 rounded-lg p-2">刪除</Link>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-400">2</td>
                                    <td class="border border-slate-400">英語</td>
                                    <td class="border border-slate-400 flex justify-center">
                                        <img src="https://fakeimg.pl/250x200/">
                                    </td>
                                    <td class="border border-slate-400">
                                        <div class="flex justify-center gap-3">
                                            <Link href="/editclass" class=" bg-green-200 rounded-lg p-2">編輯</Link>
                                            <Link href="/editclass" class=" bg-red-200 rounded-lg p-2">刪除</Link>
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