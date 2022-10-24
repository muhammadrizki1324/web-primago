@extends('starter')
@section('isi')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="{{ route('update', $santri->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No NIPD</label>
                            <input type="number" class="form-control" name="nipd" value="{{ $santri->nipd }}">
                            @error('nipd')
                            <div class="text-warning">{{ $message }}</div>

                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="{{ $santri->nama }}">
                            @error('nama')
                            <div class="text-warning">{{ $message }}</div>

                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <select name="jk" class="form-select form-control" id="">
                                <option selected>{{ $santri->jk }}</option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nomer Telepon</label>
                            <input type="number" class="form-control" name="telp" value="{{ $santri->telp}}">
                            @error('telp')
                            <div class="text-warning">{{ $message }}</div>

                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $santri->alamat }}">
                            @error('alamat')
                            <div class="text-warning">{{ $message }}</div>

                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
