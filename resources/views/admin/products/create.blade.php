@extends('layouts.admin')

@section('content')
<div class="px-4 md:px-10 mx-auto w-full -m-24">
    

    <div class="flex flex-wrap justify-center mt-4">
     
      <div class="w-full xl:w-8/12 px-4">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded border border-indigo-200">
          <div class="rounded-t mb-0 px-4 py-3 ">
            <div class="flex flex-wrap items-center">
              <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-base text-indigo-500">
                 Add New Product
                </h3>
              </div>
            </div>
          </div>
          <div class="block w-full overflow-x-auto p-4">
            <livewire:admin-product-create />
          </div>
        </div>
      </div>
    </div>
@endsection