@extends('layouts.master')

@section('permasalahanEdit')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left"><strong>Edit Data Permasalahan</strong>
        </div>
        @if($errors->all())
          @include('layouts.error')
        @endif
      <div class="card-body">
        <form method="POST" action="{{route('permasalahan.update',[$permasalahan->id])}}">
          @csrf
        @method('PUT')
          <div class="form-group">
            <label for="keteranganPermasalahan"><strong> Keterangan Permasalahan</strong></label>
              <input type="text" name="keteranganPermasalahan" value="{{ $permasalahan->keteranganPermasalahan }}" class="form-control "  id="keteranganPermasalahan" >
          <div class="form-group">
            <label>Solusi Permasalahan :</label>
              <textarea name="solusi" class="form-control" rows="4"  >{{ $permasalahan->solusi }}
              </textarea>
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-success" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
@stop