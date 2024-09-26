@extends('layouts.app')
@section('content')
<div class="p-3 mb-2 bg-info-subtle text-info-emphasis"></div>
<h1>Report Details</h1>
Report Title : {{$report->title}} <br>
Report Description :
{{$report->description}} <br>
Report Priority : {{$report->priority}} <small><br>
    Created at :
    {{$report->created_at}} </small><br>
    Update at :
    {{$report->updated_at}} </small><br>
    <div class="p-3 mb-2 bg-info-subtle text-info-emphasis"></div>
@endsection