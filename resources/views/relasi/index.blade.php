@extends('layouts.master')

@section('relasiIndex')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Relasi</h3>
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
                      <th style="width: 1%"> No </th>
                      <th style="width: 10%"> Keterangan Permasalahan  </th>
                      <th style="width: 10%"> Keterangan Gejala  </th>
                      <th style="width: 25%"> Aksi </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($permasalahan as $p)
                  <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td>{{ $p->keteranganPermasalahan }}</td>
                    <td>
                      <ul style="padding-left: 16px;">
                        @forelse($p->gejala as $g)
                          <li>{{ $g->keteranganGejala }}</li>
                        @empty
                          Maaf, belum ada data gejala untuk Permasalahan ini.
                        @endforelse
                      </ul>
                    </td>
                    <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="{{route('relasi.show', $p->id)}}">
                        <i class="fas fa-folder"></i>View
                      </a>
                      <a class="btn btn-info btn-sm" href=" {{route('relasi.edit', $p->id)}} ">
                        <i class="fas fa-pencil-alt"></i>Edit
                      </a>
                        <form action="{{route('relasi.destroy',$p->id)}}" method="post" style="display: inline-block;">
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
      <div class="pagination justify-content-center" style="margin:20px 0">
        {{$relasi->links()}}
      </div>
    </div>
  </section>
@endsection