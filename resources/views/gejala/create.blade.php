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
              <label for="kodeGejala"><strong> Kode Keterangan Gejala </strong></label>
                <input type="text" name="kodeGejala" value="{{old('kodeGejala')}}" placeholder=" Example: KG01" class="form-control"  id="kodeGejala" >
            </div>
            <div class="form-group">
              <label for="keteranganGejala"><strong> Keterangan Gejala</strong></label>
                <input type="text" name="keteranganGejala" placeholder="Keterangan pada Permasalahan..." value="{{old('keteranganGejala')}}" class="form-control "  id="keteranganGejala" >
            </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
              </div>
        </form>
      </div>
    </div>
  </div>
@stop