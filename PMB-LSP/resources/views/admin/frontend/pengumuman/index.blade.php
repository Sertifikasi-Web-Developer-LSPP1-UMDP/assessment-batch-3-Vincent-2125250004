@extends('admin.layouts.appAdm')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Pendaftaran Mahasiswa') }}
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
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('pengumuman.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
                    Tambah Pengumuman
                </a>
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 display responsive wrap"
                    width="100%" id="myTable">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300 rounded-lg">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Headline
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Subheadline
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Content
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Link Content
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.tailwindcss.min.js"></script>

    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        </td>
    </tr>

    <script>
        $(document).ready(function() {
            let table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('pengumuman.index') }}",
                pageLength: 10, // Jumlah data per halaman
                lengthMenu: [5, 10, 25, 50, 100], // Opsi jumlah data per halaman
                searchDelay: 500,
                columns: [{
                        data: 'headline',
                        name: 'headline',
                        render: function(data) {
                            return `<span class="truncate" title="${data}">${data}</span>`;
                        }
                    },
                    {
                        data: 'subHeadline',
                        name: 'subHeadline',
                        render: function(data) {
                            return `<span class="truncate" title="${data}">${data}</span>`;
                        }
                    },
                    {
                        data: 'content',
                        name: 'content',
                        render: function(data) {
                            return `<span class="truncate" title="${data}">${data}</span>`;
                        }
                    },
                    {
                        data: 'image',
                        name: 'image',
                        render: function(data) {
                            return `<img src="/storage/images/${data}" alt="Image" class="w-16 h-16 rounded-md">`;
                        }
                    },
                    {
                        data: 'linkContent',
                        name: 'linkContent',
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
                    } 
                ],

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

            $('.js-example-basic-single').select2();
        });

        function confirmDelete(form) {
            var link = form.action;

            Swal.fire({
                title: "Yakin ingin menghapus data?",
                text: "Anda tidak bisa mengembalikan datanya lagi!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!"
            }).then((willDelete) => {
                if (willDelete.isConfirmed) {
                    form.submit();
                } else {
                    Swal.fire("Data Kamu Aman!", "", "info");
                }
            });
            return false;
        }
    </script>
@endsection
