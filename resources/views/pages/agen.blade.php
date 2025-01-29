@extends('app')
@section('content')
    <x-default-baner :title="$page . ' PP Murah ' . date('Y')" :desc="$desc . '.'" />
    <x-layouts.article-section>

        {{-- left --}}
        <x-layouts.article-left>
            {{-- H2 --}}
            <h2>{{ $title }}</h2>
            <img src="{{ $thumbnail }}" alt="{{ $title }}">
            <p>
                Setiap <strong><a
                        href="{{ route('agen-travel', ['asal' => Str::slug($agent->name), 'asalId' => $agent->code]) }}">{{ $page }}</a></strong>
                pada umumnya memiliki kelebihan dan kekurangan masing-masing. Namun kami akan memberikan rekomendasi
                agen
                travel yang amanah dan profesional. Mereka menawarkan pelayanan yang responsif yang tak perlu anda
                ragukan.
                Karena setiap jasa travel siap membantu anda 24 jam. Perjalanan jadi cepat dan sampai di tujuan dengan
                selamat.
            </p>
            <p>
                Jika anda sedang berada di daerah {{ Str::title($agent->name) }} dan ingin melakukan perjalanan ke luar
                kota
                maupun ke luar daerah, maka anda sangat disarankan untuk memesan travel pada agen-agen yang kami
                rekomendasikan. Dengan begitu tidak perlu ribet mencari agen lagi, cukup hubungi mereka via whatsapp
                pada
                nomor yang tertera di bawah ini nanti.
            </p>
            <p>
                Berikut daftar agen travel yang kami rekomendasikan:
            </p>
            <h3>{{ env('APP_NAME') }}</h3>
            <p>Agen yang pertama adalah <a href="{{ route('beranda') }}">{{ env('APP_NAME') }}</a>. {{ env('APP_NAME') }}
                kini menawarkan jasa travel reguler seluruh indonesia. Pada website resmi kami, anda bisa mencari rute
                dari
                ACEH sampai Papua. Siap antar jemput ke setiap kecamatan, kabupaten, kota, dan provinsi.
                {{ env('APP_NAME') }} sangat berpengalaman kali ini, bisa dikatakan bahwa {{ env('APP_NAME') }}
                merupakan
                agen travel terbaik no. 1 di indonesia.</p>
            <p>Untuk memastikan keraguan anda, anda bisa membayar biaya travel ketika anda sampai di lokasi. Tidak
                disarankan untuk membayar kepada driver. Bisa langsung menghubungi admin untuk menanyakan metode
                pembayaran.
                Untuk lebih detail, berikut profil dari {{ env('APP_NAME') }}:
            </p>
            {{-- TABLE --}}
            <div class="relative rounded-xl overflow-auto">
                <div class="shadow-sm overflow-x-auto my-4">
                    <table class="border-collapse table-auto w-full">
                        <thead class="bg-white">
                            <tr
                                class=" [&_th]:border-b [&_th]:font-medium [&_th]:whitespace-nowrap [&_th]:p-4 [&_th]:pb-3 [&_th]:text-slate-700 [&_th]:w-1/2">
                                <th class="!pl-8">Nama</th>
                                <th class="!pr-8 !font-bold">{{ env('APP_NAME') }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Alamat</td>
                                <td class="pr-8">Tersedia diseluruh kecamatan, kabupaten, kota, dan provinsi di
                                    indonesia
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Whatsapp</td>
                                <td class="pr-8">0882-8931-7870</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Telepon</td>
                                <td class="pr-8">0882-8931-7870</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Unit</td>
                                <td class="pr-8">Xennia, Luxio, Innova Reborn, Fortuner, dan Hiace</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Jadwal</td>
                                <td class="pr-8">Setiap Jam</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Harga</td>
                                <td class="pr-8">Mulai dari Rp100.000</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Fasilitas</td>
                                <td class="pr-8">Bonus makan, minum, snack, via tol, dan door to door.</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Layanan Lain</td>
                                <td class="pr-8">Carter drop, Kirim paket/dokumen, dan Paket wisata keliling
                                    {{ Str::title($agent->name) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- H3 --}}
            <h3>SL Twin Trans Travel</h3>
            <p>
                Yang kedua adalah <a href="https://www.sltwintranstravel.my.id/" target="_blank">SL Twin Trans
                    Travel</a>,
                agen travel terbaik dari daerah Ciamis, Semarang dan sekitarnya. SL Twin Trans Travel biasanya melayani
                jasa
                <strong>{{ Str::title($page) }}</strong> tujuan seluruh Indonesia. Anda bisa tanyakan lebih detail
                untuk daerah yang dijangkau dan tidak dijangkau.
            </p>
            <p>
                SL Twin Trans Travel telah berpengalaman lebih dari 5 tahun menjadi agen travel. Driver yang ada sangat profesional dan amanah. Setiap unit yang dimiliki telah dilengkapi fasilitas AC dan Audio. Berikut detail agen travel ini:
            </p>
            
        </x-layouts.article-left>


        {{-- right --}}
        <x-layouts.article-right>
            <x-booking :page="$page" />
        </x-layouts.article-right>


    </x-layouts.article-section>
@endsection
