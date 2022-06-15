  <div class="col-lg-12">

    <div class="form-group">
        <label>{{__('general.authority_name')}}</label>
        <input type="text" name="name" value="{{@$row->authority_name}}" class="form-control" placeholder="{{ __('general.name')}}" >
      </div>

      <div class="form-group">
        <label>{{__('general.description')}}</label>
        <textarea name="description" value="{{@$row->authority_description}}" class="form-control">{{@$row->authority_description}}</textarea> 
      </div>

      <div class="form-group btn-wrapper">
        <br>
         <input type="submit" class="btn btn-outline-secondary pull-right col-md-12" value="Submit">
      </div>
  </div>