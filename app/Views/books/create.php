<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title mb-4">Add New Book</h1>
                        <form action="/books/store" method="post">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Author</label>
                                <input type="text" class="form-control" name="author" required>
                            </div>
                            <div class="mb-3">
                                <label for="published_date" class="form-label">Published Date</label>
                                <input type="date" class="form-control" name="published_date">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="/" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>