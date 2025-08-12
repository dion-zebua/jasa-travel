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

        if ($sumatra) {
            return '+62 812-2675-7475';
        } elseif ($jawa) {
            return '+62 899-0704-308';
        } else {
            return '+62 882-8931-7870';
        }
    }
}

if (! function_exists('whatsapp')) {
    function whatsapp()
    {

        $asalId = request()->route('asalId');
        $tujuanId = request()->route('tujuanId');

        $sumatra =
            // Prov
            ($asalId >= 11  && $asalId <= 21) ||
            // Kota
            ($asalId >= 1101 && $asalId <= 2172) ||
            // Kec
            ($asalId >= 110101 && $asalId <= 217204) ||

            // Prov
            ($tujuanId >= 11  && $tujuanId <= 21) ||
            // Kota
            ($tujuanId >= 1101 && $tujuanId <= 2172) ||
            // Kec
            ($tujuanId >= 110101 && $tujuanId <= 217204);

        $jawa =
            // Prov
            ($asalId >= 31 && $asalId <= 51) ||
            // Kota
            ($asalId >= 3101 && $asalId <= 5171) ||
            // Kec
            ($asalId >= 310101 && $asalId <= 517104) ||

            // Prov
            ($tujuanId >= 31 && $tujuanId <= 51) ||
            // Kota
            ($tujuanId >= 3101 && $tujuanId <= 5171) ||
            // Kec
            ($tujuanId >= 310101 && $tujuanId <= 517104);


        if ($sumatra) {
            $number = '+62 812-2675-7475';
        } elseif ($jawa) {
            $number = '+62 899-0704-308';
        } else {
            $number = phone();
        }


        $cleaned_number = str_replace(['-', '+', ' '], '', $number);
        return "https://api.whatsapp.com/send/?phone=" . $cleaned_number . "&text=Halo+admin+" . request()->fullUrl() . "&type=phone_number&app_absent=0";
    }
}
