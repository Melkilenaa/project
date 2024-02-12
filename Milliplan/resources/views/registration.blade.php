@extends('components.layouts')
@section('title', 'Register')
@section('content')
<div class="container bg-gray-100 py-8">
    <div class="text-center mb-8">
    <div class="rounded-md p-4 mx-auto max-w-md">
            <img src="/img/logom.jpg" alt="Logo" class="mx-auto h-24 bg-gray-200 rounded-md">
            <h1 class="text-3xl font-bold text-gray-800">Register for Milliplan</h1>
        </div>
        <!-- <div class="rounded-md p-4 mx-auto max-w-md">
            <h1 class="text-3xl font-bold text-gray-800">/h1>
        </div> -->
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
    <form method="POST" action="{{route('registrationPost')}}" class="mx-auto my-auto p-6 bg-white shadow-md rounded-md w-96">
      @csrf
        <div class="mb-4">
            <label for="exampleInputName" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" class="mt-1 block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="Name" name="fullname">
        </div>
        <div class="mb-4">
            <label for="exampleInputEmail" class="block text-sm font-medium text-gray-700">Email address</label>
            <input type="email" class="mt-1 block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="Email" name="email">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" class="mt-1 block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="Password" name="password">
        </div>
        <div class="mb-4">
            <label for="exampleInputConfirmPassword" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" class="mt-1 block w-full h-10 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="ConfirmPassword" name="confirmPassword">
        </div>
        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Register
        </button>
    </form>
</div>
@endsection
