<x-guest-layout>
    <form method="POST" action="{{ route('register_penjual') }}" enctype="multipart/form-data">
        @csrf

        <!-- Nama Penjual -->
        <div>
            <x-input-label for="name" :value="__('Nama Penjual')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Tanggal Lahir -->
        <div class="mt-4">
            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
            <input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required />
            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
        </div>

        <!-- Nomor Toko -->
        <div class="mt-4">
            <x-input-label for="nomor_toko" :value="__('Nomor Toko')" />
            <x-text-input id="nomor_toko" class="block mt-1 w-full" type="text" name="nomor_toko" :value="old('nomor_toko')" required />
            <x-input-error :messages="$errors->get('nomor_toko')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="nik" :value="__('Nik')" />
            <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" required />
            <x-input-error :messages="$errors->get('nik')" class="mt-2" />
        </div>
        <!-- Nama Penjual -->
        <div>
            <x-input-label for="nama_toko" :value="__('Nama TOko')" />
            <x-text-input id="nama_toko" class="block mt-1 w-full" type="text" name="nama_toko" :value="old('nama_toko')" required autofocus autocomplete="nama_toko" />
            <x-input-error :messages="$errors->get('nama_toko')" class="mt-2" />
        </div>

        <!-- Lantai Toko -->
        <div class="mt-4">
            <x-input-label for="lantai_toko" :value="__('Lantai Toko')" />
            <select id="lantai_toko" class="block mt-1 w-full" name="lantai_toko" required>
                <option value="Lantai 1">Lantai 1</option>
                <option value="Lantai 2">Lantai 2</option>
                <option value="Balairung">Balairung</option>
            </select>
            <x-input-error :messages="$errors->get('lantai_toko')" class="mt-2" />
        </div>

        <!-- Nomor Telepon -->
        <div class="mt-4">
            <x-input-label for="nomor_telepon" :value="__('Nomor Telepon')" />
            <x-text-input id="nomor_telepon" class="block mt-1 w-full" type="tel" name="nomor_telepon" :value="old('nomor_telepon')" required />
            <x-input-error :messages="$errors->get('nomor_telepon')" class="mt-2" />
        </div>

        <!-- Foto Toko -->
        <div class="mt-4">
            <x-input-label for="gambar_toko" :value="__('Foto Toko')" />
            <input id="gambar_toko" class="block mt-1 w-full" type="file" name="gambar_toko" required />
            <x-input-error :messages="$errors->get('gambar_toko')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
