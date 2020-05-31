@extends('layouts.master')

@section('relasiCreate')
  <div class="container">
            <div class="card mt-5">
                <div class="card-header text-left">
                    <strong>Tambah Data Relasi</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('relasi.store')}}">
                                                 @csrf
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1"><strong> Kode Relasi </strong></label>
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
              <select id="permasalahan" name="permasalahan" class="form-control">
                  <option value=""></option>
                  @foreach($permasalahan as $P)
                  <option value="<?=$P->id?>" @if ($P->id == $relasi->permasalahan_id) selected="selected" @endif>
                    <?= $P->keteranganPermasalahan?>
                  </option>
                  @endforeach
              </select>
          </div>
                      <div class="form-group">
                          <label for="nama" class="control-label" > Keterangan Gejala</label>
                              <option value=""></option>
                              @foreach($gejala as $id =>$g)
                            <div class="checkbox">
                                <label>
                                  <input class="check" type="checkbox" name="gejala[]" value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $g }}
                                </label>
                            </div>
                              @endforeach
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                      </div> 
                    </form>
                </div>
            </div>
        </div>
@stop