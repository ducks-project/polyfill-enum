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

class ReflectionEnumUnitCase extends \ReflectionClassConstant
{
    private static array $instances = [];

    /**
     * Instantiates a ReflectionEnumUnitCase object
     *
     * @param object|string $class An enum instance or a name.
     * @param string $constant An enum constant name.
     *
     * @throws ReflectionException if $class is not a \ReflectionEnumUnitCase
     *
     * @link https://www.php.net/manual/en/reflectionenumunitcase.construct.php
     */
    public function __construct($class, string $constant)
    {
        parent::__construct($class, $constant);

        if (!$this->getEnum()->hasCase($constant)) {
            throw new \ReflectionException(
                'Enum case ' . $this->class . '::' . $this->name . ' is not a case'
            );
        }
    }

    /**
     * Gets the reflection of the enum of this case
     *
     * @return ReflectionEnum instance describing the Enum this case belongs to.
     *
     * @link https://www.php.net/manual/en/reflectionenumunitcase.getenum.php
     */
    public function getEnum(): ReflectionEnum
    {
        return new ReflectionEnum($this->class);
    }

    /**
     * Gets the enum case object described by this reflection object
     *
     * @return UnitEnum The enum case object described by this reflection object.
     */
    public function getValue(): UnitEnum
    {
        if (!isset(self::$instances[$this->class][$this->name])) {
            $class = $this->getDeclaringClass();
            $instance = $class->newInstanceWithoutConstructor();

            $object = $class->getConstructor();
            $object->setAccessible(true);
            $object->invoke($instance, $this->name);

            self::$instances[$this->class][$this->name] = $instance;
        }

        return self::$instances[$this->class][$this->name];
    }
}
