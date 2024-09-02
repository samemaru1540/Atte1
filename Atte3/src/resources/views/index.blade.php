@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <form action="/" class="stamp_form" method="POST">
  @csrf
  <div class="attendance__content">
    <div class="attendance__alert">
      <!-- メッセージ機能 -->
    </div>
    <div class="attendance__panel">
        <button class="attendance__button-submit" name="attend" type="submit">勤務開始</button>
        <button class="attendance__button-submit" name="leave" type="submit">勤務終了</button>
        <button class="attendance__button-submit" name="break" type="submit">休憩開始</button>
        <button class="attendance__button-submit" name="break_end" type="submit">休憩終了</button>
    </div>
  </div>
</form>

    </div>
  </div>
</form>
@endsection