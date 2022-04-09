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
                 All Users
                </h3>
              </div>
              <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                <a href="{{ route('users.create') }}"
                  class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                  type="a"
                  style="transition:all .15s ease"
                >
                  Add New User
                </a>
              </div>
            </div>
          </div>
          <div class="block w-full overflow-x-auto">
            <table class="items-center w-full bg-transparent border-collapse">
              <thead class="thead-light">
                <tr>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Name
                  </th>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Email
                  </th>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    User Type
                  </th>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Created At
                  </th>
                  <th class="px-6 bg-indigo-200 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Products In Collection
                  </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($users as $key=> $user)
                    <tr  class="{{ $key%2 == 0 ? 'bg-indigo-200 hover:bg-indigo-400' : '' }}">
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-left">
                        {{ $user->name }}
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                        {{ $user->email }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                        Standard
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                        {{ $user->created_at->diffForHumans() }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                        <div class="flex items-center">
                            <span class="mr-2">60%</span>
                            <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-sm flex rounded bg-red-200">
                                <div
                                style="width:60%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"
                                ></div>
                            </div>
                            </div>
                        </div>
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