@extends('layouts.admin')

@section('content')
<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap justify-center mt-4">
      <div class="w-full xl:w-8/12 px-4">
        
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded border border-indigo-200">
            <div class="rounded-t mb-0 px-4 py-3 ">
            <div class="flex flex-wrap justify-center items-center">
              <div class="relative w-full px-4 max-w-full flex-grow justify-center items-center flex-1">
                <img src="{{ asset('assets/img/landing.jpg') }}" class="w-36 h-36 rounded-full text-center -mt-20" alt="">
              </div>
            </div>
          </div>
          <div class="block w-full overflow-x-auto p-4">
            <h1 class="text-2xl pb-4 pl-2 m-2">Product Details</h1>
            <p class="p-2 m-2 border shadow rounded hover:shadow-lg"><b>Name</b> : {{ $product->name }} </p>
            <p class="p-2 m-2 border shadow rounded hover:shadow-lg"><b>Price</b> : {{ $product->price }} </p>
            <p class="p-2 m-2 border shadow rounded hover:shadow-lg"><b>Quantity</b> : {{ $product->quantity }} </p>
            <p class="p-2 m-2 border shadow rounded hover:shadow-lg"><b>Model Name</b> : {{ $product->model_name }} </p>
            <p class="p-2 m-2 border shadow rounded hover:shadow-lg"><b>Description</b> : {{ $product->description }} </p>
            <p class="p-2 m-2 border shadow rounded hover:shadow-lg"><b>Created At</b> : {{ $product->created_at->diffForHumans() }} </p>
        </div>
        </div>
      
    </div>
    </div>
@endsection