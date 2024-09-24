# [The ReflectionEnumUnitCase class](https://www.php.net/manual/en/class.reflectionenumunitcase.php)

(PHP 7, PHP 8)

## [Introduction](#Introduction)

The **ReflectionEnumUnitCase** class reports information about an Enum unit case, which has no scalar equivalent.

## [Interface synopsis](#Interface-synopsis)

```php
class ReflectionEnumUnitCase extends ReflectionClassConstant {
    /* Inherited constants */
    public const int ReflectionClassConstant::IS_PUBLIC;
    public const int ReflectionClassConstant::IS_PROTECTED;
    public const int ReflectionClassConstant::IS_PRIVATE;
    public const int ReflectionClassConstant::IS_FINAL;
    /* Inherited properties */
    public string $name;
    public string $class;
    /* Methods */
    public __construct(object|string $class, string $constant)
    public getEnum(): ReflectionEnum
    public getValue(): UnitEnum
    /* Inherited methods */
    public static ReflectionClassConstant::export(mixed $class, string $name, bool $return = ?): string
    public ReflectionClassConstant::getAttributes(?string $name = null, int $flags = 0): array
    public ReflectionClassConstant::getDeclaringClass(): ReflectionClass
    public ReflectionClassConstant::getDocComment(): string|false
    public ReflectionClassConstant::getModifiers(): int
    public ReflectionClassConstant::getName(): string
    public ReflectionClassConstant::getValue(): mixed
    public ReflectionClassConstant::isEnumCase(): bool
    public ReflectionClassConstant::isFinal(): bool
    public ReflectionClassConstant::isPrivate(): bool
    public ReflectionClassConstant::isProtected(): bool
    public ReflectionClassConstant::isPublic(): bool
    public ReflectionClassConstant::__toString(): string
}
```

## [See Also](#See-Also)

- [Enumerations]:(https://www.php.net/manual/en/language.enumerations.php)
- [ReflectionEnumBackedCase]:(./ReflectionEnumBackedCase.md)

## [Table of Contents](#Table-of-Contents)

- [ReflectionEnumUnitCase::__construct] — Instantiates a ReflectionEnumUnitCase object
- [ReflectionEnumUnitCase::getEnum] — Gets the reflection of the enum of this case
- [ReflectionEnumUnitCase::getValue] — Gets the enum case object described by this reflection object

[ReflectionEnumUnitCase::__construct]: https://www.php.net/manual/en/reflectionenumunitcase.construct.php
[ReflectionEnumUnitCase::getEnum]: https://www.php.net/manual/en/reflectionenumunitcase.getenum.php
[ReflectionEnumUnitCase::getValue]: https://www.php.net/manual/en/reflectionenumunitcase.getvalue.php
