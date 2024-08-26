@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<form action="/" class="stamp_form" method="post">
  @csrf
  <div class="attendance__content">
    <div class="attendance__alert">
    // メッセージ機能
    </div>
    <div class="attendance__panel">
      <form class="attendance__button">
        <button class="attendance__button-submit attend" type="submit">勤務開始</button>
      </form>
      <form class="attendance__button">
        <button class="attendance__button-submit leave" type="submit">勤務終了</button>
      </form>
      <form class="attendance__button">
        <button class="attendance__button-submit break" type="submit">休憩開始</button>
      </form>
      <form class="attendance__button">
        <button class="attendance__button-submit break_end" type="submit">休憩終了</button>
      </form>
    </div>
  </div>
</form>
@endsection