@extends('layouts.master')

@section('permasalahanCreate')
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
                    <label for="keteranganPermasalahan"><strong> Keterangan Permasalahan </strong></label>
                      <input type="text" name="keteranganPermasalahan" value="{{old('keteranganPermasalahan')}}" placeholder="keterangan pada masalah yang terjadi" class="form-control"  id="keteranganPermasalahan" >
                  </div>
                  <div class="form-group">
                  <label>Solusi Permasalahan :</label>
                    <textarea name="solusi" class="form-control" value="{{old('solusi')}}" rows="4" placeholder="Jelaskan Solusi mengenai Permasalahan ini...">
                    </textarea>
                  </div>
                  <div class="col-md-6">            
                      <div class="form-group">
                        <label>Gejala-gejala yang terjadi :</label>
                        <div class="col-md-12">
                          @foreach ($gejala as $g)
                            <div class="checkbox">
                              <label><input type="checkbox" name="gejala[]" value=" {{ $g->id }} "> {{ $g->namaGejala }} </label>
                          </div>
                          @endforeach
                        </div>
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