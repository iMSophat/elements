@php
    /** 
     *  @name       : <x-button>
     *  @description: Customizable button
     *  @auth       : Phat
     *  @date       : 20/04/2023
     *  @github     : https://github.com/iMSophat/elements
     * 
     *  @param  ✨🧾
     *  -> type     : HTML button types
     *  -> onClick  : HTML attribute onclick
     *  -> theme    : Button Color, Button Theme, [primary, secondary, danger, warning, success, info]
     *  -> round    : Button radius, [xs, sm, md, lg, xl]
     *  -> size     : Button Size, [xs, sm, md, lg, xl]
     *  
     *  @example 🌺
     *  <x-button
     *      type="submit"
     *      onClick="alert('hello I'm your alert)"
     *      theme="primary"
     *      round="sm"
     *      size="sm"> Button Label
     *  </x-button>
     **/ 
@endphp

@props([
    'type'      => 'submit',
    'onClick'   => '',
    'theme'     => '',
    'size'      => 'sm',
    'round'     => '',
])

@php
    $defaultClass = "px-3 py-1.5 rounded-md dark:bg-slate-800 shadow-xl text-white cursor-pointer";
    $buttonSize = "text-sm";

    switch ($size) {
        case 'xs':
            $buttonSize = "text-xs";
            break;
        case 'sm':
            $buttonSize = "text-sm";
            break;
        case 'md':
            $buttonSize = "text-md";
            break;
        case 'lg':
            $buttonSize = "text-lg";
            break;
        case 'xl':
            $buttonSize = "text-xl";
            break;
        
        default:
            $buttonSize = "text-sm";
            break;
    }

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
    {{ $attributes->merge(['class' => $defaultClass.' '.$buttonSize.' '.$buttonTheme.' '.$rounded]) }}
    {{ $onClick != "" ? 'onclick='.$onClick : null }}>
    {{ $slot }}
</button>