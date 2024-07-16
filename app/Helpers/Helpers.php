<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

class Helpers
{
  public static function fmtCurrency($datavalue)
  {
    $fmt = new \NumberFormatter('ru_RU', \NumberFormatter::CURRENCY);
    $fmt->setTextAttribute(\NumberFormatter::CURRENCY_CODE, 'RUR');
    $fmt->setAttribute(\NumberFormatter::FRACTION_DIGITS, 0);

    return $fmt->formatCurrency($datavalue, 'RUR');
  }
}
