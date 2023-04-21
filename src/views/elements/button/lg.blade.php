@php
    /** 
     *  @name   : <x-lg:button>
     *  @auth   : Phat
     *  @date   : 20/04/2023
     *  @github : https://github.com/iMSophat/elements
     * 
     *  @param  ✨🧾
     *  -> type     : HTML button types
     *  -> onClick  : HTML attribute onclick
     *  -> theme    : Button Color, Button Theme, [primary, secondary, danger, warning, success, info]
     *  -> round    : Button radius, [xs, sm, md, lg, xl]
     *  
     *  @example 🌺
     *  <x-lg:button
     *      type="submit"
     *      onClick="alert('hello I'm your alert)"
     *      theme="primary"
     *      round="sm"> Button Label
     *  </x-lg:button>
     **/ 
@endphp

@props([
    'type'      => 'button',
    'onClick'   => '',
    'theme'     => '',
    'round'     => '',
])

@php
    $defaultClass = "px-3 py-1.5 rounded-md dark:bg-slate-800 shadow-xl text-white cursor-pointer";

    $rounded = "rounded-sm";
    switch ($round) {
        case 'xs':
            $rounded = "rounded-xs";
            break;
        case 'sm':
            $rounded = "rounded-sm";
            break;
        case 'md':
            $rounded = "rounded-md";
            break;
        case 'lg':
            $rounded = "rounded-lg";
            break;
        case 'xl':
            $rounded = "rounded-xl";
            break;
        case 'full':
            $rounded = "rounded-full";
            break;
        
        default:
            $rounded = "rounded";
            break;
    }

    $buttonTheme = "bg-slate-50 text-slate-700";
    switch ($theme) {
        case 'primary':
            $buttonTheme = "shadow-primary/10 bg-primary";
            break;

        case 'secondary':
            $buttonTheme = "shadow-secondary/10 bg-secondary";
            break;

        case 'warning':
            $buttonTheme = "shadow-warning/10 bg-warning";
            break;

        case 'danger':
            $buttonTheme = "shadow-danger/10 bg-danger";
            break;

        case 'success':
            $buttonTheme = "shadow-success/10 bg-success";
            break;

        case 'info':
            $buttonTheme = "shadow-info/10 bg-info";
            break;

        default:
            $buttonTheme = "bg-slate-50 text-slate-700";
            break;
    }

@endphp


<button 
    type="{{ $type }}"
    {{ $attributes->merge(['class' => $defaultClass.' text-lg '.$buttonTheme.' '.$rounded]) }}
    {{ $onClick != "" ? 'onclick='.$onClick : null }}>
    {{ $slot }}
</button>