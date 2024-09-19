@if ($errors->any())
    <div class="animate-alert bg-white pt-2 pr-2 shadow-2xl z-[99] border-l-8 border-l-blue-700 fixed bottom-5 right-5" id="alert">
        <div class="relative">
            <button id="closeAlert" class="absolute right-0 top-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class=" size-5 stroke-blue-700">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </button>
            <div class="text-[13px] p-4 pr-6">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <script>
        const alert = document.querySelector('#alert')
        const closeAlert = document.querySelector('#closeAlert')

        if (alert && closeAlert) {
            closeAlert.addEventListener('click', e => {
                alert.classList.add('!hidden')
            })
        }
    </script>
@endif
