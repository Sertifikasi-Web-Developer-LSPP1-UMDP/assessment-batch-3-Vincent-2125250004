@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard Mahasiswa') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if (session()->has('success') || session()->has('danger') || session()->has('warning') || session()->has('info'))
            <script>
                function showToast(icon, message) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        },
                        willClose: (toast) => {
                            if (toast.getAttribute('aria-live') === 'polite') {
                                toast.style.transition = 'opacity 1s ease-out';
                                toast.style.opacity = 0;
                            }
                        }
                    });

                    Toast.fire({
                        icon: icon,
                        title: message
                    });
                }

                @if (session()->has('success'))
                    showToast('success', "{{ session()->get('success') }}!");
                @endif

                @if (session()->has('danger'))
                    showToast('error', "{{ session()->get('danger') }}!");
                @endif

                @if (session()->has('warning'))
                    showToast('warning', "{{ session()->get('warning') }}!");
                @endif

                @if (session()->has('info'))
                    showToast('info', "{{ session()->get('info') }}!");
                @endif
            </script>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
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
            </div>
        </div>
    </div>
@endsection
