@extends('layout.app')

@section('title', 'Login')

    @push('css')

    @endpush

@section('content')

    <div class="grid h-screen grid-cols-2 gap-5 p-5 mx-auto max-w-7xl">
        <div class="flex flex-col">
            <p class="mt-20 text-3xl mb-14">Welcome Back!</p>

            <input type="text" name="username" class="w-10/12 h-12 p-3 mb-5 border border-gray-300 rounded-lg" placeholder="Username">
            <input type="password" name="password" class="w-10/12 h-12 p-3 mb-5 border border-gray-300 rounded-lg" placeholder="password">

            <button class="w-10/12 h-10 mb-3 text-center text-black bg-pink-200 rounded-lg">Login</button>

            <a href="{{ route('register') }}" class="text-gray-400">Don't have an account? <span class="text-black">Register</span></a>
            <a href="#" class="text-gray-400">Forgot Password? <span class="text-black">Reset Password</span></a>
        </div>

        <div class="flex justify-end w-full">
            <div class="relative flex flex-row w-10/12 h-full rounded-l-3xl bg-gray-50">
                <img src="{{ asset('assets/imgs/back-8.jpeg') }}" class="absolute mt-20 -left-20 rounded-3xl w-96" alt="">

                <div class="absolute flex flex-col top-16 right-4">
                    <img src="{{ asset('assets/imgs/back-7.png') }}" class="w-40 h-52 rounded-3xl" alt="">
                    <img src="{{ asset('assets/imgs/back-6.jpeg') }}" class="w-40 mt-36 h-52 rounded-3xl" alt="">
                </div>
            </div>
        </div>
        
    </div>


@endsection