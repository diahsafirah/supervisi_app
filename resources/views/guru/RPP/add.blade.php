@extends('backend.layout.main')
@section('title', 'Halaman Kurikulum')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h5 class="m-0 pt-3 font-weight-bold text-primary">Add RPP </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nip" class="form-control-label">
                            NIP
                        </label>
                        <input type="number" name="nip" id="nip" class="form-control" value="{{old('nip')}}" >
                    </div>
                    <div class="form-group">
                        <label for="mapel" class="form-control-label">
                            Mata Pelajaran
                        </label>
                        <input type="number" name="mapel" id="mapel" class="form-control" value="{{old('mapel')}}" >
                    </div>
                    <div class="form-group">
                        <label for="" class="form-control-label">
                            Description
                        </label>
                        <textarea id="summernote" name="rpp" >{{old('rpp')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
