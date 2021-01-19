@extends('layouts.student-master')
@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ekstrakulikuler Mahaputra</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Ekstrakulikuler</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Pramuka</td>
                    <td><a href="{{ url('student/extracurricular/detail-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('student/extracurricular/create') }}" button type="submit" class="btn btn-success">Daftar</button> </a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>volly</td>
                    <td><a href="{{ url('student/extracurricular/detail-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('student/extracurricular/create') }}" button type="submit" class="btn btn-success">Daftar</button> </a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>RPL</td>
                    <td><a href="{{ url('student/extracurricular/detail-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('student/extracurricular/create') }}" button type="submit" class="btn btn-success">Daftar</button> </a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Multimedia</td>
                    <td><a href="{{ url('student/extracurricular/detail-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('student/extracurricular/create') }}" button type="submit" class="btn btn-success">Daftar</button> </a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Paduan Suara</td>
                    <td><a href="{{ url('student/extracurricular/detail-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('student/extracurricular/create') }}" button type="submit" class="btn btn-success">Daftar</button> </a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Nampon Kiwari</td>
                    <td><a href="{{ url('student/extracurricular/detail-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('student/extracurricular/create') }}" button type="submit" class="btn btn-success">Daftar</button> </a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Basket</td>
                    <td><a href="{{ url('student/extracurricular/detail-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('student/extracurricular/create') }}" button type="submit" class="btn btn-success">Daftar</button> </a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Panahan</td>
                    <td><a href="{{ url('student/extracurricular/detail-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('student/extracurricular/create') }}" button type="submit" class="btn btn-success">Daftar</button> </a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Rohis</td>
                    <td><a href="{{ url('student/extracurricular/detail-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                      <a href="{{ url('student/extracurricular/create') }}" button type="submit" class="btn btn-success">Daftar</button> </a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  
                  </tbody>
                </table>
              </div>

             
            </div>
  @endsection