# Filename Normalizer

Normalizes filenames before they are uploaded.

`täst.png` uses a vowel followed by a diaeresis (`a\xcc\x88`). The normalizer normalizes the name so that for example `remove_accents()` can replace `ä` (`\xC3\xA4`) with `ae`.

This is especially useful in combination with the [Clean Image Filenames](https://wordpress.org/plugins/clean-image-filenames/) plugin which uses `sanitize_title()` (and thus `remove_accents()`).

## Installation

The package type is `wordpress-muplugin`. Example of a `composer.json`:

```json
{
  "name": "wearerequired/something",
  "description": "required.com",
  "license": "GPL-2.0-or-later",
  "authors": [
    {
      "name": "required gmbh",
      "email": "info@required.ch"
    }
  ],
  "require": {
    "php": ">=5.6",
    "koodimonni/composer-dropin-installer": "dev-master",
    "johnpbloch/wordpress": "~4.9",
    "wearerequired/filename-normalizer": "^1.0"
  },
  "extra": {
    "wordpress-install-dir": "wordpress/wp",
    "installer-paths": {
      "wordpress/content/plugins/{$name}/": [
        "type:wordpress-plugin"
      ],
      "vendor/{$vendor}/{$name}/": [
        "type:wordpress-muplugin"
      ],
      "wordpress/content/themes/{$name}/": [
        "type:wordpress-theme"
      ]
    },
    "dropin-paths": {
      "wordpress/content/mu-plugins/": [
        "type:wordpress-muplugin"
      ]
    }
  },
  "minimum-stability": "dev",
  "prefer-stable": true
}
```
