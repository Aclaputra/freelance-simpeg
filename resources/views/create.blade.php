<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} Pegawai
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- <div class="mt-4 bg-white overflow-hidden shadow-sm sm:rounded-lg"> -->
                <!-- <div class="p-6 bg-white border-b border-gray-200"> -->
                    <div class="my-4">
                        <h1 class="text-center my-2">Buat Data Sasaran Kerja Pegawai Baru</h1>
                        <a href="{{ route('dashboard') }}" class="m-4">Back {{ Auth::user()->id }}</a>

                        <!-- <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm"> -->
                            <!-- start of form -->
                            <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-6">
                                    <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Nama</label>
                                    <input type="text" class="form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Masukkan Nama" 
                                        name="nama" value="{{ Auth::user()->name }}">
                                </div>

                                <div class="form-group mb-6">
                                    <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">NIP</label>
                                    <input type="text" class="form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Masukkan NIP" name="nip">
                                </div>

                                <div class="form-group mb-6">
                                    <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Jabatan</label>
                                    <input type="text" class="form-control
                                        block
                                        w-full
                                        px-3
                                        py-1.5
                                        text-base
                                        font-normal
                                        text-gray-700
                                        bg-white bg-clip-padding
                                        border border-solid border-gray-300
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Masukkan Jabatan" name="jabatan">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                </div>
                                <button type="submit" class="
                                px-6
                                py-2.5
                                bg-blue-600
                                text-white
                                font-medium
                                text-xs
                                leading-tight
                                uppercase
                                rounded
                                shadow-md
                                hover:bg-blue-700 hover:shadow-lg
                                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                active:bg-blue-800 active:shadow-lg
                                transition
                                duration-150
                                ease-in-out">Submit</button>
                            </form>
                            <!-- end of form -->
                        <!-- </div> -->
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</x-app-layout>