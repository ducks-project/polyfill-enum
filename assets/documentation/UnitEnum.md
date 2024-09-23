# [The UnitEnum interface](#The-UnitEnum-interface)

(PHP 7, PHP 8)

## [Introduction](#Introduction)

The **UnitEnum** interface is automatically applied to all enumerations by the engine.
It may not be implemented by user-defined classes.
Enumerations may not override its methods, as default implementations are provided by the engine.
It is available only for type checks.

## [Interface synopsis](#Interface-synopsis)

```php
interface UnitEnum {
    /* Methods */
    public static cases(): array
}
```

## [Table of Contents](#Table-of-Contents)

- [UnitEnum::cases] — Generates a list of cases on an enum

[UnitEnum::cases]: ./UnitEnum.cases.md#UnitEnum::cases
