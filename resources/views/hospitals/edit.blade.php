@extends('layouts.app', ['title' => 'Rumah sakit'])

@section('content')
    <h3>Edit Data Rumah Sakit</h3>
    <hr>
    <div class="w-50">
        <form action="/hospitals" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $hospital->name }}" />
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $hospital->address }}" />
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $hospital->email }}" />
            </div>

            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="tel" class="form-control" id="telepon" name="telepon" value="{{ $hospital->phone }}" />
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
                <a href="/hospitals" class="btn btn-secondary">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
