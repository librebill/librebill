@php($vue = true)
@extends('layouts.generic')
@section('title', config('app.name'))
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-4 fw-bold mb-4">@{{ message }}</h1>
        </div>
    </div>
@endsection
@push('scripts')
<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Home')

      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush
