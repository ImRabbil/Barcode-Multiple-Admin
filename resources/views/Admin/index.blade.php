@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    

                    <a href="{{ route('all.contracts') }}">About Me</a>
                    <a href="{{ route('barcode') }}">Barcode</a>



                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>
                         {{ __('Hello Laravel! Im Normal Admin ') }}
                        
                    </h1>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
