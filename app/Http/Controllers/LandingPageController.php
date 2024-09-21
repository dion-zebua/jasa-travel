<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;

class LandingPageController extends Controller
{
    public function beranda()
    {
        return view('pages.home', [
            'title' => 'Beranda',
            'desc' => 'Beranda',
        ]);
    }
    public function cariRute(Request $request)
    {
        $validation = $request->validate([
            "asal_provinsi" => "required|integer|exists:indonesia_provinces,code",
            "asal_kotakab" => "nullable|integer|exists:indonesia_cities,code",
            "asal_kecamatan" => "nullable|integer|exists:indonesia_districts,code",

            "tujuan_provinsi" => "required|integer|exists:indonesia_provinces,code",
            "tujuan_kotakab" => "nullable|integer|exists:indonesia_cities,code",
            "tujuan_kecamatan" => "nullable|integer|exists:indonesia_districts,code",
        ]);

        $dataRes = [
            Str::slug(District::where('code', $request->asal_kecamatan)->first()?->name ??
                City::where('code', $request->asal_kotakab)->first()?->name ??
                Province::where('code', $request->asal_provinsi)->first()?->name) ?? NULL,

            Str::slug(District::where('code', $request->tujuan_kecamatan)->first()?->name ??
                City::where('code', $request->tujuan_kotakab)->first()?->name ??
                Province::where('code', $request->tujuan_provinsi)->first()?->name) ?? NULL,

            $request->asal_kecamatan ?? $request->asal_kotakab ?? $request->asal_provinsi ?? 0,

            $request->tujuan_kecamatan ?? $request->tujuan_kotakab ?? $request->tujuan_provinsi ?? 0,
        ];

        return redirect()->route('jalur-rute-travel', $dataRes);
    }

    public function jalurRuteTravel($asal, $tujuan, $asalId, $tujuanId)
    {
        if ($asalId == $tujuanId) {
            return back()->withErrors([
                'error' => 'Rute Travel Tidak Ditemukan!',
            ]);
        }
        $asalRes = $this->checkCode($asalId);
        $tujuanRes = $this->checkCode($tujuanId);

        if (Str::slug($asalRes->name) != $asal || Str::slug($tujuanRes->name) != $tujuan) {
            return back()->withErrors([
                'error' => 'Rute Travel Tidak Ditemukan!',
            ]);
        }
        return [$asalRes, $tujuanRes];
    }

    public function agenTravel($asal, $asalId)
    {

        $asalRes = $this->checkCode($asalId);

        return $asalRes;
    }


    public function checkCode($code)
    {
        if ($code <= 92) {
            $res = Province::where('code', $code)->firstOrFail();
        } elseif ($code <= 9271) {
            $res = City::where('code', $code)->firstOrFail();
        } else {
            $res = District::where('code', $code)->firstOrFail();
        }
        return $res;
    }
}
