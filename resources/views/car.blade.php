<table>
        <tr>
                <th>title</th>
                <th>producer</th>
                <th>number of doors</th></tr>
            <tr>
                <td><a href="{{route('oneCar', ['id' => $car->id])}}">{{$car->title}}</a></td>
                
                <td>{{$car->producer}}</td>
                <td>{{$car->number_of_doors}}</td>
            </tr>
</table>