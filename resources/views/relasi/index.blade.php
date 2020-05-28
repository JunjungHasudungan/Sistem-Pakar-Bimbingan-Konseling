@extends('layouts.master')

@section('relasiIndex')

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Relasi</h3>
        </div>
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="{{route('relasi.create')}}" class="nav-link">Tambah Data</a>
              </li>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%"> No </th>
                      <th style="width: 4%"> Kode Relasi </th>
                        @foreach($gejala as $g)
                      <th style="width: 10%"> {{$g->kodeGejala}}  </th>
                        @endforeach
                        @foreach($permasalahan as $p)
                      <th style="width: 10%"> {{$p->kodePermasalahan}}  </th>
                        @endforeach
                      <th style="width: 20%"> Data Permasalahan </th>
                      <th style="width: 25%"> Aksi </th>
                  </tr>
              </thead>
                @foreach($relasi as $r)
              <tbody>
                  <tr>
                      <td> {{$loop->iteration}} </td>
                      <td>{{$r->kodeRelasi}}</td>
                      <td>  {{$r->gejala_id}} </td>
                      <td> {{$r->permasalahan_id}} </td>
                      <td class="project-actions text-right">
{{--                           <a class="btn btn-primary btn-sm" href="{{route('relasi.show', $r->id)}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a> --}}
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
               {{-- Pagination --}}
{{--                   <div class="pagination " style="margin:20px 0">
                    {{$relasi->links()}}
                  </div> --}}
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>

@endsection