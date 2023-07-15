@extends("layout.main")
@section('konten')
<section class="simple-cta">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center mb-4">Tabel Materi</h3>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Materi</th>
                                <th>Deskripsi</th>
                                <th>Link Materi</th>
                                <th>Nama Course</th>
                                <th>Status</th>
                                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->materiname }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td><a href="{{$item->media}}" class="btn btn-primary">Menuju Materi</a></td>
                                <td>{{$item->coursename}}</td>
                                <td>{{$item->status}}</td>

                                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
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
