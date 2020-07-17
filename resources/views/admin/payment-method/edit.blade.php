@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.payment-method.actions.edit', ['name' => $paymentMethod->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <payment-method-form
                :action="'{{ $paymentMethod->resource_url }}'"
                :data="{{ $paymentMethod->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.payment-method.actions.edit', ['name' => $paymentMethod->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.payment-method.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </payment-method-form>

        </div>
    
</div>

@endsection