@extends('frontendmaster')

@section('title')
    <title>SMK 7 Bandar Lampung</title>
@endsection

@section('content')
    <div class="w-full h-screen flex flex-row">
        <div class="w-[50%] h-full bg-gray-300 flex justify-center items-center">
            <img src="{{ asset('asset/logo/logo_smk7.png') }}" style="width: 268px; height: 320px;">
        </div>
        <div class="w-[50%] h-full flex justify-center items-center">
            <div class="flex flex-col w-[30%]">
                <div class="flex justify-center items-center mb-5">
                    <h1 class="text-blue-600 font-bold text-2xl w-32 text-center">Halaman Admin</h1>
                </div>
                <a href="{{ route('admin.login') }}" class="btn btn-primary mb-3 text-white text-lg">Login</a>
                <a href="{{ route('admin.register') }}" class="btn text-lg">Register</a>
            </div>
        </div>
    </div>
@endsection