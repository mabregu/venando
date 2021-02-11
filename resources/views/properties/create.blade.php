@extends('layout')

{{-- @section('title', __('create') .' '. __('project')) --}}

@section('content')
<div class="container">
     <div class="row">
          <div class="col-12 col-sm-10 col-lg-6 mx-auto">
               @include('partials.validation-errors')

               <form class="bg-white shadow rounded py-3 px-4"
                    method="POST"
                    enctype="multipart/form-data"
                    action="{{ route('properties.store') }}"
               >
                    {{-- <h1 class="display-4">{{ __('New project') }}</h1> --}}

                    @include('properties._form', ['btnText' => __('Save')])
               </form>
          </div>
     </div>
</div>
@endsection
