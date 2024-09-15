<div class="">
    <select {{ $area->count() < 1 ? 'disabled' : '' }} {{ $required ? 'required' : '' }}
        class="w-full border cursor-pointer text-sm border-slate-300 p-2 rounded focus:outline-blue-700">
        <option value="" disabled></option>
        <option value="" disabled selected>Pilih {{ $title }}</option>

        @forelse ($area as $item)
            <option value="{{ $item->id }}">{{ Str::title($item->name) }} {{$area->count()}}</option>
        @empty
            <option value="" disabled>Tidak Ada Data</option>
        @endforelse
        <option value="" disabled></option>
    </select>
</div>
