@extends('layouts.app')
<div id="wrapper">
    <!-- Navigation -->
        @include('layouts.part.navbar')

    @include('layouts.part.sidebar')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data Kategori</h1>
                </div>
            </div>
            <div class="row">
                <div class="panel-body">
                    <div class="card-body">
                        <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label>Nama Kategori</label>
                                <input type="text" class="form-control" name="naka" value="{{ $kategori->naka }}">
                            </div>

                            <div class="form-group mb-3">
                                <label>Deskripsi Kategori</label>
                                <input type="text" class="form-control" name="deks_kate" value="{{ $kategori->deks_kate }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
