# **How to use `Display` components**
## Content List 

-   [`<x-stats>`](#x-stats)
-   [`<x-card:stats>`](#x-cardstats)

##  **Requirement**

Please Check Usage: [Reqirement](../../readme.md#2-usage) 

## JS Requirement
-   [`Chart.js v2.9.3`](https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js)

## Params Requirement
-   `title`    : Stats title 
-   `data`     : data value
-   `range`    : percentage data 
-   `id`       : init canvas id 
-   `bgColor`  : HEX Color code for background color  `#1fa8e029,` etc...
-   `lineColor`: HEX Color code for border color `#1fa8e029,` etc...
-   `color`    : Tailwindcss class name    `text-red-500  ` etc...

## `<x-stats>`
This stats is out of panel. User can add `<x-card> </x-card>` outside to place it into the card panel.
```html
<x-stats
    title="Revenue"
    data="10"
    range="100"
    id="init-id"
    bgColor="#1fa8e029"
    lineColor="#1fa8e0"
    color="text-green-500">
</x-stats>
```

## `<x-card:stats>`
Return with card panel
```html
<x-card:stats
    title="Revenue"
    data="10"
    range="100"
    id="init-ids"
    bgColor="#1fa8e029"
    lineColor="#1fa8e0"
    color="text-green-500">
</x-card:stats>
```