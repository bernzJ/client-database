@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.liability.actions.edit', ['name' => $liability->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <liability-form
                :action="'{{ $liability->resource_url }}'"
                :data="{{ $liability->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.liability.actions.edit', ['name' => $liability->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.liability.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </liability-form>

        </div>
    
</div>

@endsection