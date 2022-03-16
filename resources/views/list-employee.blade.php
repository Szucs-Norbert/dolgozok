<!DOCTYPE html>
<html lang="hu">
 
<head>
  <title>Tanulo lista</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>



<body>
<div class="container">
  <h2>Dolgozók listája</h2>

  @if( session()->has( "success" ))
        <div class="alert alert-success">
            {{ session( "success") }}
        </div>
  @endif
 
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Név</th>
        <th>Város</th>
        <th>Születés</th>
        <th>Fizetés</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $employees as $employee )
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->city }}</td>
                <td>{{ $employee->date }}</td>
                <td>{{ $employee->salary }}</td>

                <td>
                    <a class="btn btn-info" href="/update/{{ $employee->id }}">Szerkesztés</a>
                    <a class="btn btn-primary" href="/delete/{{ $employee->id }}">Törlés</a>
               </td>

            </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>