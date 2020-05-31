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
        <label for="exampleFormControlSelect1"><strong>  Kode Bimbingan </strong></label>
          <select type="text" name="kodeBimbingan" class="form-control" id="exampleFormControlSelect1">
            <option value="KB01" >KB01</option>
            <option value="KB02" >KB02</option>
            <option value="KB03" >KB03</option>
            <option value="KB04" >KB04</option>
            <option value="KB05" >KB05</option>
            <option value="KB06" >KB06</option>
            <option value="KB07" >KB07</option>
            <option value="KB08" >KB08</option>
            <option value="KB09" >KB09</option>
            <option value="KB10" >KB10</option>
            <option value="KB11" >KB11</option>
            <option value="KB12" >KB12</option>
            <option value="KB13" >KB13</option>
            <option value="KB14" >KB14</option>
            <option value="KB15" >KB15</option>
            <option value="KB16" >KB16</option>
            <option value="KB17" >KB17</option>
            <option value="KB18" >KBG8</option>
            <option value="KB19" >GB19</option>
            <option value="KB20" >KB20</option>
            <option value="KB21" >KB21</option>
            <option value="KB22" >KB22</option>
            <option value="KB23" >KB23</option>
            <option value="KB24" >KB24</option>
            <option value="KB25" >KB25</option>
          </select>
        </div>
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