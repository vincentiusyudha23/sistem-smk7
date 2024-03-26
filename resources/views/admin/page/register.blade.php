@extends('frontendmaster')

@section('title')
    <title>Register Admin</title>
@endsection

@section('content')
    <div class="w-full h-screen flex flex-row">
        <div class="w-[50%] h-full bg-gray-300 flex justify-center items-center">
            <img src="{{ asset('asset/logo/logo_smk7.png') }}" style="width: 268px; height: 320px;">
        </div>
        <div class="w-[50%] h-full flex justify-center items-center">
            <div class="flex flex-col w-[40%]">
                <div class="flex justify-center items-center mb-5">
                    <h1 class="text-blue-600 font-bold text-2xl text-center">Register Admin</h1>
                </div>
                <form class="w-full">
                    <input type="text" placeholder="Email" class="input input-bordered input-primary w-full max-w-md mb-5 bg-blue-500/10" />
                    <input type="password" placeholder="Password" class="input input-bordered input-primary w-full max-w-md mb-5 bg-blue-500/10" />
                    <input type="password" placeholder="Confirm Password" class="input input-bordered input-primary w-full max-w-md mb-5 bg-blue-500/10" />
                    <button class="btn btn-primary mb-3 text-white text-lg w-full">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
@endsection