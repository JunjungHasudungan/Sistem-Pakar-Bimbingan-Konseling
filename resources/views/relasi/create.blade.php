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
                      <!-- Data Gejala -->
                        <div class="form-group {{ $errors->has('permasalahan_id') ? ' has-error' : '' }}">
                          <label for="permasalahan_id"> <strong> Permasalahan </strong></label>
                            <select name="permasalahan_id" class="form-control" required>
                              @foreach ($permasalahan as $key => $p)
                                <option value="{{ $key }}">{{ $p }}</option>
                              @endforeach
                            </select>
                            @if ($errors->has('permasalahan_id'))
                              <span class="help-block">
                                <strong>{{ $errors->first('permasalahan_id') }}</strong>
                              </span>
                            @endif
                        </div>

                      <!-- Data Gejala -->
                      <div class="form-group">
                          <label for="solusi_id"><strong> Keterangan Gejala </strong></label>
                        <div class="custom-control custom-checkbox">
                          @foreach($gejala as $key => $g)
                             <input class="custom-control-input" type="checkbox" {{ old('solusi_id') == $key ? 'selected' : '' }} name="solusi_id" id="customCheckbox1" value=" {{$key}}">
                            <label for="customCheckbox1" class="custom-control-label"> {{$g}} </label><br>
                          @endforeach
                        </div>
{{--                           <div class="form-group">
                            <label class="required" for="gejala_id"><strong> Keterangan Gejala </strong><</label>
                            <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="gejala_id" id="gejala_id" required> =
                                @foreach($categories as $id => $category)
                                    <option value="{{ $id }}" {{ old('gejala_id') == $id ? 'selected' : '' }}>{{ $category }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('category') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.meal.fields.category_helper') }}</span>
                        </div> --}}

                      <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                      </div> 
                    </form>
                </div>
            </div>
        </div>
@stop