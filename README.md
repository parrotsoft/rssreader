# BaseApp

This package allows us to read RSS easily.

## Installation

Use composer to install the package.

```
composer require mlopez/rss-reader
```

## Using this package

```php
$rss = new RssReader('https://www.elheraldo.co/rss.xml');
$result = $rss->reader()->toArray();
print_r($result);
```

## Rss examples
- https://www.elheraldo.co/rss.xml
- https://zonacero.com/rss.xml
- http://diariolalibertad.com/sitio/rsslatest.xml
- https://impactonews.co/feed/

## Credits

- [Miguel Lopez Ariza](https://github.com/parrotsoft)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.