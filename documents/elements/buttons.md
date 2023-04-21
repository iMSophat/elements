# **How to use `Button` components**
## List
### 🟦 Default Buttons 
This buttons are default style and customizable, User can customize `type`, `onClick`, `theme` ,`size`, `round` .

-   [`<x-button>`](#x-button)
-   [`<x-xs:button>`](#x-xs:button)
-   [`<x-sm:button>`](#x-sm:button)
-   [`<x-md:button>`](#x-md:button)
-   [`<x-lg:button>`](#x-lg:button)
-   [`<x-xl:button>`](#x-xl:button)

### 🟨🟥🟦 Group Buttons 
-   [`<x-group:button>`](#x-group:button)
-   [`<x-xs:group:button>`](#x-xs:group:button)
-   [`<x-sm:group:button>`](#x-sm:group:button)
-   [`<x-md:group:button>`](#x-md:group:button)
-   [`<x-lg:group:button>`](#x-lg:group:button)
-   [`<x-xl:group:button>`](#x-xl:group:button)

# ⚠️ **Requirement**
Please Check Usage: [Reqirement](../../readme.md#2-usage) 

# 🔗 Params

-   `type`: for button attribute `type` of HTML 
-   `theme`: colorable base from `tailwind.config.js` configuration 
example:  `primary`, `scondary`, `warning`,`danger`, `success`, `info`.
-   `onclick`: apply user's Javascript function.
-   `size`: Button sizing
-   `round`: Button Radius
-   `gap`: Button Group spacing. User can apply `Tailwindcss` classes `gap-*`
-   `justify`: Button Group Position 
example: `start`, `center`, `end`


# `x-button`:
```html
<x-button type="button" theme="primary" onclick="alert('done')" size="xs" round="full"> Submit </x-button>
```
# `x-xs:button`

```html
<x-xs:button type="button" theme="primary" onclick="alert('done')" round="full"> Submit </x-xs:button>
```

# `x-sm:button`

```html
<x-sm:button type="button" theme="primary" onclick="alert('done')" round="full"> Submit </x-sm:button>
```

# `x-md:button`

```html
<x-md:button type="button" theme="primary" onclick="alert('done')" round="full"> Submit </x-md:button>
```

# `x-lg:button`

```html
<x-lg:button type="button" theme="primary" onclick="alert('done')" round="full"> Submit </x-lg:button>
```

# `x-xl:button`

```html
<x-xl:button type="button" theme="primary" onclick="alert('done')" round="full"> Submit </x-xl:button>
```

# Group Button array params Requirement
This is sample params for `:buttons` params.
```php
$buttons = [
    [
        "type"      => "button", // optional
        "label"     => "Cancel",// required
        "onClick"   => "", // optional
        "theme"     => "danger", // optional
        "size"      => "sm", // optional
        "round"     => "full", // optional
    ],
    [
        "type"      => "", // optional
        "label"     => "Submit", // required
        "onClick"   => "", // optional
        "theme"     => "primary", // optional
        "size"      => "sm", // optional
        "round"     => "full", // optional
    ],
]
```
# `x-group:button`

```html
<x-group:button gap="gap-2" justify="start" :buttons="$buttons"></x-group:button>
```

# `x-xs:group:button`
```html
<x-xs:group:button gap="gap-2" justify="start" :buttons="$buttons"></x-xs:group:button>
```

# `x-sm:group:button`
```html
<x-lg:group:button gap="gap-2" justify="start" :buttons="$buttons"></x-lg:group:button>
```

# `x-md:group:button`
```html
<x-md:group:button gap="gap-2" justify="start" :buttons="$buttons"></x-md:group:button>
```

# `x-lg:group:button`
```html
<x-lg:group:button gap="gap-2" justify="start" :buttons="$buttons"></x-lg:group:button>
```

# `x-xl:group:button`
```html
<x-xl:group:button gap="gap-2" justify="start" :buttons="$buttons"></x-xl:group:button>
```
