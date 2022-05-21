@if (session()->has('message'))
  <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
    class="fixed top-0 bg-laravel left-1/2 transform -translate-x-1/2 py-8 px-20 text-2xl text-white ">
    {{ session('message') }}
  </div>
@endif
