@extends('layouts.app')
@section('title', 'car')
@section('content')

    <div class="row">
        <div class="col-sm-4">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>titleproducer</th>
                    <th>title</th>
                    <th>number of doors</th>
                </tr>

                <tr>
                    <td><a href="{{route('oneCar', ['id' => $car->id])}}">{{$car->producer}}</a></td>
                    
                    <td>{{$car->title}}</td>
                    <td>{{$car->number_of_doors}}</td>
                </tr>

            </table>

        </div>
    </div>
    <a href="/cars">go back to cars</a>
@endsection