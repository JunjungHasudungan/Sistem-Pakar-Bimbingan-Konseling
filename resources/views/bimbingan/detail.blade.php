@extends('layouts.master')

@section('bimbinganDetail')

   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">

    <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center"><p><strong>Detail Data Bimbingan</strong></p>
                </div>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Kode Bimbingan</b> <a class="float-right">{{ $bimbingan->kodeBimbingan }}</a>
                  </li>
                  <li class="list-group-item">
                    <b> NIM </b> <a class="float-right">{{ $bimbingan->nim }}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Nama Lengkap </b> <a class="float-right">{{ $bimbingan->namaLengkap }}</a>
                  </li>
                  <li class="list-group-item">
                    <b> Status </b> <a class="float-right">{{ $bimbingan->status }}</a>
                  </li>
                  <li class="list-group-item">
                    <b> jenisKelamin </b> <a class="float-right">{{ $bimbingan->jenisKelamin }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Created at :</b> <a class="float-right">{{$bimbingan->created_at->format(' H:i d-m-y ')}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Update at :</b> <a class="float-right">{{ $bimbingan->updated_at->format(' H:i d-m-y ') }}</a>
                  </li>
                </ul>

                <a href="{{route('bimbingan.index')}}" class="btn btn-primary btn-block"><b>Kembali</b></a>
              </div>  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection