@extends('adminlte.master')


@section('content')
<h1>Put on Your Question</h1>

<form action="/pertanyaan">
    <button type="submit">Back to Question List</button>
</form>

<form action='/pertanyaan' method="post">
    @csrf

    <form action="welcome.html">
        <label for="firstname">About :</label><br>
        <input type="text" name="about" id=""><br>
        <label for="lastname">Question :</label> <br>
        <input type="text" name="contentask" id=""><br>


        <br><br>

        <input type="submit" value="Submit">


    </form>

    @endsection