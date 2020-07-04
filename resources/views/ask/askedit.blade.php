@extends('adminlte.master')


@section('content')
<h1>Put on Your Question</h1>

<form action="/pertanyaan">
    <button type="submit">Back to Question List</button>
</form>

<form action='/pertanyaan/{{$ask->id}}' method="post">
    @csrf
    @method('PUT')

    <form action="welcome.html">
        <label for="Tittle">About :</label><br>
        <input type="text" name="Tittle" id="" value="{{$ask->Tittle}}"><br>
        <label for="lastname">Question :</label> <br>
        <input type="text" name="Content" id="" value="{{$ask->Content}}"><br>
        <input type="hidden" name="ask_id" id="" value={{$ask->id}}><br>


        <br><br>

        <input type="submit" value="Update">


    </form>

    @endsection