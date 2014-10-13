<h1>Laravelで画像処理します</h1>

{{ Form::open(['route' => 'photos.store', 'files' => true]) }}
{{ Form::hidden('user_id', Auth::user()->id) }}

{{ Form::label('fileName', 'アップロード') }}
{{ Form::file('fileName') }}

{{ Form::submit('アップロードする') }}

{{ Form::close() }}
