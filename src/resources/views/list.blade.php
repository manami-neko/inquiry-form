@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/list.css') }}"/>
@endsection

@section('content')

<div class="inquiry-form__content">
            <div class="list-form__heading">
                <h2>一覧表</h2>
            </div>
<form class="form" action="/list" method="get">

<table>
    <tr>
        <th>名前</th>
        <th>メールアドレス</th>
        <th>商品名</th>
    </tr>
    @foreach ($inquires as $inquiry)
    <tr>
        <td>{{$inquiry->name}}</td>
        <td>{{$inquiry->email}}</td>
        <td>{{$inquiry->item->name}}</td>
    </tr>
    @endforeach
</table>
</form>
@endsection