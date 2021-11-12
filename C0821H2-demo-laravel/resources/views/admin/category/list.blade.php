@extends('admin.master')
@section('content-admin')
    <div class="mt-2 mb-2">
        <a href="{{route('category.create')}}" class="btn btn-primary">add</a>
    </div>
    <div class="card">
        <h4 class="card-header">Danh Sách Thể Loại</h4>
        <div class="card-body">
            <div class="container">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Tên Thể Loại</th>
                        <th></th>
                    </tr>
                    @forelse($category as $key => $value)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$value->name}}</td>
                            <td>
                                <a href="{{route('category.edit', $value->id)}}" class="btn btn-outline-warning">Sửa</a>
                                <a href="{{route('category.delete', $value->id)}}" class="btn btn-outline-danger" onclick="return confirm('Xóa Chứ ??')">Xóa</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No data</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

@endsection
