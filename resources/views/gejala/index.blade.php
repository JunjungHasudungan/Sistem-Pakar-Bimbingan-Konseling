@extends('layouts.master')

@section('gejalaIndex')
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Gejala</h3>
      </div>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('gejala.create')}}" class="nav-link">Tambah Data</a>
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
                <th style="width: 10%"> Kode Gejala </th>
                <th style="width: 30%"> Keterangan Gejala </th>
                <th style="width: 10%" style="text-decoration: center"> Aksi </th>
              </tr>
            </thead>
            <tbody>
              @foreach($gejala as $g)
                <tr>
                  <td> {{ $loop->iteration }} </td>
                  <td> {{ $g->kodeGejala }} </td>                      
                  <td> {{ $g->namaGejala }} </td>
                  <td class="project-actions text-right">
                    <a class="btn btn-secondary btn-sm" href="{{route('gejala.show', $g->id)}}"><i data-feather="eye"></i>
                      View
                    </a>
                    <a class="btn btn-info btn-sm" href="{{route('gejala.edit', $g->id)}}">
                      <i data-feather="circle"></i> Edit
                    </a>
                      <form action="{{route('gejala.destroy',$g->id)}}" method="post" style="display: inline-block;">
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
      <div class="pagination " style="margin:20px 0">
        {{$gejala->links()}}
      </div>
    </div>
  </section>
@endsection