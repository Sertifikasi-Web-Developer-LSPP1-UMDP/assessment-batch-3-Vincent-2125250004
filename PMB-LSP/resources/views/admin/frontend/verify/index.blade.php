@extends('admin.layouts.appAdm')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Verifikasi Akun') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- SweetAlert -->
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

            <div class="relative overflow-x-auto ">
                <table id="myTable" width="100%" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Role</th>
                            <th scope="col" class="px-6 py-3">Verifikasi</th>
                            <th scope="col" class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Script Resources -->
    <script defer src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.tailwindcss.min.js"></script>

    <script defer>
        const initDataTable = () => {
            const table = $('#myTable').DataTable({
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
                        data: 'role',
                        name: 'role'
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
                ],
                rowCallback: (row) => {
                    $(row).addClass('bg-white border-b dark:bg-gray-800 dark:border-gray-700');
                    $('td', row).addClass(
                        'px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white');
                },
                rowCallback: (row, data) => {
                    const roleClass = data.role.includes('guest') ?
                        'bg-yellow-100 text-yellow-900' :
                        'bg-blue-100 text-blue-900';

                    $(row).addClass(`${roleClass} border-b dark:border-gray-700`);
                    $('td', row).addClass(
                        'px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white');
                },
                drawCallback: () => {
                    const pagination = $('#myTable_paginate');
                    pagination.addClass('flex items-center justify-center mt-4');

                    pagination.find('a').addClass(
                        'mx-1 px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200'
                    );
                    pagination.find('.current').addClass('font-bold bg-blue-800 text-white');
                }
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
        };

        document.addEventListener('DOMContentLoaded', initDataTable);
    </script>

    <div id="verifikasiModal" class="hidden fixed inset-0 z-10 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 max-w-lg w-full">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Verifikasi Akun</h2>
                <p id="modalMessage" class="text-gray-700 dark:text-gray-300 mb-4"></p>
                <form id="verifyForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex justify-end">
                        <button type="button" onclick="closeModal()"
                            class="bg-gray-500 text-white px-4 py-2 rounded-md mr-2">Batal</button>
                        <button id="verifyButton" type="submit" value="1" name="is_verified"
                            class="px-4 py-2 rounded-md"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script defer>
        const updateVerifyUrl = "{{ route('verifyUser.update', ':id') }}";

        const openModal = (id, isVerified) => {
            const modalMessage = document.getElementById('modalMessage');
            const verifyButton = document.getElementById('verifyButton');

            modalMessage.textContent = isVerified == 0 ? 'Apakah Anda yakin ingin memverifikasi akun ini?' :
                'Apakah Anda yakin ingin mencabut verifikasi akun ini?';
            verifyButton.textContent = isVerified == 0 ? 'Verifikasi' : 'Cabut Verifikasi';
            verifyButton.value = isVerified == 0 ? '1' : '0';
            verifyButton.className = isVerified == 0 ?
                'bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md' :
                'bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md';

            document.getElementById('verifyForm').action = updateVerifyUrl.replace(':id', id);
            document.getElementById('verifikasiModal').classList.remove('hidden');
        };

        const closeModal = () => {
            document.getElementById('verifikasiModal').classList.add('hidden');
        };
    </script>
@endsection
