# Variants

*Reference.* How this pack's icons are laid out and addressed.

`ichava/icon-sets-bootstrap` ships **2,078 icons in one style**, flat under `resources/assets/svg/files/`. There is no
variant directory, so an icon's path is its name: `ichava/icon-sets-bootstrap::<name>`.

Every icon is drawn on a 16×16 grid and filled with `currentColor`. Bootstrap marks a filled form with a `-fill` suffix on the file name (`heart` and `heart-fill`), and this pack keeps that: the two are separate icons rather than two variants. The plan allowed a single set here, and keeping upstream's names means the weekly sync reproduces the directory exactly.

## Examples

```blade
<x-ichava::icon name="ichava/icon-sets-bootstrap::house" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-bootstrap::heart-fill" class="w-6 h-6" />
```

## Variant enum (PHP)

The `Variant` enum has one case, so code written against the ecosystem's variant contract works here too:

```php
use Simtabi\Laranail\Ichava\IconSetsBootstrap\Enums\Variant;

Variant::DEFAULT->value;       // 'default'
Variant::default();            // Variant::DEFAULT
Variant::DEFAULT->getPath();   // .../resources/assets/svg/files
```

`getPath()` returns the `files/` root itself: the scaffolder's version named a `files/default/` directory, which a
flat pack does not have. The enum implements `IconSetVariantInterface` from core.

## See also

- [Customisation](customization.md)
- [Icon path format](https://github.com/ichava/core/blob/main/docs/tools/icon-path-format.md)

---

[← Docs index](../README.md#documentation)
