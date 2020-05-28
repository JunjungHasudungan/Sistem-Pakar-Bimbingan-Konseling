@extends('layouts.master')

@section('bimbinganEdit')
  <div class="container">
            <div class="card mt-5">
                <div class="card-header text-left">
                    <strong>Tambah Data Bimbingan</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="/bimbingan/store">
                        @csrf
                          <div class="form-group">
                            <label for="exampleFormControlSelect1"><strong>  Kode Bimbingan </strong></label>
                              <select type="text" name="kodeBimbingan" class="form-control" id="exampleFormControlSelect1">
                                <option value="KB01" @if($bimbingan->kodeBimbingan =="KB01") selected @endif >KB01</option>
                                <option value="KB02" @if($bimbingan->kodeBimbingan =="KB02") selected @endif>KB02</option>
                                <option value="KB03" @if($bimbingan->kodeBimbingan =="KB03") selected @endif>KB03</option>
                                <option value="KB04" @if($bimbingan->kodeBimbingan =="KB04") selected @endif>KB04</option>
                                <option value="KB05" @if($bimbingan->kodeBimbingan =="KB05") selected @endif>KB05</option>
                                <option value="KB06" @if($bimbingan->kodeBimbingan =="KB06") selected @endif>KB06</option>
                                <option value="KB07" @if($bimbingan->kodeBimbingan =="KB07") selected @endif>KB07</option>
                                <option value="KB08" @if($bimbingan->kodeBimbingan =="KB08") selected @endif>KB08</option>
                                <option value="KB09" @if($bimbingan->kodeBimbingan =="KB09") selected @endif>KB09</option>
                                <option value="KB10" @if($bimbingan->kodeBimbingan =="KB10") selected @endif>KB10</option>
                                <option value="KB11" @if($bimbingan->kodeBimbingan =="KB11") selected @endif>KB11</option>
                                <option value="KB12" @if($bimbingan->kodeBimbingan =="KB12") selected @endif>KB12</option>
                                <option value="KB13" @if($bimbingan->kodeBimbingan =="KB13") selected @endif>KB13</option>
                                <option value="KB14" @if($bimbingan->kodeBimbingan =="KB14") selected @endif>KB14</option>
                                <option value="KB15" @if($bimbingan->kodeBimbingan =="KB15") selected @endif>KB15</option>
                                <option value="KB16" @if($bimbingan->kodeBimbingan =="KB16") selected @endif>KB16</option>
                                <option value="KB17" @if($bimbingan->kodeBimbingan =="KB17") selected @endif>KB17</option>
                                <option value="KB18" @if($bimbingan->kodeBimbingan =="KB18") selected @endif>KBG8</option>
                                <option value="KB19" @if($bimbingan->kodeBimbingan =="KB19") selected @endif>GB19</option>
                                <option value="KB20" @if($bimbingan->kodeBimbingan =="KB20") selected @endif>KB20</option>
                                <option value="KB21" @if($bimbingan->kodeBimbingan =="KB21") selected @endif>KB21</option>
                                <option value="KB22" @if($bimbingan->kodeBimbingan =="KB22") selected @endif>KB22</option>
                                <option value="KB23" @if($bimbingan->kodeBimbingan =="KB23") selected @endif>KB23</option>
                                <option value="KB24" @if($bimbingan->kodeBimbingan =="KB24") selected @endif>KB24</option>
                                <option value="KB25" @if($bimbingan->kodeBimbingan =="KB25") selected @endif>KB25</option>
                              </select>
                            </div>
                         
                        <div class="form-group">
                          <label for="nim"><strong> NIM </strong></label>
                            <input type="text" name="nim" value="{{ $bimbingan->nim}}" placeholder="Masukkan NIM anda " class="form-control @error('nim') is-invalid @enderror"  id="nim" >
                                @error('nim')
                                  <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                         </div>
                        <div class="form-group">
                          <label for="namaLengkap"><strong> Nama  Lengkap </strong></label>
                            <input type="text" name="namaLengkap" value="{{ $bimbingan->namaLengkap}}" placeholder="Masukkan Nama Lengkap anda "  class="form-control @error('namaLengkap') is-invalid @enderror"  id="namaLengkap" >
                              @error('namaLengkap')
                                <div class="invalid-feedback">
                                  {{$message}}
                                </div>
                              @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1"><strong>  Jenis Kelamin </strong></label>
                            <select type="text" name="jenisKelamin" class="form-control" id="exampleFormControlSelect1">
                              <option value="Laki-Laki" >Laki-Laki</option>
                              <option value="Perempuan" >Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"><strong> Status Tempat Tinggal </strong></label>
                                <select type="text" name="status" class="form-control" id="exampleFormControlSelect1">
                                  <option value="Outside" @if($bimbingan->status =="Outside") selected @endif>Outside</option>
                                  <option value="Inside" @if($bimbingan->status =="Inside") selected @endif >Inside</option>
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