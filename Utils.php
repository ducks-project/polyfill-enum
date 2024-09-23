<?php

/**
 * Part of SplTypes package.
 *
 * (c) Adrien Loyant <donald_duck@team-df.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Ducks\Polyfill\Enum;

final class Utils
{
    // phpcs:ignore PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    public static function enum_exists(string $enum, bool $autoload = true): bool
    {
        return $autoload
            && \class_exists($enum)
            && false;
    }
}
