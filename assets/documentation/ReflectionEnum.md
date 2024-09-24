# [The ReflectionEnum class](https://www.php.net/manual/en/class.reflectionenum.php)

(PHP 7, PHP 8)

## [Introduction](#Introduction)

The **ReflectionEnum** class reports information about an Enum.

## [Interface synopsis](#Interface-synopsis)

```php
class ReflectionEnum extends ReflectionClass {
    /* Inherited constants */
    public const int ReflectionClass::IS_IMPLICIT_ABSTRACT;
    public const int ReflectionClass::IS_EXPLICIT_ABSTRACT;
    public const int ReflectionClass::IS_FINAL;
    public const int ReflectionClass::IS_READONLY;
    /* Inherited properties */
    public string $name;
    /* Methods */
    public __construct(object|string $objectOrClass)
    public getBackingType(): ?ReflectionNamedType
    public getCase(string $name): ReflectionEnumUnitCase
    public getCases(): array
    public hasCase(string $name): bool
    public isBacked(): bool
    /* Inherited methods */
    public static ReflectionClass::export(mixed $argument, bool $return = false): string
    public ReflectionClass::getAttributes(?string $name = null, int $flags = 0): array
    public ReflectionClass::getConstant(string $name): mixed
    public ReflectionClass::getConstants(?int $filter = null): array
    public ReflectionClass::getConstructor(): ?ReflectionMethod
    public ReflectionClass::getDefaultProperties(): array
    public ReflectionClass::getDocComment(): string|false
    public ReflectionClass::getEndLine(): int|false
    public ReflectionClass::getExtension(): ?ReflectionExtension
    public ReflectionClass::getExtensionName(): string|false
    public ReflectionClass::getFileName(): string|false
    public ReflectionClass::getInterfaceNames(): array
    public ReflectionClass::getInterfaces(): array
    public ReflectionClass::getMethod(string $name): ReflectionMethod
    public ReflectionClass::getMethods(?int $filter = null): array
    public ReflectionClass::getModifiers(): int
    public ReflectionClass::getName(): string
    public ReflectionClass::getNamespaceName(): string
    public ReflectionClass::getParentClass(): ReflectionClass|false
    public ReflectionClass::getProperties(?int $filter = null): array
    public ReflectionClass::getProperty(string $name): ReflectionProperty
    public ReflectionClass::getReflectionConstant(string $name): ReflectionClassConstant|false
    public ReflectionClass::getReflectionConstants(?int $filter = null): array
    public ReflectionClass::getShortName(): string
    public ReflectionClass::getStartLine(): int|false
    public ReflectionClass::getStaticProperties(): array
    public ReflectionClass::getStaticPropertyValue(string $name, mixed &$def_value = ?): mixed
    public ReflectionClass::getTraitAliases(): array
    public ReflectionClass::getTraitNames(): array
    public ReflectionClass::getTraits(): array
    public ReflectionClass::hasConstant(string $name): bool
    public ReflectionClass::hasMethod(string $name): bool
    public ReflectionClass::hasProperty(string $name): bool
    public ReflectionClass::implementsInterface(ReflectionClass|string $interface): bool
    public ReflectionClass::inNamespace(): bool
    public ReflectionClass::isAbstract(): bool
    public ReflectionClass::isAnonymous(): bool
    public ReflectionClass::isCloneable(): bool
    public ReflectionClass::isEnum(): bool
    public ReflectionClass::isFinal(): bool
    public ReflectionClass::isInstance(object $object): bool
    public ReflectionClass::isInstantiable(): bool
    public ReflectionClass::isInterface(): bool
    public ReflectionClass::isInternal(): bool
    public ReflectionClass::isIterable(): bool
    public ReflectionClass::isReadOnly(): bool
    public ReflectionClass::isSubclassOf(ReflectionClass|string $class): bool
    public ReflectionClass::isTrait(): bool
    public ReflectionClass::isUserDefined(): bool
    public ReflectionClass::newInstance(mixed ...$args): object
    public ReflectionClass::newInstanceArgs(array $args = []): ?object
    public ReflectionClass::newInstanceWithoutConstructor(): object
    public ReflectionClass::setStaticPropertyValue(string $name, mixed $value): void
    public ReflectionClass::__toString(): string
}
```

## [See Also](#See-Also)

- [Enumerations]:(https://www.php.net/manual/en/language.enumerations.php)

## [Table of Contents](#Table-of-Contents)

- [ReflectionEnum::__construct] — Instantiates a ReflectionEnum object
- [ReflectionEnum::getBackingType] — Gets the backing type of an Enum, if any
- [ReflectionEnum::getCase] — Returns a specific case of an Enum
- [ReflectionEnum::getCases] — Returns a list of all cases on an Enum
- [ReflectionEnum::hasCase] — Checks for a case on an Enum
- [ReflectionEnum::isBacked] — Determines if an Enum is a Backed Enum

[ReflectionEnum::__construct]: https://www.php.net/manual/en/reflectionenum.construct.php
[ReflectionEnum::getBackingType]: https://www.php.net/manual/en/reflectionenum.getbackingtype.php
[ReflectionEnum::getCase]: https://www.php.net/manual/en/reflectionenum.getcase.php
[ReflectionEnum::getCases]: https://www.php.net/manual/en/reflectionenum.getcases.php
[ReflectionEnum::hasCase]: https://www.php.net/manual/en/reflectionenum.hascase.php
[ReflectionEnum::isBacked]: https://www.php.net/manual/en/reflectionenum.isbacked.php
