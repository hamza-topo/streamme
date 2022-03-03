<div>
    <div class="col-md-4 col-xs-12">
        <div class="white-box">
            <x-admin.anime.media :anime='$anime'></x-admin.anime.media>
        </div>
        <div class="white-box">
            <x-admin.anime.seo :anime='$anime'></x-admin.anime.seo>
        </div>
    </div>
    <div class="col-md-8">
        <div class="white-box">
            <x-admin.anime.detail :anime='$anime'></x-admin.anime.detail>
        </div>
    </div>
</div>