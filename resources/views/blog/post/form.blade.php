@extends('base.layouts.page')

@section('content')

    <form>

        {{-- title --}}
        <div class="form-group">
            <label class="" for="title">Title</label>
            <input name="title" type="text" />
        </div>

        {{-- preview --}}
        <div class="form-group">
            <label class="" for="preview">Preview</label>
            <textarea name="preview"></textarea>
        </div>

        {{-- body --}}
        <div class="form-group">
            <label class="" for="body">Body</label>
            <textarea name="body"></textarea>
        </div>

        {{-- submit --}}
        <div class="form-group">
            <button class="" id="#submitPostButton">Submit</button>
        </div>

    </form>

@endsection
