<div class="form-horizontal form-material">
    <div class="form-group">
        <label class="col-md-12">@lang('Full Title')</label>
        <div class="col-md-12">
            <input type="text" placeholder="My Anime " wire:model.lazy='anime.title' class="form-control form-control-line">
        </div>
    </div>
    <div class="form-group">
        <label for="example-email" class="col-md-12">@lang('Quality')</label>
        <div class="col-md-12">
            <input type="text" placeholder="HD" class="form-control form-control-line" wire:model.lazy='anime.quality'>
        </div>
    </div>
    <div class="form-group">
        <label for="example-email" class="col-md-12">@lang('Published at')</label>
        <div class="col-md-12">
            <input type="date" class="form-control form-control-line" wire:model.lazy='anime.published_at'>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-12">@lang('Description')</label>
        <div class="col-md-12">
            <textarea rows="5" class="form-control form-control-line" wire:model.lazy='anime.description'></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-12">@lang('Status')</label>
        <div class="col-sm-12">
            <select class="form-control form-control-line" wire:model.lazy='anime.status'>
                <option>@lang('Choose de status of anime')</option>
                <option value="{{ App\Enums\AnimeStatus::PENDING }}">@lang('Pending')</option>
                <option value="{{ App\Enums\AnimeStatus::FINISHED }}">@lang('Finished')</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-12">@lang('Categoires')</label>

        <div class="col-sm-12">
            <select multiple class="form-control form-control-line" wire:model.lazy='anime.categories'>
                <option disabled>@lang('Choose categories')</option>
                <option value="0">Adventure</option>
                <option value="1">Horror</option>
                <option value="2">Drama</option>
                <option value="3">Action</option>
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
            <button wire:click='save()' class="btn btn-success">@lang('Save')</button>
        </div>
    </div>
</div>