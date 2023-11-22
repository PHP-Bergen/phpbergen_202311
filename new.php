<?php

/**
 * https://github.com/php/php-src/blob/master/UPGRADING
 */

/* The new json_validate() function */
$json = '{ "test": { "foo": "bar" } }';
var_dump(json_validate($json);

/* Typed class constants */
class Foo
{
    const string BAR = 'baz';
}

/* #[Override] attribute */
abstract class Drinks
{
    public function orderDrink(): int
    {
        return 1;
    }
}

final class Beer extends Drinks
{
    #[Override]
    public function orderDrink(): int
    {
        return 2;
    }
}
$order = new Beer();
var_dump($order->orderDrink());

/* Improved unserialize() error handling */
/* E_NOTICE -> E_WARNING */

/* Changes to the range() function */

/*  New mb_str_pad function */


