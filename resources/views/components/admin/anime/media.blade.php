<div class="user-bg">
   <div>
       <img width="100%" alt="user" src=" {{  !empty($anime['poster']) ? $anime['poster']?->temporaryUrl()  : 'https://via.placeholder.com/350x400' }} ">
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