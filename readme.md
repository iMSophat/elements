# Sophat/Elements

[![Total Downloads](https://img.shields.io/packagist/dt/sophat/elements.svg?style=flat-square)](https://packagist.org/packages/sophat/elements)

Build for SmartERP, and SmartPOS Components

## 1. Installation

#### You can install the package via composer:

```bash
composer require sophat/elements
```

## 2. Usage 

#### Inside `providers` of `config/app.php` 
```php
'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    ...
    Sophat\Elements\ElementsServicesProvider::class,
]
```

#### Inside `providers` of `composer.json` 

```json
   "autoload": {
        "psr-4": {
            ...
            "Sophat\\Elements\\":"vendor/sophat/elements/src"
        }
    },
```
#### Tailwindcss Styling Support:
Add `./vendor/sophat/elements/src/view/*.blade.php` inside `content` to compiling style from package.
```js
content: [
    ...
    "./vendor/sophat/elements/src/view/*.blade.php",
],

```

#### If compiling via Laravel Modules package:
```js
const path = require('path'); 
```
```js
content: [
    ...
    path.join(__dirname, "../../vendor/sophat/**/src/**/*.blade.php"),
    path.join(__dirname, "../../vendor/sophat/**/src/**/**/*.blade.php"),
]
```
then compile css with Tailwindcss

```bash
npm run watch
```

to start server
```bash
php artisan serve
```
## 3. Components

-   ### Buttons
    This button is use for general button, customizable: 
    -   `type`: supported add button type in [HTML](https://html.com/attributes/button-type/)
    -   `theme`: 
        1. `primary`, 
        1. `secondary`, 
        1. `warning`, 
        1. `danger`, 
        1. `success`, 
        1. `info`.

    Optional color mode. user can customize on `tailwindcss.config.js`  (Optional)
    -   `onclick`: supported JS functions (Optional)
    -   `size`: Optional params, for default is using `text-sm`
        1.  `xs` = `text-xs`
        1.  `sm` = `text-sm`
        1.  `md` = `text-md`
        1.  `lg` = `text-lg`
        1.  `xl` = `text-xl`

        ```html
        <x-e:button 
            type="button" 
            theme="primary"  
            onclick="alert('done')" 
            size="sm">
            button 
        </x-e:button>
        ```

## 4. Credits

- [PPhat Dev](https://github.com/pphatDev)

## 5. License

The MIT License (MIT). Please see [License File](LICENSE) for more information.