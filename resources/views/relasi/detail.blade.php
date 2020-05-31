@extends('layouts.master')

@section('relasiDetail')
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center"><p><strong>Detail Data Relasi</strong></p>
                </div>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>ID Gejala</b> <a class="float-right">{{ $relasi->gejala_id }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>ID Permasalahan</b> <a class="float-right">{{ $relasi->permasalahan_id }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Created at :</b> <a class="float-right">{{$relasi->created_at->format(' H:i d-m-y ')}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Update at :</b> <a class="float-right">{{ $relasi->updated_at->format(' H:i d-m-y ') }}</a>
                  </li>
                </ul>
                <a href="{{route('relasi.index')}}" class="btn btn-primary btn-block"><b>Kembali</b></a>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection