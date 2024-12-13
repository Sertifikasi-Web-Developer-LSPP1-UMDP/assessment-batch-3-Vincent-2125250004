@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard Mahasiswa') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid md:grid-cols-2 md:gap-6">
                <div
                    class="w-full p-4 text-center border border-gray-200 rounded-lg shadow sm:p-8
                    @if ($pendaftaran->status === 'Lulus') bg-green-100
                    @elseif ($pendaftaran->status === 'Seleksi Berkas') bg-yellow-100
                    @elseif ($pendaftaran->status === 'Tidak Lulus') bg-red-400 @endif
                    dark:border-gray-700">
                    <h5 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Status Pendaftaran Anda</h5>
                    <p
                        class="mb-2 text-base sm:text-5xl 
                        @if ($pendaftaran->status === 'Tidak Lulus') text-red-600 font-bold
                        @elseif ($pendaftaran->status === 'Seleksi Berkas') text-yellow-600 font-bold 
                        @elseif ($pendaftaran->status === 'Lulus') text-green-600 font-bold
                        @else text-gray-500 dark:text-gray-400 @endif">
                        {{ $pendaftaran->status }}
                    </p>
                </div>
                <div
                    class="w-full p-4 text-center border border-gray-200 rounded-lg shadow sm:p-8
                    @if ($user->is_verified === 1) bg-green-100
                    @elseif ($user->is_verified === 0) bg-red-400 @endif
                    dark:border-gray-700">
                    <h5 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Status Akun Anda</h5>
                    <p
                        class="mb-2 text-base sm:text-5xl 
                        @if ($user->is_verified === 1) text-green-600 font-bold
                        @elseif ($user->is_verified === 0) text-red-600 font-bold  
                        @else text-gray-500 dark:text-gray-400 @endif">
                        {{ $user->is_verified ? 'Verifikasi' : 'Belum terverifikasi' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
