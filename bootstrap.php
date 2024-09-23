<?php // phpcs:ignore PSR1.Files.SideEffects.FoundWithSymbols

/**
 * Part of SplTypes package.
 *
 * (c) Adrien Loyant <donald_duck@team-df.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Ducks\Polyfill\Enum\Utils;

if (\PHP_VERSION_ID >= 80100) {
    return;
}

if (!\function_exists('enum_exists')) {
    function enum_exists(string $enum, bool $autoload = true): bool
    {
        return Utils::enum_exists($enum, $autoload);
    }
}
