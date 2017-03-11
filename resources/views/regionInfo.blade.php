@extends('admin.layout')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Region info</title>
</head>
<body>

<form action="/insert" method ="post">
<table>
	<tr>

	{{ csrf_field() }}
		<td>რეგიონის სახელი</td>
		<td><input type="text" name="region_name"></td>
	</tr>
		<tr>
		<td>რეგიონის ცენტრალური ქალაქი</td>
		<td><input type="text" name="region_capital"></td>
	</tr>
		<tr>
		<td>რეგიონის შესახებ</td>
		<td><input type="text" name="about_region"></td>
	</tr>
		<tr>
		<td>ფოტო გალერეა</td>
		<td><input type="text" name="about_tours"></td>
	</tr>

<tr>
<td><input type="submit" name="submit" value="add"></td>

</tr>




<table>
	<tr>
		<td>region_name</td>
		<td>region_capital</td>

	</tr>
	@foreach($data as $value)
	<tr>
	<td>{{$value->region_name}}</td>
	<td>{{$value->region_capital}}</td>
	</tr>
</table>
@endforeach


</table>
</body>
</html>

@endsection	