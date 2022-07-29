# Laravel GIT commit checker

[![Latest Version](https://img.shields.io/github/release/iracode/git-commit-checker.svg?style=flat-square)](https://github.com/iracode/git-commit-checker/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/iracode/git-commit-checker/master.svg?style=flat-square)](https://travis-ci.org/iracode/git-commit-checker)
[![Quality Score](https://img.shields.io/scrutinizer/g/iracode/git-commit-checker.svg?style=flat-square)](https://scrutinizer-ci.com/g/iracode/git-commit-checker)
[![StyleCI](https://github.styleci.io/repos/204389052/shield?branch=master)](https://github.styleci.io/repos/204389052)
[![Total Downloads](https://img.shields.io/packagist/dt/iracode/git-commit-checker.svg?style=flat-square)](https://packagist.org/packages/iracode/git-commit-checker)
[![Maintainability](https://api.codeclimate.com/v1/badges/a6e4612307e3b3bf8252/maintainability)](https://codeclimate.com/github/iracode/git-commit-checker/maintainability)

## Installation

```bash
composer require iracode/git-commit-checker
```

For version <= 5.4:

Add to section `providers` of `config/app.php`:

```php
// config/app.php
'providers' => [
    ...
    Iracode\GitCommitChecker\Providers\GitCommitCheckerServiceProvider::class,
];
```

Publish the configuration:

```bash
php artisan vendor:publish --provider="Iracode\GitCommitChecker\Providers\GitCommitCheckerServiceProvider" --tag=config
```

### Install GIT hooks
```bash
php artisan git:install-hooks
```

- Create default PSR config (It will create phpcs.xml in your root project).

```bash
php artisan git:create-phpcs
```

- Run test manually (made sure you've added all changed files to git stage)

```bash
php artisan git:pre-commit
```
