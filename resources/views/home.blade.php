@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
// console.log('here');
//     var i = 0;
    window.Echo.channel('websocket').listen('.ForWebsocket',(data)=> {
        console.log('here');
         //console.log(data);
       // $('#notification').append('<div class="alert alert-success">'+i+'.'+data.data+'</div>');
    });


window.Echo.channel(`websocket`)
    .subscribed(() => {
        console.log("Echo connected to WebSocket channel!");
    })
    .listen(".forwebsocket", () => {
        console.log("New Order Received");
      // console.log("New Order Data", data);
    });

</script>
@endsection
