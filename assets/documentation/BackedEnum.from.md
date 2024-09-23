# [BackedEnum::from](#BackedEnum::from)

(PHP 7, PHP 8)
BackedEnum::from ? Maps a scalar to an enum instance

## [Description](#Description)

```php
public static BackedEnum::from(int|string $value): static
```

The `from()` method translates a [string] or [int] into the corresponding Enum case, if any.
If there is no matching case defined, it will throw a [ValueError].

## [Parameters](#Parameters)

### [value](#value)
The scalar value to map to an enum case.

## [Return Values](#Return-Values)

A case instance of this enumeration.

## [Examples](#Examples)

### Example #1 Basic usage

```php
<?php
enum Suit: string
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';
}

$h = Suit::from('H');

var_dump($h);

$b = Suit::from('B');
```

The above example will output:

```
enum(Suit::Hearts)

Fatal error: Uncaught ValueError: "B" is not a valid backing value for enum "Suit" in /file.php:15
```

## [See Also](#See-Also)

- [UnitEnum::cases] - Generates a list of cases on an enum
- [BackedEnum::tryFrom] - Maps a scalar to an enum instance or null

[string]: https://www.php.net/manual/en/language.types.string.php
[int]: https://www.php.net/manual/en/language.types.integer.php
[ValueError]: https://www.php.net/manual/en/class.valueerror.php
[UnitEnum::cases]: ./UnitEnum.cases.md#UnitEnum::cases
[BackedEnum::from]: ./BackedEnum.tryFrom.md#BackedEnum::from
[BackedEnum::tryFrom]: ./BackedEnum.tryFrom.md#BackedEnum::tryFrom