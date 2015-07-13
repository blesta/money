<?php
namespace Blesta\Money;

use SebastianBergmann\Money\Currency as BaseCurrency;

class Currency extends BaseCurrency implements CurrencyInterface
{
    public function __construct(
        $currencyCode,
        $precision = null,
        $subUnit = null,
        $displayName = null,
        $numericCode = 0
    ) {
        if (null === $precision || null === $subUnit) {
            parent::__construct($currencyCode);
        } else {
            parent::addCurrency($currencyCode, $displayName, $numericCode, $precision, $subUnit);
            parent::__construct($currencyCode);
        }
    }
}
