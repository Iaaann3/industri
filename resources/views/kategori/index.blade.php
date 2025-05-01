@extends('layouts.app')

@section('content')
<div id="wrapper">

    @include('layouts.part.navbar')
    @include('layouts.part.sidebar')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kategori</h1>
                </div>
            </div>

            <div class="row">
                <div class="panel-body">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data Kategori
                            </div>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @forelse ($kategori as $data)
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $data->naka }}</td>
                                            <td>{{ $data->deks_kate }}</td>
                                            <td>
                                                <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('kategori.show', $data->id) }}" class="btn btn-sm btn-warning">Show</a>
                                                <form action="{{ route('kategori.destroy', $data->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th scope="row" colspan="4" class="text-center">Data tidak tersedia.</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="col-lg-12 mb-3">
                                <a href="{{ route('kategori.create') }}" class="btn btn-primary">Add</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
