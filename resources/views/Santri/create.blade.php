@extends('starter')
@section('isi')
    
<div class="container">
  <div class="row justify-content-center">
      <div class="col-8">
          <div class="card mt-5">
              <div class="card-body">
                  <form action="{{ route('simpan') }}" method="post">
                      {{ csrf_field() }}
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No NIPD</label>
                        <input type="number" class="form-control" name="nipd"> 
                        @error('nipd')
                        <div class="text-warning">{{ $message }}</div>
                            
                        @enderror                

                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" name="nama">   
                          @error('nama')
                        <div class="text-warning">{{ $message }}</div>
                            
                        @enderror                                         
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                          <select name="jk" class="form-select form-control" id="">
                              <option selected>Pilih Jenis Kelamin</option>
                              <option value="1">Laki-Laki</option>
                              <option value="2">Perempuan</option>
                          </select>
                         </div>
                         <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nomer Telepon</label>
                          <input type="number" class="form-control" name="telp">
                          @error('telp')
                        <div class="text-warning">{{ $message }}</div>
                            
                        @enderror                                            
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Alamat</label>
                          <input type="text" class="form-control" name="alamat">   
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
    