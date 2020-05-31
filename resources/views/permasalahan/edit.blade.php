@extends('layouts.master')

@section('permasalahanEdit')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left"><strong>Edit Data Permasalahan</strong>
        </div>
          @if($errors->all())
            @include('layouts.error')
          @endif
          <div class="card-body">
            <form method="POST" action="{{route('permasalahan.update',[$permasalahan->id])}}">
              @csrf
                @method('PUT')
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Kode permasalahan</label>
                      <select type="text" name="kodePermasalahan" class="form-control" id="exampleFormControlSelect1">
                        <option value="KP01" @if($permasalahan->kodePermasalahan =="KP01") selected @endif >KG01</option>
                        <option value="KP02" @if($permasalahan->kodePermasalahan =="KP02") selected @endif >KG02</option>
                        <option value="KP03" @if($permasalahan->kodePermasalahan =="KP03") selected @endif >KG03</option>
                        <option value="KP04" @if($permasalahan->kodePermasalahan =="KP04") selected @endif >KG04</option>
                        <option value="KP05" @if($permasalahan->kodePermasalahan =="KP05") selected @endif >KG05</option>
                        <option value="KP06" @if($permasalahan->kodePermasalahan =="KP06") selected @endif >KG06</option>
                        <option value="KP07" @if($permasalahan->kodePermasalahan =="KP07") selected @endif >KG07</option>
                        <option value="KP08" @if($permasalahan->kodePermasalahan =="KP08") selected @endif >KG08</option>
                        <option value="KP09" @if($permasalahan->kodePermasalahan =="KP09") selected @endif >KG09</option>
                        <option value="KP10" @if($permasalahan->kodePermasalahan =="KP10") selected @endif >KG10</option>
                        <option value="KP11" @if($permasalahan->kodePermasalahan =="KP11") selected @endif >KG11</option>
                        <option value="KP12" @if($permasalahan->kodePermasalahan =="KP12") selected @endif >KG12</option>
                        <option value="KP13" @if($permasalahan->kodePermasalahan =="KP13") selected @endif >KG13</option>
                        <option value="KP14" @if($permasalahan->kodePermasalahan =="KP14") selected @endif >KG14</option>
                        <option value="KP15" @if($permasalahan->kodePermasalahan =="KP15") selected @endif >KG15</option>
                        <option value="KP16" @if($permasalahan->kodePermasalahan =="KP16") selected @endif >KG16</option>
                        <option value="KP17" @if($permasalahan->kodePermasalahan =="KP17") selected @endif >KG17</option>
                        <option value="KP18" @if($permasalahan->kodePermasalahan =="KP18") selected @endif >K1G8</option>
                        <option value="KP19" @if($permasalahan->kodePermasalahan =="KP19") selected @endif >GK19</option>
                        <option value="KP20" @if($permasalahan->kodePermasalahan =="KP20") selected @endif >KG20</option>
                        <option value="KP21" @if($permasalahan->kodePermasalahan =="KP21") selected @endif >KG21</option>
                        <option value="KP22" @if($permasalahan->kodePermasalahan =="KP22") selected @endif >KG22</option>
                        <option value="KP23" @if($permasalahan->kodePermasalahan =="KP23") selected @endif >KG23</option>
                        <option value="KP24" @if($permasalahan->kodePermasalahan =="KP24") selected @endif >KG24</option>
                        <option value="KP25" @if($permasalahan->kodePermasalahan =="KP25") selected @endif >KG25</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="keteranganPermasalahan"><strong> Keterangan Permasalahan</strong></label>
                      <input type="text" name="keteranganPermasalahan" value="{{ $permasalahan->keteranganPermasalahan }}" class="form-control "  id="keteranganPermasalahan" >
                         <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                          </div>
                      </form>
 
                </div>
            </div>
        </div>
@stop