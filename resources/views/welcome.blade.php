<form action="{{ route('language') }}" method="post">
    @csrf
    <input name="language" value="vi" type="submit">
    <input name="language" value="en" type="submit">
</form>

{{ __('language.a') }}