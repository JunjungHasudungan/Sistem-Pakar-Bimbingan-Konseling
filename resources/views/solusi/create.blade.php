@extends('layouts.master')

@section('solusiCreate')
  <div class="container">
            <div class="card mt-5">
                <div class="card-header text-left">
                    <strong>Tambah Data gejala</strong>
                </div>
                <div class="card-body">
                  <form method="post" action="{{route('solusi.store')}}">
                    @csrf
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Kode Solusi</label>
                          <select type="text" name="kodeGejala" class="form-control" id="exampleFormControlSelect1">
                            <option value="KS01" >KS01</option>
                            <option value="KS02" >KS02</option>
                            <option value="KS03" >KS03</option>
                            <option value="KS04" >KS04</option>
                            <option value="KS05" >KS05</option>
                            <option value="KS06" >KS06</option>
                            <option value="KS07" >KS07</option>
                            <option value="KS08" >KS08</option>
                            <option value="KS09" >KS09</option>
                            <option value="KS10" >KS10</option>
                            <option value="KS11" >KS11</option>
                            <option value="KS12" >KS12</option>
                            <option value="KS13" >KS13</option>
                            <option value="KS14" >KS14</option>
                            <option value="KS15" >KS15</option>
                            <option value="KS16" >KS16</option>
                            <option value="KS17" >KS17</option>
                            <option value="KS18" >KSG8</option>
                            <option value="KS19" >GS19</option>
                            <option value="KS20" >KS20</option>
                            <option value="KS21" >KS21</option>
                            <option value="KS22" >KS22</option>
                            <option value="KS23" >KS23</option>
                            <option value="KS24" >KS24</option>
                            <option value="KS25" >KS25</option>
                          </select>
                        </div>
                         
                        <div class="form-group {{ $errors->has('permasalahan_id') ? ' has-error' : '' }}">
                          <label for="permasalahan_id"> <strong> Permasalahan </strong></label>
                            <select name="permasalahan_id" class="form-control" required>
                              @foreach ($permasalahan as $p)
                                <option value="{{ $p->id }}">{{ $p->keteranganPermasalahan }}</option>
                              @endforeach
                            </select>
                            @if ($errors->has('permasalahan_id'))
                              <span class="help-block">
                                <strong>{{ $errors->first('permasalahan_id') }}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group">
                          <label for="keteranganSolusi"><strong> Keterangan Solusi</strong></label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" name="keteranganSolusi" rows="3">
                             
                           </textarea>
                              @error('keteranganSolusi')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                              @enderror
                         </div>
                         <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                          </div>
                      </form>
 
                </div>
            </div>
        </div>
@stop