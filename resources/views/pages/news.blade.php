@extends('pages.layouts.user')
@section('content')
    <div class="flex flex-col items-center gap-20 p-20">
        <div class="text-white">
            <h2 class="text-3xl font-bold">{{$news->title}}</h2>
        </div>
        <div class="">
            <img class="max-w-2xl" alt="" src="{{asset($news->image)}}">
        </div>
        <div class="text-white newsDescription">
            {!! html_entity_decode($news->description) !!}
        </div>
    </div>
@endsection
