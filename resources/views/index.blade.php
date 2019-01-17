<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title></title>
</head>
<body>
	
    <a href="/ListData">List Data</a>
    <br/>
    <br/>
	
@if(count($errors)>0)
@foreach($errors->all() as $error)
<p class="alert alert-danger">{{$error }}</p>

@endforeach
@endif
  <form action="InsertData" method="post"> 
		<input type="hidden" name="_token" value="{{csrf_token()}}">
    Household_name:<input type="text" name="house_hold_name" placeholder="Household_name">
      <br>
      <br>
  Father_name:<input type="text" name="father_name" placeholder="Father_name">
        <br>
        <br>
        Gender:<SELECT name="gender">
               <OPTION Value="1">MALE</OPTION>
               <OPTION Value="2">FEMALE</OPTION>
               </SELECT>
        <input type="submit" name="sub" value="Insert">
	</form>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

</body> 
</html>  