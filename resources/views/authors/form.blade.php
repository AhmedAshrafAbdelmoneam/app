@extends('layouts.app')
@section('content')
<section id="authors">
<div class="container">
  <h2>@lang('author-create') </h2>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{!! $error !!}</li>
    @endforeach
  </ul>
  <form method="POST" action="">
    @csrf
    <div class="form-row">
      <div class="col-2">
        <label for="form-author-name">
          @lang('author-name')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-author-name" placeholder="@lang('author-name')" name="name" value="{{ old('name') }}"
          class="form-control {!! $errors->has('name') ? 'is-invalid' : '' !!}"> @if ($errors->has('name'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('name') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-author-slug">
          @lang('author-slug')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-author-slug" placeholder="@lang('author-slug')" name="slug" value="{{ old('slug') }}"
          class="form-control {!! $errors->has('slug') ? 'is-invalid' : '' !!}"> @if ($errors->has('slug'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('slug') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label or="author-about">
          @lang('author-about')
        </label>
      </div>
      <div class="col-6">
        <textarea id="author-about" class="md-textarea form-control" rows="3"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="col-12">
        <button class="btn btn-primary" type="submit">@lang('fields.submit')</button>
      </div>
    </div>
  </form>
</div>

</section>

@endsection
