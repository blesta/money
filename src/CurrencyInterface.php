<?php
namespace Blesta\Money;

interface CurrencyInterface
{
    public function __construct($currencyCode, $precision = null, $subUnit = null, $displayName = null, $numericCode = 0);
    public function getCurrencyCode();
    public function getDefaultFractionDigits();
    public function getDisplayName();
    public function getNumericCode();
    public function getSubUnit();
    public function __toString();
}