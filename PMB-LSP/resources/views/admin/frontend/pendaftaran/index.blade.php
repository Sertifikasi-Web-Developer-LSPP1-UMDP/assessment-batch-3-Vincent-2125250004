@extends('admin.layouts.appAdm')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Pendaftaran Mahasiswa') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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

            <div class="relative overflow-x-auto">
                <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400" width="100%">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                        <tr>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Nama</th>
                            <th scope="col" class="px-6 py-3">Jalur</th>
                            <th scope="col" class="px-6 py-3">Program Studi</th>
                            <th scope="col" class="px-6 py-3">Status</th>
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
                ajax: "{{ route('pendaftaran.index') }}",
                pageLength: 10,
                lengthMenu: [5, 10, 25, 50, 100],
                columns: [{
                        data: 'email',
                        name: 'email',
                        render: function(data) {
                            return `<span class="truncate" title="${data}">${data}</span>`;
                        }
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        render: function(data) {
                            return `<span class="truncate" title="${data}">${data}</span>`;
                        }
                    },
                    {
                        data: 'jalur',
                        name: 'jalur',
                        render: function(data) {
                            return `<span class="truncate" title="${data}">${data}</span>`;
                        }
                    },
                    {
                        data: 'prodi1',
                        name: 'prodi1',
                        render: function(data) {
                            return `<span class="truncate" title="${data}">${data}</span>`;
                        }
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data) {
                            return `<span class="truncate" title="${data}">${data}</span>`;
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                columnDefs: [{
                    targets: [0, 1, 2, 4],
                    className: 'truncate'
                }],

                rowCallback: (row) => {
                    $(row).addClass('bg-white border-b dark:bg-gray-800 dark:border-gray-700 ');
                    $('td', row).each(function() {
                        $(this).addClass(
                            'px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'
                        );
                    });
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
            $('#myTable_next').addClass('text-black font-semibold dark:text-white ms-4');
            $('#myTable_previous').addClass('text-black font-semibold dark:text-white me-4');
        };

        document.addEventListener('DOMContentLoaded', initDataTable);
    </script>

    <!-- Modal -->
    <div id="statusModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 max-w-lg w-full">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Ubah Status</h2>
                <form id="updateStatusForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="status" class="block text-gray-700 dark:text-gray-300">Pilih Status</label>
                        <select id="status" name="status"
                            class="w-full mt-1 rounded-md border-gray-300 dark:border-gray-600">
                            <option value="Lulus">Lulus</option>
                            <option value="Seleksi Berkas">Seleksi Berkas</option>
                            <option value="Tidak Lulus">Tidak Lulus</option>
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" onclick="closeModal()"
                            class="bg-gray-500 text-white px-4 py-2 rounded-md mr-2">Batal</button>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script defer>
        const updatePendaftaranUrl = "{{ route('pendaftaran.update', ':id') }}";

        const openModal = (id, status) => {
            document.getElementById('statusModal').classList.remove('hidden');
            const form = document.getElementById('updateStatusForm');
            form.action = updatePendaftaranUrl.replace(':id', id);
            document.getElementById('status').value = status;
        };

        const closeModal = () => {
            document.getElementById('statusModal').classList.add('hidden');
        };
    </script>
@endsection
