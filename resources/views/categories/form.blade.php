@extends('layouts.app')
@section('content')
<section id="categories">
<div class="container">
  <h2>@lang('category-create') </h2>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{!! $error !!}</li>
    @endforeach
  </ul>
  <form method="POST" action="">
    @csrf
    <div class="form-row">
      <div class="col-2">
        <label for="form-category-parent_id">
          @lang('category-parent_id')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-category-parent_id" placeholder="@lang('category-parent_id')" name="parent_id" value="{{ old('parent_id') }}"
          class="form-control {!! $errors->has('parent_id') ? 'is-invalid' : '' !!}"> @if ($errors->has('parent_id'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('parent_id') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-category-name">
          @lang('category-name')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-category-name" placeholder="@lang('category-name')" name="name" value="{{ old('name') }}"
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
        <label for="form-category-slug">
          @lang('category-slug')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-category-slug" placeholder="@lang('category-slug')" name="slug" value="{{ old('slug') }}"
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
      <div class="col-12">
        <button class="btn btn-primary" type="submit">@lang('fields.submit')</button>
      </div>
    </div>
  </form>
</div>

</section>

@endsection
