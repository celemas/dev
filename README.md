# Celemas Development Settings and Tools

<!-- prettier-ignore-start -->
[![ci](https://codeberg.org/celemas/dev/badges/workflows/ci.yml/badge.svg?style=flat&logo=codeberg&logoColor=white&label=ci)](https://codeberg.org/celemas/dev/actions)
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.md)
<!-- prettier-ignore-end -->

## Installation

```sh
composer require celemas/dev
```

## Usage

### Documentation snippets test runner

```sh
./vendor/bin/docs-test-runner path/to/docs/snippets
```

### php-cs-fixer

Add the following to your `.php-cs-fixer.dist.php`:

```php
<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()->in([__DIR__ . '/src', __DIR__ . '/tests']);
$config = new Celemas\Development\PhpCsFixer\Config();

return $config->setFinder($finder);
```

## Automatically installed development tools

- `psy/psysh` [A REPL for PHP](https://github.com/bobthecow/psysh)

## Shared Configuration Sync

This package provides a centralized way to manage configuration files (like `.editorconfig`, `.markdownlint.jsonc`, etc.) across all projects. Instead of manual copying, use the built-in `Config` helper via Composer.

### 1. Project Setup

Add the sync command to your project's `composer.json` file. It will install the default configs whenever `composer install` or `composer update` is run.

```json
{
	"scripts": {
		"post-install-cmd": [
			"Celemas\\Development\\Config::sync"
		],
		"post-update-cmd": [
			"Celemas\\Development\\Config::sync"
		]
	}
}

```

### 2. Add Prettier Config (Optional)

To also install `.prettierrc`, add the `prettier` script alongside `sync`.

```json
{
	"scripts": {
		"post-install-cmd": [
			"Celemas\\Development\\Config::sync",
			"Celemas\\Development\\Config::prettier"
		],
		"post-update-cmd": [
			"Celemas\\Development\\Config::sync",
			"Celemas\\Development\\Config::prettier"
		]
	}
}
```

Note: `Config` does not overwrite existing files. Delete the file you want to re-deploy and re-run Composer.

### 3. Recommended .gitignore

To ensure the "Source of Truth" remains within this package, add the synced files to your project's `.gitignore`:

```text
/.editorconfig
/.markdownlint.jsonc
/.prettierrc
```

## License

This project is licensed under the [MIT license](LICENSE.md).
