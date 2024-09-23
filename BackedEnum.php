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

interface BackedEnum extends UnitEnum
{
    /**
     * Maps a scalar to an enum instance
     *
     * @param int|string $value
     *
     * @return BackedEnum A case instance of this enumeration.
     */
    public static function from($value): self;
    /**
     * Maps a scalar to an enum instance or null
     *
     * @param int|string $value
     * @return Backend|null A case instance of this enumeration, or null if not found.
     */
    public static function tryFrom($value): ?self;
}
