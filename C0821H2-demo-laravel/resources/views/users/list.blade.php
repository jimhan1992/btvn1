@extends('admin.master')
@section('content-admin')
    <div class="container">
        <div class="col-12 mt-2">
            <a class="btn btn-primary" href="{{route('users.create')}}">Thêm mới</a>
        </div>
        <div class="card mt-2">
            <div class="card">
                <h3 class="card-header">Danh sach nguoi dung</h3>
                <table class="table table-hover">
                    <tr>
                        <td>STT</td>
                        <td class="column-name">Tên</td>
                        <td>Email</td>
                        <td>Địa Chỉ</td>
                        <td></td>
                    </tr>
                    @forelse($users as $key => $user)
                        <tr class="user-item" id="user-item-{{$user->id}}">
                            <td>{{ $key + 1 }}</td>
                            <td class="column-name">{{ $user->first_name}} {{$user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-outline-warning">Sửa</a>
                                <a href="{{route('users.delete', $user->id)}}" class="btn btn-outline-danger" onclick="return confirm('Xóa Chứ ??')">Xóa</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No Data</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
