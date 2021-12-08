@extends('layouts.default')

@section('content')
<section>
  <div class="container mt-5">
      <h1> Edit data </h1>
     <div class="row"> 
        <div class="col-lg-8">
            <form action="{{ url('/update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="form-group mt-2">
                    <label for="nama">Nama Mahasiswa </label>
                    <input type="text" name="nama" class="form-control" placeholder="Rafi Kha" value="{{ $data->nama }}">
                </div>
                <div class="form-group">
                    <label for="nama">NIM </label>
                    <input type="text" name="nim" class="form-control" placeholder="123190091"value="{{ $data->nim }}">
                </div>
                <div class="form-group mt-2">
                    <label for="nama">Alamat </label>
                    <textarea class="form-control" name="alamat" 
                        placeholder="Sleman">{{ $data->alamat }}</textarea>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary"> Tambah Mahasiswa</button>
                </div>
                <div class="form-group mt-2">
                    <a href="{{ url('/') }}"> 
                        << kembai ke halaman utama </a>
                </div>
            </form>
        </div>
     </div>
  </div>
</section>

@endsection