@extends('layouts.master')

@section('gejalaEdit')
  <div class="container">
    <div class="card mt-5">
        <div class="card-header text-left">
          <strong>Edit Data gejala</strong>
        </div>
          <div class="card-body">
            <form method="POST" action="{{route('gejala.update',[$gejala->id])}}">
              @csrf
                @method('PUT')
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Kode Gejala</label>
                      <select type="text" name="kodeGejala" class="form-control" id="exampleFormControlSelect1">
                        <option value="KG01" @if($gejala->kodeGejala =="KG01") selected @endif >KG01</option>
                        <option value="KG02" @if($gejala->kodeGejala =="KG02") selected @endif >KG02</option>
                        <option value="KG03" @if($gejala->kodeGejala =="KG03") selected @endif >KG03</option>
                        <option value="KG04" @if($gejala->kodeGejala =="KG04") selected @endif >KG04</option>
                        <option value="KG05" @if($gejala->kodeGejala =="KG05") selected @endif >KG05</option>
                        <option value="KG06" @if($gejala->kodeGejala =="KG06") selected @endif >KG06</option>
                        <option value="KG07" @if($gejala->kodeGejala =="KG07") selected @endif >KG07</option>
                        <option value="KG08" @if($gejala->kodeGejala =="KG08") selected @endif >KG08</option>
                        <option value="KG09" @if($gejala->kodeGejala =="KG09") selected @endif >KG09</option>
                        <option value="KG10" @if($gejala->kodeGejala =="KG10") selected @endif >KG10</option>
                        <option value="KG11" @if($gejala->kodeGejala =="KG11") selected @endif >KG11</option>
                        <option value="KG12" @if($gejala->kodeGejala =="KG12") selected @endif >KG12</option>
                        <option value="KG13" @if($gejala->kodeGejala =="KG13") selected @endif >KG13</option>
                        <option value="KG14" @if($gejala->kodeGejala =="KG14") selected @endif >KG14</option>
                        <option value="KG15" @if($gejala->kodeGejala =="KG15") selected @endif >KG15</option>
                        <option value="KG16" @if($gejala->kodeGejala =="KG16") selected @endif >KG16</option>
                        <option value="KG17" @if($gejala->kodeGejala =="KG17") selected @endif >KG17</option>
                        <option value="KG18" @if($gejala->kodeGejala =="KG18") selected @endif >K1G8</option>
                        <option value="KG19" @if($gejala->kodeGejala =="KG19") selected @endif >GK19</option>
                        <option value="KG20" @if($gejala->kodeGejala =="KG20") selected @endif >KG20</option>
                        <option value="KG21" @if($gejala->kodeGejala =="KG21") selected @endif >KG21</option>
                        <option value="KG22" @if($gejala->kodeGejala =="KG22") selected @endif >KG22</option>
                        <option value="KG23" @if($gejala->kodeGejala =="KG23") selected @endif >KG23</option>
                        <option value="KG24" @if($gejala->kodeGejala =="KG24") selected @endif >KG24</option>
                        <option value="KG25" @if($gejala->kodeGejala =="KG25") selected @endif >KG25</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="permasalahan_id"><strong> Keterangan Permasalahan ID</strong></label>
                      <input type="text" name="permasalahan_id" value="{{$gejala->permasalahan_id}}" class="form-control @error('permasalahan_id') is-invalid @enderror"  id="permasalahan_id" >
                        @error('permasalahan_id')
                          <div class="invalid-feedback">
                            {{$message}}
                          </div>
                        @enderror
                         </div>
		      <div class="form-group {{ $errors->has('namaGejala') ? 'has-error' : '' }}">
            <label for="namaGejala"><strong> Keterangan Gejala</strong></label>
        	   <input type="text" id="namaGejala" name="namaGejala" class="form-control" value="{{$gejala->namaGejala }}" require>
		          @if($errors->has('namaGejala'))
		            <p class="help-block">
		              {{ $errors->first('namaGejala') }}
		            </p>
		          @endif
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
          </div>
        </form>
      </div>
    </div>
  </div>
@stop