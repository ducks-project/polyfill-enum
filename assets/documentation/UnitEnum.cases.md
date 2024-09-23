# [UnitEnum::cases](#UnitEnum::cases)

(PHP 7, PHP 8)
UnitEnum::cases — Generates a list of cases on an enum

## [Description](#Description)

```php
public static UnitEnum::cases(): array
```

This method will return a packed array of all cases in an enumeration, in order of declaration.

## [Parameters](#Parameters)

This function has no parameters.

## [Return Values](#Return-Values)

An array of all defined cases of this enumeration, in order of declaration.

## [Examples](#Examples)

### Example #1 Basic usage

```php
<?php
enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

var_dump(Suit::cases());
```

The above example will output:

```
array(4) {
    [0]=>
    enum(Suit::Hearts)
    [1]=>
    enum(Suit::Diamonds)
    [2]=>
    enum(Suit::Clubs)
    [3]=>
    enum(Suit::Spades)
}
```