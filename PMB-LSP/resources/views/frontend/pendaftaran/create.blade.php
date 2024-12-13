@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Pendaftaran') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        @if ($errors->any())
            <div class="w-full">
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Error</span>
                    <div>
                        <span class="font-medium">Ensure that these requirements are met:</span>
                        <ul class="mt-1.5 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-10">
            <form action="{{ route('pendaftaran.store') }}" method="POST" class="max-w-md mx-auto">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <label for="jalur" class="mb-4 text-sm text-gray-900 dark:text-gray-300">Jalur</label>
                    {{-- <input type="text" id="jalur" name="jalur" value="{{ $jalur ?? '' }}" readonly> --}}
                    <input type="text" name="jalur" id="jalur" value="{{ $jalur ?? '' }}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " readonly />
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="email" id="email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama" id="nama"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="nama"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                </div>
                <div class="relative z-0 w-full group mb-4">
                    <label for="jenis_kelamin" class="mb-4 text-sm text-gray-900 dark:text-gray-300">Jenis Kelamin</label>
                    <div class="grid md:grid-cols-2 md:gap-6 mt-2">
                        <div class="flex items-center">
                            <input id="jenis_kelamin_laki" type="radio" value="Laki-Laki" name="jenisKelamin"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="jenis_kelamin_laki"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-Laki</label>
                        </div>
                        <div class="flex items-center">
                            <input id="jenis_kelamin_wanita" type="radio" value="Wanita" name="jenisKelamin"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="jenis_kelamin_wanita"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Wanita</label>
                        </div>
                    </div>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="tempatlahir" id="tempatlahir"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="tempatlahir"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat
                        Lahir</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="date" name="tanggallahir" id="tanggallahir"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="tanggallahir"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
                        Lahir</label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="agama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
                            <select id="agama" name="agama" id="agama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option disabled selected>Pilih Agama</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Islam">Islam</option>
                            </select>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="kewarganegaraan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kewarganegaraan</label>
                            <select id="kewarganegaraan" name="kewarganegaraan" id="kewarganegaraan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option disabled selected>Pilih Kewarganegaraan</option>
                                <option value="WNA">WNA</option>
                                <option value="WNI">WNI</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="tel" name="noHp" id="noHp"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="noHP"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor
                        Ponsel</label>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="alamat"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Alamat Pendaftar"></textarea>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-2 group">
                        <input type="text" name="kota" id="kota"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="kota"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kota</label>
                    </div>
                    <div class="relative z-0 w-full mb-2 group">
                        <input type="text" name="provinsi" id="provinsi"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="provinsi"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Provinsi</label>
                    </div>
                    <div class="relative z-0 w-full mb-2 group">
                        <input type="text" name="namaIbu" id="namaIbu"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="namaIbu"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                            Ibu</label>
                    </div>

                    <div class="relative z-0 w-full mb-2 group">
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="waktuKuliah"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu Kuliah</label>
                            <select id="waktuKuliah" name="waktuKuliah" id="waktuKuliah"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option disabled selected>Pilih Waktu</option>
                                <option value="Pagi">Pagi</option>
                                <option value="Malam">Malam</option>
                            </select>
                        </div>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="nisn" id="nisn"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="nisn"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NISN</label>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="statusPendaftaran"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                                Pendaftaran</label>
                            <select id="statusPendaftaran" name="statusPendaftaran" id="statusPendaftaran"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option disabled selected>Pilih Status Pendaftaran</option>
                                <option value="Mahasiswa Baru">Mahasiswa Baru</option>
                                <option value="Mahasiswa Pindahan">Mahasiswa Pindahan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="namaSekolah" id="namaSekolah"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="namaSekolah"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                        Sekolah</label>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="jurusanSekolah"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan Sekolah</label>
                        <select id="jurusanSekolah" name="jurusanSekolah" id="jurusanSekolah"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected>Pilih Jurusan</option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                        </select>
                    </div>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="referensi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Referensi</label>
                        <select id="referensi" name="referensi" id="referensi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected>Pilih Referensi</option>
                            <option value="Teman">Teman</option>
                            <option value="Saudara">Saudara</option>
                            <option value="Dosen">Website</option>
                            <option value="Mahasiswa">Social Media</option>
                        </select>
                    </div>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <label for="informasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sumber
                        Informasi Pendaftaran</label>
                    <select id="informasi" name="informasi" id="informasi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Pilih Informasi</option>
                        <option value="Teman">Teman</option>
                        <option value="Saudara">Saudara</option>
                        <option value="Website">Website</option>
                        <option value="Social Media">Social Media</option>
                        <option value="Reklame">Reklame</option>
                    </select>
                </div>

                <div class="relative z-0 w-full group mb-4">
                    <label for="prodi" class="mb-4 text-sm text-gray-900 dark:text-gray-300">Program Studi yang ingin
                        dituju</label>
                    <div class="grid md:grid-cols-2 md:gap-6 mt-2">
                        <div class="relative z-0 w-full mb-5 group">
                            <label for="prodi1" class="block text-sm text-gray-500 dark:text-gray-400">Program Studi
                                1</label>
                            <select name="prodi1" id="prodi1"
                                class="block py-2 px-4 w-full text-sm text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600">
                                <option value="" disabled selected>Pilih Program Studi 1</option>
                            </select>
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <label for="prodi2" class="block text-sm text-gray-500 dark:text-gray-400">Program Studi
                                2</label>
                            <select name="prodi2" id="prodi2"
                                class="block py-2 px-4 w-full text-sm text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600">
                                <option value="" disabled selected>Pilih Program Studi 2</option>
                            </select>
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <label for="prodi3" class="block text-sm text-gray-500 dark:text-gray-400">Program Studi
                                3</label>
                            <select name="prodi3" id="prodi3"
                                class="block py-2 px-4 w-full text-sm text-gray-900 bg-gray-100 border border-gray-300 rounded-md dark:bg-gray-800 dark:border-gray-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-blue-600">
                                <option value="" disabled selected>Pilih Program Studi 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>

    <script>
        const jurusanSelect = document.getElementById('jurusanSekolah');
        const prodiDropdowns = ['prodi1', 'prodi2', 'prodi3'].map(id => document.getElementById(id));

        const options = {
            IPA: ['Teknik Elektro', 'DKV', 'Data Science', 'Informatika', 'Sistem Informasi'],
            IPS: ['Manajemen', 'Perbankan', 'Perpajakan', 'Hukum', 'Akuntansi']
        };

        function updateDropdowns() {
            const selectedJurusan = jurusanSelect.value;
            const availableOptions = options[selectedJurusan] || [];

            // Mengambil semua opsi yang telah dipilih
            const selectedValues = prodiDropdowns.map(dropdown => dropdown.value).filter(val => val);

            prodiDropdowns.forEach(dropdown => {
                const currentValue = dropdown.value; // Simpan nilai saat ini
                dropdown.innerHTML =
                    '<option value="" disabled selected>Pilih Program Studi</option>'; // Menambahkan default option

                availableOptions.forEach(option => {
                    if (!selectedValues.includes(option) || option === currentValue) {
                        const optionElement = document.createElement('option');
                        optionElement.value = option;
                        optionElement.textContent = option;

                        // Tetap pertahankan nilai yang sudah dipilih
                        if (option === currentValue) {
                            optionElement.selected = true;
                        }

                        dropdown.appendChild(optionElement);
                    }
                });
            });
        }

        // Event listener untuk jurusan sekolah
        jurusanSelect.addEventListener('change', updateDropdowns);

        // Event listener untuk setiap dropdown agar saling memengaruhi
        prodiDropdowns.forEach(dropdown => {
            dropdown.addEventListener('change', updateDropdowns);
        });
    </script>


@endsection
