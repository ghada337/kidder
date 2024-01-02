@extends("Kidder.layouts.Pages",["Value"=>"About","title"=>"About Us"])
@section("content")
    @include('Kidder.includes.AboutUs')
    @include("Kidder.includes.Call")
    @include("Kidder.includes.Team")
@endsection
