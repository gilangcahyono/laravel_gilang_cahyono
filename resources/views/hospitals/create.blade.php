@extends('layouts.app', ['title' => 'Rumah sakit'])

@section('content')
    <h3>Tambah Data Rumah Sakit</h3>
    <hr>
    <div class="w-50">
        <form action="/hospitals" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" />
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" />
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" />
            </div>

            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="tel" class="form-control" id="telepon" name="telepon" />
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-primary">
                    Tambah
                </button>
                <a href="/hospitals" class="btn btn-secondary">
                    Batal
                </a>
            </div>
        </form>
    </div>
    <script>
        Swal.fire({
            title: 'Error!',
            text: 'Do you want to continue',
            icon: 'error',
            confirmButtonText: 'Cool'
        })
    </script>
@endsection
