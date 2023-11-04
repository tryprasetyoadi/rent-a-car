@extends('layouts.default')
@section('content')
<div class="container">
    <div class="d-flex">

        <div class="w-100" style="padding-left: 250px;">
            <div> @include('includes.header')</div>
            <label class="title-dashboard">Dashboard</label><br>
            <a class="tambah" href=""><button class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Tambah Data</button></a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Car Name</th>
                        <th scope="col">Capacity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->person}} Person</td>
                        <td>Rp. {{$car->harga}}</td>
                        <td><img src="{{asset($car->path) }}" style="width:50px;" alt=""></td>
                        <td>
                            <a class="edit" href="#"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Edit</button></a>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Hapus</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Data Empty</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>