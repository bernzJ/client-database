@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.concur-product.actions.edit', ['name' => $concurProduct->id]))

@section('body')

<div class="container-xl">
    <div class="card">

        <concur-product-form :action="'{{ $concurProduct->resource_url }}'" :data="{{ $concurProduct->toJson() }}"
            :segments="{{$segments->toJson()}}" v-cloak inline-template>

            <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action"
                novalidate>


                <div class="card-header">
                    <i class="fa fa-pencil"></i>
                    {{ trans('admin.concur-product.actions.edit', ['name' => $concurProduct->id]) }}
                </div>

                <div class="card-body">
                    @include('admin.concur-product.components.form-elements')
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>

            </form>

        </concur-product-form>

    </div>

</div>

@endsection
