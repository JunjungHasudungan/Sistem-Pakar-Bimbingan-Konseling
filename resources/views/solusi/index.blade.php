@extends('layouts.master')

@section('solusiIndex')

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data solusi</h3>
        </div>
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="{{route('solusi.create')}}" class="nav-link">Tambah Data</a>
              </li>
            @section('notifGejala')
              @if(session('status'))
                <div class="alert alert-success" role="alert">
                  {{session('status')}}  
                </div>
              @endif
            @stop
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%"> NO </th>
                      <th style="width: 10%"> Kode solusi </th>
                      <th style="width: 30%"> Keterangan solusi </th>
                      <th style="width: 20%"> Permasalahan ID </th>
                      <th style="width: 10%" style="text-decoration: center"> Aksi </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($solusi as $s)
                  <tr>
                      <td> {{ $loop->iteration }} </td>
                      <td> {{ $s->kodeSolusi }} </td>                      
                      <td> {{ $s->keteranganSolusi }} </td>
                      <td> {{ $s->permasalahan_id}} </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-secondary btn-sm" href="{{route('solusi.show', $s->id)}}"><i data-feather="eye"></i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{route('solusi.edit', $s->id)}}">
                              <i data-feather="circle">
                              </i>
                              Edit
                          </a>
                          <form action="{{route('solusi.destroy',$s->id)}}" method="post">
                            @csrf
                              @method('DELETE')
                                <input type="submit" name="" value="Delete" class="btn btn-danger btn-sm">
                          </form>
                      </td>
                  </tr>
                @endforeach  
              </tbody>
          </table>
        </div>
               {{-- Pagination --}}
{{--                   <div class="pagination " style="margin:20px 0">
                    {{$solusi->links()}}
                  </div> --}}
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>

@endsection