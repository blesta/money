<?php
namespace Blesta\Money;

interface MoneyInterface
{
    public function __construct($amount, $currency);
    public static function fromString($value, $currency);
    public function getAmount();
    public function getConvertedAmount();
    public function getCurrency();
    public function add(MoneyInterface $other);
    public function subtract(MoneyInterface $other);
    public function negate();
    public function multiply($factor, $roundingMode);
    public function equals(MoneyInterface $other);
    public function greaterThan(MoneyInterface $other);
    public function greaterThanOrEqual(MoneyInterface $other);
    public function lessThan(MoneyInterface $other);
    public function lessThanOrEqual(MoneyInterface $other);
    public function __toString();
}
