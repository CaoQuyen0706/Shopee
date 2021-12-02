@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 100px"> ID </th>
            <th> Tên Khách </th>
            <th> SĐT </th>
            <th> Địa chỉ </th>
            <th> Ngày đặt </th>
            <th style="width: 100px"> &nbsp; </th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key => $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->create_at }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/customers/edit/{{ $customer->id }}">
                        <i class="fas fa-eye"></i>
                    </a>

                    <a  href="#" class="btn btn-danger btn-sm"
                        onclick="removeRow({{ $customer->id }}, '/admin/customers/destroy')">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="card-footer clearfix">{!! $customers->links() !!}</div>
@endsection


