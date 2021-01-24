<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <title>Add New Faculty</title>
</head>

<body>
    <br />
    <a href="faculty_show"> Back </a>
    <form action="faculty_submit" method="post">
        @csrf
        <div class="form-group">
            <label>Faculty Name </label>
            <input type="text" name="name" class="form-control" required>
            @error('name')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Faculty Short Name </label>
            <input type="text" name="short_name" class="form-control">
            @error('short_name')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Select Department </label>
            <select class="form-select" name="department" class="form-control" aria-label="Default select example">
                <option selected>Bsc.Csit</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            @error('department')
            <div class="alert alert-danger">
                <span class="text-danger">{{ $message }}</span>
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"> Add Department </button>
    </form>

</body>

</html>