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
          <label>Gejala-gejala </label>
            <div class="col-md-12">
              @foreach ($gejala as $g)
                <div class="checkbox">
                    <label><input class="flat" type="checkbox" name="gejala_id[]" value="{{ $g->id }}">  {{ $g->keteranganGejala }} </label>
                </div>
              @endforeach
            </div>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-success" value="Simpan">
        </div> 
            </form>
          </div>
        </div>
      </div>
@stop