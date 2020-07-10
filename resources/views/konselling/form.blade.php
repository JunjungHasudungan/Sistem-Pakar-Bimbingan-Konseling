@extends('layouts.master')

@section('content')
 <div class="container">
    <div class="card mt-5">
              @if(session('status'))
          <div class="alert alert-success" role="alert">
            {{session('status')}}  
          </div>
        @endif
      <div class="card-header text-left">
        <strong>Pilih Gejala-Permasalahan </strong>
      </div>
        @if($errors->all())
          @include('layouts.error')
        @endif
      <div class="card-body">
        <form method="POST" action="{{ route('konselling.proses') }}">
                @csrf
              <input type="hidden" name="bimbingan_id" value="{{ $bimbingan_id }}">
                <div class="form-group">
                    <label>Gejala-gejala yang nampak pada Sosial anda :</label>
                    <div class="col-md-12">
                        @foreach ($gejala as $gejala)
                            <div class="checkbox">
                                <label><input class="flat" type="checkbox" name="gejala[]" value="{{ $gejala->id }}">  {{ $gejala->keteranganGejala }} </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary pull-right">Cek Hasil Konselling <i class="fa fa-fw fa-search"></i></button>
                </div>
            </form>
      </div>
    </div>
  </div>
@stop