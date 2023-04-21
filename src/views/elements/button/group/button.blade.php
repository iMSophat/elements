<?php
    /** 
    *  @name   : <x-group:button>
    *  @auth   : Phat
    *  @date   : 20/04/2023
    *  @github : https://github.com/iMSophat/elements
    * 
    *  @param  array params required
    *  -> buttons   : Using array params
    *  -> gap       :   Supported Tailwindcss class [gap-1, gap-2, etc...]
    *  -> justify   :   Supported Tailwindcss class [justify-center, justify-end, justify-start]
    *  
    *  @example 🌺
    *  @php
    *      // Button Util
    *      $buttons = [
    *           [
    *               "type"      => "button",
    *               "label"     => "Cancel",
    *               "onClick"   => "",
    *               "theme"     => "danger",
    *               "size"      => "sm",
    *               "round"     => "md",
    *           ],
    *           [
    *               "type"      => "",
    *               "label"     => "Submit",
    *               "onClick"   => "",
    *               "theme"     => "primary",
    *               "size"      => "sm",
    *               "round"     => "md",
    *           ],
    *      ]
    *   @endphp
    * 
    *  <x-group:button
    *      :buttons="$buttons"
    *  </x-group:button>
    **/ 
?>

@props([ 
    'buttons'   => [], 
    'gap'       => 'gap-2',
    'justify'   => 'end'
])

@php
    $position = "justify-end";
    switch ($justify) {
        case 'center':
            $position = "justify-center";
            break;
        case 'end':
            $position = "justify-end";
            break;
        case 'start':
            $position = "justify-start";
            break;
    }
@endphp

<div class="flex items-center {{ $gap }} {{ $position }}">
    @isset($buttons)
        @if ($buttons != [])
            @foreach ($buttons as $button)
                <x-button 
                    type="{{ $button['type'] ?? null }}" 
                    theme="{{ $button['theme'] ?? null }}" 
                    onclick="{{ $button['onClick'] ?? null }}" 
                    size="{{ $button['size'] ?? null }}" 
                    round="{{ $button['round'] ?? null }}"> 
                        {{ $button['label'] ?? null }} 
                </x-button>
            @endforeach
        @endif
    @endisset
</div>