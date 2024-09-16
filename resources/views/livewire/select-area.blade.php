<div class="col-span-1 flex flex-col gap-y-3">
    <p>{{ $label }} :</p>
    <x-select title="Provinsi" model="Province" required />
    <x-select title="Kota/kab" model="City" :whereId=$selectedProvince />
    <x-select title="Kecamatan" model="District" :whereId=$selectedCity />
</div>
