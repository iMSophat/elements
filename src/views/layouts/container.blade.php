@php
    /** 
     *  @name       : <x-container>
     *  @description: Container Wrapper
     *  @auth       : Phat
     *  @date       : 20/04/2023
     *  @github     : https://github.com/iMSophat/elements
     * 
     *  @param  ✨🧾
     *  -> grid     : Tailwindcss class name    `grid-cols-1 ... etc`
     *  -> col      : Tailwindcss class name    `col-span-1 ... etc`
     *  
     *  @example 🌺
     *  <x-container grid="grid-cols-1" col="col-span-1"> 
     *      <div>
     *          etc...
     *      </div>
     *  </x-container>
     **/ 
@endphp

@props([
    'grid'  =>'grid-cols-1',
    'col'   =>'col-span-1'
])

<div class="w-full mx-auto px-2 sm:px-5">
    <div class="grid gap-5 sm:mt-5 {{ $grid }}">
        <div class="bg-white dark:bg-gray-800 rounded dark:text-slate-300 shadow-md p-5 {{ $col }}">
            {{ $slot }}
        </div>
    </div>
</div>