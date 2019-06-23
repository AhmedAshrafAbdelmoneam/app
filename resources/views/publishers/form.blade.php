@extends('layouts.app')
@section('content')
<section id="publisher">
<div class="container">
  <h2>@lang('publisher-create') </h2>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{!! $error !!}</li>
    @endforeach
  </ul>
  <form method="POST" action="">
    @csrf
    <div class="form-row">
      <div class="col-2">
        <label for="form-publisher-name">
          @lang('publisher-name')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-publisher-name" placeholder="@lang('publisher-name')" name="name" value="{{ old('name') }}"
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
        <label for="form-publisher-slug">
          @lang('publisher-slug')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-publisher-slug" placeholder="@lang('publisher-slug')" name="slug" value="{{ old('slug') }}"
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
        <label for="form-publisher-logo">
          @lang('publisher-logo')
        </label>
      </div>
      <div class="col-6">
        <input type="file" id="form-publisher-logo" placeholder="@lang('publisher-logo')" name="logo" value="{{ old('logo') }}"
          class="form-control {!! $errors->has('logo') ? 'is-invalid' : '' !!}"> @if ($errors->has('logo'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('logo') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-publisher-email">
          @lang('publisher-email')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-publisher-email" placeholder="@lang('publisher-email')" name="slug" value="{{ old('email') }}"
          class="form-control {!! $errors->has('email') ? 'is-invalid' : '' !!}"> @if ($errors->has('email'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('email') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-publisher-site">
          @lang('publisher-site')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-publisher-site" placeholder="@lang('publisher-site')" name="site" value="{{ old('site') }}"
          class="form-control {!! $errors->has('site') ? 'is-invalid' : '' !!}"> @if ($errors->has('site'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('site') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-publisher-phone">
          @lang('publisher-phone')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-publisher-phone" placeholder="@lang('publisher-phone')" name="phone" value="{{ old('phone') }}"
          class="form-control {!! $errors->has('phone') ? 'is-invalid' : '' !!}"> @if ($errors->has('phone'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('phone') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-publisher-address">
          @lang('publisher-address')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-publisher-address" placeholder="@lang('publisher-address')" name="address" value="{{ old('address') }}"
          class="form-control {!! $errors->has('address') ? 'is-invalid' : '' !!}"> @if ($errors->has('address'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('address') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label or="publisher-about">
          @lang('publisher-about')
        </label>
      </div>
      <div class="col-6">
        <textarea id="publisher-about" class="md-textarea form-control" rows="3"></textarea>
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
