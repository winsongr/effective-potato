@extends('layouts.admin')
@section('content')
<?php $requestdata = request(); ?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Personal Details
                </h3>
            </div>
            <div>
                <a href="{{route('customers.index')}}" rel="tooltip" title="" class="m-portlet__nav-link btn btn-lg btn-secondary  
                         m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle" data-original-title="Back to List">
                    <i class="fa fa-long-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="row">
            <div class="col-md-12">
                <div class="m-portlet">
                    <div class="m-portlet__body">
                        <!--begin::Section-->
                        <div class="m-section">
                            <form method="post" action="{{ route('customers.store') }}" id="upload" class="validation_form" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-8 offset-md-2">
                                    <div class="m-section__content">
                                        <div class="form-group row">
                                            <label class="col-md-3">
                                                Name <span class="red">*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <input value="{{ old('name') }}" type="text" autocomplete="off" class="form-control" name="name" />
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3">
                                                Father / Spouse Name <span class="red">*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <input value="{{ old('fathers_name') }}" type="text" autocomplete="off" class="form-control" name="fathers_name" />
                                                @error('fathers_name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3">
                                                Age <span class="red">*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <input value="{{ old('age') }}" type="text" autocomplete="off" class="form-control" name="age" />
                                                @error('age')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3">
                                                Gender <span class="red">*</span>
                                            </label>
                                            <div class="col-md-9 radio-sec">
                                                <label><input type="radio" class="" name="gender" value="Male"> <span> Male</span></label><br>
                                                <label><input type="radio" class="" name="gender" value="Female"> <span> Female</span></label><br>
                                            </div>
                                            <div class="col-md-8 offset-md-4">
                                                @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3">
                                                Mobile Number<span class="red">*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <input value="{{ old('phone') }}" type="tel" autocomplete="off" class="form-control" name="phone" />
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3">
                                                Email <span class="red">*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <input value="{{ old('email') }}" type="email" autocomplete="off" class="form-control" name="email" />
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3">
                                                Occupation <span class="red">*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <input value="{{ old('occupation') }}" type="text" autocomplete="off" class="form-control" name="occupation" />
                                                @error('occupation')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3">
                                                Total Years of Experience <span class="red">*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <input value="{{ old('experience') }}" type="text" autocomplete="off" class="form-control" name="experience" />
                                                @error('experience')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3">
                                               Residential Address <span class="red">*</span>
                                            </label>
                                            <div class="col-md-9">
                                            <textarea rows="4" class="form-control" name="address"> {{ old('address')}}</textarea>
                                                
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3">
                                                Annual Income<span class="red">*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <input value="{{ old('income') }}" type="text" autocomplete="off" class="form-control" name="income" />
                                                @error('income')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
<!-- Completed 26/01/2022 -->





                             <div class="form-group row">
                                        <label class="col-md-4">
                                         Son<span class="red">*</span>
                                        </label>
                                        <div class="col-md-8"> 
                                          <div class="marketing_range">
                                        <ul class="marketing_range_list" style="padding:0px">
                                            <li>
                                               <div class="row" style="margin-bottom: 12px;">
                                                  <div class="col-md-5">
                                                    <input class="form-control " required="" name="marketing_from_range[]" type="text" autocomplete="off" placeholder="Name" style="width:112%;">
                                                  </div>
                                                  <div class="col-md-5">
                                                      <input class="form-control " required="" name="marketing_to_range[]" type="text" autocomplete="off" placeholder="Age" style="width:112%;">
                                                  </div> 
                                                  <div class="col-md-2">
                                                  </div>
                                                   
                                            </div>  
                                            </li>
                                          
                                          
                                            <button type="button" id="marketing_range-add-more" class="btn btn-success btn-green"><i class="fa fa-plus" ></i></button>
                                            </ul>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                        <label class="col-md-3">
                                         Daughter<span class="red">*</span>
                                        </label>
                                        <div class="col-md-9"> 
                                          <div class="marketing_range">
                                        <ul class="marketing_range_lis" style="padding:0px">
                                            <li>
                                               <div class="row" style="margin-bottom: 12px;">
                                                  <div class="col-md-4">
                                                    <input class="form-control " required="" name="marketing_from_range[]" type="text" autocomplete="off" placeholder="Name" style="width: 112%;">
                                                  </div>
                                                  <div class="col-md-3">
                                                      <input class="form-control " required="" name="marketing_to_range[]" type="text" autocomplete="off" placeholder="Age" style="width: 112%;">
                                                  </div> 
                                                  <div class="col-md-3">
                                                      <input class="form-control " required="" name="marketing_to_range[]" type="text" autocomplete="off" placeholder="Profession" style="width: 112%;">
                                                  </div> 
                                                  <div class="col-md-2">
                                                      <input class="form-control " required="" name="marketing_to_range[]" type="text" autocomplete="off" placeholder="Class" style="width: 112%;">
                                                  </div> 
                                                   
                                            </div>  
                                            </li>
                                          
                                          
                                            <button type="button" id="marketing_range-add-mor" class="btn btn-success btn-green"><i class="fa fa-plus" ></i></button>
                                            </ul>
                                    </div>
                                    </div>
                                </div>



                                        <div class="form-group text-right">
                                            <button type="submit" name="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                                                Submit
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .radio-sec input {
        position: relative;
        top: 0px;
        margin-right: 5px;
        margin-left: 0px;
    }
    .course-div{
       box-shadow: 0 0 5px 2px #ddd;
    padding: 18px;
        margin: 15px 0;
}
ul{
    list-style:none;
    margin-left:0px;
}
.btn.btn-success.btn-green { 
    background-color: green !important;
    padding: 14px 8px  !important;
     height: 33px  !important;
    text-align: center  !important;
    margin: 8px 0 9px 6px  !important;
    color: #fff  !important;
}
a.btn.btn-danger.removebtn {
    padding: 7px 11px;
    height: 33px;
    text-align: center;
    margin: 8px 0 9px 6px;
    color: #fff;
}
</style>
<script>

$("#marketing_range-add-more").click(function(){
      $(".marketing_range_list").append('<li class="added-li"><div class="row" style="margin-bottom:12px;"><div class="col-md-4"><input required=""  class="form-control " name="marketing_from_range[]" type="text" style="width: 112%;" autocomplete="off" placeholder="Name"></div> <div class="col-md-3"><input required=""  class="form-control " name="marketing_from_range[]" type="text" autocomplete="off" placeholder="Age" style="width: 112%;"></div><div class="col-md-3"><input class="form-control " required="" style="width: 112%;" name="marketing_to_range[]" type="text" autocomplete="off" placeholder="Profession"></div><div class="col-md-2"><input class="form-control " required="" name="marketing_to_range[]" type="text" autocomplete="off" placeholder="Class" style="width: 112%;"></div></div><a class="btn btn-danger removebtn" style="margin: 0px;margin-bottom: 3px;" href="#" onclick="parentNode.parentNode.removeChild(parentNode)">-</a></li>');
});

$("#marketing_range-add-mor").click(function(){
      $(".marketing_range_lis").append('<li class="added-li"><div class="row" style="margin-bottom:12px;"><div class="col-md-4"><input required=""  class="form-control " name="marketing_from_range[]" type="text" style="width: 112%;" autocomplete="off" placeholder="Name"></div> <div class="col-md-3"><input required=""  class="form-control " name="marketing_from_range[]" type="text" autocomplete="off" placeholder="Age" style="width: 112%;"></div><div class="col-md-3"><input class="form-control " required="" style="width: 112%;" name="marketing_to_range[]" type="text" autocomplete="off" placeholder="Profession"></div><div class="col-md-2"><input class="form-control " required="" name="marketing_to_range[]" type="text" autocomplete="off" placeholder="Class" style="width: 112%;"></div></div><a class="btn btn-danger removebtn" style="margin: 0px;margin-bottom: 3px;" href="#" onclick="parentNode.parentNode.removeChild(parentNode)">-</a></li>');
});

     
    </script>
@endsection