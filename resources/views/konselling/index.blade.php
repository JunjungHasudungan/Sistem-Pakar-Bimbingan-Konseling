@extends('layouts.master')

@section('konsellingIndex')
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
              <th style="width: 10%"> Kode Konselling </th>
              <th style="width: 30%"> Keterangan Konselling </th>
              <th style="width: 20%"> Aksi </th>
            </tr>
          </thead>
                @foreach($konselling as $k)
              <tbody>
                  <tr>
                      <td> {{$k->id}} </td>
                      <td>  {{$k->gejala_id}} </td>
                      <td> {{$k->permasalahan_id}} </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{route('konselling.show', $k->id)}}">
                            <i class="fas fa-folder"></i>View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{route('konselling.edit', $k->id)}}">
                            <i class="fas fa-pencil-alt"></i>Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"></i>Delete
                          </a>
                      </td>
                  </tr>
                  @endforeach
          </table>
        </div>
        <div class="pagination justify-content-center" style="margin:20px 0">
          {{$konselling->links()}}
      </div>
    </div>
  </section>
@endsection