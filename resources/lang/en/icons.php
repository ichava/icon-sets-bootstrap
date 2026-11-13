<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Bootstrap Icons -- localisable strings
|--------------------------------------------------------------------------
|
| An overlay, not a second source of truth. `name` and `description` are
| deliberately absent: IconRegistry::fromDirectory() reads those from
| resources/assets/svg/config.json, which is canonical. A non-English locale
| may add them to override; `en` must not.
|
| Variant keys match Simtabi\Laranail\Ichava\IconSetsBootstrap\Enums\Variant.
|
*/

return [
    'variants' => [
        'default' => 'Default',
    ],

    'variant_descriptions' => [
        'default' => '16px icons; filled forms are separate icons named with a -fill suffix',
    ],
];
