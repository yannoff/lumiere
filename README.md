# Lumière

A set of utils & helpers for [Laravel](https://github.com/laravel).

## Installation

```
composer require yannoff/lumiere
```

## Reference

### [Utils\Database\BluePrintUtils](/src/Database/BluePrintUtils.php)::addTimestamps()

#### Synopsis

```php
BluePrintUtils::addTimestamps(Blueprint $table, int $precision = 0)
```
> Add `created_at` & `updated_at` columns with `DEFAULT CURRENT_TIMESTAMP` to the blueprint

#### Example

```php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Yannoff\Lumiere\Utils\Database\BluePrintUtils;

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
            BluePrintUtils::addTimestamps($table);
        });
    }
}
```

## License

Licensed under the [MIT License](LICENSE).
