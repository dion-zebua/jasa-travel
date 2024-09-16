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
            "asalprovinsi" => "required|integer",
            "asalkotakab" => "nullable|integer",
            "asalkecamatan" => "nullable|integer",

            "tujuanprovinsi" => "required|integer",
            "tujuankotakab" => "nullable|integer",
            "tujuankecamatan" => "nullable|integer",
        ]);

        $dataRes = [
            Str::slug(District::where('code', $request->asalkecamatan)->first()->name ??
                City::where('code', $request->asalkotakab)->first()->name ??
                Province::where('code', $request->asalprovinsi)->first()->name) ?? NULL,

            Str::slug(District::where('code', $request->tujuankecamatan)->first()->name ??
                City::where('code', $request->tujuankotakab)->first()->name ??
                Province::where('code', $request->tujuanprovinsi)->first()->name) ?? NULL,

            $request->asalkecamatan ?? $request->asalkotakab ?? $request->asalprovinsi ?? 0,

            $request->tujuankecamatan ?? $request->tujuankotakab ?? $request->tujuanprovinsi ?? 0,
        ];

        return redirect()->route('jalur-rute-travel', $dataRes);
    }

    public function jalurRuteTravel($asal, $tujuan, $asalId, $tujuanId)
    {
        if ($asalId == $tujuanId) {
            abort(404);
        }
        $asalRes = $this->checkCode($asalId);
        $tujuanRes = $this->checkCode($tujuanId);

        if (Str::slug($asalRes->name) != $asal || Str::slug($tujuanRes->name) != $tujuan) {
            abort(404);
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
