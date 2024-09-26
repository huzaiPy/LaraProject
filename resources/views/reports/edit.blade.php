@extends('layouts.app')
@section('content')
<div class="p-3 mb-2 bg-info-subtle text-info-emphasis"></div>
<h3>Edit Report Form</h3>
<form action="/reports/{{$report->id}}" method="POST">
    @csrf
    @method('PUT')
    Title : <input type="text" name="title" value="{{$report->title}}"><br>
    Description : <textarea name="description">{{$report->description}}</textarea><br>
    Priority: <select name="priority" class="form-select" aria-label="Default select example">
            <option selected>Select Priority</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select><br>
    <input type="submit" value="Update" class="btn btn-primary">
    <input type="reset" value="Cancel" class="btn btn-danger"><br>
</form>
<div class="p-3 mb-2 bg-info-subtle text-info-emphasis"></div>
@endsection
