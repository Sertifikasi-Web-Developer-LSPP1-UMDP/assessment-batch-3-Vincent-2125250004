    @extends('layouts.app')

    @section('header')
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pilih Jalur Pendaftaran') }}
        </h2>
    @endsection

    @section('content')
        <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @if (session()->has('success') || session()->has('danger') || session()->has('warning') || session()->has('info'))
            <script defer>
                document.addEventListener('DOMContentLoaded', () => {
                    const showToast = (icon, message) => {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: icon,
                            title: message,
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                    };

                    @foreach (['success', 'danger', 'warning', 'info'] as $type)
                        @if (session()->has($type))
                            showToast('{{ $type }}', "{{ session()->get($type) }}");
                        @endif
                    @endforeach
                });
            </script>
        @endif
        
        <div class="container-fluid auto-rows-max m-10 p-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 sm:gap-4 gap-3">
            <a href="{{ route('pendaftaran.create', ['jalur' => 'Beasiswa']) }}" type="button">
                <div
                    class="group relative cursor-pointer overflow-hidden bg-white dark:bg-gray-800 px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
                    <span
                        class="absolute top-10 z-0 h-20 w-20 rounded-full bg-sky-800 transition-all duration-300 group-hover:scale-[15]"></span>
                    <div class="relative z-10 mx-auto max-w-md">
                        <span
                            class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 73.27"
                                style="enable-background:new 0 0 122.88 73.27" xml:space="preserve"
                                class="w-10 h-10 fill-white">
                                <style type="text/css">
                                    <![CDATA[
                                    .st0 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    }
                                    ]]>
                                </style>
                                <g>
                                    <path class="st0"
                                        d="M104.27,58.88l-0.54-19.99l-32.85,9.49c-2.96,0.65-5.88,0.96-8.74,0.97c-3.07,0.01-6.09-0.32-9.06-0.97 L21.7,38.79v20.27c0.9,10.53,31.11,13.75,40.38,14.19c7.43,0.36,36.78-3.52,40.64-9.57C103.55,62.36,104.07,60.76,104.27,58.88 L104.27,58.88z M117.58,24.5v24.43h0.77c0.53,0,0.96,0.43,0.96,0.96v6.57c0,0.52-0.43,0.96-0.96,0.96h-0.77v2.3 c0.98,0.18,1.73,1.05,1.73,2.08v0c0,1.16-0.96,2.12-2.12,2.12h-3.79c-1.16,0-2.12-0.95-2.12-2.12v0c0-1.03,0.75-1.9,1.73-2.08v-2.3 h-0.77c-0.52,0-0.96-0.43-0.96-0.96v-6.57c0-0.53,0.43-0.96,0.96-0.96h0.77v-23L73.03,38.35c-7.24,1.72-14.48,1.84-21.72,0 L7.18,25.18l-3.99-1.19c-4.97-2.03-3.73-6.8,0.9-7.9L54,1.19c5.15-1.47,10.29-1.7,15.44,0l49.01,14.72 c5.33,1.3,6.38,6.23,0.18,8.26L117.58,24.5L117.58,24.5z" />
                                </g>
                            </svg>
                        </span>
                        <div
                            class="space-y-6 pt-5 text-base leading-7 text-gray-400 transition-all duration-300 group-hover:text-white/90">
                            <h1
                                class="text-md font-semibold leading-7 text-sky-500 dark:text-white sm:text-3xl sm:truncate">
                                Program Beasiswa</h1>
                        </div>
                        <div
                            class="space-y-6 pt-5 text-base leading-7 text-gray-500 dark:text-white transition-all duration-300 group-hover:text-white/90">
                            <p>Yayasan Kuliah Asik memberikan beasiswa kepada calon mahasiswa Universitas KA melalui Bebas
                                Uang
                                Kuliah
                            </p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ route('pendaftaran.create', ['jalur' => 'Test']) }}" type="button">
                <div
                    class="flex group relative cursor-pointer overflow-hidden bg-white dark:bg-gray-800 px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
                    <span
                        class="absolute top-10 z-0 h-20 w-20 rounded-full bg-red-800 transition-all duration-300 group-hover:scale-[15]"></span>
                    <div class="relative z-10 mx-auto max-w-md">
                        <span
                            class="grid h-20 w-20 place-items-center rounded-full bg-red-500 transition-all duration-300 group-hover:bg-red-400">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 121.48 122.88"
                                style="enable-background:new 0 0 121.48 122.88" xml:space="preserve"
                                class="w-10 h-10 fill-white">
                                <style type="text/css">
                                    .st0 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    }
                                </style>
                                <g>
                                    <path class="st0"
                                        d="M96.84,2.22l22.42,22.42c2.96,2.96,2.96,7.8,0,10.76l-12.4,12.4L73.68,14.62l12.4-12.4 C89.04-0.74,93.88-0.74,96.84,2.22L96.84,2.22z M70.18,52.19L70.18,52.19l0,0.01c0.92,0.92,1.38,2.14,1.38,3.34 c0,1.2-0.46,2.41-1.38,3.34v0.01l-0.01,0.01L40.09,88.99l0,0h-0.01c-0.26,0.26-0.55,0.48-0.84,0.67h-0.01 c-0.3,0.19-0.61,0.34-0.93,0.45c-1.66,0.58-3.59,0.2-4.91-1.12h-0.01l0,0v-0.01c-0.26-0.26-0.48-0.55-0.67-0.84v-0.01 c-0.19-0.3-0.34-0.61-0.45-0.93c-0.58-1.66-0.2-3.59,1.11-4.91v-0.01l30.09-30.09l0,0h0.01c0.92-0.92,2.14-1.38,3.34-1.38 c1.2,0,2.41,0.46,3.34,1.38L70.18,52.19L70.18,52.19L70.18,52.19z M45.48,109.11c-8.98,2.78-17.95,5.55-26.93,8.33 C-2.55,123.97-2.46,128.32,3.3,108l9.07-32v0l-0.03-0.03L67.4,20.9l33.18,33.18l-55.07,55.07L45.48,109.11L45.48,109.11z M18.03,81.66l21.79,21.79c-5.9,1.82-11.8,3.64-17.69,5.45c-13.86,4.27-13.8,7.13-10.03-6.22L18.03,81.66L18.03,81.66z" />
                                </g>
                            </svg>
                        </span>
                        <div
                            class="space-y-6 pt-5 text-base leading-7 text-gray-200 transition-all duration-300 group-hover:text-white/90">
                            <h1
                                class="text-2xl font-semibold leading-7 text-red-500 dark:text-white sm:text-3xl sm:truncate">
                                Jalur Test</h1>
                        </div>
                        <div
                            class="space-y-6 pt-5 text-base leading-7 text-gray-500 dark:text-white transition-all duration-300 group-hover:text-white/90">
                            <p>Universitas KA memiliki beberapa jalur seleksi, salah satunya adalah Ujian Tulis Mandiri
                                Berbasis
                                Komputer.</p>
                        </div>

                    </div>
                </div>
            </a>

            <a href="{{ route('pendaftaran.create', ['jalur' => 'UTBK']) }}" type="button">
                <div
                    class="group relative cursor-pointer overflow-hidden bg-white dark:bg-gray-800 px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm sm:rounded-lg sm:px-10">
                    <span
                        class="absolute top-10 z-0 h-20 w-20 rounded-full bg-yellow-800 transition-all duration-300 group-hover:scale-[15]"></span>
                    <div class="relative z-10 mx-auto max-w-md">
                        <span
                            class="grid h-20 w-20 place-items-center rounded-full bg-yellow-500 transition-all duration-300 group-hover:bg-yellow-400">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 96.17 122.88"
                                style="enable-background:new 0 0 96.17 122.88"
                                xml:space="preserve"class="w-10 h-10 fill-white">
                                <g>
                                    <path
                                        d="M62.74,110.31l21.48-22.58H62.74V110.31L62.74,110.31z M18.93,61.94h58.3v5.53h-58.3V61.94L18.93,61.94z M18.93,75.53 h27.29v5.53H18.93V75.53L18.93,75.53z M18.93,89.12h19.23v5.53H18.93V89.12L18.93,89.12z M38.86,43.48h-8.04l-1.4,5.69H18.93 l9.67-29.83h12.65l9.72,29.83H40.22L38.86,43.48L38.86,43.48z M37.33,36.93l-2.39-9.94H34.8l-1.17,5.06l-1.22,4.88H37.33 L37.33,36.93z M75.22,37.7h-7.64v8.99h-7.91V37.7h-7.68v-6.91h7.68v-8.99h7.91v8.99h7.64V37.7L75.22,37.7z M96.17,84.85 c0,1.63-1.1,3.04-2.6,3.45l-31.64,33.27c-0.66,0.82-1.66,1.32-2.76,1.32H6.43c-1.79,0-3.39-0.72-4.55-1.88 C0.72,119.84,0,118.24,0,116.45V6.43c0-1.79,0.72-3.39,1.88-4.55C3.04,0.72,4.67,0,6.43,0h83.31c1.76,0,3.39,0.72,4.55,1.88 c1.16,1.16,1.88,2.76,1.88,4.55V84.85L96.17,84.85z M88.99,80.55V7.18H7.18v108.55h48.38V84.16c0-1.98,1.6-3.61,3.61-3.61H88.99 L88.99,80.55z" />
                                </g>
                            </svg>
                        </span>
                        <div
                            class="space-y-6 pt-5 text-base leading-7 text-gray-200 transition-all duration-300 group-hover:text-white/90">
                            <h1
                                class="text-xl font-semibold leading-7 text-yellow-500 dark:text-white sm:text-xl sm:truncate">
                                Program Beasiswa Jalur UTBK</h1>
                        </div>
                        <div
                            class="space-y-6 pt-5 text-base leading-7 text-gray-500 dark:text-white transition-all duration-300 group-hover:text-white/90">
                            <p>Kuliah di Universitas KA Menggunakan Nilai UTBK SNBT 2025.</p>
                        </div>

                    </div>
                </div>
            </a>
        </div>
    @endsection
