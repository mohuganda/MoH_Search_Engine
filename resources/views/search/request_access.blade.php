@extends('layouts.template')
@section('content')

<div class="card radius-10">
  <div class="card-body">

    <div class="row" style="margin-bottom:100px;">
      <form action="{{url('cms/organizations')}}" method="post">
        @csrf
        <div class="col-lg-6">
          <div class="contact-wrap w-100 p-md-5 p-4">
            <h3>Contact us</h3>

            <form id="contactForm" name="contactForm" class="contactForm">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="contact" id="subject" placeholder="Phone Number">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="organisation" id="subject" placeholder="Organisation">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="secoding_officer" id="subject" placeholder="Seconding Officer">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="secoding_officer_email" id="subject" placeholder="Seconding Officer Email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="secoding_officer_tel" id="subject" placeholder="Seconding Officer Phone Number">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Reason for access"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary">
                    <div class="submitting"></div>
                  </div>
                </div>
              </div>
            </form>
            <div class="w-100 social-media mt-5">
              <h3></h3>

            </div>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>

@endsection