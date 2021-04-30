@extends('layouts.admin')

@section('title', trans('general.title.edit', ['type' => trans_choice('general.items', 1)]))

@section('content')
    <div class="card">
        {!! Form::model($item, [
            'id' => 'item',
            'method' => 'PATCH',
            'route' => ['items.update', $item->id],
            '@submit.prevent' => 'onSubmit',
            '@keydown' => 'form.errors.clear($event.target.name)',
            'files' => true,
            'role' => 'form',
            'class' => 'form-loading-button',
            'novalidate' => true
        ]) !!}

            <div class="card-body">
                <div class="row">
                    <!-- {{ Form::textGroup('name', trans('general.name'), 'tag') }}

                    {{ Form::multiSelectAddNewGroup('tax_ids', trans_choice('general.taxes', 1), 'percentage', $taxes, $item->tax_ids, ['path' => route('modals.taxes.create'), 'field' => ['key' => 'id', 'value' => 'title']], 'col-md-6 el-select-tags-pl-38') }}

                    {{ Form::textareaGroup('description', trans('general.description')) }}

                    {{ Form::textGroup('sale_price', trans('items.sales_price'), 'money-bill-wave') }}

                    {{ Form::textGroup('purchase_price', trans('items.purchase_price'), 'money-bill-wave-alt') }}

                    {{ Form::selectRemoteAddNewGroup('category_id', trans_choice('general.categories', 1), 'folder', $categories, $item->category_id, ['path' => route('modals.categories.create') . '?type=item', 'remote_action' => route('categories.index'). '?search=type:item']) }}

                    {{ Form::fileGroup('picture', trans_choice('general.pictures', 1), '', ['dropzone-class' => 'form-file'], $item->picture) }}

                    {{ Form::radioGroup('enabled', trans('general.enabled'), $item->enabled) }} -->
                    <!-- {{ Form::textGroup('name', trans('Make'), 'tag') }} -->

<!-- {{ Form::textGroup('name', trans('general.name'), 'tag') }} -->

<!-- {{ Form::multiSelectAddNewGroup('tax_ids', trans_choice('general.taxes', 1), 'percentage', $taxes, (setting('default.tax')) ? [setting('default.tax')] : null, ['path' => route('modals.taxes.create'), 'field' => ['key' => 'id', 'value' => 'title']], 'col-md-6 el-select-tags-pl-38') }} -->

<!-- {{ Form::textareaGroup('description', trans('general.description')) }} -->

<!-- my Changes -->

{{ Form::textGroup('name', trans('Model'), 'tag') }}
                    {{ Form::textGroup('make', trans('Make'), 'tag') }}

                    {{ Form::textGroup('year', trans('Year'), 'money-bill-wave-alt') }}

                    {{ Form::textGroup('color', trans('Color'), 'money-bill-wave') }}

                    {{ Form::textGroup('vin', trans('Vin'), 'money-bill-wave') }}

                    {{ Form::textGroup('lotno', trans('Lot No'), 'money-bill-wave') }}

                    {{ Form::textGroup('location', trans('Location'), 'money-bill-wave') }}

                    {{ Form::textGroup('site', trans('Site'), 'money-bill-wave') }}

                    {{ Form::textGroup('odo', trans('ODO (Miles)'), 'money-bill-wave') }}

                    {{ Form::textGroup('enginetype', trans('Engine Type'), 'money-bill-wave') }}

                    {{ Form::textGroup('drive', trans('Drive'), 'money-bill-wave') }}

                    {{ Form::textGroup('keystatus', trans('Key'), 'money-bill-wave') }}

                    {{ Form::textGroup('start', trans('Start'), 'money-bill-wave') }}

                    <!-- my Changes -->

                    {{ Form::textGroup('sale_price', trans('items.sales_price'), 'money-bill-wave') }}

                    {{ Form::textGroup('purchase_price', trans('items.purchase_price'), 'money-bill-wave-alt') }}
					
					<!-- {{ Form::textGroup('chases_number', trans('items.chases_number'), 'money-bill-wave-alt') }} -->

                    <!-- {{ Form::selectRemoteAddNewGroup('category_id', trans_choice('general.categories', 1), 'folder', $categories, null, ['path' => route('modals.categories.create') . '?type=item', 'remote_action' => route('categories.index'). '?search=type:item']) }} -->

                    {{ Form::fileGroup('picture', trans_choice('general.pictures', 1), 'plus', ['dropzone-class' => 'form-file']) }}

                    {{ Form::radioGroup('enabled', trans('general.enabled'), true) }}
                </div>
            </div>

            @can('update-common-items')
                <div class="card-footer">
                    <div class="row save-buttons">
                        {{ Form::saveButtons('items.index') }}
                    </div>
                </div>
            @endcan

        {!! Form::close() !!}
    </div>
@endsection

@push('scripts_start')
    <script src="{{ asset('public/js/common/items.js?v=' . version('short')) }}"></script>
@endpush
