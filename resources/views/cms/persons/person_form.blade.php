  <div class="col-lg-12">

    <div class="form-group">
        <label>{{__('general.title')}}</label>
        <input type="text" name="title" value="{{@$row->title}}" class="form-control" placeholder="{{ __('general.title')}}" >
      </div>

      <div class="form-group">
        <label>{{__('general.name')}}</label>
        <input type="text" name="name" value="{{@$row->name}}" class="form-control" placeholder="{{ __('general.name')}}" >
      </div>

      <div class="form-group">
        <label>{{__('general.phone')}}</label>
        <input type="tel" name="phone" value="{{@$row->phone_number}}" class="form-control" placeholder="{{__('general.phone')}}" >
      </div>

      <div class="form-group">
        <label>{{__('general.email')}}</label>
        <input type="email" name="email" value="{{@$row->email}}" class="form-control" placeholder="{{__('general.email')}}" >
      </div>

      <div class="form-group">
        <label>{{__('general.organization')}}</label>
        <select name="organization" class="form-control">

          <option>Select</option>
          @foreach($organizations as $org)
          <option {{(@$row->id ==$org->id)?'selected':''}} value="{{$org->id}}">{{$org->organization_name}}</option>
          @endforeach
        </select> 
      </div>

      <div class="form-group btn-wrapper">
        <br>
         <input type="submit" class="btn btn-outline-secondary pull-right col-md-12" value="Submit">
      </div>
  </div>