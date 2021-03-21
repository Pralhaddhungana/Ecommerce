@extends('site.layouts.default')

@section('content')


    <div class="container mx-auto py-16">
    <div class="py-16 px-4 bg-gray-100 min-h-screen">
        <h1 class="text-3xl text-black font-light uppercase text-center">Payment</h1>
        <div class="w-1/2 mx-auto py-12 mt-8 px-12 bg-white shadow-lg rounded-lg">
                <div class="text-center">
                    <button id="payment-button"  class="payment-button bg-purple-600 text-white px-6 py-4">Pay using Khalti</button>
                </div>

        </div>

    </div>
    </div>
    
    @endsection
