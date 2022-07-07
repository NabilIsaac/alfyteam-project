@extends('layout.app')

@section('title', 'Login')

    @push('css')

    @endpush

@section('content')

    <div class="grid h-screen grid-cols-1 gap-5 p-5 mx-auto md:grid-cols-2 max-w-7xl">
        <div class="flex flex-col">
            <p class="mt-20 text-4xl mb-14 playfair">Welcome Back!</p>

            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <input type="text" name="username" class="w-full h-12 p-3 mb-5 border border-gray-300 md:w-10/12 rounded-2xl" placeholder="Username">
                @if ($errors->has('username'))
                <div class="text-red-500">
                    {{ $errors->first('username') }}
                </div>
                @endif
                <input type="password" name="password" class="w-full h-12 p-3 mb-5 border border-gray-300 md:w-10/12 rounded-2xl" placeholder="password">
                @if ($errors->has('password'))
                <div class="text-red-500">
                    {{ $errors->first('password') }}
                </div>
                @endif

                <button type="submit" class="w-full h-10 mb-3 text-center text-black bg-pink-200 md:w-10/12 rounded-2xl">Login</button>
            </form>

            <a href="{{ route('register') }}" class="text-gray-400">Don't have an account? <span class="text-black">Register</span></a>
            <a href="#" class="text-gray-400">Forgot Password? <span class="text-black">Reset Password</span></a>
        </div>

        <div class="justify-end hidden w-full sm:flex">
            <div class="relative flex flex-row w-10/12 h-full rounded-l-3xl bg-gray-50">
                <img src="{{ asset('assets/imgs/back-8.jpeg') }}" class="absolute mt-20 -left-20 rounded-3xl w-96" alt="">

                <div class="absolute flex flex-col top-16 right-4">
                    <img src="{{ asset('assets/imgs/back-7.png') }}" class="w-40 h-52 rounded-3xl" alt="">
                    <img src="{{ asset('assets/imgs/back-6.jpeg') }}" class="w-40 mt-36 h-52 rounded-3xl" alt="">
                </div>
            </div>
        </div>
        {{-- <div class="flex w-full "> --}}
            <div class="flex flex-col space-y-10 md:hidden">
                <img src="{{ asset('assets/imgs/back-8.jpeg') }}" class=" rounded-3xl" alt="">
  
                    <img src="{{ asset('assets/imgs/back-7.png') }}" class=" rounded-3xl" alt="">
                    <img src="{{ asset('assets/imgs/back-6.jpeg') }}" class=" rounded-3xl" alt="">
                </div>
            </div>
        {{-- </div> --}}
        
    </div>


@endsection