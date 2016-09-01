Calculus
=================

[![Build Status](https://travis-ci.org/Zazalt/Calculus.svg?branch=master)](https://travis-ci.org/Zazalt/Calculus)
[![Coverage Status](https://coveralls.io/repos/github/Zazalt/Calculus/badge.svg?branch=master)](https://coveralls.io/github/Zazalt/Calculus?branch=master)
[![Code Climate](https://codeclimate.com/github/Zazalt/Calculus/badges/gpa.svg)](https://codeclimate.com/github/Zazalt/Calculus)
[![Issue Count](https://codeclimate.com/github/Zazalt/Calculus/badges/issue_count.svg)](https://codeclimate.com/github/Zazalt/Calculus/issues)
[![Total Downloads](https://poser.pugx.org/zazalt/calculus/downloads)](https://packagist.org/packages/zazalt/calculus/stats)
[![Latest Stable Version](https://poser.pugx.org/zazalt/calculus/v/stable)](https://packagist.org/packages/zazalt/calculus)
![Version](https://img.shields.io/badge/version-beta-yellow.svg)

Calculus is a PHP library for mathematics/2D/3D computing

Requirements
---------------
* php >= 5.4.0

Packagist Dependencies
---------------
* None

Installation
---------------
With composer:
``` json
{
	"require": {
		"zazalt/calculus": "dev-master"
	}
}
```

## Usage
```php

$Calculus = new Zazalt\Calculus\Calculus();

/**
 * Check if a nunmber is prime based on trial division
 *
 * @return  boolean
 */
$Calculus->isPrimeNumber($number);

/**
 * Calculating distance between two points on a flat plane
 *
 * @return  integer
 */
$Calculus->distanceBetweenTwoPoints($pointA = [], $pointB = []);

/**
 * Resize a rectangle object until it falls in desired dimension, but keep aspect ratio
 * A usefull function/method when want to resize an image
 *
 * @return  array
 */
$Calculus->resizeRectangle($rectangleDimensions = [], $rectangleNewDimensions = []);

/**
 * Not implemented/documented, yet!
 */
$Calculus->mean();

/**
 * Not implemented/documented, yet!
 */
$Calculus->median();

/**
 * Not implemented/documented, yet!
 */
$Calculus->mode();
```