<?php
namespace Blesta\Money;

use SebastianBergmann\Money\Money as BaseMoney;

class Money extends BaseMoney implements MoneyInterface
{
    public function __toString()
    {
        return (string) $this->getConvertedAmount();
    }
}
