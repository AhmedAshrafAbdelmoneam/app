@extends('layouts.app')
@section('content')
<section id="products">
<div class="container">
    
  <h2>@lang('product-create') </h2>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{!! $error !!}</li>
    @endforeach
  </ul>
  <form method="POST" action="">
    @csrf
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-title">
          @lang('product-title')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-title" placeholder="@lang('product-title')" name="title" value="{{ old('title') }}"
          class="form-control {!! $errors->has('title') ? 'is-invalid' : '' !!}"> @if ($errors->has('title'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('title') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-slug">
          @lang('product-slug')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-slug" placeholder="@lang('product-slug')" name="slug" value="{{ old('slug') }}"
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
        <label for="form-product-slug">
          @lang('product-slug')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-slug" placeholder="@lang('product-slug')" name="slug" value="{{ old('slug') }}"
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
        <label for="form-product-isbn">
          @lang('product-isbn')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-isbn" placeholder="@lang('product-isbn')" name="isbn" value="{{ old('isbn') }}"
          class="form-control {!! $errors->has('isbn') ? 'is-invalid' : '' !!}"> @if ($errors->has('isbn'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('isbn') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-media_type">
          @lang('product-media_type')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-media_type" placeholder="@lang('product-media_type')" name="media_type" value="{{ old('media_type') }}"
          class="form-control {!! $errors->has('media_type') ? 'is-invalid' : '' !!}"> @if ($errors->has('media_type'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('media_type') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-publication_date">
          @lang('product-publication_date')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-publication_date" placeholder="@lang('product-publication_date')" name="publication_date" value="{{ old('media_type') }}"
          class="form-control {!! $errors->has('publication_date') ? 'is-invalid' : '' !!}"> @if ($errors->has('publication_date'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('publication_date') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-price">
          @lang('product-price')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-price" placeholder="@lang('product-price')" name="publication_date" value="{{ old('price') }}"
          class="form-control {!! $errors->has('price') ? 'is-invalid' : '' !!}"> @if ($errors->has('price'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('price') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-language">
          @lang('product-language')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-language" placeholder="@lang('product-language')" name="language" value="{{ old('language') }}"
          class="form-control {!! $errors->has('language') ? 'is-invalid' : '' !!}"> @if ($errors->has('language'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('language') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-status">
          @lang('product-status')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-status" placeholder="@lang('product-status')" name="status" value="{{ old('status') }}"
          class="form-control {!! $errors->has('status') ? 'is-invalid' : '' !!}"> @if ($errors->has('status'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('status') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-vendor">
          @lang('product-vendor')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-vendor" placeholder="@lang('product-vendor')" name="vendor" value="{{ old('vendor') }}"
          class="form-control {!! $errors->has('vendor') ? 'is-invalid' : '' !!}"> @if ($errors->has('vendor'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('vendor') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-translator">
          @lang('product-translator')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-translator" placeholder="@lang('product-translator')" name="translator" value="{{ old('translator') }}"
          class="form-control {!! $errors->has('translator') ? 'is-invalid' : '' !!}"> @if ($errors->has('translator'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('translator') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-editor">
          @lang('product-editor')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-editor" placeholder="@lang('product-editor')" name="editor" value="{{ old('editor') }}"
          class="form-control {!! $errors->has('editor') ? 'is-invalid' : '' !!}"> @if ($errors->has('editor'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('editor') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-editor">
          @lang('product-editor')
        </label>
      </div>
      <div class="col-6">
        <input type="text" id="form-product-editor" placeholder="@lang('product-editor')" name="editor" value="{{ old('editor') }}"
          class="form-control {!! $errors->has('editor') ? 'is-invalid' : '' !!}"> @if ($errors->has('editor'))
        <ul class="invalid-feedback">
          @foreach ($errors->get('editor') as $error)
          <li>{!! $error !!}</li>
          @endforeach
        </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-publisher_id">
          @lang('product-publisher_id')
        </label>
      </div>
      <div class="col-6">
        <select  id="form-product-publisher_id"  name="publisher_id"
          class="form-control {!! $errors->has('publisher_id') ? 'is-invalid' : '' !!}" autofocus > 
          <option value=""> choose..</option>
          <option  value="" >1</option>
        </select>
        @if ($errors->has('publisher_id'))
          <ul class="invalid-feedback">
          @foreach ($errors->get('publisher_id') as $error)
          <li>{!! $error !!}</li>
          @endforeach
          </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-category_id">
          @lang('product-category_id')
        </label>
      </div>
      <div class="col-6">
        <select  id="form-product-category_id"  name="category_id"
          class="form-control {!! $errors->has('category_id') ? 'is-invalid' : '' !!}" autofocus > 
          <option value=""> choose..</option>
          <option  value="" >1</option>
        </select>
        @if ($errors->has('category_id'))
          <ul class="invalid-feedback">
          @foreach ($errors->get('category_id') as $error)
          <li>{!! $error !!}</li>
          @endforeach
          </ul>
        @endif
      </div>
    </div>
    <div class="form-row">
      <div class="col-2">
        <label for="form-product-author_id">
          @lang('product-author_id')
        </label>
      </div>
      <div class="col-6">
        <select  id="form-product-author_id"  name="category_id"
          class="form-control {!! $errors->has('author_id') ? 'is-invalid' : '' !!}" autofocus > 
          <option value=""> choose..</option>
          <option  value="" >1</option>
        </select>
        @if ($errors->has('author_id'))
          <ul class="invalid-feedback">
          @foreach ($errors->get('author_id') as $error)
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
