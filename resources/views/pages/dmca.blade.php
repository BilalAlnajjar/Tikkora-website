@extends('pages.layouts.user')
@section('content')
    <div class="flex flex-col items-center gap-20 p-20">
        <div class="text-white">
            <h2 class="text-3xl font-bold"> حقوق الملكية الفكرية DMCA</h2>
        </div>
        <div class="section">
            {!!html_entity_decode($general->dmca)!!}
        </div>
    </div>
@endsection
