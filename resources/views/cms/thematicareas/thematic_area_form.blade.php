@csrf
  <div class="col-lg-12">
      <div class="form-group">
        <label>{{ trans_choice('cms.thematic_area',1) }}</label>
        <input type="text" name="description" class="form-control" placeholder="{{__('cms.description')}}"value="{{@$row->description}}" >
      </div>

      <div class="form-group">
        <label>{{ __('cms.display_index') }}</label>
        <input type="number" name="index" class="form-control" placeholder="{{__('cms.display_index')}}"value="{{@$row->display_index}}" >
      </div>

      <div class="form-group">
        <label>{{ __('cms.icon') }}</label>
        <textarea name="icon" class="form-control" placeholder="{{__('cms.icon')}}" >{{@$row->icon}}</textarea> 
      </div>
      <div class="form-group btn-wrapper">
        <br>
         <input type="submit" class="btn btn-success pull-right col-md-12" value="Submit">
      </div>
  </div>