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
		      <div class="form-group {{ $errors->has('namaGejala') ? 'has-error' : '' }}">
            <label for="namaGejala"><strong> Keterangan Gejala</strong></label>
        	   <input type="text" id="namaGejala" name="namaGejala" class="form-control" value="{{$gejala->namaGejala }}" require>
		          @if($errors->has('namaGejala'))
		            <p class="help-block">
		              {{ $errors->first('namaGejala') }}
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