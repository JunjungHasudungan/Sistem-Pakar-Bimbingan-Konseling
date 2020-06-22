@extends('layouts.master')

@section('bimbinganEdit')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left">
        <strong>Tambah Data Bimbingan</strong>
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('bimbingan.update',[$bimbingan->id])}}">
          @csrf
            @method('PUT')
            <div class="form-group">
              <label for="nim"><strong> NIM </strong></label>
                <input type="text" name="nim" value="{{ $bimbingan->nim}}" placeholder="Masukkan NIM anda " class="form-control  @error('nim') is-invalid @enderror"  id="nim" >
                    @error('nim')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
            </div>
            <div class="form-group">
              <label for="namaLengkap"><strong> Nama  Lengkap </strong></label>
                <input type="text" name="namaLengkap" value="{{ $bimbingan->namaLengkap}}" placeholder="Masukkan Nama Lengkap anda "  class="form-control @error('namaLengkap') is-invalid @enderror"  id="namaLengkap" >
                  @error('namaLengkap')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
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
                  <option value="Outside" @if($bimbingan->status =="Outside") selected @endif>Outside</option>
                  <option value="Inside" @if($bimbingan->status =="Inside") selected @endif >Inside</option>
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