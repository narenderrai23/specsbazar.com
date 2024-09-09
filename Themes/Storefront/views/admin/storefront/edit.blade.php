@extends('admin::layout')

@section('title', trans('storefront::storefront.storefront'))

@section('content_header')
    <h3>{{ trans('storefront::storefront.storefront') }}</h3>

    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard.index') }}">{{ trans('admin::dashboard.dashboard') }}</a></li>
        <li class="active">{{ trans('storefront::storefront.storefront') }}</li>
    </ol>
@endsection

@section('content')
    <form method="POST" action="{{ route('admin.storefront.settings.update') }}" class="form-horizontal" id="storefront-settings-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}

        {!! $tabs->render(compact('settings')) !!}
    </form>
@endsection

@push('globals')
    @vite([
        'Themes/Storefront/resources/assets/admin/sass/main.scss',
        'Themes/Storefront/resources/assets/admin/js/main.js',
        'Modules/Media/Resources/assets/admin/sass/main.scss',
        'Modules/Media/Resources/assets/admin/js/main.js'
    ])
@endpush
