@extends('layouts.master')

@section('konsellingCreate')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pilih Jawaban Ya atau Tidak </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 1%">NO</th>
                  <th style="width: 30%">Pertanyaaan</th>
                  <th style="width: 5%">Jawaban</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($gejala as $g)
                    <tr>
                      <td> {{$loop->iteration}} </td>
                      <td> {{$g->namaGejala}} </td>
                      <td>
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="radio1">
                              <label class="form-check-label">Ya</label>
                            </div>
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="radio1">
                              <label class="form-check-label">Tidak</label>
                            </div>
                          </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
          </div>
          <!-- /.card -->

          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@stop