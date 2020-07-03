@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.timezone.actions.edit', ['name' => $timezone->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <timezone-form
                :action="'{{ $timezone->resource_url }}'"
                :data="{{ $timezone->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.timezone.actions.edit', ['name' => $timezone->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.timezone.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </timezone-form>

        </div>
    
</div>

@endsection