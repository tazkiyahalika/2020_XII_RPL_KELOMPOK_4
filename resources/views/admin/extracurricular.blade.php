@extends('layouts.admin-master')
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
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Pramuka</td>
                    <td><a href="{{ url('admin/extracurricular/detail-extracurricular-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                        <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>volly</td>
                    <td><a href="{{ url('admin/extracurricular/detail-extracurricular-voli')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                        <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>RPL</td>
                    <td><a href="{{ url('admin/extracurricular/detail-extracurricular-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                                      <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Multimedia</td>
                    <td><a href="{{ url('admin/extracurricular/detail-extracurricular-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                                      <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Paduan Suara</td>
                    <td><a href="{{ url('admin/extracurricular/detail-extracurricular-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                                      <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Nampon Kiwari</td>
                    <td><a href="{{ url('admin/extracurricular/detail-extracurricular-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                                     <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Basket</td>
                    <td><a href="{{ url('admin/extracurricular/detail-extracurricular-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                                      <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Panahan</td>
                    <td><a href="{{ url('admin/extracurricular/detail-extracurricular-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                                      <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Rohis</td>
                    <td><a href="{{ url('admin/extracurricular/detail-extracurricular-pramuka')}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                                      <a href="{{ url('admin/coach/update')}}" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"> <i class="fa fa-edit"></i></a>
                <a href="" class="btn  btn-sm" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Yakin Mau hapus gussss?');"> <i class="fa fa-trash"></i></a>
                        <button type="submit" class="btn btn-primary">Anggota</button></td>
                  </tr>
                  </tbody>
                </table>
              </div>

             
            </div>
  @endsection