<script>
export default {

};
</script>

<template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form class="m-5">
                        <div class="flex flex-col mb-5">
                            <label for="classname">課程</label>
                            <select class="w-[150px] block appearance-none  bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-5" id="class">
                            <option>請選擇課程</option>
                            </select>
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="classintroduce">教師姓名</label>
                            <input type="text" id="classintroduce" class="w-[300px] block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-5">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="classintroduce">教師簡介</label>
                            <input type="text" id="classintroduce" class="w-[300px] block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-5">
                        </div>
                    </form>

                    <div class="flex gap-2 justify-center mb-5">
                        <a href="/teacher" class="px-5 h-[50px] bg-gray-200 rounded-lg flex justify-center items-center">
                            返回列表
                        </a>
                        <Link href="/teacher" class="px-5 h-[50px] bg-blue-200 rounded-lg flex justify-center items-center">
                            儲存
                        </Link>
                    </div>




                </div>
            </div>
        </div>

</template>

