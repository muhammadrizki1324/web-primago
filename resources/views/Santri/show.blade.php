@extends('starter')
@section('isi')

<!-- Table Start -->
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                        
                    @endif

                    
                        <a href="{{ url('create-santri') }}"class= "btn btn-info mb-5 " style="margin-right: 10px" >Tambah+</a> 
                        <a href="{{ url('/exportexcel') }}"class= "btn btn-success mb-5">Export Excell</a>  

                    
                  
                    <table id="myTable" class="display nowrap" style="width:100%" >
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
                                      <button class="btn btn-secondary delete"  style="color: black" >Hapus</button>
                                  </form>

                                  {{-- <a href="{{ url('edit-santri',$item->id) }}" class="btn btn-primary text-dark">Edit</a>
                                  </td> --}}
                                  
                               </tr>
                               @endforeach
                            </tbody>
                    </table>
                    
                    {{-- <table id="myTable" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Progress</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Progress</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table> --}}

                </div>
         

@endsection

{{-- Script Data Table --}}
@section('script')
<script>
    $(document).ready( function () {
$('#myTable').DataTable();
} );
</script>
@endsection

{{-- @section('script2')

    <script>
        $(.delete).click(function(){
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
                });    
        });

               
    </script>

@endsection --}}