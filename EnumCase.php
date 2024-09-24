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

#[\Attribute(\Attribute::TARGET_CLASS_CONSTANT)]
final class EnumCase
{
    public function __construct()
    {
    }
}
