<div class="form-horizontal form-material">
    <div class="form-group">
        <label class="col-md-12">@lang('Meta Title')</label>
        <div class="col-md-12">
            <input type="text" placeholder="My Anime " class="form-control form-control-line" wire:model.lazy='anime.seo_content.title'>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-12">@lang('Meta Description')</label>
        <div class="col-md-12">
            <textarea rows="5" class="form-control form-control-line" wire:model.lazy='anime.seo_content.meta_description'></textarea>
        </div>
    </div>
</div>