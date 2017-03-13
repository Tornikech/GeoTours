<!DOCTYPE html>
<html>
<head>
	<title>Insert form</title>
</head>
<body>
	

	<center>

	<form action="/insert" method="post">
		<table>
			<tr>
				{{ csrf_field() }}
				<td>Region Name: </td>
				<td><input type="text" name="regionName"></td>
			</tr>
			<tr>
				<td>Region Capital: </td>
				<td><input type="text" name="regionCity"></td>
			</tr>
						<tr>
				<td>About Tours: </td>
				<td><input type="text" name="aboutTours"></td>
			</tr>
						<tr>
				<td>About Place: </td>
				<td><input type="text" name="aboutPlace"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="add"></td>
			</tr>

		</form>
		</center>
		</table>

<center>
			

</body>
</html>