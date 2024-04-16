{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>Halaman Home</h1>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    
                    @if (Route::has('login'))

                        <a href="{{ route('dashboard') }} " target="_blank" >Dashboard Admin </a>

                    @else
                        {{ redirect('/') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
