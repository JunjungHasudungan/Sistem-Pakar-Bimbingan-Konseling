@extends('layouts.master')

@section('gejalaCreate')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left">
        <strong>Tambah Data gejala</strong>
      </div>
        @if($errors->all())
          @include('layouts.error')
        @endif
      <div class="card-body">
        <form method="POST" action="{{route('gejala.store')}}">
          @csrf
            <div class="form-group">
              <label for="namaGejala"><strong> Keterangan Gejala</strong></label>
                <input type="text" name="namaGejala" value="{{old('namaGejala')}}" class="form-control "  id="namaGejala" >
            </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
              </div>
        </form>
      </div>
    </div>
  </div>
@stop