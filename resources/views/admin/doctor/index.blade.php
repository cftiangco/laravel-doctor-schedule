@extends('layouts.master')


@section('content')
<section x-data>
    <x-container>
        <div class="flex flex-col md:flex-row justify-between items-center h-24 md:h-20 bg-white p-3 shadow rounded">
            <div class="border w-96 p-2 rounded flex items-center gap-x-1 cursor-pointer" @click="clickMe">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
                <div class="">Search</div>
            </div>
            <div>
                <x-button label="Register Doctor"/>
            </div>
        </div>
    </x-container>
</section>
@endsection

@section('js')
    function clickMe() {
        alert("this is clicked");
    }
@endsection
