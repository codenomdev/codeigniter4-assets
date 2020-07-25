# codeigniter4-assets
Asset publishing and loading for CodeIgniter 4

## Quick Start

1. Install with Composer: `> composer require codenom/assets`
2. Put CSS & JS files in: **public/assets**
3. Add additional assets to config: **app/Config/Assets.php**
3. Add in head tag: `<?= service('assets')->css() ?>`
4. Add to footer: `<?= service('assets')->js() ?>`

## Features

Provides out-of-the-box asset loading for CSS and JavaScript files for CodeIgniter 4

## Installation

Install easily via Composer to take advantage of CodeIgniter 4's autoloading capabilities
and always be up-to-date:
* `> composer require codenom/assets`

Or, install manually by downloading the source files and adding the directory to
`app/Config/Autoload.php`.

## Configuration (optional)

The library's default behavior can be overridden or augment by its config file. Copy
**examples/Assets.php** to **app/Config/Assets.php** and follow the instructions in the
comments. If no config file is found the library will use its defaults.

## Usage

If installed correctly CodeIgniter 4 will detect and autoload the library, service, and
config. Use the library methods `css()` and `js()` to display tags for the route-specific assets:
`<?= service('assets')->css() ?>`

## Structure

The library searches the assets directory (default: **public/assets**) for files matching
the current route, loading them in a cascading fashion for each route segment.

**Example:** https://example.com/users/view/30

The library will first load any root assets (`public/assets/*.css *.js`), then assets in
the "users" subfolder (`public/assets/users/`), then "view" subfolder, then "12" subfolder.
Any missing or invalid folders are ignored.

Additional assets may be specified from the config variable `$routes` - this is particularly
helpful for including pre-bundled libraries. `$routes` maps each route to an asset file or
a directory of assets to load for that route.

**Example:**

```
public $routes = [
	'' => [
		'bootstrap/dist/css/bootstrap.min.css',
		'bootstrap/dist/js/bootstrap.bundle.min.js'
	],
	'files/upload' => [
		'vendor/dropzone'
	]
];
```

This tells the library to load the Bootstrap assets for every route (`''`) without having
to move it from its pre-bundled subdirectory. It also will load any assets in the `dropzone`
directory for the specified route.
