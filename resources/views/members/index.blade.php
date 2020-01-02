<!DOCTYPE html>
<html>
	<table>
		<thead>
			<tr>
			<th> ID</th>
			<th> NAME </th>
		</tr>
		</thead>
		<tbody>
			@foreach($members as $member )
			<tr>
			<td> {{ $member->idmembers }} </td>
			<td> {{ $member->firstname }} </td>
			<td> {{ $member->lastname }} </td>
			</tr>
		
			@endforeach
		</tbody>

</html>