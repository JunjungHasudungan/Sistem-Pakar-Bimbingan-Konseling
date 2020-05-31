@extends('layouts.master')

@section('konsellingCreate')
    <form action="{{ route('konsultasi.proses') }}" method="post">
              {{ csrf_field() }}

              <input type="hidden" name="nama" value="{{ old('nama', session('_old_input')['nama']) }}">
              <input type="hidden" name="alamat" value="{{ old('alamat', session('_old_input')['alamat']) }}">
              <input type="hidden" name="pekerjaan" value="{{ old('pekerjaan', session('_old_input')['pekerjaan']) }}">

        <div class="panel-body">
          <div class="form-group {{ $errors->has('gejala') ? 'has-error' : '' }}">
            <label class="control-label">Gejala</label>

            @foreach($gejalas as $gejala)
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="gejala[]" value="{{ $gejala->id }}">
                  {{ 'G' . $gejala->id . ' - ' . $gejala->name }}
                </label>
              </div>
            @endforeach
          </div>
        </div>
        <div class="panel-footer">
          <button type="submit" class="btn btn-success">Next</button>
        </div>
      </form>
@stop