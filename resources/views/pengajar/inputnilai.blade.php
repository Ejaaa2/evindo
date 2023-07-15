@extends("layout.main")
@section('konten')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center mb-4" >Form Input Nilai</div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" data-toggle="validator" method="POST" id="forminputnilai" action="{{ url('/inputnilai') }}">
                            @csrf

                            <div class="form-group">
                                <label>Nama Peserta</label>
                                <select class="custom-select" id="iduser" name="iduser" >
                                    <option value="">Nama Peserta</option>
                                    @foreach ($datapeserta as $data)
                                        <option value={{$data->id}}>{{$data->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Aktifitas</label>
                                <select class="custom-select" id="idmateri" name="idmateri" >
                                    <option value="">Pilih Aktifitas</option>
                                    @foreach ($datamateri as $data)
                                        <option value="{{ json_encode($data) }}">{{$data->materiname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Nilai</label>
                                <input id="nilai" type="number" class="form-control" name="nilai" required autofocus>
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
