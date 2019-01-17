<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center><a href='/'>ADD Data<a/></center>
  <table align="center" border="1">
    <tr>
      <th>NO</th>
      <th>Household_name</th>
      <th>Father_name</th>
      <th>Gender</th>
      <th>Action</th>
    </tr>
  @foreach($data as $key=>$val)
  <?php  
  if($val->gender==1)
    $gender='Male';
  else
    $gender='Female';
  ?>
  <tr>
    <td>{{++$key}}</td>
    <td>{{$val->house_hold_name}}</td>
    <td>{{$val->father_name}}</td>
    <td>{{$gender}}</td>
    <td><a href="/Del/{{$val->id}}">Delete</a> || <a href="/edit/{{$val->id}}">Edit</a></td>
  </tr>
  @endforeach
</table>
</body>
</html>