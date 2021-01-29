@extends('layouts.web')

@section('content')
    Course detail

    <div class="text-center">
        <h1 class="text-3xl text-gray-700 mb-2 uppercase">Last courses</h1>
        <h2 class="text-xl text-gray-600">Learn online as a professional in technology</h2>
    </div>

    <livewire:course-list></livewire:course-list>
@endsection
