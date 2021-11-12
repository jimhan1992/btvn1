@extends('admin.master')
@section('content-admin')
    <div class="container">
        <div class="card mt-2">
            <h4 class="card-header">Thêm Mới Người Dùng</h4>
            <div class="card-body">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="">Họ:</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                               name="first_name" value="{{old('first_name')}}">
                        @error('first_name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Tên:</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                               name="last_name" value="{{old('last_name')}}">
                        @error('last_name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{old('email')}}">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Mật Khẩu:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" value="{{old('password')}}">
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Địa Chỉ:</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('address')}}">
                        @error('address')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>
@endsection
