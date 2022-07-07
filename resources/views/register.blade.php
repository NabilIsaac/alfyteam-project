@extends('layout.app')

@section('title', 'Login')

    @push('css')

    @endpush

@section('content')

    <div class="grid grid-cols-2 gap-5 px-5 py-10 mx-auto max-w-7xl">
        <div class="flex flex-col">
            <p class="mt-20 text-3xl w-80 mb-14">Become a Part of the Luxe Tribes!</p>

            <div class="flex flex-row mb-5 w-80">
                <div class="flex items-center justify-center mr-5 bg-gray-300 rounded-full w-18 h-18">
                    <img src="{{ asset('assets/imgs/user-regular.svg') }}" class="w-16 h-16 mx-auto" alt="">
                </div>
                <div >
                    <p>Add your photo (optional)</p>
                    <p class="my-1 text-xs text-gray-400">Supported formats: jpg, jpeg, png</p>
                    <div class="flex">
                        <img src="{{ asset('assets/imgs/upload-solid.svg') }}" class="w-4 h-4 mr-1" alt="">
                        <input type="file" accept="image/*" id="my-file" hidden/>
                        <label  class="text-sm text-gray-700 rounded-full cursor-pointer" for="my-file">Click to upload</label>
                        
                    </div>
                    
                </div>
            </div>

            <div class="grid grid-cols-2 gap-5 border-t border-gray-100">
                <input type="text" name="" class="w-full h-12 p-3 mt-5 mb-3 border border-gray-300 rounded-2xl" placeholder="Full name">

                <input type="date" name="" class="w-full h-12 p-3 mt-5 mb-3 border border-gray-300 rounded-2xl" placeholder="DOB">

                <select class="w-full h-12 p-3 mb-3 border border-gray-300 rounded-2xl" name="state">
                    <option value="AL">Alabama</option>
                      ...
                    <option value="WY">Wyoming</option>
                  </select>

                  <input type="email" name="" class="w-full h-12 p-3 mb-3 border border-gray-300 rounded-2xl" placeholder="Email">

                  <select class="w-full h-12 p-3 mb-5 border border-gray-300 rounded-2xl" name="state">
                    <option value="AL">Alabama</option>
                      ...
                    <option value="WY">Wyoming</option>
                  </select>

                  <input type="text" name="" class="w-full h-12 p-3 mb-3 border border-gray-300 rounded-2xl" placeholder="Username">

                
            </div>
            <input type="password" name="" class="w-full h-12 p-3 mb-3 border border-gray-300 rounded-2xl" placeholder="Password">
            <textarea name="" id="" cols="30" class="w-full p-3 mb-5 border border-gray-300 rounded-2xl" placeholder="Tell us about yourself (optional)" rows="5"></textarea>
            
            <button class="w-full h-10 mb-3 text-center text-black bg-pink-200 rounded-lg">Create my account</button>
           

            <a href="#" class="mb-5 text-gray-400">Already have an account? <span class="text-black">Log in</span></a>
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
