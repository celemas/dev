# Changelog

## [Unreleased](https://codeberg.org/celema/dev/compare/5.0.0...HEAD)

No notable changes since the last release.

## [5.0.0](https://codeberg.org/celema/dev/src/tag/5.0.0) (2026-07-18)

### Breaking Changes

- Rename the package from `celemas/dev` to `celema/dev` and the root namespace from `Celemas\Development` to `Celema\Development`.
- Move the source repository to `codeberg.org/celema/dev` and update the project domain and contact email.

## [4.2.0](https://codeberg.org/celema/dev/src/tag/4.2.0) (2026-05-13)

### Changed

- Pin mago version to v1.26.0.

## [4.1.0](https://codeberg.org/celema/dev/src/tag/4.1.0) (2026-05-12)

### Added

- Shared markdownlint config

## [4.0.0](https://codeberg.org/celema/dev/src/tag/4.0.0) (2026-05-08)

### Breaking Changes

- Rename package metadata, root namespace, repository URLs, homepage, and contact email to Duon.

## [3.0.1](https://codeberg.org/celema/dev/src/tag/3.0.1) (2026-04-29)

### Added

- Add Mago configuration.

### Changed

- Update Composer metadata to use `duon.sh` and release links to use the `duoncode` GitHub organization.

### Fixed

- Replace the ambiguous `isset()` argument check in `DocsTestRunner` with an explicit null check.

## [3.0.0](https://codeberg.org/celema/dev/src/tag/3.0.0) (2026-03-21)

### Breaking Changes

- Update `phpunit/phpunit` requirement to `^13.0`.
- Update `ernst/coverlyzer` requirement to `^0.3`.
- Remove `friendsofphp/php-cs-fixer`.

### Added

- Add `carthage-software/mago`

### Changed

- Update `vimeo/psalm` requirement to `^6.16`.

## [2.5.0](https://codeberg.org/celema/dev/src/tag/2.5.0) (2026-01-30)

### Breaking Changes

- Removed configuration sync via `Duon\Development\Config` (including `Config::sync()` and `Config::prettier()`).
- Removed the bundled config templates under `cfg/`.

### Changed

- Added `.markdownlint.jsonc` to the repository root and simplified the `mdlint` Composer script.
- Enforced final newlines via `.editorconfig` (`insert_final_newline = true`).

## [2.4.1](https://codeberg.org/celema/dev/src/tag/2.4.1) (2026-01-30)

### Changed

- Update Psalm requirement to `^6.15`.

## [2.4.0](https://codeberg.org/celema/dev/src/tag/2.4.0) (2026-01-29)

### Added

- Add `phpunit/phpunit`, `vimeo/psalm`, and `ernst/coverlyzer` as Composer requirements.
- Add a License section to the README.

### Changed

- Update license text and attribution.
- Update Composer package metadata (author information).

## [2.3.0](https://codeberg.org/celema/dev/src/tag/2.3.0) (2026-01-28)

### Breaking Changes

- Rename `ConfigSync` to `Config` and move it to the `Duon\\Development` namespace.
- Stop supporting config selection via Composer script arguments; use dedicated methods like `Config::sync()` and `Config::prettier()`.

### Added

- Add `psy/psysh` as an automatically installed development tool.
- Enable php-cs-fixer parallel execution auto-detection.

### Changed

- Rename `cfg/prettierrc` to `cfg/prettierrc.json` and update sync path.
- Make `ConfigSync` skip existing destination files (no overwrite).
- Update README examples to match current `ConfigSync` API.

## [2.2.0](https://codeberg.org/celema/dev/src/tag/2.2.0) (2026-01-28)

### Added

- Default configuration sync. The `ConfigSync` class
- Global editorconfig

## [2.1.0](https://codeberg.org/celema/dev/src/tag/2.1.0) (2026-01-27)

### Added

- Global markdownlint settings
- Global prettier settings

## [2.0.0](https://codeberg.org/celema/dev/src/tag/2.0.0) (2026-01-25)

### Breaking Changes

- Require PHP ^8.5

### Changed

- Base config on @PER-CS3x0 rules
- Update php-cs-fixer requirement to ~3.93.0
- Update fixer rules

## [1.1.7](https://codeberg.org/celema/dev/src/tag/1.1.7) (2025-04-01)

### Changed

- Update php-cs-fixer requirement to ^3.75.0

## [1.1.6](https://codeberg.org/celema/dev/src/tag/1.1.6) (2024-11-17)

### Changed

- Update export-ignore entries

## [1.1.5](https://codeberg.org/celema/dev/src/tag/1.1.5) (2024-11-10)

### Changed

- Update root namespace to `Duon`

## [1.1.4](https://codeberg.org/celema/dev/src/tag/1.1.4) (2024-08-24)

### Changed

- Add `curly_brace_block` to php-cs-fixers `no_extra_blank_lines` rule

## [1.1.3](https://codeberg.org/celema/dev/src/tag/1.1.3) (2024-08-15)

### Changed

- Base fixer rules on PER-CS2.0
- Use tabs instead of spaces

## [1.1.2](https://codeberg.org/celema/dev/src/tag/1.1.2) (2024-08-14)

### Changed

- Update namespace

## [1.1.1](https://codeberg.org/celema/dev/src/tag/1.1.1) (2023-11-24)

### Fixed

- Fix attribute type of DocsTestRunner::$dir

## [1.1.0](https://codeberg.org/celema/dev/src/tag/1.1.0) (2023-11-03)

### Added

- Add documentation snippets test runner `docs-test-runner`

## [1.0.2](https://codeberg.org/celema/dev/src/tag/1.0.2) (2023-10-23)

### Added

- php-cs-fixer rules:
    - `ordered_imports`: set `sort_algorithm` to `alpha`.

## [1.0.1](https://codeberg.org/celema/dev/src/tag/1.0.1) (2023-10-02)

### Added

- php-cs-fixer rules:
    - `declare_strict_types` enabled.
    - Force blank line before `if` and loops.
    - `no_useless_else` enabled.
    - `no_useless_return` enabled.
    - `no_superfluous_elseif` enabled.
    - `method_chaining_indentation` enabled.
    - `explicit_string_variable` enabled.
    - Update `class_attributes_separation` settings: No line between `const` declaration, one line between methods.

## [1.0.0](https://codeberg.org/celema/dev/src/tag/1.0.0) (2023-10-02)

### Added

- php-cs-fixer rules via `Duon\Development\PhpCsFixer\Config`.
