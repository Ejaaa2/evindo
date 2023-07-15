@extends("layout.main")
@section('konten')
<section class="simple-cta">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center mb-4">Data Peserta</h3>
                    </div>
                    <table id='data-peserta' class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Nama Course</th>
                                <th>Tanggal Mendaftar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->coursename }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{$item->role}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                        <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#data-peserta').DataTable();
        });
    </script>
@endsection
