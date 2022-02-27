@extends('layouts.app')

@section('title') About @endsection

@section('content')
    <div class="intro w-full h-screen">
        <div class="container mx-auto">
            <div class="intro__inner text-center mt-40">
                <h1 class="text-6xl mb-4">About</h1>
                <p class="opacity-40 text-xs mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam dignissimos dolore ad?
                </p>
                <div class="buttons flex justify-center">
                    <a href="https://github.com/HellenWeb"><button class="p-2 pl-5 mr-2 pr-5 bg-gray-500 text-gray-100 text-sm rounded-lg focus:border-4 border-gray-300">Github</button></a>
                    <a href="https://t.me/YungHellen"><button class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-sm rounded-lg focus:border-4 border-blue-300">Telegram</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection