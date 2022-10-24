@extends('starter')
@section('isi')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="card mb-4">
       
    </div>
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                        
                    @endif

                    
                        <a href="{{ url('create-santri') }}"class= "btn btn-info" style="margin-right: 10px" >Tambah+</a> 
                        <a href="{{ url('/exportexcel') }}"class= "btn btn-success">Export Excell</a>  

                    
                  
                    <table class="table">
                        <thead>
                                <tr>
                                    <th scope="col" style="color: black">#</th>
                                    <th scope="col" style="color: black">NIPD</th>
                                    <th scope="col" style="color: black">Nama</th>
                                    <th scope="col" style="color: black">Jenis Kelamin</th>
                                    <th scope="col" style="color: black">telpon</th>
                                    <th scope="col" style="color: black">alamat</th>
                                    <th scope="col" style="color: black">option</th>
                                  </tr>
                            </thead>
                            <tbody>
                                @foreach($santri as $item)
                                <tr>
                                  <th scope="row">{{ $loop->iteration }}</th>
                                  <td style="color: black">{{ $item->nipd }}</td>
                                  <td style="color: black">{{ $item->nama }}</td>
                                  <td style="color: black">{{ $item->jk }}</td>
                                  <td style="color: black">{{ $item->telp }}</td>
                                  <td style="color: black">{{ $item->alamat }}</td>
                                  <td>  
                                      
                    
                                      <form action="{{ url('delete-santri',$item->id) }}"method="POST">
                                        <a href ="{{  url('edit-santri',$item->id) }}"
                                            class="btn btn-primary" style="color: black">Edit</a>
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-secondary"style="color: black" >Hapus</button>
                                  </form>
                                  </td>
                                  
                               </tr>
                               @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
