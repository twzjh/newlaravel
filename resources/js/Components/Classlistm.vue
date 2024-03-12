<script>
export default {

};
</script>

<template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form class="m-5">
                        <div class="flex justify-between gap-5">
                            <div class="w-1/2">
                                <label for="">學年度</label>
                                <input type="text" id="classintroduce" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-5">
                            </div>
                            <div class="w-1/2">
                                <label for="">學期</label>
                                <input type="text" id="classintroduce" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline mr-5">
                            </div>
                        </div>
                        <div class="flex justify-between">
                            

                        </div>


                    </form>

                    <div class="flex gap-2 justify-center mb-5">
                        <a href="/classlist" class="px-5 h-[50px] bg-gray-200 rounded-lg flex justify-center items-center">
                            返回列表
                        </a>
                        <Link href="/classlist" class="px-5 h-[50px] bg-blue-200 rounded-lg flex justify-center items-center">
                            儲存
                        </Link>
                    </div>




                </div>
            </div>
        </div>

</template>

