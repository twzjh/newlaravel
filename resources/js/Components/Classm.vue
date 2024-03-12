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
                            <label for="classname">課程名稱</label>
                            <input type="text" id="classname">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="classintroduce">課程簡介</label>
                            <input type="text" id="classintroduce">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="classimage">課程照片</label>
                            <input type="file" id="classimage">
                        </div>
                    </form>

                    <div class="flex gap-2 justify-center mb-5">
                        <a href="/test" class="px-5 h-[50px] bg-gray-200 rounded-lg flex justify-center items-center">
                            返回列表
                        </a>
                        <Link href="/test" class="px-5 h-[50px] bg-blue-200 rounded-lg flex justify-center items-center">
                            儲存
                        </Link>
                    </div>




                </div>
            </div>
        </div>

</template>

