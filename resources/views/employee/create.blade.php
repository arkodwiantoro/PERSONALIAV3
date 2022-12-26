@extends('layouts.master')

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('navbar')
    @include('part.navbar')
@endsection

@section('content')
<h1 class="text-primary mx-3 my-3">Form Tambah Anggota</h1>
<form action="/employee" method="post">
    @csrf

    <div class="card pb-5 mx-3">
        <div class="form-group mx-4 my-2">
            <label for="nama" class="text-md text-primary font-weight-bold mt-2">Nama Lengkap</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
        </div>

        @error('name')
            <div class="alert-danger mx-4 px-2 py-2"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="employee_code" class="text-md text-primary font-weight-bold">Nomor Pegawai</label>
            <input type="text" id="employee_code" class="form-control @error('employee_code') is-invalid @enderror" name="employee_code" value="{{ old('employee_code') }}">
        </div>

        @error('employee_code')
        <div class="alert-danger mx-4 px-2 py-2"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="gender" class="text-md text-primary font-weight-bold">Jenis Kelamin</label>
            <input type="text" id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}">
        </div>

        @error('gender')
            <div class="alert-danger mx-4 px-2 py-2 mx-2"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="address" class="text-md text-primary font-weight-bold">address</label>
            <input type="text" id="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}">
        </div>

        @error('address')
            <div class="alert-danger mx-4 px-2 py-2"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="phone_number" class="text-md text-primary font-weight-bold">Nomor Telepon</label>
            <input type="text" id="alamat" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}">
        </div>

        @error('phone_number')
            <div class="alert-danger mx-4 px-2 py-2"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="email" class="text-md text-primary font-weight-bold">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
        </div>

        @error('email')
            <div class="alert-danger mx-4 px-2 py-2"> {{ $message }}</div>
        @enderror

        <div class="form-group mx-4 my-2">
            <label for="password" class="text-md text-primary font-weight-bold">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
        </div>

        @error('password')
            <div class="alert-danger mx-4 px-2 py-2"> {{ $message }}</div>
        @enderror


        <div class="button-save d-flex justify-content-end">
            <a href="/employee" class="btn btn-danger mt-4 py-1 px-4">Batal</a>
            <button type="submit" class="btn btn-primary mt-4 mx-4 px-5 py-1">Simpan</button>
        </form>
        </div>
    </div>
@endsection
