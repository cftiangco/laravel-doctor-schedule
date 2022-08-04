<div
{{$attributes}}
x-transition:enter.duration.500ms
x-transition:leave.duration.400ms
class="h-screen w-screen absolute bg-black bg-opacity-25 top-0 left-0 right-0 bottom-0 flex justify-center items-center z-50">
        <div class="bg-white rounded-lg shadow mb-1 min-w-[40%] mx-5 md:mx-0">

            <div class="flex items-center justify-between text-gray-600 border-b p-3">
                <h1 class="font-bold text-xl">{{$title}}</h1>
            </div>

            <div class="w-sm">
                {{$slot}}
            </div>

        </div>
</div>
