<?php

if (! function_exists('developer')) {
    function developer()
    {
        return 'dionzebua.com';
    }
}

if (! function_exists('email')) {
    function email()
    {
        return 'info@dionzebua.com';
    }
}

if (! function_exists('phone')) {
    function phone()
    {
        $asalId = request()->route('asalId');
        $tujuanId = request()->route('tujuanId');

        // Fungsi bantu untuk cek apakah ID termasuk dalam rentang wilayah tertentu
        $inRange = function ($id, $ranges) {
            foreach ($ranges as [$min, $max]) {
                if ($id >= $min && $id <= $max) {
                    return true;
                }
            }
            return false;
        };

        // Rentang ID untuk Sumatra
        $sumatraRanges = [
            [11, 21],           // Provinsi
            [1101, 2172],       // Kota
            [110101, 217204],   // Kecamatan
        ];

        // Rentang ID untuk Jawa
        $jawaRanges = [
            [31, 51],           // Provinsi
            [3101, 5171],       // Kota
            [310101, 517104],   // Kecamatan
        ];

        // Cek apakah asalId atau tujuanId termasuk wilayah Sumatra
        $sumatra = $inRange($asalId, $sumatraRanges) || $inRange($tujuanId, $sumatraRanges);

        // Cek apakah asalId atau tujuanId termasuk wilayah Jawa
        $jawa = $inRange($asalId, $jawaRanges) || $inRange($tujuanId, $jawaRanges);

        if ($jawa) {
            return '+62 899-0704-308';
            // } elseif ($sumatra) {
            //     return '+62 812-2675-7475';
        } else {
            return '+62 859-3283-9714';
        }
    }
}

if (! function_exists('whatsapp')) {
    function whatsapp()
    {
        $cleaned_number = str_replace(['-', '+', ' '], '', phone());
        return "https://api.whatsapp.com/send/?phone=" . $cleaned_number . "&text=Halo+admin+" . request()->fullUrl() . "&type=phone_number&app_absent=0";
    }
}
