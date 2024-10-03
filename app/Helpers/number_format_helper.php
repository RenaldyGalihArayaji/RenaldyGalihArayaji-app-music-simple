<?php

if (! function_exists('formatNumber')) {
    function formatNumber($number)
    {
        if ($number >= 1000000000) {
            return number_format($number / 1000000000, 1) . 'B'; // Milyar
        } elseif ($number >= 1000000) {
            return number_format($number / 1000000, 1) . 'M'; // Jutaan
        } elseif ($number >= 1000) {
            return number_format($number / 1000, 1) . 'K'; // Ribuan
        }

        return number_format($number); // Jika di bawah 1000, tampilkan angka biasa
    }
}
