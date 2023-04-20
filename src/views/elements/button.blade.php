@props([
    'type' => 'submit',
    'onClick' => '',
    'theme' => '',
    'size' => 'sm',
])

@php
    $defaultClass = "px-3 py-1.5 rounded-md dark:bg-slate-800 shadow-xl text-white cursor-pointer";
    $buttonSize = "text-sm";

    switch ($size) {
        case 'xs':
            $buttonSize = "text-xs";
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
    {{ $attributes->merge(['class' => $defaultClass.' '.$buttonSize.' '.$buttonTheme]) }}
    {{ $onClick != "" ? 'onclick='.$onClick : null }}>
    {{ $slot }}
</button>