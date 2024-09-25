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

class ReflectionEnum extends \ReflectionClass
{
    private static ?\ReflectionNamedType $rnts = null;

    /**
     * Internal use
     *
     * Only way to generate a ReflectionNamedType
     *
     * @return \ReflectionNamedType
     */
    private static function getStringReflectionNamedType(): \ReflectionNamedType
    {
        if (null === static::$rnts) {
            $func = new \ReflectionFunction(static fn(string $param): string => $param);
            static::$rnts = ($func->getParameters()[0])->getType();
        }

        return static::$rnts;
    }

    /**
     * Undocumented function
     *
     * @param object|string $objectOrClass
     *
     * @throws ReflectionException if objectOrClass is not a \UnitEnum
     *
     * @link https://www.php.net/manual/en/reflectionenum.construct.php
     */
    public function __construct($objectOrClass)
    {
        // Fast check
        if (!\is_a($objectOrClass, UnitEnum::class, true)) {
            $classname = \is_object($objectOrClass) ? \get_class($objectOrClass) : $objectOrClass;
            throw new \ReflectionException("Class \"$classname\" is not an enum");
        }

        parent::__construct($objectOrClass);
    }

    /**
     * Gets the backing type of an Enum, if any
     *
     * @return ReflectionNamedType|null An instance of ReflectionNamedType, or null if the Enum has no backing type.
     *
     * @link https://www.php.net/manual/en/reflectionenum.getbackingtype.php
     */
    public function getBackingType(): ?\ReflectionNamedType
    {
        if ($this->isBacked()) {
            $type = $this->hasProperty('value')
                ? $this->getProperty('value')->getType()
                : $this->getStringReflectionNamedType();
        }

        return $type ?? null;
    }

    /**
     * Returns a specific case of an Enum
     *
     * @param string $name
     *
     * @return ReflectionEnumUnitCase
     *
     * @throws \ReflectionException If the requested case is not defined
     *
     * @link https://www.php.net/manual/en/reflectionenum.getcase.php
     */
    public function getCase(string $name): ReflectionEnumUnitCase
    {
        if (!$this->hasCase($name)) {
            throw new \ReflectionException($this->name . '::' . $name . ' is not a case');
        }

        return $this->isBacked()
            ? new ReflectionEnumBackedCase($this->name, $name)
            : new ReflectionEnumUnitCase($this->name, $name);
    }

    /**
     * Returns a list of all cases on an Enum
     *
     * @return array
     *
     * @link https://www.php.net/manual/en/reflectionenum.getcases.php
     */
    public function getCases(): array
    {
        foreach (\array_keys($this->getConstants()) as $name) {
            if ($this->hasCase($name)) {
                $cases[] = $this->getCase($name);
            }
        }

        return $cases ?? [];
    }

    /**
     * Checks for a case on an Enum
     *
     * @param string $name The case to check for.
     *
     * @return boolean
     *
     * @link https://www.php.net/manual/en/reflectionenum.hascase.php
     */
    public function hasCase(string $name): bool
    {
        $constant = $this->getReflectionConstant($name);

        // Fast return
        if ($constant === false || !$constant->isPublic()) {
            return false;
        }

        // Check consistency because of polyfilling or other bad overrides
        if ($constant->getDeclaringClass()->name !== $this->name) {
            return false;
        }

        // Check type
        $value = $constant->getValue();
        $type = \gettype($value);
        if (
            ('object' === $type && !\is_a($value, $this->name))
            || (\is_scalar($value) && !\call_user_func('is_' . $this->getBackingType(), $value))
        ) {
            return false;
        }

        // Constant exists, is public and same type as asked.
        return true;
    }

    /**
     * Determines if an Enum is a Backed Enum
     *
     * @return boolean
     */
    public function isBacked(): bool
    {
        return \is_a($this->name, BackedEnum::class, true);
    }
}
