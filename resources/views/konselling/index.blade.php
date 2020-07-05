@extends('layouts.master')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Konselling</h3>
      </div>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('konselling.create')}}" class="nav-link">Tambah Data</a>
        </li>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%"> NO </th>
              <th style="width: 5%"> NIM </th>
              <th style="width: 10%"> Nama Lengkap </th>
              <th style="width: 20%"> Permasalahan di alami </th>    
              <th style="width: 40%"> Gejala di alami </th>                            
              <th style="width: 20%"> Aksi </th>
            </tr>
          </thead>
                {{-- @foreach($konselling as $k) --}}
              <tbody>
                  <tr>
                      <td> {{-- {{$loop->iteration}} --}} 1</td>
                      <td>  {{-- {{$k->gejala_id}} --}} 168023</td>
                      <td> {{-- {{$k->permasalahan_id}} --}} Rendi</td>
                      <td> {{-- {{$k->permasalahan_id}} --}}  Karir dan pekerjaan</td>
                      <td> {{-- {{$k->permasalahan_id}} --}}   Bingung ,ragu dan sukar dalam memahami dan menyelesaikan pelajaran, Belum memahami secara keseluruhan bidang kerja yang di minati</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{-- {{route('konselling.show', $k->id)}} --}}">
                            View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{-- {{route('konselling.edit', $k->id)}} --}}">
                            Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                            Delete
                          </a>
                      </td>
                  </tr>
                  {{-- @endforeach --}}
          </table>
        </div>
        <div class="pagination justify-content-center" style="margin:20px 0">
          {{$konselling->links()}}
      </div>
    </div>
  </section>
@endsection