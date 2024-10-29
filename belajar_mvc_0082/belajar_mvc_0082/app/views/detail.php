<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DETAIL USERS</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <style>
        body {
            background-color: #FFF8F0; 
        }

        .card {
            background-color: #FADCD9; 
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            padding: 20px;
        }

        h5 {
            color: #6B4F4F; 
        }

        .btn-custom {
            background-color: #FFB8C6; 
            color: #6B4F4F; 
            border: none;
        }

        .btn-custom:hover {
            background-color: #FFC1D3; 
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="row p-3">
                <div class="col-12">
                    
                    <h5>ID: <?php echo htmlspecialchars($data['id']); ?></h5>
                    <h5>Name: <?php echo htmlspecialchars($data['name']); ?></h5>
                    <h5>Email: <?php echo htmlspecialchars($data['email']); ?></h5>

                   
                    <a href="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER'] ?? 'index.php'); ?>" 
                       class="btn btn-custom mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
