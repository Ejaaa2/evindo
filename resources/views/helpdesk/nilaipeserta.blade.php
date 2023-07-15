@extends("layout.main")
@section('konten')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center mb-4">Tabel Nilai</h3>
                    </div>
                    <table id="nilaitabel" class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>Status</th>
                                <th>Rata" Nilai Tugas 25%</th>
                                <th>Nilai Quiz 35%</th>
                                <th>Nilai Ujian 40%</th>
                                <th>Total Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th>{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->role }}</td>
                                <td>{{ $item->nilaiTugas }}</td>
                                <td>{{ $item->nilaiQuiz }}</td>
                                <td>{{ $item->nilaiUjian }}</td>
                                <td>{{ $item->nilaiTugas * 0.25 + $item->nilaiQuiz * 0.35 + $item->nilaiUjian * 0.4 }}</td>
                            </tr>
                            @endforeach
                            <a class="text-centered">* Jika ada kesalahan input nilai makan silahkan input ulang nilai yang salah *</a>
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
            $('#nilaitabel').DataTable();
        });
    </script>
@endsection
