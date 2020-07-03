@extends('adminlte.master')


@section('content')
<h1>Question List</h1>

<form action="/pertanyaan/create">
    <button type="submit">Type your question</button>
</form>

<table class="table">
    <thead class="thead-dark">
        <tr>

            <th scope="col">No</th>
            <th scope="col">About</th>
            <th scope="col">Content</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($ask as $tny)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$tny->Tittle}}</td>
            <td>{{$tny->Content}}</td>
            <td>{{$tny->created_at}}</td>
            <td>{{$tny->updated_at}}</td>
            <td>
                <a href="/jawaban/{{$a=$tny->id}}">View</a>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection