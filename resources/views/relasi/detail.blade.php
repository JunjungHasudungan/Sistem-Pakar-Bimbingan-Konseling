@extends('layouts.master')

@section('content')
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center"><p><strong>Detail Data Basis Pengetahuan</strong></p>
                </div>
                  <tbody>
                    <tr>
                      <td>{{ $permasalahan->keteranganPermasalahan }}</td>
                    <td>
                      <ul style="padding-left: 16px;">
                        @forelse($permasalahan->gejala as $g)
                          <li>{{ $g->keteranganGejala }}</li>
                        @empty
                          Maaf, belum ada data gejala untuk Permasalahan ini.
                        @endforelse
                      </ul>
                    </td>
                    <td> {{ $permasalahan->solusi }} </td>
                  </tr>
              </tbody>
                <a href="{{route('relasi.index')}}" class="btn btn-primary btn-block"><b>Kembali</b></a>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection