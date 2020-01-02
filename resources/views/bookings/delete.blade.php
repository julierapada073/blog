<!DOCTYPE html>
<html>
	<table>
		<thead>
			<tr>
			<th> ID</th>
			<th> DATE_BOOKED </th>
			<th> BOOKER </th>
			<th> DATE_TO_BOOK </th>
			<th> TYPE </th>
			<th> DESCRIPTION </th>
		</tr>
		</thead>
		<tbody>
			@foreach($bookings as $bookings )
			<tr>
			<td> {{ $bookings->id}} </td>
			<td> {{ $bookings->date_booked }} </td>
			<td> {{ $bookings->booker }} </td>
			<td> {{ $bookings->date_to_book}} </td>
			<td> {{ $bookings->type }} </td>
			<td> {{ $bookings->description }} </td>
			</tr>
		
			@endforeach
		</tbody>

</html>