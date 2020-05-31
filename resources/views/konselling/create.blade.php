@extends('layouts.master')

@section('konsellingCreate')
    <form action="{{ route('konselling.store') }}" method="post">
              {{ csrf_field() }}


                    <table class="table">
                        <thead class="">
                            <tr>
                                <th width="30"></th>
                                <th>
                                    <h5 class="mt-3">Silahkan Pilih Gejala yang Dirasakan :</h5>
                                    <p>Tips Memilih Gejala:<br>
                                        1. Pilihlah Gejala berdasarkan Gejala yang paling sering atau paling terasa pada
                                        diri Anda. <br>
                                        2. Pilihlah minimal 3 (Tiga) Gejala untuk mendapatkan hasil yang lebih akurat.
                                    </p>
                                </th>
                            </tr>
                        </thead>
                        <tbody align="left">
                            @foreach($gejala as $row)
                            <tr>
                                <td><input type="checkbox" name="gejala[]" class="flat"  value="{{$row->id}}"></td>
                                <td>{{$row->namaGejala}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        <div class="panel-footer">
          <button type="submit" class="btn btn-success">Check Hasil</button>
        </div>
      </form>
@stop