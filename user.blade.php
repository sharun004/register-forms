<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
 
}
 body{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: medium;
    text-align:center;
    align-content:center;
 }
h2{
    text-align:center;
}
table{
  align-content:center;
    border-collapse: collapse;
    width: 50%;
    padding: 20px;        
}

</style>
<body>

<h2> User Registration display</h2>

<table>
  <tr>
    <th>Id</th>
    <th>UserName</th>
    <th>Email</th>
    <th>Password</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Language</th>
    <th>Zipc</th>
    <th>About</th>
  </tr>
  @foreach($ud as $userdet)
  <tr>

    <td>{{$userdet->id}}</td>
    <td>{{$userdet->username}}</td>
    <td>{{$userdet->email}}</td>
    <td>{{$userdet->password}}</td>
    <td>{{$userdet->phone}}</td>
    <td>{{$userdet->gender}}</td>
    <td>{{$userdet->language}}</td>
    <td>{{$userdet->zipc}}</td>
    <td>{{$userdet->about}}</td>
  
  </tr>
  @endforeach
</table>

</body>
</html>
