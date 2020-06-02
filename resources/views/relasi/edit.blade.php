@extends('layouts.master')

@section('relasiEdit')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left">
        <strong>Edit Data Relasi</strong>
      </div>
        @if($errors->all())
          @include('layouts.error')
        @endif
          <div class="card-body">
            <form method="post" action="{{route('relasi.store', [$relasi->id])}}">
              @csrf
                @method('PUT')
          <div class="form-group">
            <label for="exampleFormControlSelect1">Kode Relasi</label>
              <select type="text" name="kodeRelasi" class="form-control" id="exampleFormControlSelect1">
                  <option value="KR01" @if($relasi->kodeRelasi =="KR01") selected @endif >KR01</option>
                  <option value="KR02" @if($relasi->kodeRelasi =="KR02") selected @endif >KR02</option>
                  <option value="KR03" @if($relasi->kodeRelasi =="KR03") selected @endif >KR03</option>
                  <option value="KR04" @if($relasi->kodeRelasi =="KR04") selected @endif >KR04</option>
                  <option value="KR05" @if($relasi->kodeRelasi =="KR05") selected @endif >KR05</option>
                  <option value="KR06" @if($relasi->kodeRelasi =="KR06") selected @endif >KR06</option>
                  <option value="KR07" @if($relasi->kodeRelasi =="KR07") selected @endif >KR07</option>
                  <option value="KR08" @if($relasi->kodeRelasi =="KR08") selected @endif >KR08</option>
                  <option value="KR09" @if($relasi->kodeRelasi =="KR09") selected @endif >KR09</option>
                  <option value="KR10" @if($relasi->kodeRelasi =="KR10") selected @endif >KR10</option>
                  <option value="KR11" @if($relasi->kodeRelasi =="KR11") selected @endif >KR11</option>
                  <option value="KR12" @if($relasi->kodeRelasi =="KR12") selected @endif >KR12</option>
                  <option value="KR13" @if($relasi->kodeRelasi =="KR13") selected @endif >KR13</option>
                  <option value="KR14" @if($relasi->kodeRelasi =="KR14") selected @endif >KR14</option>
                  <option value="KR15" @if($relasi->kodeRelasi =="KR15") selected @endif >KR15</option>
                  <option value="KR16" @if($relasi->kodeRelasi =="KR16") selected @endif >KR16</option>
                  <option value="KR17" @if($relasi->kodeRelasi =="KR17") selected @endif >KR17</option>
                  <option value="KR18" @if($relasi->kodeRelasi =="KR18") selected @endif >KRG8</option>
                  <option value="KR19" @if($relasi->kodeRelasi =="KR19") selected @endif >GR19</option>
                  <option value="KR20" @if($relasi->kodeRelasi =="KR20") selected @endif >KR20</option>
                  <option value="KR21" @if($relasi->kodeRelasi =="KR21") selected @endif >KR21</option>
                  <option value="KR22" @if($relasi->kodeRelasi =="KR22") selected @endif >KR22</option>
                  <option value="KR23" @if($relasi->kodeRelasi =="KR23") selected @endif >KR23</option>
                  <option value="KR24" @if($relasi->kodeRelasi =="KR24") selected @endif >KR24</option>
                  <option value="KR25" @if($relasi->kodeRelasi =="KR25") selected @endif >KR25</option>
              </select>
            </div>
        <div class="form-group">
          <label class="control-label">ID Relasi permasalahan</label>
            <select id="permasalahan" name="permasalahan_id" class="form-control">
              <option value=""></option>
                @foreach($permasalahan as $p)
                  <option value="{{$p->id}}" @if ($p->id == $relasi->permasalahan_id) selected="selected" @endif> {{ $relasi->permasalahan_id }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label class="control-label">ID Relasi gejala</label>
            <select id="gejala" name="gejala_id" class="form-control">
              <option value=""></option>
                @foreach($gejala as $g)
                  <option value="{{$g->id}}" @if ($g->id == $relasi->gejala_id) selected="selected" @endif>{{ $relasi->gejala_id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-success" value="Simpan">
        </div> 
            </form>
          </div>
        </div>
      </div>
@stop