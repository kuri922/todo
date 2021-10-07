@extends('layouts.app')

@section('content')
<goals-component></goals-component>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are loggde in!
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
