@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if (\Auth::check () && \Auth::user()->role_ == 1) 
                <div class="card-header">Вы вошли в систему!</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы вошли в систему!
                </div>
               
                <a href="{{route('main')}}"><button type="button" class="btn btn-outline-info" id="button_welcome" >Начать работу!</button></a>
                @elseif (\Auth::check () && \Auth::user()->role_ == 2) 
                <div class="card-header">Используйте мобильное приложение для входа в систему!</div>
                    <div class="card-body">
                    
                    <img src="{{asset('images/mobile.png')}}" class="img-responsive" width="660">
                        
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
