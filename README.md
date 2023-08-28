## Ardillo Examples

[![CI Status](https://github.com/ardillo-php/examples/workflows/CI/badge.svg)](https://github.com/ardillo-php/examples/actions/workflows/ci.yaml)
[![Psalm Type Coverage](https://shepherd.dev/github/ardillo-php/examples/coverage.svg)](https://shepherd.dev/github/ardillo-php/examples)
[![Latest Stable Version](https://poser.pugx.org/ardillo/examples/v/stable.png)](https://packagist.org/packages/ardillo/examples)
[![License](https://img.shields.io/badge/license-MIT-blue)](LICENSE)

This repository contains examples of how to use the Ardillo framework.

### Installation

Before proceeding, make sure the [Ardillo extension](https://github.com/ardillo-php/ext) is built and installed.

Then, clone this repository and install its dependencies: `composer install`, and you're ready to go!

### Examples

#### Ardillo Table Gallery

A program which showcases the various table columns offered by Ardillo. Source code is available [here](src/TableGallery).

Run it with `./bin/tablegallery` (or `php bin\tablegallery` on Windows).

<img loading="lazy" src="https://raw.github.com/ardillo-php/examples/master/shots/ardillo-tablegallery-combo.gif" alt="Ardillo Table Gallery" class="width-full">

#### Ardillo CSV Editor

A simple CSV editor that allows you to load, edit and save CSV files.

Run it with `./bin/csvedit` (or `php bin\csvedit` on Windows). Source code is available [here](src/CsvEdit).

<img loading="lazy" src="https://raw.github.com/ardillo-php/examples/master/shots/ardillo-csvedit-combo.gif" alt="Ardillo CSV Editor" class="width-full">

#### Ardillo DNS Client

A DNS client that allows you to query DNS servers for various records. Source code is available [here](src/Dns).

Run it with `./bin/dns` (or `php bin\dns` on Windows).

<img loading="lazy" src="https://raw.github.com/ardillo-php/examples/master/shots/ardillo-dns-combo.gif" alt="Ardillo DNS Client" class="width-full">

#### Ardillo Histogram

A program rendering a histogram chart using ten random (but adjustable) data points. Source code is available [here](src/Histogram).

Run it with `./bin/histogram` (or `php bin\histogram` on Windows).

<img loading="lazy" src="https://raw.github.com/ardillo-php/examples/master/shots/ardillo-histogram-combo.gif" alt="Ardillo Histogram" class="width-full">

#### Ardillo Clock

An analogue clock that shows the current time.

Run it with `./bin/clock` (or `php bin\clock` on Windows). Source code is available [here](src/Clock).

<img loading="lazy" src="https://raw.github.com/ardillo-php/examples/master/shots/ardillo-clock-combo.png" alt="Ardillo Clock" class="width-full">

#### Ardillo Starfield

A simple starfield simulation. Source code is available [here](src/Starfield).

Run it with `./bin/starfield` (or `php bin\starfield` on Windows).

<img loading="lazy" src="https://raw.github.com/ardillo-php/examples/master/shots/ardillo-starfield-combo.png" alt="Ardillo Starfield" class="width-full">

#### Ardillo Snake Game

An implementation of the classic Snake game. Source code is available [here](src/Snake).

Run it with `./bin/snake` (or `php bin\snake` on Windows).

<img loading="lazy" src="https://raw.github.com/ardillo-php/examples/master/shots/ardillo-snake-combo.png" alt="Ardillo Snake Game" class="width-full">

### Static Analysis

This repository is scanned for bugs by [Psalm](https://psalm.dev) and [PHPStan](https://phpstan.org). You can run these tools locally by executing `composer phpstan` and `composer psalm` respectively.

### License

This repository is licensed under the MIT license.

### Contributing

Bug reports (and small patches) can be submitted via the [issue tracker](https://github.com/ardillo-php/examples/issues). Forking the repository and submitting a Pull Request is preferred for substantial patches. Please be sure to read and comply with the [Contributing Terms](CONTRIBUTING.md) document before proceeding.
