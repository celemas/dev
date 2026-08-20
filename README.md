# Celema Development Settings and Tools

<!-- prettier-ignore-start -->
[![ci](https://codefloe.com/celema/dev/badges/workflows/ci.yml/badge.svg?style=flat&logo=forgejo&logoColor=white&label=ci)](https://codefloe.com/celema/dev/actions)
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.md)
<!-- prettier-ignore-end -->

## Installation

```sh
composer require --dev celema/dev
```

Declare development tools such as Mago, Psalm, and PHPUnit directly in the consuming project's `require-dev` section.

## Usage

### Documentation snippets test runner

```sh
./vendor/bin/docs-test-runner path/to/docs/snippets
```

### Markdownlint configuration

Use the shared Markdownlint configuration from the installed package:

```sh
npx markdownlint-cli2 --config ./vendor/celema/dev/config/markdownlint.jsonc README.md docs/
```

## License

This project is licensed under the [MIT license](LICENSE.md).
