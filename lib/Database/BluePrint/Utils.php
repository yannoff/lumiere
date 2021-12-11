<?php
/**
 * This file is part of the yannoff/lumiere-utils library
 *
 * (c) Yannoff (https://github.com/yannoff)
 *
 * For the full copyright and license information,
 * please view the LICENSE file bundled with this
 * source code.
 */

namespace Yannoff\Lumiere\Database\BluePrint;

use Yannoff\Lumiere\Utils\Database\BluePrintUtils;

/**
 * The only purpose of this file is to provide BC support for versions < 0.2
 * while raising an explicit deprecation warning suitable for logging, depending
 * on the laravel application's configured log level
 */
trigger_error(
    sprintf(
        'Class "%s\Utils" is deprecated and will be removed in version 1.0, use "%s" instead',
        __NAMESPACE__,
        BluePrintUtils::class
    ),
    E_USER_DEPRECATED
);

/**
 * @deprecated since version 0.2.0, will be removed in version 1.x
 */
class Utils extends BluePrintUtils
{
}
