<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;

class LandingPageController extends Controller
{

    public int $year;

    public function __construct()
    {
        $this->year = date('Y');
    }

    public function beranda()
    {
        $province = Province::whereIn("code", [15, 18, 31, 51])->get();
        $city = City::whereIn("code", [3273, 3303, 3578, 5171])->get();
        $featured = [
            $province[1],
            $province[0],
            $province[2],
            $province[1],
            $province[2],
            $province[3],
            $province[2],
            $city[2],
            $city[0],
            $province[2],
            $province[2],
            $city[1],
            $province[3],
            $city[2],
            $city[0],
            $city[2],
            $province[2],
            $province[0],
            $province[2],
            $city[3],
            $city[3],
            $city[2],
            $province[1],
            $city[2],
        ];
        $agent = $province->merge($city);

        return view('pages.home', [
            'title' => Str::title('Jasa Travel Terbaik No. 1 Seluruh Indonesia'),
            'desc' => Str::title('Jasa travel terbaik No. 1 di Indonesia. Nikmati perjalanan aman dan nyaman ke berbagai destinasi favorit di seluruh Indonesia.'),
            'featured' => array_chunk($featured, 2),
            'agent' => $agent,
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
        $asalRes = $this->checkCode($asalId);
        $tujuanRes = $this->checkCode($tujuanId);

        if ((Str::slug($asalRes->name) != $asal || Str::slug($tujuanRes->name) != $tujuan) || $asalId == $tujuanId) {
            abort(404);
        }

        if (Route::currentRouteName() === 'thumbnail-jalur-rute-travel') {
            return ThumbnailController::generateThumbnail(["TRAVEL", $asalRes->name, $tujuanRes->name]);
        }

        $page = Str::title("Travel $asalRes->name $tujuanRes->name");

        $province = Province::whereNotIn('code', [$asalId, $tujuanId])->limit(5)->inRandomOrder()->get();
        $city = City::whereNotIn('code', [$asalId, $tujuanId])->limit(4)->inRandomOrder()->get();
        $district = District::whereNotIn('code', [$asalId, $tujuanId])->limit(3)->inRandomOrder()->get();
        $recommendation = $province->merge($city)->merge($district)->shuffle()->take(6);
        $recommendation->splice(3, 0, [$asalRes]);

        return view('pages.travel', [
            'page' => $page,
            'title' => Str::title("$page Murah $this->year"),
            'desc' => Str::title("Jasa $page PP Terbaik No. 1 di tahun $this->year dengan harga murah dan terjangkau"),
            'travel' => [$asalRes, $tujuanRes],
            'recommendation' => $recommendation,
            'thumbnail' => route('thumbnail-jalur-rute-travel', ['asal' => Str::slug($asalRes['name']), 'tujuan' => Str::slug($tujuanRes['name']), 'asalId' => $asalRes['code'], 'tujuanId' => $tujuanRes['code']]),
        ]);
    }

    public function agenTravel($asal, $asalId)
    {

        $asalRes = $this->checkCode($asalId);

        if (Route::currentRouteName() === 'thumbnail-agen-travel') {
            return ThumbnailController::generateThumbnail(["AGEN TRAVEL", $asalRes->name]);
        }

        $page = Str::title("Agen Travel $asalRes->name");

        return view('pages.agen', [
            'page' => $page,
            'title' => Str::title("8 $page Murah $this->year"),
            'desc' => Str::title("8 Rekomendasi $page Profesional Terbaik No. 1 di tahun $this->year dengan harga murah"),
            'agent' => $asalRes,
            // 'recommendation' => $recommendation,
            'thumbnail' => route('thumbnail-agen-travel', ['asal' => Str::slug($asalRes->name), 'asalId' => $asalRes->code]),
        ]);
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

    public function arsipTravel()
    {
        return view('pages.arsip-travel', [
            'title' => 'Beranda',
            'desc' => 'Beranda',
            'travel' => '',
        ]);
    }
}
