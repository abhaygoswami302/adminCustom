<form  wire:submit.prevent="UserStore">
    @csrf
    <div class="flex flex-wrap w-full justify-center">
        <input type="text" wire:model="form.name" placeholder="Enter Name" class="w-full m-2 p-2 rounded border-indigo-400 placeholder:text-indigo-500 shadow focus:ring-indigo-600 placeholder:italic placeholder:text-slate-600 focus:ring-1 focus:outline-none focus:border-indigo-400">
        @error('form.name')<small class="text-red-400 w-full px-2">{{ $message }}</small>@enderror
        
        <input type="email" wire:model="form.email" placeholder="Enter Email" class="w-full m-2 p-2 rounded border-indigo-400 placeholder:text-indigo-500 shadow focus:ring-indigo-600 placeholder:italic placeholder:text-slate-600 focus:ring-1 focus:outline-none focus:border-indigo-400">
        @error('form.email')<small class="text-red-400 w-full px-2">{{ $message }}</small>@enderror
        
        <input type="password" wire:model="form.password" placeholder="Enter Password" class="w-full m-2 p-2 rounded border-indigo-400 placeholder:text-indigo-500 shadow focus:ring-indigo-600 placeholder:italic placeholder:text-slate-600 focus:ring-1 focus:outline-none focus:border-indigo-400">
        @error('form.password')<small class="text-red-400 w-full px-2">{{ $message }}</small>@enderror

        <input type="password" wire:model="form.password_confirmation" placeholder="Confirm Password" class="w-full m-2 p-2 rounded border-indigo-400 placeholder:text-indigo-500 shadow focus:ring-indigo-600 placeholder:italic placeholder:text-slate-600 focus:ring-1 focus:outline-none focus:border-indigo-400">
        @error('form.password_confirmation')<small class="text-red-400 w-full px-2">{{ $message }}</small>@enderror

        <button class="bg-indigo-500 text-white w-full font-medium p-2 m-2 rounded shadow-md hover:bg-indigo-700">
            Add User
        </button>
    </div>
</form>