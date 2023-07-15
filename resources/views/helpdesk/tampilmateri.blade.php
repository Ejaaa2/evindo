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
                    <table id="materiTabel" class="table table-bordered">
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
                        
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#materiTabel').DataTable();
        });
    </script>
@endsection
