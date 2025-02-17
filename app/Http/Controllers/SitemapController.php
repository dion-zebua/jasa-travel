<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;

class SitemapController extends Controller
{
    public function all_data()
    {
        $province = collect(Province::all());
        $city = collect(City::all());
        $district = collect(District::all());
        $data = $province->merge($city)->merge($district);

        return $data;
    }

    public function static_page()
    {

        $data = [
            route('beranda'),
            route('arsip-travel'),
            route('arsip-agen'),
            route('travel-sitemap'),
            route('agen-sitemap'),
        ];

        return view('pages.sitemap', [
            'data' => $data,
        ]);
    }

    public function agen_sitemap()
    {
        $data = $this->all_data();

        $res = $data->map(function ($item) {
            return route('agen-travel', [
                'asal' => Str::slug($item->name),
                'asalId' => $item->code,
            ]);
        });


        return view('pages.sitemap', [
            'data' => $res,
        ]);
    }


    public function travel_page()
    {
        $data = $this->all_data();

        $res = $data->map(function ($item) {
            return route('single-travel-sitemap', [
                'asal' => Str::slug($item->name),
                'asalId' => $item->code,
            ]);
        });

        return view('pages.sitemap', [
            'data' => $res,
        ]);
    }

    public function single_travel_page($asal, $asalId)
    {

        $data = $this->all_data();

        $res = $data->map(function ($item) use ($asal, $asalId) {
            if ($asalId != $item->code) {
                return route('jalur-rute-travel', [
                    'asal' => $asal,
                    'asalId' => $asalId,
                    'tujuan' => Str::slug($item->name),
                    'tujuanId' => $item->code,
                ]);
            }
        });

        return view('pages.sitemap', [
            'data' => $res,
        ]);
    }
}
