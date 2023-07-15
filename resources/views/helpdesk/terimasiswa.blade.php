@extends("layout.main")
@section('konten')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center mb-4">Terima Siswa</h3>
                    </div>
                    <form method="POST" action="{{ url('statussiswa') }}">
                        @csrf
                    <table id="siswa-table" class="table table-bordered tabel-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Tanggal Daftar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th>{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td><input type="checkbox" name="listpeserta[]" value="{{ $item->id }}"></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <div class="form-group">
                            <label>Nama Course</label>
                            <select class="custom-select" id="idcourse" name="idcourse" required >
                                <option value="">Pilih Course</option>
                                @foreach ($datacourse as $data)
                                    <option value={{$data->id}}>{{$data->coursename}}</option>
                                @endforeach
                            </select>
                        </div>
                        <td><button type="submit" class="btn btn-primary float-right">Submit</button></td>
                      </table>
                      </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#siswa-table').DataTable();
        });
    </script>
@endsection
