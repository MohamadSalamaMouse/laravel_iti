@extends('admin.layouts.master')
@section('title','All Student')
@section('breadcrumbs')
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">All Students</a></li>
                            <li><a href="add.php">Add Student</a></li>
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
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Department</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>{{$student->department->name}}</td>
                                       
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
