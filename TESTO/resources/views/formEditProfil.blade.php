<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Table</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
<body>
  <div class="ui grid">
    <div class="four wide column"></div>
    <div class="eight wide column">  

    <form action="/ValidEditProfile/{{$users->name}}" method="post">
    {{csrf_field()}}
        <label for="name">nom
          <input type="text" name="name" id="name"  value="{{$users->name}}">
        </label>

        <label for="email">email
          <input type="email" name="email" id="email" value="{{$users->email}}">
        </label>
      

        <label for="password">mot de passe
          <input type="password" name="password" id="password" value="{{$users->password}}">
        </label>
        <input type="submit">check
      
      



      </form>   