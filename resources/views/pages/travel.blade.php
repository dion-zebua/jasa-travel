@extends('app')
@section('content')
    <x-default-baner :title="$page . ' PP Murah ' . date('Y')" :desc="$desc . '.'" />
    <article>
        <section id="content" class="__container !max-w-[800px] text-justify !py-12">
            {{-- H2 --}}
            <h2>{{ $title }}</h2>
            <img src="{{ route('thumbnail-jalur-rute-travel', ['asal' => Str::slug($travel[0]['name']), 'tujuan' => Str::slug($travel[1]['name']), 'asalId' => $travel[0]['code'], 'tujuanId' => $travel[1]['code']]) }}"
                alt="">
            <p>
                <a href="{{ route('beranda') }}">{{ Str::upper(env('APP_NAME')) }}</a> kini hadir untuk membantu perjalanan
                travel anda
                dan keluarga. Kami siap antar jemput anda dari
                {{ Str::title($travel[0]->name) }} menuju {{ Str::title($travel[1]->name) }} atau pun sebaliknya dari
                {{ Str::title($travel[1]->name) }} ke {{ Str::title($travel[0]->name) }}. Dijamin aman, cepat, nyaman, dan
                selamat sampai tujuan.
            </p>
            <p>Memilih jasa travel harus selalu berhati-hati, anda sangat disarankan untuk
                membayar biaya travel ketika sudah sampai di tujuan. Modus penipuan kini semakin merambat ke bidang jasa
                travel
                reguler. Banyak yang menjadi agen atau travel abal-abal dengan iming-iming harga murah.
            </p>
            {{-- H3 --}}
            <h3>Harga Travel Murah</h3>
            <p>Kami selalu menawarkan jasa travel dengan harga murah dan terjangkau. Bahkan anda bisa melakukan negosiasi
                dengan
                admin langsung jika merasa tidak mampu. Segera hubungi kami untuk negosiasi biaya, kami siap membantu anda.
            </p>
            <p>
                Biaya dari {{ Str::title($travel[0]->name) }} menuju {{ Str::title($travel[1]->name) }} bisa berubah
                tergantung situasi. Pesan tiket travel anda 5 hari sebelum berangkat agar dapat harga yang lebih murah. Jika
                hari pemesanan dan hari keberangkatan dekat, maka harga mulai naik. Apalagi jika anda memesan tiket travel
                pada
                hari raya besar.
            </p>
            {{-- H3 --}}
            <h3>Jadwal keberangkatan</h3>
            <p>Setiap travel tentunya memiliki jadwal keberangkatan tersendiri. Kami juga memiliki jadwal sendiri,
                keberangkatan setiap hari dengan jam tertentu. Berikut jadwalnya:</p>
            <div class="relative rounded-xl overflow-auto">
                <div class="shadow-sm overflow-x-auto my-4">
                    <table class="border-collapse table-auto w-full">
                        <thead class="bg-white">
                            <tr
                                class=" [&_th]:border-b [&_th]:font-medium [&_th]:whitespace-nowrap [&_th]:p-4 [&_th]:pb-3 [&_th]:text-slate-700 [&_th]:w-1/2">
                                <th class="!pl-8">
                                    {{ Str::title($travel[0]->name) }}</th>
                                <th class="!pr-8">
                                    {{ Str::title($travel[1]->name) }}</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @php
                                $jadwal = [['05', '07'], ['10', '13'], ['15', '17'], ['20', '21']];
                            @endphp

                            @foreach ($jadwal as $item)
                                <tr class="[&_td]:border-b [&_td]:border-slate-200 [&_td]:p-4 [&_td]:text-slate-500">
                                    <td class="!pl-8">
                                        {{ $item[0] }}:00 WIB</td>
                                    <td class="pr-8">
                                        {{ $item[1] }}:00 WIB</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <p>Jadwal tersebut bisa berubah. Jika anda ingin berangkat sesuai jadwal yang diinginkan dan tidak tertera
                di tabel, maka anda harus memesan carter kepada admin. Bisa sesuaikan jam dan hari keberangkatan.</p>
            {{-- H3 --}}
            <h3>Unit Mobil Lengkap</h3>
            <p>Keselamatan dan kenyamanan dalam perjalanan menjadi prioritas kami. Kami akan berusaha sebaik mungkin untuk
                meningkatkannya. Setiap mobil yang kamu berangkat selalu dicuci dan di rawat untuk menjamin keselamatan.
                Semua unit telah dilengkapi dengan fasilitas terbaik, seperti AC dan audio. Perjalanan anda semakin nyaman
                bersama {{ Str::upper(env('APP_NAME')) }}.
            </p>
            {{-- H3 --}}
            <h3>Rute Lengkap</h3>
            <p>Perlu anda ketahui bahwa kami melayani travel seluruh Indonesia. Dengan begitu kami memiliki banyak <a
                    href="{{ route('arsip-travel') }}">rute travel</a> yang akan membantu anda. Selain itu, kami juga
                memiliki agen travel di seluruh Indonesia. Baik itu dalam setiap provinsi, kota, kabupaten, hingga
                kecamatan.
            </p>
            <p>Ada beberapa rute travel yang kami rekomendasikan untuk anda, dan mungkin anda tertarik:</p>
            <ul>
                @foreach ($recommendation as $item)
                    <li><a
                            href="">{{ Str::title('Travel ' . ($loop->index < 3 ? $travel[0]->name : $travel[1]->name) . ' ' . $item->name) }}</a>
                    </li>
                @endforeach
            </ul>
            {{-- H2 --}}
            <h2>Kelebihan Travel {{ Str::title($travel[0]->name . ' ' . $travel[1]->name) }} PP</h2>
            <p>
                Kami menawarkan jasa travel dengan memperhatikan kepuasan pelanggan. Kami membantu anda 24 jam untuk
                melakukan travel kemana pun di seluruh Indonesia. Berikut kelebihan kami sebagai jasa travel yang akan
                mengantar anda:
            </p>
            <ul>
                <li>Harga murah, terjangkau, dan bisa negosiasi,</li>
                <li>Pembayaran di akhir setelah anda tiba di lokasi tujuan,</li>
                <li>Bisa melakukan pembatalan, pengembalian ulang, dan perubahan jadwal,</li>
                <li>Anda akan dijemput dirumah,</li>
                <li>Tersedia carter drop dan carter pp,</li>
                <li>Semua unit bersih dan memiliki AC,</li>
                <li>Travel reguler 24 jam,</li>
                <li>Menguasai seluruh daerah
                    <a
                        href="{{ route('agen-travel', ['asal' => Str::slug($travel[0]->name), 'asalId' => $travel[0]->code]) }}">{{ $travel[0]->name }}</a>
                    dan
                    <a
                        href="{{ route('agen-travel', ['asal' => Str::slug($travel[1]->name), 'asalId' => $travel[1]->code]) }}">{{ $travel[1]->name }}</a>,
                </li>
                <li>Travel door to door dan pulang pergi,</li>
                <li>Cepat karena Via tol,</li>
                <li>Bonus makan dan minum.</li>
            </ul>
            {{-- H2 --}}
            <h2>Cara Pesan Travel</h2>
            <p>Pemesanan travel dijamin sangat mudah (anti ribet pokoknya). Anda tidak wajib datang ke garasi kami, bisa
                dengan langsung memesan secara online. Pemesanan online dibuka 24 jam via kontak whatsapp pada nomor
                {{ phone() }} 
            </p>
        </section>
    </article>
@endsection
