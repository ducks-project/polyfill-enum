# [BackedEnum::tryFrom](#BackedEnum::tryFrom)

(PHP 7, PHP 8)
BackedEnum::tryFrom ? Maps a scalar to an enum instance or null

## [Description](#Description)

```php
public static BackedEnum::tryFrom(int|string $value): ?static
```

The `tryFrom()` method translates a [string] or [int] into the corresponding Enum case, if any.
If there is no matching case defined, it will return `null`.

## [Parameters](#Parameters)

### [value](#value)
The scalar value to map to an enum case.

## [Return Values](#Return-Values)

A case instance of this enumeration, or [null] if not found.

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

$h = Suit::tryFrom('H');

var_dump($h);

$b = Suit::tryFrom('B') ?? Suit::Spades;

var_dump($b);
```

The above example will output:

```
enum(Suit::Hearts)
enum(Suit::Spades)
```

## [See Also](#See-Also)

- [UnitEnum::cases] - Generates a list of cases on an enum
- [BackedEnum::from] - Maps a scalar to an enum instance

[string]: https://www.php.net/manual/en/language.types.string.php
[int]: https://www.php.net/manual/en/language.types.integer.php
[null]: https://www.php.net/manual/en/language.types.null.php
[ValueError]: https://www.php.net/manual/en/class.valueerror.php
[UnitEnum::cases]: ./UnitEnum.cases.md#UnitEnum::cases
[BackedEnum::from]: ./BackedEnum.tryFrom.md#BackedEnum::from
[BackedEnum::tryFrom]: ./BackedEnum.tryFrom.md#BackedEnum::tryFrom