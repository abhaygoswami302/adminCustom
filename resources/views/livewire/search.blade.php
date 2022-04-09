<div class="relative flex w-full flex-wrap items-stretch">
    <span class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
        <i class="fas fa-search"></i>
    </span>
    
    <input
      type="text" wire:model="search"
      placeholder="Search here..."
      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10"/>

    @if (count($searchResult) > 0 || count($searchResult2) > 0)
    <div class="absolute flex flex-wrap bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-12 " style="max-height:400px;overflow:scroll">
        @foreach ($searchResult as $result)
        <a href="{{ route('users.show', $result->id) }}"
        class="text-sm py-2 px-4 font-normal block w-52 whitespace-nowrap hover:bg-indigo-300 bg-transparent text-blueGray-700">
        {{ $result->name }}
        </a>
        @endforeach
        @foreach ($searchResult2 as $result)
        <a href="{{ route('products.show', $result->id) }}"
        class="text-sm py-2 px-4 font-normal block w-52 whitespace-nowrap hover:bg-indigo-300 bg-transparent text-blueGray-700">
        {{ $result->name }}
        </a>
        @endforeach
    </div>
    @endif

</div>