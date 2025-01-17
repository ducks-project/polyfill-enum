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

/**
 * @property readonly string $name
 */
interface UnitEnum
{
    /**
     * Generates a list of cases on an enum
     *
     * @return array An array of all defined cases of this enumeration, in order of declaration.
     */
    public static function cases(): array;
}
