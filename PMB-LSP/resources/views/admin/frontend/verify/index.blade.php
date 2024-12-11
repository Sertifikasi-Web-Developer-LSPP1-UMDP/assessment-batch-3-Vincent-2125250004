@extends('admin.layouts.appAdm')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Verifikasi Akun') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 display responsive wrap"
                    width="100%" id="myTable">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300 rounded-lg">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Verifikasi</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal untuk Verifikasi -->
    <div id="verifikasiModal" class="hidden fixed inset-0 z-10 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 max-w-lg w-full">
                <h2 class="text-lg font-semibold text-white">Verifikasi Akun</h2>
                <p id="modalMessage" class="text-white"></p>
                <form id="verifyForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex justify-end mt-4">
                        <button type="button" onclick="closeModal()"
                            class="bg-gray-500 text-white px-4 py-2 rounded-md mr-2">
                            Batal
                        </button>
                        <button id="verifyButton" type="submit" value="1" name="is_verified"
                            class="px-4 py-2 rounded-md">
                            Verifikasi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.tailwindcss.min.js"></script>

    <script>
        $(document).ready(function() {
            let table = $('#myTable').DataTable({
                "rowCallback": function(row, data, index) {
                    // Terapkan class ke baris (tr)
                    $(row).addClass('bg-white border-b dark:bg-gray-800 dark:border-gray-700 ');
                    $('td', row).each(function() {
                        $(this).addClass(
                            'px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'
                        );
                    });
                },

                processing: true,
                serverSide: true,
                ajax: "{{ route('verifyUser.index') }}",
                pageLength: 10,
                lengthMenu: [5, 10, 25, 50, 100],
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'is_verified',
                        name: 'is_verified'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $('#myTable_wrapper').addClass('overflow-y-hidden p-1');
            $('#myTable_filter').addClass('text-black font-semibold dark:text-white');
            $('#myTable_filter input').addClass(
                'text-black font-semibold mt-2 mb-2 dark:text-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md px-2 py-1 ms-4'
            );
            $('#myTable_length').addClass('text-black font-semibold dark:text-white');
            $('#myTable_length select').addClass(
                'text-black font-semibold dark:text-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md px-6 py-1 ms-4'
            );
            $('#myTable_info').addClass('text-black font-semibold dark:text-white text-sm mt-2');
            $('#myTable_paginate').addClass('text-black font-semibold dark:text-white mt-4');
            $('#myTable_next').addClass('text-black font-semibold dark:text-white ms-4');
            $('#myTable_previous').addClass('text-black font-semibold dark:text-white me-4');

            window.openModal = function(id, isVerified) {
                const modalMessage = document.getElementById('modalMessage');
                const verifyButton = document.getElementById('verifyButton');

                // Update modal message
                modalMessage.textContent = isVerified == 0 ?
                    'Apakah Anda yakin ingin memverifikasi akun ini?' :
                    'Apakah Anda yakin ingin mencabut verifikasi akun ini?';

                // Update button text and style
                verifyButton.textContent = isVerified == 0 ? 'Verifikasi' : 'Cabut Verifikasi';
                verifyButton.value = isVerified == 0 ? '1' : '0';
                verifyButton.className = isVerified == 0 ?
                    'bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md' :
                    'bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md';

                // Update form action
                $('#verifyForm').attr('action', `/verifyUser/${id}`);

                // Show modal
                $('#verifikasiModal').removeClass('hidden');
            };

            window.closeModal = function() {
                $('#verifikasiModal').addClass('hidden');
            };
        });
    </script>
@endsection
