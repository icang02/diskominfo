<?php

if (! function_exists('format_short_number')) {
  function format_short_number($number)
  {
    if ($number >= 1000) {
      $formatted = $number / 1000;
      return rtrim(rtrim(number_format($formatted, 1), '0'), '.') . 'k';
    }
    return $number;
  }
}
