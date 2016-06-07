@include('flash')
<form action="/news/{{ $news->id }}" method="POST">
    {{ method_field('PATCH')}}
    {{ csrf_field() }}
    <input type="text" name="title" value="{{ $news->title}}">
    <input type="text" name="body" value="{{ $news->body}}">
    <button name="submit"> Submit </button>
</form>
@include('errors')