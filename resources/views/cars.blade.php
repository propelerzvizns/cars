<table>
@foreach ($cars as $car)
    
   {{-- Polja u tabeli: id, title, producer, number_of_doors --}}
    
        <tr>
            <th>title</th>
            <th>producer</th>
            <th>number of doors</th></tr>
        <tr>
            <td>{{$car->title}}</td>
            <td>{{$car->producer}}</td>
            <td>{{$car->number_of_doors}}</td>
        </tr>
    
@endforeach
</table>