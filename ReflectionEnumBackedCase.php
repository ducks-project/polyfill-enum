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

class ReflectionEnumBackedCase extends ReflectionEnumUnitCase
{
    /**
     * Instantiates a ReflectionEnumBackedCase object
     *
     * @param object|string $class An enum instance or a name.
     * @param string $constant An enum constant name.
     *
     * @throws ReflectionException if $class is not a \ReflectionEnumBackedCase
     *
     * @link https://www.php.net/manual/en/reflectionenumbackedcase.construct.php
     */
    public function __construct($class, string $constant)
    {
        parent::__construct($class, $constant);

        if (!$this->getEnum()->isBacked()) {
            throw new \ReflectionException(
                'Enum case ' . $this->class . '::' . $this->name . ' is not a backed case'
            );
        }
    }

    /**
     * Gets the scalar value backing this Enum case
     *
     * @return int|string The scalar equivalent of this enum case.
     *
     * @link https://www.php.net/manual/en/reflectionenumbackedcase.getbackingvalue.php
     */
    public function getBackingValue()
    {
        return $this->getDeclaringClass()
            ->getConstant($this->name);
    }
}
