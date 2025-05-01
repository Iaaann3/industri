@extends('layouts.app')

@section('content')
<div id="wrapper">

    @include('layouts.part.navbar')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header mb-3">Tambah Kategori</h1>
                </div>
            </div>

            <div class="row">
                <div class="panel-body">
                    <div class="card-body">
                        <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input type="text" name="naka" class="form-control" placeholder="Masukkan Nama Kategori" required>
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi Kategori</label>
                                    <textarea name="deks_kate" class="form-control" placeholder="Masukkan Deskripsi Kategori" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary" name="save">Save</button>
                                <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
