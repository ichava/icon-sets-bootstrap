# Attribution and licence

*Reference.*

## Upstream

[Bootstrap Icons](https://icons.getbootstrap.com/) is made by The Bootstrap Authors. Source: [github.com/twbs/icons](https://github.com/twbs/icons). This pack vendors 1.13.2, from the npm package `bootstrap-icons`; the version is recorded in `resources/assets/svg/config.json` under `upstream.current_version` and nowhere else.

## Licence

The icons and this package are owned separately:

- **The icons** are under the **MIT licence**, © The Bootstrap Authors ([`LICENSE`](https://github.com/twbs/icons/blob/main/LICENSE)). Simtabi LLC redistributes them and claims no authorship of them.
- **This package's code** (provider, enum, component, configuration) is © Simtabi LLC, [MIT](../LICENSE).

MIT allows commercial and non-commercial use, modification and redistribution, provided the copyright notice and permission notice accompany every copy. That is a condition, not a courtesy. The upstream text is reproduced in [`ATTRIBUTION.md`](../ATTRIBUTION.md) at the package root, which ships in the dist archive (`docs/` does not), and at `resources/assets/svg/licenses/bootstrap/LICENSE`.

## Credit

A visible credit is not required by the licence, but is welcome on a "credits" or "about" page:

> Icons from [Bootstrap Icons](https://icons.getbootstrap.com) by The Bootstrap Authors (MIT).

## Updating from upstream

Asset refreshes run **maintainer-side** via
[`ichava/icon-sets-sync`](https://github.com/ichava/icon-sets-sync), which polls `bootstrap-icons` on npm, refreshes the
SVGs when upstream moves, and opens a pull request. Before it writes anything it compares the upstream licence at
the new version with the hash in `config.json`, and stops if it changed.

End users **don't** refresh locally -- `vendor/` is regenerated on every
`composer install`, so any local change is discarded. Run
`php artisan ichava::ichava-core.check-updates --package=ichava/icon-sets-bootstrap`
to see whether a new upstream version is available.

---

[← Docs index](../README.md#documentation)
