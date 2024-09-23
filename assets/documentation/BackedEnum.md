# [The BackedEnum interface](#The-BackedEnum-interface)

(PHP 7, PHP 8)

## [Introduction](#Introduction)

The **BackedEnum** interface is automatically applied to backed enumerations by the engine.
It may not be implemented by user-defined classes.
Enumerations may not override its methods, as default implementations are provided by the engine.
It is available only for type checks.

## [Interface synopsis](#Interface-synopsis)

```php
interface BackedEnum extends UnitEnum {
    /* Methods */
    public static from(int|string $value): static
    public static tryFrom(int|string $value): ?static
    /* Inherited methods */
    public static UnitEnum::cases(): array
}
```

## [Table of Contents](#Table-of-Contents)

- [UnitEnum::cases] — Generates a list of cases on an enum
- [BackedEnum::from] — Maps a scalar to an enum instance or null
- [BackedEnum::tryFrom] — Maps a scalar to an enum instance or null

[UnitEnum::cases]: ./UnitEnum.cases.md#UnitEnum::cases
[BackedEnum::from]: ./BackedEnum.tryFrom.md#BackedEnum::from
[BackedEnum::tryFrom]: ./BackedEnum.tryFrom.md#BackedEnum::tryFrom