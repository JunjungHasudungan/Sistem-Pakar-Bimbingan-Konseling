@extends('layouts.master')

@section('relasiCreate')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left">
        <strong>Tambah Data Relasi</strong>
      </div>
        @if($errors->all())
          @include('layouts.error')
        @endif
          <div class="card-body">
            <form method="post" action="{{route('relasi.store')}}">
              @csrf
        <div class="form-group">
          <label class="control-label">Nama permasalahan</label>
            <select id="permasalahan" name="permasalahan_id" class="form-control">
              <option value="">--- Pilih Permasalahan---</option>
                @foreach($permasalahan as $p)
                  <option value="{{$p->id}}" @if ($p->id == $relasi->permasalahan_id) selected="selected" @endif>
                    {{$p->keteranganPermasalahan}}
                  </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label class="control-label">Nama gejala</label>
            <select id="gejala" name="gejala_id" class="form-control">
              <option value="">--- Pilih Gejala Permasalahan---</option>
                @foreach($gejala as $g)
                  <option value="{{$g->id}}" @if ($g->id == $relasi->gejala_id) selected="selected" @endif>
                     {{$g->namaGejala}}
                  </option>
                @endforeach
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