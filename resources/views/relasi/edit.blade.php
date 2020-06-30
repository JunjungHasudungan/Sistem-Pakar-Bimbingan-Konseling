@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left">
        <strong>Edit Data Relasi</strong>
      </div>
        @if($errors->all())
          @include('layouts.error')
        @endif
          <div class="card-body">
            <form method="post" action="{{route('relasi.store', [$gejala->id])}}">
              @csrf
                @method('PUT')
          <div class="form-group">
            <label for="exampleFormControlSelect1">Kode Relasi</label>
              <select type="text" name="kodeRelasi" class="form-control" id="exampleFormControlSelect1">
                  <option value="KR01" @if($gejala->kodeRelasi =="KR01") selected @endif >KR01</option>
                  <option value="KR02" @if($gejala->kodeRelasi =="KR02") selected @endif >KR02</option>
                  <option value="KR03" @if($gejala->kodeRelasi =="KR03") selected @endif >KR03</option>
                  <option value="KR04" @if($gejala->kodeRelasi =="KR04") selected @endif >KR04</option>
                  <option value="KR05" @if($gejala->kodeRelasi =="KR05") selected @endif >KR05</option>
                  <option value="KR06" @if($gejala->kodeRelasi =="KR06") selected @endif >KR06</option>
                  <option value="KR07" @if($gejala->kodeRelasi =="KR07") selected @endif >KR07</option>
                  <option value="KR08" @if($gejala->kodeRelasi =="KR08") selected @endif >KR08</option>
                  <option value="KR09" @if($gejala->kodeRelasi =="KR09") selected @endif >KR09</option>
                  <option value="KR10" @if($gejala->kodeRelasi =="KR10") selected @endif >KR10</option>
                  <option value="KR11" @if($gejala->kodeRelasi =="KR11") selected @endif >KR11</option>
                  <option value="KR12" @if($gejala->kodeRelasi =="KR12") selected @endif >KR12</option>
                  <option value="KR13" @if($gejala->kodeRelasi =="KR13") selected @endif >KR13</option>
                  <option value="KR14" @if($gejala->kodeRelasi =="KR14") selected @endif >KR14</option>
                  <option value="KR15" @if($gejala->kodeRelasi =="KR15") selected @endif >KR15</option>
                  <option value="KR16" @if($gejala->kodeRelasi =="KR16") selected @endif >KR16</option>
                  <option value="KR17" @if($gejala->kodeRelasi =="KR17") selected @endif >KR17</option>
                  <option value="KR18" @if($gejala->kodeRelasi =="KR18") selected @endif >KRG8</option>
                  <option value="KR19" @if($gejala->kodeRelasi =="KR19") selected @endif >GR19</option>
                  <option value="KR20" @if($gejala->kodeRelasi =="KR20") selected @endif >KR20</option>
                  <option value="KR21" @if($gejala->kodeRelasi =="KR21") selected @endif >KR21</option>
                  <option value="KR22" @if($gejala->kodeRelasi =="KR22") selected @endif >KR22</option>
                  <option value="KR23" @if($gejala->kodeRelasi =="KR23") selected @endif >KR23</option>
                  <option value="KR24" @if($gejala->kodeRelasi =="KR24") selected @endif >KR24</option>
                  <option value="KR25" @if($gejala->kodeRelasi =="KR25") selected @endif >KR25</option>
              </select>
            </div>
        <div class="form-group">
          <label class="control-label">ID Relasi permasalahan</label>
            <select id="permasalahan" name="permasalahan_id" class="form-control">
              <option value=""></option>
                @foreach($permasalahan as $p)
                  <option value="{{$p->id}}" @if ($p->id == $gejala->permasalahan_id) selected="selected" @endif> {{ $gejala->permasalahan_id }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label class="control-label">ID Relasi gejala</label>
            <select id="gejala" name="gejala_id" class="form-control">
              <option value=""></option>
                @foreach($gejala as $g)
                  <option value="{{$g->id}}" @if ($g->id == $gejala->gejala_id) selected="selected" @endif>{{ $gejala->gejala_id }}</option>
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