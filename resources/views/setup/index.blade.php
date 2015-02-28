@extends('layout.main')

@section('content')
<div class="row" style="margin-top: 50px;">
    <div class="ten columns">
        <h2>Welcome to {{ Config::get('product.name') }}!</h2>
    </div>
</div>
<div class="row">
    <div class="one-full column">
        <p>{{ Config::get('product.name') }} is a blogging platform revolving around the idea of simplicity. It shouldn't have to be a rocket scientist to setup a fully customizable blog! Before you can jump right into blogging, there's a little bit of preperation work we have to do.</p>
    </div>
</div>
<div class="row">
    <div class="one-full column" style="text-align: center;">
        <a href="/setup" class="button button-primary">Begin Setup</a>
    </div>
</div>
@stop