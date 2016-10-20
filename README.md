Flysystem Adapter Chain
-----------------

Adapter Chain, so the same method can be called in multiple adapters

Code information:

[![Build Status](https://travis-ci.org/mjacobus/flysystem-adapter-chain.png?branch=master)](https://travis-ci.org/mjacobus/flysystem-adapter-chain)
[![Coverage Status](https://coveralls.io/repos/mjacobus/flysystem-adapter-chain/badge.png?branch=master)](https://coveralls.io/r/mjacobus/flysystem-adapter-chain?branch=master)
[![Code Coverage Scrutinizer](https://scrutinizer-ci.com/g/mjacobus/flysystem-adapter-chain/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/mjacobus/flysystem-adapter-chain/?branch=master)
[![Code Climate](https://codeclimate.com/github/mjacobus/flysystem-adapter-chain.png)](https://codeclimate.com/github/mjacobus/flysystem-adapter-chain)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mjacobus/flysystem-adapter-chain/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mjacobus/flysystem-adapter-chain/?branch=master)
[![StyleCI](https://styleci.io/repos/71474560/shield)](https://styleci.io/repos/71474560)

Package information:

[![Latest Stable Version](https://poser.pugx.org/brofist/filesystem-adapter-chain/v/stable.svg)](https://packagist.org/packages/brofist/filesystem-adapter-chain)
[![Total Downloads](https://poser.pugx.org/brofist/filesystem-adapter-chain/downloads.svg)](https://packagist.org/packages/brofist/filesystem-adapter-chain)
[![Latest Unstable Version](https://poser.pugx.org/brofist/filesystem-adapter-chain/v/unstable.svg)](https://packagist.org/packages/brofist/filesystem-adapter-chain)
[![License](https://poser.pugx.org/brofist/filesystem-adapter-chain/license.svg)](https://packagist.org/packages/brofist/filesystem-adapter-chain)
[![Dependency Status](https://gemnasium.com/brofist/filesystem-adapter-chain.png)](https://gemnasium.com/brofist/filesystem-adapter-chain)


## Usage


```php
<?php

use League\Flysystem\Filesystem;
use Brofist\Flysystem\Adapter\Chain;

$chain = new Chain([$localAdapter]);
$chain->append($ftpAdapter);

$filesystem = new Flysystem($chain);
$filesystem->write('path', 'contents'); // will write locally and to the ftp
```

## Installing

```bash
composer require brofist/filesystem-adapter-chain
```

## Issues/Features proposals

[Here](https://github.com/mjacobus/flysystem-adapter-chain/issues) is the issue tracker.

## Lincense

[MIT](MIT-LICENSE)

## Authors

- [Marcelo Jacobus](https://github.com/mjacobus)
