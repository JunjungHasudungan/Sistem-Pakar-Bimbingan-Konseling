@extends('layouts.master')

@section('gejalaDetail')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center"><p><strong>Detail Data Gejala</strong></p>
            </div>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Kode Gejala</b> <a class="float-right">{{ $gejala->kodeGejala }}</a>
                </li>
                <li class="list-group-item">
                  <b>Keterangan Gejala</b> <a class="float-right">{{ $gejala->keteranganGejala }}</a>
                </li>
                <li class="list-group-item">
                  <b>Created at :</b> <a class="float-right">{{$gejala->created_at->format(' H:i d-m-y ')}}</a>
                </li>
                <li class="list-group-item">
                  <b>Update at :</b> <a class="float-right">{{ $gejala->updated_at->format(' H:i d-m-y ') }}</a>
                </li>
                </ul>
                <a href="{{route('gejala.index')}}" class="btn btn-primary btn-block"><b>Kembali</b></a>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection