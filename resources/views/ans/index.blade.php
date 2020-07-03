@extends('adminlte.master')


@section('content')
<h1>Question</h1>

<form action="/pertanyaan">
    <button type="submit">Back to Question List</button>
</form>

<p>Question ID: {{$tny->id}}</p>
<p>About: {{$tny->Tittle}}</p>
<p>Content: {{$tny->Content}}</p>


<h1>Ans List</h1>
<form action='/jawaban/{$a}' method="post">
    @csrf
    <label for="contentans">Type your Ans :</label> <br>
    <input type="text" name="contentans" id=""><br>

    <input type="hidden" name="question_id" id="" value={{$tny->id}}><br>

    <input type="submit" value="Submit">


</form>

<p>

    @foreach($ans as $data)
    <p>ID Ans: {{ $data->id }}</p>
    <p>Ans: {{ $data->Content }}</p><br><br>


    @endforeach

</p>




@endsection