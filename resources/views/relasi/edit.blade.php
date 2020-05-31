@extends('layouts.master')

@section('relasiEdit')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left">
        <strong>Edit Data Relasi</strong>
      </div>
        @if($errors->all())
          @include('layouts.error')
        @endif
          <div class="card-body">
            <form method="post" action="{{route('relasi.store', [$relasi->id])}}">
              @csrf
                @method('PUT')
        <div class="form-group">
          <label class="control-label">Nama permasalahan</label>
            <select id="permasalahan" name="permasalahan_id" class="form-control">
              <option value=""></option>
                @foreach($permasalahan as $p)
                  <option value="{{$p->id}}" @if ($p->id == $relasi->permasalahan_id) selected="selected" @endif></option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label class="control-label">Nama gejala</label>
            <select id="gejala" name="gejala_id" class="form-control">
              <option value=""></option>
                @foreach($gejala as $g)
                  <option value="{{$g->id}}" @if ($g->id == $relasi->gejala_id) selected="selected" @endif></option>
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