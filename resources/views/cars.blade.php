@extends('layouts.app')
@section('title', 'cars')
@section('content')
<div class="row">
    <div class="col-sm-4">
            <table class="table table-striped table-bordered">
                    <tr>
                            <th>producer</th>
                            <th>title</th>
                            <th>door number</th></tr>
                        <tr>
                   
                    @foreach ($cars as $car)
                        
                    {{-- Polja u tabeli: id, title, producer, number_of_doors --}}
                        

                               
                                <td><a href="{{route('oneCar', ['id' => $car->id])}}">{{$car->producer}}</a></td>
                                
                                <td>{{$car->title}}</td>
                                <td>{{$car->number_of_doors}}</td>
                            </tr>
                        
                    @endforeach
                </table>
    </div>
</div>
@endsection
