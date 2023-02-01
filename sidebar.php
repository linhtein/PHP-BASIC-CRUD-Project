<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nav Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="mt-5">
    
        <div class="list-group mb-3">
        <a href="{{route('home')}}" class="list-group-item list-group-item-action">
            Home
        </a>
          <a href="{{route('test')}}" class="list-group-item list-group-item-action">
            Test Page
        </a>
    </div>

    <p class="small text-black-50 mb-2">Manage User List</p>
    <div class="list-group mb-3">
        <a href="create.php" class="list-group-item list-group-item-action">
             Create New User 
        </a>
        <a href="read.php" class="list-group-item list-group-item-action">
            User Lists
        </a>
        
    </div>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>