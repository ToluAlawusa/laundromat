@extends ('layouts.master')
@section ('title') @endsection
@section ('content')        
        
        
        
        <div class="right_col" role="main">
          <div class="">

          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('createadmin') }}" method="POST">

                      <div class="form-group">
                          @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->get('firstname') as $error)<span class="err">{{ $error }}</span>@endforeach    
                            </div>
                          @endif  
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="firstname" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                          @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->get('lastname') as $error)<span class="err">{{ $error }}</span>@endforeach    
                            </div>
                          @endif  
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="lastname"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                          @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->get('email') as $error)<span class="err">{{ $error }}</span>@endforeach    
                            </div>
                          @endif  
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="email" name="email"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                           @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->get('password') as $error)<span class="err">{{ $error }}</span>@endforeach    
                            </div>
                          @endif
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password"  name="password" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" name="cancel">Cancel</button>
                          <button class="btn btn-primary" type="reset" name="reset">Reset</button>
                          <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                      </div>
                        <input type="hidden" value="{{ Session::token() }}" name="_token">
                    </form>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        
@endsection        