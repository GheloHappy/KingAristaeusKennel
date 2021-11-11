@extends('layouts.app')

@push('scripts')
<script src="{{ asset('js/navToggle.js')}}"></script>
@endpush

@section('content')


<div class = 'logo'>
    <img src="{{url('/img/husky_Logo_noBG.png')}}" alt="Image"/>
    
    {{-- <div class='buttons-layer'>
        <button type="submit">Login</button>
        <button type="submit">Register</button>
    </div> --}}
</div>
@endsection