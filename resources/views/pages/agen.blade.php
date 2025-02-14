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

            <h3 class="list-agent">{{ env('APP_NAME') }}</h3>
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

            {{-- H3 SL TWIN TRANS TRAVEL --}}
            <h3 class="list-agent">SL Twin Trans Travel</h3>
            <p>
                Yang kedua adalah <a href="https://www.sltwintranstravel.my.id/" target="_blank">SL Twin Trans
                    Travel</a>,
                agen travel terbaik dari daerah Ciamis, Semarang dan sekitarnya. SL Twin Trans Travel biasanya melayani
                jasa
                <strong>{{ Str::title($page) }}</strong> tujuan seluruh Indonesia. Anda bisa tanyakan lebih detail
                untuk daerah yang dijangkau dan tidak dijangkau.
            </p>
            <p>
                SL Twin Trans Travel telah berpengalaman lebih dari 5 tahun menjadi agen travel. Driver yang ada sangat
                profesional dan amanah. Setiap unit yang dimiliki telah dilengkapi fasilitas AC dan Audio. Berikut detail
                agen travel ini:
            </p>
            {{-- TABLE --}}
            <div class="relative rounded-xl overflow-auto">
                <div class="shadow-sm overflow-x-auto my-4">
                    <table class="border-collapse table-auto w-full">
                        <thead class="bg-white">
                            <tr
                                class=" [&_th]:border-b [&_th]:font-medium [&_th]:whitespace-nowrap [&_th]:p-4 [&_th]:pb-3 [&_th]:text-slate-700 [&_th]:w-1/2">
                                <th class="!pl-8">Nama</th>
                                <th class="!pr-8 !font-bold">SL Twin Trans Travel</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Alamat</td>
                                <td class="pr-8">Kabupaten Ciamis, Jawa Barat
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Whatsapp</td>
                                <td class="pr-8">0899-0704-308</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Telepon</td>
                                <td class="pr-8">0899-0704-308</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Unit</td>
                                <td class="pr-8">Toyota Avanza, Calya, Luxio, Hiace, dan Innova</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Jadwal</td>
                                <td class="pr-8">
                                    <ul>
                                        <li>Pagi : Jam 07.00 WIB</li>
                                        <li>Siang : Jam 12.00 WIB</li>
                                        <li>Sore : Jam 17.00 WIB</li>
                                        <li>Malam : Jam 21.00/23.00 WIB</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Harga</td>
                                <td class="pr-8">Mulai dari Rp100.000</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Fasilitas</td>
                                <td class="pr-8">Bonus minum, snack, via tol, dan door to door.</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Layanan Lain</td>
                                <td class="pr-8">Carter drop dan Kirim paket/dokumen</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- H3 Saffana Trans --}}
            <h3 class="list-agent">Saffana Trans</h3>
            <p>
                Selanjutnya Agen Saffana Trans dari Semarang. <a href="https://saffana-trans.web.id/"
                    target="_blank">Saffana Trans</a> sangat rekomendasi untuk perjalanan travel, baik dalam kota maupun
                keluar kota. Mereka telah berpengalaman dalam melakukan perjalanan travel lebih dari 8 tahun. Dengan unit
                mobil dan bus yang berbagai macam.
            </p>
            <p>
                Biasanya, Saffana Trans fokus mengantar penumpang ke Bandara, Stasiun, dan Pelabuhan. Dengan tarif travel
                yang tergolong murah, yaitu mulai dari Rp150.000. Degan harga segitu, anda sangat hemat dan kantong jadi
                aman. Selain itu, anda bisa menegosiasikan harga kepada admin melalui kontak whatsapp.
            </p>
            <p>
                Jika anda sudah memesan, maka anda akan diberikan nota pembayaran berupa pdf online. Anda pakai pdf tersebut
                sebagai syarat masuk bus kami.
            </p>
            <p>Berikut detail dari Agen Saffana Trans:</p>
            {{-- TABLE --}}
            <div class="relative rounded-xl overflow-auto">
                <div class="shadow-sm overflow-x-auto my-4">
                    <table class="border-collapse table-auto w-full">
                        <thead class="bg-white">
                            <tr
                                class=" [&_th]:border-b [&_th]:font-medium [&_th]:whitespace-nowrap [&_th]:p-4 [&_th]:pb-3 [&_th]:text-slate-700 [&_th]:w-1/2">
                                <th class="!pl-8">Nama</th>
                                <th class="!pr-8 !font-bold">Saffana Travel</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Alamat</td>
                                <td class="pr-8">Munding, Kecamatan Bergas, Kabupaten Semarang, Jawa Tengah.
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Whatsapp</td>
                                <td class="pr-8">0813-1391-1487</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Telepon</td>
                                <td class="pr-8">0813-1391-1487</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Unit</td>
                                <td class="pr-8">Luxio, Hiace, Calya, dan Innova</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Jadwal</td>
                                <td class="pr-8">
                                    <ul>
                                        <li>08.00 WIB</li>
                                        <li>15.00 WIB</li>
                                        <li>21.00 WIB</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Harga</td>
                                <td class="pr-8">Mulai dari Rp150.000</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Fasilitas</td>
                                <td class="pr-8">Bonus makan, free bagasi, dan perjalanan via tol.</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Layanan Lain</td>
                                <td class="pr-8">Carter drop</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- H3 Mumpuni Trans Java --}}
            <h3 class="list-agent">Mumpuni Trans Java</h3>
            <p>
                Agen selanjutnya adalah Mumpuni Trans Java. Mumpuni Trans Java setiap hari terus meningkatkan pelayanan dan
                jangkauan rute. Bekerjasama dengan berbagai travel untuk membantu perjalanan di seluruh Indonesia. Karena
                kerjasama, maka beberapa rute memiliki harga yang sedikit lebih mahal. Namun jangan khawatir, harga travel
                sesuai dengan pelayanan yang akan anda dapatkan.
            </p>
            <p>
                Beberapa alasan anda harus memilih Mumpuni Trans Java adalah:
            </p>
            <ul>
                <li>Travel door to door</li>
                <li>Harga travel terjangkau</li>
                <li>Mobil nyaman dan lengkap</li>
                <li>Driver profesional</li>
                <li>Mobil berangkat 24 jam</li>
                <li>CS support online 24 jam via whatsapp</li>
            </ul>
            <p>Untuk lebih lanjut, berikut detail dari Mumpuni Trans Java:</p>
            {{-- TABLE --}}
            <div class="relative rounded-xl overflow-auto">
                <div class="shadow-sm overflow-x-auto my-4">
                    <table class="border-collapse table-auto w-full">
                        <thead class="bg-white">
                            <tr
                                class=" [&_th]:border-b [&_th]:font-medium [&_th]:whitespace-nowrap [&_th]:p-4 [&_th]:pb-3 [&_th]:text-slate-700 [&_th]:w-1/2">
                                <th class="!pl-8">Nama</th>
                                <th class="!pr-8 !font-bold">Mumpuni Trans Java</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Alamat</td>
                                <td class="pr-8">Surabaya, Jawa Timur.
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Whatsapp</td>
                                <td class="pr-8">0823-8006-3148</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Telepon</td>
                                <td class="pr-8">0823-8006-3148</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Unit</td>
                                <td class="pr-8">Tersedia semua unit</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Jadwal</td>
                                <td class="pr-8">
                                    Jadwal menyesuaikan situasi, hubungi admin untuk info lebih lanjut
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Harga</td>
                                <td class="pr-8">Mulai dari Rp175.000</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Fasilitas</td>
                                <td class="pr-8">Bonus makan dan minum saja</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Layanan Lain</td>
                                <td class="pr-8">Tidak ada</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            {{-- H3 HERI TRANS --}}
            <h3 class="list-agent">Heri Trans</h3>
            <p>
                Agen selanjutnya adalah Heri Trans. <a href="https://heritrans.com" target="_blank">Heri Trans</a> sangat
                rekomendasi untuk perjalanan di daerah seluruh Pulau Jawa dan Pulau Bali. Armada travel semua terawat dengan
                baik, driver sangat profesinal dan berpengalaman, dan kami selalu tepat waktu dalam penjemputan dan
                pengantaran.
            </p>
            <p>
                Mereka menawarkan jasa travel reguler, carter drop dan carter pulang pergi. Jika carter maka anada bisa
                memilih jadwal perjalanan kapan pun, bahkan anda juga bisa memilih unit yang mau anda pakai. Untuk lebih
                detail silahkan hubungi mereka di bawah ini:
            </p>
            {{-- TABLE --}}
            <div class="relative rounded-xl overflow-auto">
                <div class="shadow-sm overflow-x-auto my-4">
                    <table class="border-collapse table-auto w-full">
                        <thead class="bg-white">
                            <tr
                                class=" [&_th]:border-b [&_th]:font-medium [&_th]:whitespace-nowrap [&_th]:p-4 [&_th]:pb-3 [&_th]:text-slate-700 [&_th]:w-1/2">
                                <th class="!pl-8">Nama</th>
                                <th class="!pr-8 !font-bold">Heri Trans</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Alamat</td>
                                <td class="pr-8">Banjaranyar, Kec. Sokaraja, Kab. Banyumas, Jawa Tengah.
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Whatsapp</td>
                                <td class="pr-8">0895-1970-1457</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Telepon</td>
                                <td class="pr-8">0895-1970-1457</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Unit</td>
                                <td class="pr-8">Tersedia semua unit</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Jadwal</td>
                                <td class="pr-8">
                                    <ul>
                                        <li>08:00 WIB</li>
                                        <li>15:00 WIB</li>
                                        <li>21:00 WIB</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Harga</td>
                                <td class="pr-8">Mulai dari Rp150.000</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Fasilitas</td>
                                <td class="pr-8">Mobil ber-ac, makan, dan cindramata</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Layanan Lain</td>
                                <td class="pr-8">Carter Drop dan Carter PP</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- H3 STEFFY TRANS --}}
            <h3 class="list-agent">Steffy Trans</h3>
            <p>Travel antar kota sangat beresiko jika memilih agen dengan asal-asalan. Pastikan anda memilih yang jelas
                alamatnya dan telah berpengalaman. Bisa juga dengan menanyakan kepada sanak saudara atau kerabat. Atau
                tanyakan langsung kepada kami, pada nomor <a href="{{ whatsapp() }}">{{ phone() }}</a>. Kami
                siap memberikan rekomendasi kepada anda.
            </p>
            @php
                $tanggal = \Carbon\Carbon::create(2020, 12, 25);
                $sekarang = \Carbon\Carbon::now();

                $selisihHari = $sekarang->diffInDays($tanggal);

            @endphp
            <p>
                <a href="https://steffy-trans.com/">Steffy Trans</a> adalah solusi perjalanan terbaik anda di Jawa Tengah.
                Menjadikan kenyamanan sebagai prioritas mereka. Steffy Trans telah mengantarkan lebih dari
                {{ 5000 + 2 * $selisihHari }} penumpang sejak {{ $tanggal->isoFormat('D MMMM YYYY') }}. Dilansir dari web
                Steffy Trans, terlihat beberapa penumpang meresa sangat puas dengan pelayanan Steffy Trans. Untuk itu
                buktikan sendiri dengan memesan travel pada Steffy Trans.
            </p>
            <p>
                Berikut detail agen Steffy Trans:
            </p>
            {{-- TABLE --}}
            <div class="relative rounded-xl overflow-auto">
                <div class="shadow-sm overflow-x-auto my-4">
                    <table class="border-collapse table-auto w-full">
                        <thead class="bg-white">
                            <tr
                                class=" [&_th]:border-b [&_th]:font-medium [&_th]:whitespace-nowrap [&_th]:p-4 [&_th]:pb-3 [&_th]:text-slate-700 [&_th]:w-1/2">
                                <th class="!pl-8">Nama</th>
                                <th class="!pr-8 !font-bold">Steffy Trans</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Alamat</td>
                                <td class="pr-8">Banjaranyar, Banyumas Regency, Central Java
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Whatsapp</td>
                                <td class="pr-8">0882-2174-7040</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Telepon</td>
                                <td class="pr-8">0882-2174-7040</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Unit</td>
                                <td class="pr-8">Tersedia semua unit</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Jadwal</td>
                                <td class="pr-8">
                                    <ul>
                                        <li>04:00 WIB</li>
                                        <li>10:00 WIB</li>
                                        <li>15:00 WIB</li>
                                        <li>19:00 WIB</li>
                                        <li>21:00 WIB</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Harga</td>
                                <td class="pr-8">Mulai dari Rp100.000</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Fasilitas</td>
                                <td class="pr-8">Bonus makan dan minum</td>
                            </tr>
                            <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                <td class="!pl-8">Layanan Lain</td>
                                <td class="pr-8">Carter Drop, Carter PP, City Tour, dan Kirim Paket</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- H3 --}}
            <h3 class="list-agent"></h3>


        </x-layouts.article-left>


        {{-- right --}}
        <x-layouts.article-right>
            <x-booking :page="$page" />
        </x-layouts.article-right>


    </x-layouts.article-section>
@endsection
