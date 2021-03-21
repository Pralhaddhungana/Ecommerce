@extends('site.layouts.default')

@section('content')

<div class="container mx-auto py-16">
    <div class="container mx-auto py-16">
    <div class="py-16 px-4 bg-gray-100 min-h-screen">
        <h1 class="text-3xl text-black font-light uppercase text-center">Checkout Page</h1>
        <div class="w-1/2 mx-auto py-12 mt-8 px-12 bg-white shadow-lg rounded-lg">

            <form action="/checkout" method="post">
                @csrf
                <label for="" class="block pb-2">Provide email address so that we can send you your orders and invoices</label>
                <div class="flex">
                    <input type="text" name="email" class="flex-1" placeholder="Your email address">
                    <button class="py-4 px-6 bg-black text-white">Submit</button>
                </div>                
                <div class="text-center py-8 ">
                    <span>OR</span>
                </div>
                <div class="text-center">
                    <a href="" class="bg-green-300 px-6 py-4">Sign in to your account</a>
                </div>
            </form>

        </div>

    </div>
    <div class="container mx-auto py-16">
    </div>
@endsection