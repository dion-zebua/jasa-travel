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

        $kalimantanRanges = [
            [61, 65],           // Provinsi
            [6101, 6571],       // Kota
            [610101, 657104],   // Kecamatan
        ];

        $sulawesiRanges = [
            [71, 76],           // Provinsi
            [7101, 7606],       // Kota
            [710105, 760605],   // Kecamatan
        ];

        $jawa = $inRange($asalId, $jawaRanges) || $inRange($tujuanId, $jawaRanges);

        $sumatra = $inRange($asalId, $sumatraRanges) || $inRange($tujuanId, $sumatraRanges);

        $kalimantan = $inRange($asalId, $kalimantanRanges) || $inRange($tujuanId, $kalimantanRanges);

        $sulawesi = $inRange($asalId, $sulawesiRanges) || $inRange($tujuanId, $sulawesiRanges);

        if ($jawa) {
            return '+62 899-0704-308';
        } elseif ($sumatra) {
            return '+62 812-1156-3500';
        } elseif ($kalimantan) {
            return '+62 857-9190-4615';
        } elseif ($sulawesi) {
            // return '+62 857-0518-0556';
            return '+62 821-3087-7954';
        } else {
            return '+62 821-3087-7954';
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
