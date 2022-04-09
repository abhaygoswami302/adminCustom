<form  wire:submit.prevent="ProductStore">
    @csrf
    <div class="flex flex-wrap w-full justify-center">
        <input type="text" wire:model="form.name" placeholder="Enter Name" class="w-full m-2 p-2 rounded border-indigo-400 placeholder:text-indigo-500 shadow focus:ring-indigo-600 placeholder:italic placeholder:text-slate-600 focus:ring-1 focus:outline-none focus:border-indigo-400">
        @error('form.name')<small class="text-red-400 w-full px-2">{{ $message }}</small>@enderror
        
        <input type="text" wire:model="form.price" placeholder="Enter Price" class="w-full m-2 p-2 rounded border-indigo-400 placeholder:text-indigo-500 shadow focus:ring-indigo-600 placeholder:italic placeholder:text-slate-600 focus:ring-1 focus:outline-none focus:border-indigo-400">
        @error('form.price')<small class="text-red-400 w-full px-2">{{ $message }}</small>@enderror
        
        <input type="text" wire:model="form.quantity" placeholder="Enter Quantity" class="w-full m-2 p-2 rounded border-indigo-400 placeholder:text-indigo-500 shadow focus:ring-indigo-600 placeholder:italic placeholder:text-slate-600 focus:ring-1 focus:outline-none focus:border-indigo-400">
        @error('form.quantity')<small class="text-red-400 w-full px-2">{{ $message }}</small>@enderror

        <input type="text" wire:model="form.model_name" placeholder="Enter Model Name" class="w-full m-2 p-2 rounded border-indigo-400 placeholder:text-indigo-500 shadow focus:ring-indigo-600 placeholder:italic placeholder:text-slate-600 focus:ring-1 focus:outline-none focus:border-indigo-400">
        @error('form.model_name')<small class="text-red-400 w-full px-2">{{ $message }}</small>@enderror

        <textarea wire:model="form.description" placeholder="Enter Description" id="" cols="30" rows="3"  class="w-full m-2 p-2 rounded border-indigo-400 placeholder:text-indigo-500 shadow focus:ring-indigo-600 placeholder:italic placeholder:text-slate-600 focus:ring-1 focus:outline-none focus:border-indigo-400">
        </textarea>
        @error('form.description')<small class="text-red-400 w-full px-2">{{ $message }}</small>@enderror

        <button class="bg-indigo-500 text-white w-full font-medium p-2 m-2 rounded shadow-md hover:bg-indigo-700">
            Add Product
        </button>
    </div>
</form>