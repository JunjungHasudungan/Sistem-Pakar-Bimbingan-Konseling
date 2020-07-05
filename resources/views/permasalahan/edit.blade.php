@extends('layouts.master')

@section('content')
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
            <label for="kodePermasalahan"><strong> Kode Keterangan Permasalahan </strong></label>
                <input type="text" name="kodePermasalahan" value="{{$permasalahan->kodePermasalahan}}" 
                class="form-control"  id="kodePermasalahan" >
          </div>
          <div class="form-group">
            <label for="keteranganPermasalahan"><strong> Keterangan Permasalahan </strong></label>
              <input type="text" name="keteranganPermasalahan" value="{{$permasalahan->keteranganPermasalahan}}" 
              class="form-control"  id="keteranganPermasalahan" >
          </div>
          <div class="form-group">
            <label>Solusi Permasalahan :</label>
              <textarea name="solusi" class="form-control"  rows="4" > {{$permasalahan->solusi}}
              </textarea>
          </div>
          <div class="form-group">
            <label>Gejala-gejala </label>
              <div class="col-md-12">
                @foreach ($gejala as $g)
                  <div class="checkbox">
                    <label><input class="flat" type="checkbox" name="gejala[]" value="{{ $g->id }}">   
                      {{ $g->keteranganGejala }} 
                    </label>
                  </div>
                @endforeach
                  <script>
                    @foreach ($permasalahan->gejala as $gejala)
                      $('.check[value={{ $gejala->id }}]').attr('checked', true);
                    @endforeach()
                  </script>
              </div>
          </div>
          <div class="card-footer">
            <input type="submit" class="btn btn-success" value="Simpan">
          </div>
        </div>
      </form>
    </div>
    </div>
  </div>
@stop