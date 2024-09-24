# [The ReflectionEnumUnitCase class](https://www.php.net/manual/en/class.reflectionenumbackedcase.php)

(PHP 7, PHP 8)

## [Introduction](#Introduction)

The **ReflectionEnumBackedCase** class reports information about an Enum backed case, which has a scalar equivalent.

## [Interface synopsis](#Interface-synopsis)

```php
class ReflectionEnumBackedCase extends ReflectionEnumUnitCase {
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
    public getBackingValue(): int|string
    /* Inherited methods */
    public ReflectionEnumUnitCase::getEnum(): ReflectionEnum
    public ReflectionEnumUnitCase::getValue(): UnitEnum
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
- [ReflectionEnumUnitCase]:(./ReflectionEnumUnitCase.md)

## [Table of Contents](#Table-of-Contents)

- [ReflectionEnumBackedCase::__construct] — Instantiates a ReflectionEnumBackedCase object
- [ReflectionEnumBackedCase::getBackingValue] — Gets the scalar value backing this Enum case

[ReflectionEnumBackedCase::__construct]: https://www.php.net/manual/en/reflectionenumbackedcase.construct.php
[ReflectionEnumBackedCase::getBackingValue]: https://www.php.net/manual/en/reflectionenumbackedcase.getbackingvalue.php
