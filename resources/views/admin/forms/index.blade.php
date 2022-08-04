@extends('layouts.master')
<?php 
    $data = [
       ['id' => 1, 'description' => 'Cake'],
       ['id' => 2, 'description' => 'Salad'],
       ['id' => 3, 'description' => 'Juice'],
    ];
?>

@section('content')
<div class="container-lg m-3">

    <div class="flex gap-x-3">
        <div>
            <!-- Card -->
            <x-card title="Card Title">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptates expedita tenetur minus, in consequuntur hic consectetur. Sequi consequuntur distinctio fugit blanditiis eos tenetur quod aut reiciendis, fuga architecto sunt est minus. Quibusdam tempora, modi qui, aliquid nobis alias incidunt voluptatum vel voluptates illo similique itaque rerum ipsam ex obcaecati!
            </x-card>
        </div>

        <div class="w-full">
            <!-- forms -->

            <!-- BlockTextbox -->
            <x-text-box placeHolder="TextBox" name="firstname" type="text"/>
            <x-text-box placeHolder="0.0" name="firstname" type="number"/>
            <x-text-box placeHolder="juan@gmail.com" type="email"/>
            <x-text-box placeHolder="juan@gmail.com" type="date"/>
            <x-text-box type="text" value="default value"/>
            
            <!-- LabeledTextBox -->
            <x-labeled-textbox label="First Name" placeHolder="LabeledTextBox"/>

            <x-button type="submit"/>
            <x-button label="Delete" skin="danger" />

            <x-dropdown-option class="w-full" label="Specialties" :rows=$data/>
        </div>
    </div>

    <!-- Modal -->
    <h1 class="text-2xl">Modal</h1>
    <div class="bg-white w-auto rounded-lg shadow mb-1">
        <div class="flex items-center justify-between text-gray-600 border-b">
            <h1 class="font-bold text-xl p-3">Modal Title</h1>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sunt ullam magni culpa sapiente consequuntur ducimus nostrum molestias alias aspernatur placeat assumenda reiciendis, ut numquam quo possimus, officiis illo corporis temporibus architecto excepturi iste dignissimos! Commodi repellendus dolorem dicta possimus nam sed cum libero nostrum similique! Non qui nemo tenetur?</div>
    </div>

</div>
@stop