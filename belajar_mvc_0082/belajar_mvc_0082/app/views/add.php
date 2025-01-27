<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15466/15466052.png" type="image/x-icon">
    
    <style>
        body {
            background-color: #FFF8F0; 
        }

        .header {
            background-color: #FADCD9; 
            color: #6B4F4F; 
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        
        .btn-pink {
            background-color: #FFB8C6; 
            color: white;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-pink:hover {
            background-color: #FFC1D3; 
        }

        .btn-cream {
            background-color: #FFE5B4; 
            color: #6B4F4F; 
            border: none;
            transition: background-color 0.3s;
        }

        .btn-cream:hover {
            background-color: #FFEDC1; 
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="header">
            <h2>Add New User</h2>
        </div>
        
        <form action="index.php?action=store" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            
            <button type="submit" class="btn btn-pink">Add User</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
