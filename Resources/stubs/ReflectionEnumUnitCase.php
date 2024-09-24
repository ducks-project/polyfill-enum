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

use Ducks\Polyfill\Enum\ReflectionEnumUnitCase as DuckReflectionEnumUnitCase;

if (PHP_VERSION_ID < 80100) {
    /**
     * \class_alias(DuckReflectionEnumUnitCase::class, '\\ReflectionEnumUnitCase', true);
     */
    // phpcs:ignore PSR1.Classes.ClassDeclaration.MissingNamespace
    class ReflectionEnumUnitCase extends DuckReflectionEnumUnitCase
    {
    }
}
