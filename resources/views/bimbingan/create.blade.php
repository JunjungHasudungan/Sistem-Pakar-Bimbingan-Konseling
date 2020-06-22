@extends('layouts.master')

@section('bimbinganCreate')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left">
        <strong>Tambah Data Bimbingan</strong>
      </div>
      @if($errors->all())
        @include('layouts.error')
      @endif
      <div class="card-body">
        <form method="POST" action="{{route('bimbingan.store')}}">
          @csrf
        <div class="form-group">
          <label for="nim"><strong> NIM </strong></label>
            <input type="text" name="nim" value="{{old('nim')}}" placeholder="Masukkan NIM anda " class="form-control" id="nim"> </div>
        <div class="form-group">
          <label for="namaLengkap"><strong> Nama  Lengkap </strong></label>
            <input type="text" name="namaLengkap" value="{{old('namaLengkap')}}" placeholder="Masukkan Nama Lengkap anda "  class="form-control"  id="namaLengkap" >
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1"><strong>  Jenis Kelamin </strong></label>
            <select type="text" name="jenisKelamin" class="form-control" id="exampleFormControlSelect1">
              <option value="Laki-Laki" >Laki-Laki</option>
              <option value="Perempuan" >Perempuan</option>
            </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1"><strong> Status Tempat Tinggal </strong></label>
            <select type="text" name="status" class="form-control" id="exampleFormControlSelect1">
              <option value="Outside" >Outside</option>
               <option value="Inside" >Inside</option>
            </select>
        </div>                      
          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
@stop