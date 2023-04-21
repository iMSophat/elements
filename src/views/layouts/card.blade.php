@php
    /** 
     *  @name       : <x-card>
     *  @description: Stats Card
     *  @auth       : Phat
     *  @date       : 20/04/2023
     *  @github     : https://github.com/iMSophat/elements
     * 
     *  @example 🌺
     *  <x-card> 
     *      <div> etc </div>
     *  </x-card>
     **/ 
@endphp

<div class="w-full mx-auto sm:px-5 px-0 mt-0 col-span-1">
    <div class="grid gap-5 sm:mt-5 grid-cols-1 pt-0 mt-0">
        <div class="bg-white dark:bg-gray-800 rounded dark:text-slate-300 shadow-md p-0 overflow-hidden col-span-1">
            {{ $slot }}
        </div>
    </div>
</div>