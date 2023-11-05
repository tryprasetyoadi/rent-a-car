@extends('layouts.default')
@section('content')
<div class="container">
    <div class="d-flex">

        <div class="w-100" style="padding-left: 250px;">
            <div> @include('includes.header')</div>
            <label class="title-dashboard">Dashboard</label><br>
            <a class="tambah" href="/admin/add-car"><button class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Tambah Data</button></a>
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
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->person}} Person</td>
                        <td>Rp. {{$car->harga}}</td>
                        <td><img src="{{asset($car->path) }}" style="width:50px;" alt=""></td>
                        <td>
                            <a class="edit" href="#"><button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Edit</button></a>
                            <form action="/admin/car/delete/{{ $car->id }}" method="get">
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Hapus</button>
                            </form>
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