@extends('layouts.master')

@section('title','Sisem Pakar')
@section('permasalahancontent')
    <!-- Main content -->
    <section class="content">
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">Data Permasalahan</h3>
        </div>
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="{{route('permasalahan.create')}}" class="nav-link">Tambah Data</a>
              </li>
              @if(session('status'))
                <div class="alert alert-success" role="alert">
                  {{session('status')}}  
                </div>
              @endif
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%"> NO </th>
                      <th style="width: 10%"> Kode Permasalahan </th>
                      <th style="width: 30%"> Keterangan Permasalahan </th>
                      <th style="width: 20%"> Aksi </th>
                  </tr>
              </thead>
              @foreach($permasalahan as $p)
                <tbody>
                    <tr>
                        <td> {{$p->id}} </td>
                        <td> {{$p->kodePermasalahan}} </td>
                        <td> {{$p->keteranganPermasalahan}} </td>
                         
                        

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{route('permasalahan.show', $p->id)}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href=" {{route('permasalahan.edit', $p->id)}} ">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{route('permasalahan.destroy', $p->id)}}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
            @endforeach
              </tbody>
          </table>
        </div>
               {{-- Pagination --}}
                  <div class="pagination pagination-sm m-0 float-left " style="margin:20px 0">
                    {{$permasalahan->links()}}
                  </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
@endsection