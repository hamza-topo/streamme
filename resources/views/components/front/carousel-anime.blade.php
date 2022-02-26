@foreach($animes as $anime)
<div class="hero__items" style="background-image:url('https://api.lorem.space/image/game?w=150&h=220')">
    <div class="row">
        <div class="col-lg-6">
            <div class="hero__text">
                <div class="label">Adventure</div>
                <h2>{{$anime->title}}</h2>
                <p>{{$anime->description}}</p>
                <a href="{{url('/').$anime->slug}}"><span>@lang('Regarder Maintenant')</span> <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endforeach