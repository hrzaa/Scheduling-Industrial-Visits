@extends('layouts.app1')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Generate Laporan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

     <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.export') }}" class="btn btn-success mb-4">Export PDF</a>
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Instansi</th>
                                    <th>Jurusan</th>
                                    <th>Jumlah Kelas</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>No Hp</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $data)
                                <tr>
                                    <td>{{  $data->id }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->jurusan }}</td>
                                    <td>{{ $data->participant_count }}</td>
                                    <td>{{ $data->start_date }}</td>
                                    <td>{{ $data->user->noHP }}</td>
                                    <td>
                                        @if($data->status == 'accepted')
                                            <button class="btn btn-success">Accepted</button>
                                        @elseif($data->status == 'proccess')
                                            <button class="btn btn-warning">Proccess</button>
                                        @elseif($data->status == 'rejected')
                                            <button class="btn btn-danger">Rejected</button>
                                        @else
                                            <span>{{ $data->status }}</span>
                                        @endif

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

