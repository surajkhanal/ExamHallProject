@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/subject.css')}}" rel="stylesheet">

    <title>Subject Create</title>
</head>

<body>
    <div class="container">
        <br/> <br/>
        <a href="subject_show"> Back </a>
        <h1> <b> ADD New Subject </b></h1>
        <div class="form-wrapper">
    <form action="subject_submit" method="post">
        @csrf
         <div class="form-group">
        <label>Select Semester </label>
            <select class="form-select" name="semester" class="form-control"  aria-label="Default select example">
                <option selected>1sem</option>
                <option>2nd sem</option>
                <option>3rdsem</option>
                <option>4thsem</option>
                <option>5thsem</option>
                <option>6thsem</option>
                <option>7thsem</option>
                <option>8thsem</option>
            </select>
        </div>
        <div class="form-group">
        <label>Select Faculty </label>
            <select class="form-select" name="faculty" class="form-control"  aria-label="Default select example">
                <option selected>Bsc.Csit</option>
                <option>One</option>
                <option>Two</option>
                <option>Three</option>
            </select>
        </div>
        <div class="form-group">
    <label>Select Department </label>
            <select class="form-select" name="department" class="form-control"  aria-label="Default select example">
                <option selected>Bsc.Csit</option>
                <option>One</option>
                <option>Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="wrap">
        <div class="form-group">
            <label> Subject Name </label>
            <input type="text" name="subjectname" class="form-control">
          
        </div>
        <div class="form-group">
            <label> SubjectCode </label>
            <input type="number" name="code" class="form-control">
        </div>
        <div class="plus">
        <span></span>
        <span></span>
        </div>
        </div>
       
        <button type="submit" class="btn btn-primary"> Add Subject</button>
    </form>
    </div>
    </div>
    
</body>
</html>
@endsection