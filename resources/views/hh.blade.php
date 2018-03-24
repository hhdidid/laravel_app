@extends('layouts.app')

@section('content')
    <div id="title" style="text-align: center;">
        <h1>UserAudit</h1>
        <div style="padding: 5px; font-size: 16px;">UserAudit</div>
    </div>
    <hr>
    <div id="content">
        <ul>
            @foreach ($users as $user)
            <li style="margin: 50px 0;">
                <div class="title">
                </div>
                <div class="body">
					<pre>{{ $user->id }}	{{ $user->name }}	{{ $user->email }}	{{ $user->isAudited }}			<a href="http://127.0.0.1:8000/passAudit/{{ $user->id }}">pass</a></pre>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
