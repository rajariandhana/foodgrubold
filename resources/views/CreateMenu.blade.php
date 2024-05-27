@extends('master')
@section('content')
    <h1>Tambah Camin</h1>
    <form action="/menu" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="nama" placeholder="Enter Name">
                            @error('nama')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="harga" placeholder="price">
                            @error('price')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="desc" placeholder="Enter description">
                            @error('description')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
        
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-select form-control" name="category_id">
                                <option selected value="">-</option>
                                @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="./" class="btn btn-light"><< Back</a>
                            <button type="submit" class="btn btn-primary" style="border-radius: 3px">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                Add Camin
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection