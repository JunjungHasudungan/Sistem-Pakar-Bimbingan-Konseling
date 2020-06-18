@extends('layouts.master')

@section('dashboard')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$bimbingan->count()}}</h3><p> Data Bimbingan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a class="nav-link" href="{{route('bimbingan.index')}}" >More info </a>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$relasi->count()}}</h3>
                <p>Data Relasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a class="nav-link" href="{{route('relasi.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$gejala->count()}}</h3>
                <p>Data Gejala</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a class="nav-link" href="{{route('gejala.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$gejala->count()}}</h3>
                <p>Data Konselling</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a class="nav-link" href="{{route('gejala.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$permasalahan->count()}}</h3>
                <p>Data Permasalahan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a class="nav-link" href="{{route('permasalahan.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
