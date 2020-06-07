@extends('layouts.master')

@section('relasiCreate')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left">
        <strong>Tambah Data Relasi</strong>
      </div>
        @if($errors->all())
          @include('layouts.error')
        @endif
          <div class="card-body">
            <form method="post" action="{{route('relasi.store')}}">
              @csrf
{{--             <div class="form-group">
              <label for="exampleFormControlSelect1">Kode Relasi</label>
                <select type="text" name="kodeRelasi" class="form-control" id="exampleFormControlSelect1">
                  <option value="KG01" >KG01</option>
                  <option value="KG02" >KG02</option>
                  <option value="KG03" >KG03</option>
                  <option value="KG04" >KG04</option>
                  <option value="KG05" >KG05</option>
                  <option value="KG06" >KG06</option>
                  <option value="KG07" >KG07</option>
                  <option value="KG08" >KG08</option>
                  <option value="KG09" >KG09</option>
                  <option value="KG10" >KG10</option>
                  <option value="KG11" >KG11</option>
                  <option value="KG12" >KG12</option>
                  <option value="KG13" >KG13</option>
                  <option value="KG14" >KG14</option>
                  <option value="KG15" >KG15</option>
                  <option value="KG16" >KG16</option>
                  <option value="KG17" >KG17</option>
                  <option value="KG18" >K1G8</option>
                  <option value="KG19" >GK19</option>
                  <option value="KG20" >KG20</option>
                  <option value="KG21" >KG21</option>
                  <option value="KG22" >KG22</option>
                  <option value="KG23" >KG23</option>
                  <option value="KG24" >KG24</option>
                  <option value="KG25" >KG25</option>
                </select>
            </div>
        <div class="form-group">
          <label class="control-label">Nama permasalahan</label>
            <select id="permasalahan" name="permasalahan_id" class="form-control">
              <option value="">--- Pilih Permasalahan---</option>
                @foreach($permasalahan as $p)
                  <option value="{{$p->id}}" @if ($p->id == $relasi->permasalahan_id) selected="selected" @endif>
                    {{$p->keteranganPermasalahan}}
                  </option>
                @endforeach
            </select>
        </div> --}}
{{--         <div class="form-group">
          <label class="control-label">Nama gejala</label>
            <select id="gejala" name="gejala_id" class="form-control">
              <option value="">--- Pilih Gejala Permasalahan---</option>
                @foreach($gejala as $g)
                  <option value="{{$g->id}}" @if ($g->id == $relasi->gejala_id) selected="selected" @endif>
                     {{$g->namaGejala}}
                  </option>
                @endforeach
            </select>
        </div> --}}
                  <div class="form-group">
                    <label> Pilih gejala yang sesuai :</label>
                    <div class="col-md-12">
                        @foreach ($gejala as $gejala)
                            <div class="checkbox">
                                <label><input class="flat" type="checkbox" name="gejala[]" value="{{ $gejala->id }}">  {{ $gejala->namaGejala }} </label>
                            </div>
                        @endforeach
                    </div>
                </div>
{{--         <div class="form-group">
          <label for="nilai_mb">Masukkan Nilai </label>
            <input class="form-control {{ $errors->has('nilai_mb') ? 'is-invalid' : '' }}" placeholder='Masukkan Nilai' type="number" name="nilai_mb" id="nilai_mb" value="{{ old('nilai_mb', '') }}" step="1">
        </div>
        <div class="form-group">
          <label for="nilai_md">Masukkan Nilai </label>
            <input class="form-control {{ $errors->has('nilai_md') ? 'is-invalid' : '' }}" placeholder='Masukkan Nilai' type="number" name="nilai_md" id="nilai_md" value="{{ old('nilai_md', '') }}" step="1">
        </div> --}}
        <div class="form-group">
          <input type="submit" class="btn btn-success" value="Simpan">
        </div> 
            </form>
          </div>
        </div>
      </div>
@stop