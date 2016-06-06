<form action="/news" method="POST">
    {{ csrf_field() }}
    <input type="text" name="title" />
    <input type="text" name="body">
    <button type="submit" name="submit"> Submit </button>
</form>
@include('errors')