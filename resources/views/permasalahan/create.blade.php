@extends('layouts.master')

@section('permasalahanCreate')
  <div class="container">
    <div class="card mt-5">
      <div class="card-header text-left"><strong>Tambah Data Permasalahan</strong>
        </div>
          @if($errors->all())
            @include('layouts.error')
          @endif
            <div class="card-body">
              <form method="POST" action="{{route('permasalahan.store')}}">
                @csrf
                  <div class="form-group">
                    <label for="exampleFormControlSelect1"><strong> Kode Permasalahan </strong></label>
                      <select type="text" name="kodePermasalahan" class="form-control" id="exampleFormControlSelect1">
                        <option value="KP01" >KP01</option>
                        <option value="KP02" >KP02</option>
                        <option value="KP03" >KP03</option>
                        <option value="KP04" >KP04</option>
                        <option value="KP05" >KP05</option>
                        <option value="KP06" >KP06</option>
                        <option value="KP07" >KP07</option>
                        <option value="KP08" >KP08</option>
                        <option value="KP09" >KP09</option>
                        <option value="KP10" >KP10</option>
                        <option value="KP11" >KP11</option>
                        <option value="KP12" >KP12</option>
                        <option value="KP13" >KP13</option>
                        <option value="KP14" >KP14</option>
                        <option value="KP15" >KP15</option>
                        <option value="KP16" >KP16</option>
                        <option value="KP17" >KP17</option>
                        <option value="KP18" >KP18</option>
                        <option value="KP19" >KP19</option>
                        <option value="KP20" >KP20</option>
                        <option value="KP21" >KP21</option>
                        <option value="KP22" >KP22</option>
                        <option value="KP23" >KP23</option>
                        <option value="KP24" >KP24</option>
                        <option value="KP25" >KP25</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="keteranganPermasalahan"><strong> Keterangan Permasalahan </strong></label>
                      <input type="text" name="keteranganPermasalahan" value="{{old('keteranganPermasalahan')}}" class="form-control"  id="keteranganPermasalahan" >
                  </div>
                  <div class="form-group">
                  <label>Solusi Permasalahan :</label>
                    <textarea name="solusi" class="form-control" value="{{old('solusi')}}" rows="4" placeholder="Jelaskan Solusi mengenai Permasalahan ini...">
                    </textarea>
                  </div>
                  <div class="card-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                  </div>
              </form>
            </div>
          </div>
        </div>
@stop