@extends('mahasiswa.layout')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
 </div>

 <div class="float-right my-2">
 <form class="d-flex" role="search" method="GET" action="/search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
 <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
 </div>
 </div>
 </div>
 
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 
 @if ($message = Session::get('error'))
<div class="alert alert-error">
<p>{{ $message }}</p>
</div>
@endif

 <table class="table table-bordered">
 <tr>
 <th>Nim</th>
 <th>Nama</th>
 <th>Kelas</th>
 <th>Jurusan</th>
 <th>No_Handphone</th>
 <th>Email</th>
 <th>Tanggal_Lahir</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($posts as $Mahasiswa)
 <tr>
 
 <td>{{ $Mahasiswa->nim }}</td>
 <td>{{ $Mahasiswa->nama }}</td>
 <td>{{ $Mahasiswa->kelas }}</td>
 <td>{{ $Mahasiswa->jurusan }}</td>
 <td>{{ $Mahasiswa->noHp }}</td>
 <td>{{ $Mahasiswa->email }}</td>
 <td>{{ $Mahasiswa->tanggalLahir }}</td>
 <td>
 <form action="{{ route('mahasiswa.destroy',$Mahasiswa->nim) }}" method="POST">
 
 <a class="btn btn-info" href="{{ route('mahasiswa.show',$Mahasiswa->nim) }}">Show</a>
 <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$Mahasiswa->nim) }}">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>

 {{$posts->links('pagination::bootstrap-4')}}
@endsection 