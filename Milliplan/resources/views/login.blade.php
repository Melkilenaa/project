@extends('components.layouts')
@section('title','Login')
@section('content')
<div class="container bg-gray-100 py-8">
    <div class="text-center mb-8">
        <div class="rounded-md p-4 mx-auto max-w-md">
            <img src="/img/logom.jpg" alt="Logo" class="mx-auto h-24 bg-gray-200 rounded-md">
            <h1 class="text-3xl font-bold text-gray-800">Log In To Milliplan</h1>
        </div>
    </div>
    <div class="mt-5">
      @if($errors->any())
        <div class="col-12">
          @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
          @endforeach
        </div>
      @endif
      @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
      @endif
      @if(session()->has('success'))
      <div class="alert alert-success">{{session('success')}}</div>
      @endif
    </div>
    <form method="POST" action="{{ route('loginPost') }}" class="mx-auto my-auto p-6 bg-white shadow-md rounded-md w-96">
        @csrf
    <div class="mb-4">
            <label for="exampleInputEmail1" class="block text-sm font-medium text-gray-700">Email address</label>
            <input type="email" class="mt-1 block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="email" name = "email">
            <!-- <p class="mt-2 text-sm text-gray-500" id="emailHelp">We'll never share your email with anyone else.</p> -->
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" class="mt-1 block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="password" name="password">
        </div>
        <div class="flex items-center justify-between mb-4">
            <div class="text-sm">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
            </div>
  
            <div class="text-sm">
                <a href="{{ route('registration') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Create an account</a>
            </div>
        </div>
        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Sign in
        </button>
    </form>
</div>
@endsection
