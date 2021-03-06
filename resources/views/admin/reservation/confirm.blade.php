@extends('layout')
@section('content')
<div class="m-2">
    {{ Form::open(['route' => 'admin.confirmReserve', 'method' => 'put']) }}
    <div>
        <h4>①ご予約日時</h4>
        <h5 class="pl-3">{{ $reservation_date->isoFormat('YYYY年MM月DD日(ddd)') }}
        @foreach($times as $time)
            @if($time->id == $reservation["time_id"])
                {{$time->time_number}}</h5>
            @endif
        @endforeach
    </div>
    <div class="mt-4">
        <div class="@if(!empty($errors->first('course_id'))) has-error @endif">
            <h4>②ご予約コース</h4>
            @foreach($courses as $course)
                @if($course->id == $reservation["course_id"])
                    <h5 class="ml-3">{{$course->course_name}}</h5>
                @endif
            @endforeach
        </div>
        <div class="mt-4">
            <h4>③お客様情報</h4>
            <div class="ml-3 mt-2">
                <h5>・お名前</h5>
                <h5 class="ml-4">{{ $reservation["name"] }}　様</h5>
            </div>
            <div class="ml-3 mt-3">
                <h5>・ご年齢</h5>
                <h5 class="ml-4">{{ $reservation["age"] }}歳</h5>
            </div>
            <div class="ml-3 mt-3">
                <h5>・性別</h5>
                @if($reservation["gender"] == 1)
                    <h5 class="ml-4">男性</h5>
                @elseif($reservation["gender"] == 2)
                    <h5 class="ml-4">女性</h5>
                @endif
            </div>
            <div class="ml-3 mt-3">
                <h5>・メールアドレス</h5>
                <h5 class="ml-4">{{ $reservation["email"] }}</h5>
            </div>
            <div class="ml-3 mt-3">
                <h5>・電話番号</h5>
                <h5 class="ml-4">{{ $reservation["phone_number"] }}</h5>
            </div>
        </div>
    </div>
    <div class="text-center ">
        <button class = 'btn btn-secondary mt-3 mr-3'>
            {{ link_to(URL::previous(), '戻る', ['style' => 'color:#FFFFFF']) }}
        </button>
        {{ Form::submit('予約確定',['class'=> 'btn btn-primary mt-3']) }}
    </div>
    {{ Form::close() }}
</div>
@endsection('content')



