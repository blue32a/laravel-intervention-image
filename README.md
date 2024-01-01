# laravel-intervention-image

Bind Intervention Image to Laravel.

## Installation

Install by running the following command.

```
composer require blue32a/laravel-intervention-image
```

Publish the configuration file by running the following command.

```
php artisan vendor:publish --tag=intervention-image
```

Register a service provider in the `config/app.php` configuration file.

```php
'providers' => ServiceProvider::defaultProviders()->merge([
    Blue32a\Laravel\Intervention\Image\ImageServiceProvider::class,
    // ...
])->toArray(),
```

## Example

The manager instance is injected as shown in the following code.

```php
namespace App\Http\Controllers;

use Intervention\Image\ImageManager;

class ImageController extends Controller
{
    public function index(ImageManager $manager)
    {
        // ...
    }
}
```
