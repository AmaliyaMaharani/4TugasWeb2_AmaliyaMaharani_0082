<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC Amaliya Maharani</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <style>
        body {
            background-color: #FFF8F0; 
        }

        .header {
            background-color: #FADCD9; 
            color: #6B4F4F; 
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

        .table thead {
            background-color: #FADCD9; 
        }

        .table tbody tr:hover {
            background-color: #FFE3E3; 
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="header d-flex justify-content-between align-items-center p-3 rounded">
                    <h1>User Details</h1>
                    <a href="index.php?action=add" class="btn btn-pink">Add User</a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($user as $data): ?>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td><?php echo htmlspecialchars($data['name']); ?></td>
                                <td><?php echo htmlspecialchars($data['email']); ?></td>
                                <td>
                                    
                                    <a href="index.php?action=view&id=<?php echo $data['id']; ?>" 
                                       class="btn btn-pink btn-sm">View</a>
                                    <a href="index.php?action=edit&id=<?php echo $data['id']; ?>" 
                                       class="btn btn-pink btn-sm">Edit</a>
                                    <a href="index.php?action=delete&id=<?php echo $data['id']; ?>" 
                                       class="btn btn-pink btn-sm" 
                                       onclick="return confirm('Are you sure?');">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
