<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contract Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
            <form method="post" action="{{URL::to('/DataInsert')}}">

        @csrf

        
  <label for="fname">Name:</label><br>
  <input  class="col-md-6" type="text"  name="name"><br>

  <label for="fname">Barcode:</label><br>
  <input class="col-md-6"   type="text"  name="barcode"><br>

    <label for="fname">Book Code:</label><br>
  <input class="col-md-6"   type="text"  name="bookcode"><br>

    <label for="fname">Email:</label><br>
  <input class="col-md-6"   type="text"  name="email"><br>

  <label for="fname">Phone:</label><br>
  <input class="col-md-6"   type="text"  name="phone"><br>

  <label for="fname">Description:</label><br>
  <input class="col-md-6"   type="text"  name="description"><br>

  
  <input type="submit" name="submit" value="Submit">
  
</form> 
        

    </div>




</body>
</html>