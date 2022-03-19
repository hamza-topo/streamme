<div>
  <div class="col-md-2"></div>
  <div class="col-md-8 col-xs-12 white-box">
    <div class="form-horizontal form-material">
      <div class="form-group">
        <label class="col-md-12">@lang('Full Title')</label>
        <div class="col-md-12">
          <input type="text" placeholder="Action " wire:model.lazy='category.name' class="form-control form-control-line">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
            @if(isset($category['id']) && !empty($category['id']))
            <div class="col-sm-6">
                <button wire:click='delete()' class="btn btn-danger">@lang('Delete')</button>
            </div>
            <div class="col-sm-6">
                <button wire:click='save()' class="btn btn-success">@lang('Update')</button>
            </div>
            @else 
            <div class="col-sm-6">
                <button wire:click='save()' class="btn btn-success">@lang('Save')</button>
            </div>
            @endif
        </div>
    </div>
    </div>
  </div>
</div>