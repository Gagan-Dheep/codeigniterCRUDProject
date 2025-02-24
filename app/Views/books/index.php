<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Book List</h1>
            <a href="/books/create" class="btn btn-primary">
                <i class="bi bi-plus"></i> Add New Book
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Published Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book): ?>
                            <tr>
                                <td><?= $book['id'] ?></td>
                                <td><?= $book['title'] ?></td>
                                <td><?= $book['author'] ?></td>
                                <td><?= $book['published_date'] ?></td>
                                <td>
                                    <a href="/books/edit/<?= $book['id'] ?>" class="btn btn-sm btn-warning me-2">Edit</a>
                                    <a href="/books/delete/<?= $book['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>