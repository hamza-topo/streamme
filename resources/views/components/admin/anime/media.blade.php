<div class="user-bg">
   <div>
       {{--@if(!empty($anime))
            @if( method_exists($anime['poster'],'temporaryUrl'))
            <img width="100%" alt="user" src=" {{  !empty($anime['poster']) ? $anime['poster']?->temporaryUrl()  : 'https://via.placeholder.com/350x400' }} ">
            @else 
            <img width="100%" alt="user" src=" {{  !empty($anime['poster']) ? asset('/storage/'.$anime['poster'])  : 'https://via.placeholder.com/350x400' }} ">
            @endif
       @endif--}}
    </div>
</div>
<div class="user-btm-box">
    <div class="col-md-12 col-sm-12 text-center">
        <input type='file' wire:model.lazy='anime.poster' >
    </div>
    <div class="col-md-12 col-sm-12 text-center">
        <div wire:loading wire:target="anime.poster">Uploading...</div>
    </div>
    
</div>