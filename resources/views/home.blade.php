@extends('layouts.app')

@section('title') Home @endsection

@section('content')
    <div class="intro w-full h-screen">
        <div class="container mx-auto">
            <div class="intro__inner text-center mt-40">
                <h1 class="text-6xl mb-4">Home</h1>
                <p class="opacity-40 text-xs mb-4">
                    My first experience of using the Tailwind CSS framework with Laravel
                </p>
                <div class="buttons flex justify-center">
                    <a href="https://github.com/HellenWeb/laravel-tailwind"><button class="p-2 pl-5 mr-2 pr-5 bg-gray-500 text-gray-100 text-sm rounded-lg focus:border-4 border-gray-300">Repository</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection