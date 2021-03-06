@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        @if(!empty($is_birthday_list))
                            Birthday Month Customers &nbsp;&nbsp;<a href="{{route('staff.customer')}}" class="small">(click
                                to view all customer)</a>
                        @else
                            Customers &nbsp;&nbsp;<a href="{{route('staff.customer',['type'=>'birthday'])}}"
                                                     class="small">(click to view birthday month customer)</a>
                        @endif
                        <a href="{{route('staff.customer.sms_blast')}}" class="btn btn-sm btn-primary pull-right" style="margin-left: 10px;">SMS Blast</a>
                        <a href="{{route('staff.customer.export')}}" class="btn btn-sm btn-info pull-right" style="margin-left: 10px;">Export</a>
                        <a href="{{route('staff.customer.add')}}" class="btn btn-sm btn-success pull-right">Add New</a>
                    </div>

                    <div class="card-body">
                        @include('flash::message')

                        <table id="datatable" class="table table-list small">
                            <thead>
                            <tr>
                                <th width="80px"></th>
                                <th>Name</th>
                                <th>Tel</th>
                                <th>Gender</th>
                                <th>City</th>
                                <th>DOB</th>
                                <th>Last Visit</th>
                                <th>Remark</th>
                                <th>Stylist</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($result as $data)
                                <tr>
                                    <td>
                                        <a href="{{route('staff.customer.add_log',['id'=>$data->id])}}"
                                           class="btn btn-sm-2 btn-success">Add Log</a>
                                        <a href="{{route('staff.customer.edit',[$data->id])}}"
                                           class="btn btn-sm-2 btn-info">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('staff.customer.detail',[$data->id])}}">{{$data->name}}</a>

                                        @if(!empty($data->dob) && $data->dob->format('m') == date('m'))
                                            <span class="oi oi-star" style="color: green"></span>
                                        @endif
                                    </td>
                                    <td>{{$data->tel}}</td>
                                    <td>{{$data->gender}}</td>
                                    <td>{{$data->city}}</td>
                                    <td>{{$data->dob ? $data->dob->toFormattedDateString() : '-'}}</td>
                                    <td>{{$data->last_visit}}</td>
                                    <td>{{$data->remark}}</td>
                                    <td>{{empty($data->stylist) ? ' - ' : $data->stylist->name}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable({
                autoWidth: false,
                responsive: true,
                pageLength: 50,
                columnDefs: [{orderable: false, targets: 0}],
                order: [1, 'asc']
            });
        });
    </script>
@stop