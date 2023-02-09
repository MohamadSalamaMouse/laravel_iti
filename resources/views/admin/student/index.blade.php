@extends('admin.layouts.master')
@section('title','All Student')
@section('breadcrumbs')
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>{{trans('main_trans.Dashboard')}} </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{route('student.index')}}">{{trans('main_trans.All_Students')}}</a></li>
                            <li><a href="{{route('student.create')}}">{{trans('main_trans.Add_Student')}}</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Students</strong>
                        </div>
                        <div class="card-body">
                            @if(\Illuminate\Support\Facades\Session::has('msg'))
                                <div class="alert alert-success">
                                    {{\Illuminate\Support\Facades\Session::get('msg')}}
                                </div>
                            @endif
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">{{trans('main_trans.id')}} </th>
                                    <th scope="col">{{trans('main_trans.name')}} </th>
                                    <th scope="col">{{trans('main_trans.email')}} </th>
                                    <th scope="col">{{trans('main_trans.phone')}} </th>
                                    <th scope="col">{{trans('main_trans.depart')}} </th>
                                    <th scope="col">{{trans('main_trans.actions')}} </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->department->name}}</td>
                                    <td>
                                        <form action="{{route('student.destroy',$student->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-danger" type="submit" value="Delete">
                                        </form>
                                        <a href="{{route('student.edit',$student->id)}}" style="color:lightgreen">edit</a>
                                        <a href="{{route('student.show',$student->id)}}" style="color:lightgreen">show</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
