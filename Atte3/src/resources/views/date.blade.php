@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/default.css') }}">
@endsection

@section('content')
<form action="/date" class="date_form" method="get">
  @csrf
  <table>
    <tr>
      <th>名前</th>
      <th>勤務開始</th>
      <th>勤務終了</th>
      <th>休憩時間</th>
      <th>勤務時間</th>
    </tr>
  </table>
  <table>
    @foreach($data as $item)
      <tr>
        <td>{{ $item['name'] }}</td>
        <td>{{ $item['attend']->format('H:i') }}</td> {{-- 出勤時間 --}}
        <td>{{ $item['leave']->format('H:i') }}</td>  {{-- 退勤時間 --}}
        <td>{{ $item['workDuration']->format('H:i')  }}</td>        {{-- 勤務時間 --}}
        <td>{{ $item['totalBreak']->format('H:i')  }}</td>          {{-- 休憩時間 --}}
      </tr>
    @endforeach
    </tbody>
  </table>

</form>
@endsection