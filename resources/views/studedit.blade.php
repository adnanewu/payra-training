<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	555555
	<form action="/update/{{$data->id}}" method="post"> 
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Household_name:<input type="text" name="house_hold_name" value="{{$data->house_hold_name}}">
      <br>
      <br>
    Father_name:<input type="text" name="father_name" value="{{$data->father_name}}">
      <br>
      <br>
      Gender:<input type="text" name="gender" value="{{$data->gender}}">
      Gender:<SELECT name="gender">


               <OPTION Value="1">MALE</OPTION>
         

               <OPTION Value="2">FEMALE</OPTION>
         

               </SELECT>
      <br>
      <br>
      <input type="submit" name="sub" value="update">
	</form>

</body> 
</html>