@extends('layout.main')

@section('content')
<div class="row" style="margin-top: 50px;">
    <div class="one-full column">
        <h2>{{ Config::get('product.name') }} Setup</h2>
        
        <h4 style="margin-bottom: 2px;">General</h4><hr style="margin-top: 0"/>
        <form method="post" action="{{ Request::url() }}">
            <div class="row">
                <div class="one-half column">
                    <label for="blogname">Blog Title</label>
                    <input class="u-full-width" type="text" placeholder="Title" id="blogname">
                </div>
                <div class="one-half column">
                    <label for="blogdesc">Blog Description</label>
                    <input class="u-full-width" type="text" placeholder="Decription" id="blogdesc">
                </div>
            </div>
            <div class="row">
                <div class="one-half column">
                    <label for="blogavatars">Avatar Platform</label>
                    <select class="u-full-width" id="blogavatars">
                        <option>Default</option>
                        <option>Gravatar</option>
                        <option>None</option>
                    </select>
                </div>
                <div class="one-half column">
                    <label for="blogdesc">Blog Description</label>
                    <input class="u-full-width" type="text" placeholder="Decription" id="blogdesc">
                </div>
            </div>
        </form>
    </div>
</div>
@stop