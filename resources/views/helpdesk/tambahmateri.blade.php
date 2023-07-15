@extends("layout.main")
@section('konten')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center mb-4" >Form Tambah Materi</div>

                    <div class="card-body">
                        <form enctype="multipart/form-data" data-toggle="validator" method="POST" id="forminputmateri" action="{{ url('/inputmateri') }}">
                            @csrf

                            <div class="form-group">
                                <label>Nama Course</label>
                                <select class="custom-select" id="idcourse" name="idcourse" >
                                    <option value="">Pilih Course</option>
                                    @foreach ($data as $data)
                                        <option value={{$data->id}}>{{$data->coursename}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">Name Materi</label>
                                <input id="namamateri" type="text" class="form-control" name="namamateri" required autofocus>
                            </div>

                            <div class="form-group">
                                <label>Status Materi</label>
                                <select class="custom-select" id="status" name="status" >
                                    <option value="">Pilih Status</option>
                                        <option value="Materi">Materi</option>
                                        <option value="Tugas">Tugas</option>
                                        <option value="Quiz">Quiz</option>
                                        <option value="Ujian">Ujian</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="link">Link Materi</label>
                                <input id="materi" type="text" class="form-control" name="materi" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
