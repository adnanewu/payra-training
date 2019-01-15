<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@if($msg=Session::get('msg'))
    {{$msg}}
    @endif
    <a href="/ListData">List Data</a>
    <br/>
    <br/>
	<form action="InsertData" method="post"> 
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Household_name:<input type="text" name="house_hold_name">
      <br>
      <br>
        Father_name:<input type="text" name="father_name">
        <br>
         <br>
        Gender:<SELECT name="gender">
               <OPTION Value="1">MALE</OPTION>
               <OPTION Value="2">FEMALE</OPTION>
               </SELECT>
        <input type="submit" name="sub" value="Insert">
	</form>

</body> 
</html>  