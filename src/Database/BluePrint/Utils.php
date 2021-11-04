<?php
/**
 * This file is part of the yannoff/lumiere library
 *
 * (c) Yannoff (https://github.com/yannoff)
 *
 * For the full copyright and license information,
 * please view the LICENSE file bundled with this
 * source code.
 */

namespace Yannoff\Lumiere\Database\BluePrint;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

/**
 * Database utilities class
 */
class Utils
{
    /**
     * Add "created_at" and "updated_at" columns with DEFAULT CURRENT_TIMESTAMP to the blueprint
     *
     * @param Blueprint $table
     * @param int|null  $precision
     */
    static public function addTimestamps(Blueprint $table, int $precision= 0)
    {
        $now = DB::raw('CURRENT_TIMESTAMP');
        $table->timestamp('created_at', $precision)->default($now);
        $table->timestamp('updated_at', $precision)->default($now);
    }
}
