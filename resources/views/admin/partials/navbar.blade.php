<nav
class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
>
<div
  class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
>
  <button
    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
    type="button"
    onclick="toggleNavbar('example-collapse-sidebar')"
  >
    <i class="fas fa-bars"></i></button
  >
  <a
    class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
    href="javascript:void(0)"
  >
    Admin
  </a>
  <ul class="md:hidden items-center flex flex-wrap list-none">
    
    <li class="inline-block relative">
      <a
        class="text-blueGray-500 block"
        href="#pablo"
        onclick="openDropdown(event,'user-responsive-dropdown')"
        ><div class="items-center flex">
          <span
            class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
            ><img
              alt="..."
              class="w-full rounded-full align-middle border-none shadow-lg"
              src="{{ asset('assets/img/team-1-800x800.jpg') }}"
          /></span></div
      ></a>
      <div
        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
        style="min-width: 12rem;"
        id="user-responsive-dropdown"
      >
        <a
          href="{{ route('users.index') }}"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          >View All Users</a
        ><a
          href="{{ route('users.create') }}"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          >View All Products</a
        >
        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
        <a
          href="{{ route('products.index') }}"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          >Add New User</a
        >
        <a
          href="{{ route('products.create') }}"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          >Add New Product</a
        >
        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
        <a
          href="#pablo"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          >Logout</a
        >
      </div>
    </li>
  </ul>
  <div
    class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
    id="example-collapse-sidebar"
  >
    <div
      class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
    >
      <div class="flex flex-wrap">
        <div class="w-6/12">
          <a
            class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href="javascript:void(0)"
          >
            Admin
          </a>
        </div>
        <div class="w-6/12 flex justify-end">
          <button
            type="button"
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            onclick="toggleNavbar('example-collapse-sidebar')"
          >
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
    </div>
    <form class="mt-6 mb-4 md:hidden">
      <div class="mb-3 pt-0">
        <input
          type="text"
          placeholder="Search"
          class="border-0 px-3 py-2 h-12 border border-solid  border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
        />
      </div>
    </form>
    <ul class="md:flex-col md:min-w-full flex flex-col list-none">
      <li class="items-center">
        <a
          class="text-indigo-400 hover:text-indigo-600 text-xs uppercase py-3 font-bold block"
          href="{{ route('admin.dashboard') }}"
          ><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
          Dashboard</a
        >
      </li>
      <li class="items-center">
        <a
          class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
          href="{{ route('users.index') }}"
          ><i class="fas fa-users text-blueGray-400 mr-2 text-sm"></i>
          Users</a
        >
      </li>
      <li class="items-center">
        <a
          class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
          href="{{ route('users.create') }}"
          ><i class="fas fa-user text-blueGray-400 mr-3 text-sm"></i>
           Add New User</a
        >
      </li>
      
    </ul>
    <hr class="my-4 md:min-w-full" />
    <h6
      class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
    >
      Products
    </h6>
    <ul
      class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
    >
      <li class="inline-flex">
        <a
          class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
          href="{{ route('products.index') }}"
          ><i
            class="fab fa-product-hunt mr-2 text-blueGray-400 text-base"
          ></i>
          View Products</a
        >
      </li>
      <li class="inline-flex">
        <a
          class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
          href="{{ route('products.create') }}"
          ><i
            class="fa fa-plus-circle mr-2 text-blueGray-400 text-base"
          ></i>
          Add New Products</a
        >
      </li>
      <li class="items-center">
        <a
          class="text-blueGray-300 text-xs uppercase py-3 font-bold block"
          href="#pablo"
          ><i class="fas fa-tools text-blueGray-300 mr-2 text-sm"></i>
          Settings (soon)</a
        >
      </li>
    </ul>
  </div>
</div>
</nav>

<div class="relative md:ml-64 bg-blueGray-50">
<nav
  class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
>
  <div
    class="w-full mx-auto items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
  >
    <a
      class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
      href="{{ route('admin.dashboard') }}"
      >Dashboard</a
    >
    @if (Session::has('message'))
    <div class="bg-green-100 p-5 ml-4 justify-center sm:w-1/2 rounded">
      <div class="flex justify-between">
        <div class="flex space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="flex-none fill-current text-green-500 h-4 w-4">
            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" /></svg>
          <div class="flex-1 leading-tight text-sm text-green-700 font-medium">{{ Session::get('message') }}</div>
        </div>
      </div>
    </div>
    @endif

    @if (Session::has('error'))
    <div class="bg-red-100 p-5 ml-4 justify-center sm:w-1/2 rounded">
      <div class="flex justify-between">
        <div class="flex space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="flex-none fill-current text-red-500 h-4 w-4">
            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" /></svg>
          <div class="flex-1 leading-tight text-sm text-red-700 font-medium">{{ Session::get('error') }}</div>
        </div>
      </div>
    </div>
    @endif

    @if($errors->any())
    <div class="bg-green-100 p-5 ml-4 justify-center sm:w-1/2 rounded">
      <div class="flex justify-between">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
              <div class="flex space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="flex-none fill-current text-green-500 h-4 w-4">
                  <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" /></svg>
                <div class="flex-1 leading-tight text-sm text-green-700 font-medium">{{ $error }}</div>
              </div>
            </li>
            @endforeach
        </ul>
      </div>
    </div>
    @endif

    <form
      class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3"
    >
     

       <livewire:search />

     

    </form>
    <ul
      class="flex-col md:flex-row list-none items-center hidden md:flex"
    >
      <a class="text-blueGray-500 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
        <div class="items-center flex">
          <span
            class="w-12 h-12 -mt-4 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
            ><img
              alt="..."
              class="w-full rounded-full align-middle border-none shadow-lg"
              src="{{ asset('assets/img/team-1-800x800.jpg') }}"
          /></span>
        </div>
      </a>
      <div
        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
        style="min-width: 12rem;"
        id="user-dropdown"
      >
        <a
          href="{{ route('users.index') }}"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          >View All Users</a
        ><a
          href="{{ route('users.create') }}"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          >View All Products</a
        >
        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
        <a
          href="{{ route('products.index') }}"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          >Add New User</a
        >
        <a
          href="{{ route('products.create') }}"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          >Add New Product</a
        >
        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
        <a
          href="#"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          >Logout</a
        >
      </div>
    </ul>
  </div>
</nav>