@extends('adminlte.master')


@section('content')
<h1>Question</h1>

<form action="/pertanyaan">
    <button type="submit" class="btn btn-sm m-2 btn-default">Back to Question List</button>
</form>


<div class="m-2 card" style="width: 18rem;">
    <div class="card-body">
        <h1 class="card-title">Question ID: {{$tny->id}}</h1><br>
        <h6 class="card-title">About: {{$tny->Tittle}}</h6>

        <p class="card-text">
            Content: {{$tny->Content}}<br>
            Date created: {{$tny->created_at}}<br>
            Last Updated: {{$tny->updated_at}}<br>

        </p>

        <form action="/pertanyaan/{{$tny->id}}/edit">
            <button type="submit" class="btn btn-sm btn-default">Edit Question</button>
        </form>
    </div>
</div>

<h1>Ans List</h1>
<form action='/jawaban/{a}' method="post">
    @csrf
    <label for="Content">Type your Ans :</label> <br>
    <input type="text" name="Content" id=""><br>

    <input type="hidden" name="ask_id" id="" value={{$tny->id}}><br>

    <input type="submit" value="Submit">


</form>


<div class="row m-2">
    @foreach($ans as $data)
    <div class="m-2 card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">AnsID: {{ $data->id }}</h5>
            <p class="card-text">Content: {{ $data->Content }}</p>

        </div>
    </div>
    @endforeach
</div>

@endsection