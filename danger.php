<?php

/**
 * Danger zone.
 */

/* Negative indices in arrays */
$beer_rating = [];
$beer_rating[-5] = 'Corona';
$beer_rating[] = 'Miller Light';
var_dump($beer_rating);

/* More Appropriate Date/Time Exceptions */
/* DateMalformedIntervalStringException, DateInvalidOperationException, and DateRangeError */

/** Invariant constant visibility */
interface I {
    public const FOO = 'foo';
}
class C implements I {
    private const FOO = 'foo';
}
