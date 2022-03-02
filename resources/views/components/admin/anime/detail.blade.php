<div class="form-horizontal form-material">
    <div class="form-group">
        <label class="col-md-12">@lang('Full Title')</label>
        <div class="col-md-12">
            <input type="text" placeholder="My Anime " wire:model.lazy='anime.title' class="form-control form-control-line">
        </div>
    </div>
    <div class="form-group">
        <label for="example-email" class="col-md-12">@lang('Slug')</label>
        <div class="col-md-12">
            <input type="text"  placeholder="my-anime" class="form-control form-control-line" wire:model.lazy='anime.slug' disabled>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-12">@lang('Description')</label>
        <div class="col-md-12">
            <textarea rows="5" class="form-control form-control-line" wire:model.lazy='anime.description'></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-12">Select Categories</label>
        <div class="col-sm-12">
            <select multiple class="form-control form-control-line" wire:model.lazy='anime.categories'>
                <option>Adventure</option>
                <option>Horror</option>
                <option>Drama</option>
                <option>Action</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-12">@lang('Show In')</label>
        <div class="col-sm-12">
            <select multiple class="form-control form-control-line" wire:model.lazy='anime.show_in'>
                <option>Carousel Anime</option>
                <option>Live Anime</option>
                <option>Popular Anime</option>
                <option>Recent Anime</option>
                <option>Trending Anime</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <button wire:click='save()' class="btn btn-success" >@lang('Save')</button>
        </div>
    </div>
</div>