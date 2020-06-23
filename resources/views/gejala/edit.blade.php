@extends('layouts.master')

@section('gejalaEdit')
  <div class="container">
    <div class="card mt-5">
        <div class="card-header text-left">
          <strong>Edit Data gejala</strong>
        </div>
          <div class="card-body">
            <form method="POST" action="{{route('gejala.update',[$gejala->id])}}">
              @csrf
                @method('PUT')
          <div class="form-group">
            <label for="kodeGejala"><strong> Kode Keterangan Gejala </strong></label>
              <input type="text" name="kodeGejala" value="{{$gejala->kodeGejala}}" class="form-control"  id="kodeGejala" >
            </div>
		      <div class="form-group {{ $errors->has('keteranganGejala') ? 'has-error' : '' }}">
            <label for="keteranganGejala"><strong> Keterangan Gejala</strong></label>
        	   <input type="text" id="keteranganGejala" name="keteranganGejala" class="form-control" value="{{$gejala->keteranganGejala }}" require>
		          @if($errors->has('keteranganGejala'))
		            <p class="help-block">
		              {{ $errors->first('keteranganGejala') }}
		            </p>
		          @endif
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
@stop