@extends('layout.app')

@section('title', 'Register')

    @push('css')

    @endpush

@section('content')
    
    <div class="grid grid-cols-2 gap-5 px-5 py-10 mx-auto max-w-7xl">
        <div class="flex flex-col">
            <p class="mt-20 text-3xl w-80 mb-14">Become a Part of the Luxe Tribes!</p>
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-row mb-5 w-80">
                    <div class="flex items-center justify-center mr-5 bg-gray-300 rounded-full w-18 h-18">
                        <img src="{{ asset('assets/imgs/user-regular.svg') }}" class="mx-auto w-14 h-14" alt="">
                    </div>
                    <div >
                        <p>Add your photo (optional)</p>
                        <p class="my-1 text-xs text-gray-400">Supported formats: jpg, jpeg, png</p>
                        <div class="flex">
                           
                            <input type="file" name="photo" accept="image/*" id="my-file" hidden/>
                            <label  class="flex text-sm text-gray-700 rounded-full cursor-pointer" for="my-file">
                                <img src="{{ asset('assets/imgs/upload-solid.svg') }}" class="w-4 h-4 mr-1" alt="">
                                Click to upload
                            </label>
                            @if ($errors->has('photo'))
                            <div class="text-red-500">
                                {{ $errors->first('photo') }}
                            </div>
                            @endif
                        </div>
                        
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-5 border-t border-gray-100">
                    <div>
                        <input type="text" name="fullname" class="w-full h-12 p-3 mt-5 mb-5 border border-gray-300 rounded-2xl" placeholder="Name">
                        @if ($errors->has('fullname'))
                        <div class="text-red-500">
                            {{ $errors->first('fullname') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <input type="date" name="date_of_birth" class="w-full h-12 p-3 mt-5 mb-3 border border-gray-300 rounded-2xl" placeholder="DOB">
                        @if ($errors->has('date_of_birth'))
                        <div class="text-red-500">
                            {{ $errors->first('date_of_birth') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <select class="w-full h-12 p-3 mb-3 border border-gray-300 rounded-2xl" name="country_id">
                            <option selected>Select nationality</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">
                                    {{ $country->name }} 
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('country_id'))
                        <div class="text-red-500">
                            {{ $errors->first('country_id') }}
                        </div>
                        @endif
                       
                    </div>
                    <div>
                        <div class="flex flex-col">
                            <input type="email" name="email" class="w-full h-12 p-3 mb-5 border border-gray-300 rounded-2xl" placeholder="Email">
                        </div>
                        
                        @if ($errors->has('email'))
                        <div class="text-red-500">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div>
                        <div class="flex h-12 mb-5 border border-gray-300 rounded-2xl">
                            <select class="w-20 bg-gray-100 rounded-l-2xl" name="country_code">
                                @foreach ($country_codes as $country)
                                    <option value="{{ $country->id }}">
                                        {{ $country->country_code }} 
                                    </option>
                                @endforeach
                            </select>
                            <input type="text" name="phone" class="p-3 w-80" placeholder="Phone number">
                        </div>
                        @if ($errors->has('phone'))
                        <div class="text-red-500">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>

                    <div>
                        <input type="text" name="username" class="w-full h-12 p-3 mb-3 border border-gray-300 rounded-2xl" placeholder="Username">
                        @if ($errors->has('username'))
                        <div class="text-red-500">
                            {{ $errors->first('username') }}
                        </div>
                        @endif
                    </div>   
                    
                </div>
                <div>
                    <input type="password" name="password" class="w-full h-12 p-3 mb-5 border border-gray-300 rounded-2xl" placeholder="Password">
                    @if ($errors->has('password'))
                    <div class="text-red-500">
                        {{ $errors->first('password') }}
                    </div>
                    @endif
                </div>   
                <div>
                    <textarea name="description" id="" cols="30" class="w-full p-3 mb-5 border border-gray-300 rounded-2xl" placeholder="Tell us about yourself (optional)" rows="5"></textarea>
                    @if ($errors->has('description'))
                    <div class="text-red-500">
                        {{ $errors->first('description') }}
                    </div>
                    @endif
                </div>   
            
                <button type="submit" class="w-full h-10 mb-3 text-center text-black bg-pink-200 rounded-2xl">Create my account</button>
            
            </form>
            
            <a href="{{ route('login') }}" class="mb-5 text-gray-400">Already have an account? <span class="text-black">Log in</span></a>
        </div>

        <div class="flex justify-end w-full">
            <div class="relative flex flex-row items-center w-10/12 h-full rounded-l-3xl bg-gray-50">
                <img src="{{ asset('assets/imgs/back-4.svg') }}" class="absolute mt-20 -left-20 rounded-3xl w-96" alt="">

                <div class="absolute flex flex-col top-20 right-4">
                    <img src="{{ asset('assets/imgs/back-5.svg') }}" class="w-40 h-52 rounded-3xl" alt="">
                    <img src="{{ asset('assets/imgs/back-8.jpeg') }}" class="w-40 mt-36 h-52 rounded-3xl" alt="">
                </div>
            </div>
        </div>
        
    </div>


@endsection
