@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left"><strong>Tambah Data Permasalahan</strong>
        </div>
          @if($errors->all())
            @include('layouts.error')
          @endif
            <div class="card-body">
              <form method="POST" action="{{route('permasalahan.store')}}">
                @csrf
                  <div class="form-group">
                    <label for="kodePermasalahan"><strong> Kode Keterangan Permasalahan </strong></label>
                      <input type="text" name="kodePermasalahan" value="{{old('kodePermasalahan')}}" placeholder=" Example: KP01" class="form-control"  id="kodePermasalahan" >
                  </div>
                  <div class="form-group">
                    <label for="keteranganPermasalahan"><strong> Keterangan Permasalahan </strong></label>
                      <input type="text" name="keteranganPermasalahan" value="{{old('keteranganPermasalahan')}}" placeholder="keterangan pada masalah yang terjadi..." class="form-control"  id="keteranganPermasalahan" >
                  </div>
                  <div class="form-group">
                  <label>Solusi Permasalahan :</label>
                    <textarea name="solusi" class="form-control" value="{{old('solusi')}}" rows="4" placeholder="Jelaskan Solusi mengenai Permasalahan ini...">
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label>Gejala-gejala </label>
                      <div class="col-md-12">
                        @foreach ($gejala as $gejala)
                          <div class="checkbox">
                              <label><input class="flat" type="checkbox" name="gejala[]" value="{{ $gejala->id }}">  {{ $gejala->keteranganGejala }} </label>
                          </div>
                        @endforeach
                      </div>
                  </div>
                  <div class="card-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                  </div>
              </form>
            </div>
          </div>
        </div>
@stop