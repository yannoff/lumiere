# Lumière

A set of utils & helpers for [Laravel](https://github.com/laravel).

## Installation

```
composer require yannoff/lumiere
```

## Reference

### [Database\BluePrint\Utils](/src/Database/BluePrint/Utils.php)::addTimestamps()

#### Synopsis

```php
Utils::addTimestamps(Blueprint $table, int $precision = 0)
```
> Add `created_at` & `updated_at` columns with `DEFAULT CURRENT_TIMESTAMP` to the blueprint

#### Example

```php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Yannoff\Lumiere\Database\BluePrint\Utils;

class CreateTagsTable extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('label', 120);
            $table->string('slug', 128);
            Utils::addTimestamps($table);
        });
    }
}
```

## License

Licensed under the [MIT License](LICENSE).
