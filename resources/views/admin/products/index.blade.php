@extends('layouts.admin')

@section('content')
<div class="px-4 md:px-10 mx-auto w-full -m-24">
    

    <div class="flex flex-wrap mt-4">
     
      <div class="w-full xl:w-full px-4">
       
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
          
        <div class="rounded-t mb-0 px-4 py-3 border-0">

            <div class="flex flex-wrap items-center">
              <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-base text-blueGray-700">
                 All Products
                </h3>
              </div>
              <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                <a href="{{ route('products.create') }}"
                  class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                  type="a"
                  style="transition:all .15s ease"
                >
                  Add New Product
                </a>
              </div>
            </div>
          </div>
          <div class="block w-full overflow-x-auto">
            <table class="items-center w-full p-0 m-0 bg-transparent border-collapse">
              <thead class="thead-light">
                <tr>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Name
                  </th>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Description
                  </th>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Price
                  </th>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Quantity
                  </th>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Model Name
                  </th>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Created At
                  </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($products as $key => $product)
                    <tr class="{{ $key%2 == 0 ? 'bg-indigo-200 hover:bg-indigo-400' : '' }}">
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-left">
                            {{ $product->name }}
                        </th>
                        <td class="border-t-0 px-6 align-middle break-all  border-l-0 border-r-0 text-sm  p-4">
                            {{ substr($product->description, 0, 90) }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                            {{ $product->price }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                            {{ $product->quantity }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                            {{ $product->model_name }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                            {{ $product->created_at->diffForHumans() }}
                        </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection