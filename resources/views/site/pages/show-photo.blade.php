@extends('site.layouts.default')

@section('content')

<div class="container mx-auto py-16">
        <div class="flex px-4">
            <div class="w-1/2">
                <figure class="p-12 h-1/2">
                    <img class="w-full h-full object-cover" src="{{ asset ('storage/'.$photo->file_path)}}" alt="">
                </figure>
            </div>
            <div class="w-1/2">
                <div class="pricing  p-12 px-4">
                    <div class="bg-gray-200 p-4 rounded-md shadow-sm">
                        <h3 class="text-black font-semibold text-xl">Single Photo Pricing</h3>
                        <div class="text-gray-500">#{{ $photo->idx }}</div>
                        <form action="/cart/save" method="post">
                        @csrf
                        <table class="mt-8 w-full ">
                            <thead>
                                <th class="text-left">Image Type</th>
                                
                                <th class="text-left">Dimension</th>
                                <th class="text-left">Price (RS)</th>
                                <th class="text-left">File Format</th>
                            </thead>
                            <tbody>
                                @foreach($photo->variations as $variation )
                                
                                <tr>
                                    <td>
                                        <input type="radio" name="product_variation_id" value="{{ $variation->id}}">
                                        <label for="">{{ $variation->image_type }}</label>
                                    </td>
                                    <td>
                                        {{ $variation->dimension}}
                                    </td>
                                    <td>
                                    {{ $variation->price}}
                                    </td>
                                    <td>
                                    {{ $variation->extension}}
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <button class="uppercase bg-black text-white py-2 px-8 mt-8">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection