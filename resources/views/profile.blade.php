<!DOCTYPE html>
<html>
<head>
<!-- Head elements-->
@include('partials/_head')
</head>
<body>
    <div id="wrapper">

        <!-- Side Navigation Bar-->
        @include('partials/_sidebar')
 
        <!-- Main Side Body-->
        <div id="page-wrapper" class="gray-bg">
            
            <!-- Top Navigation Bar-->
        @include('partials/_topbar')

         
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content animated fadeInRight">

                        <div class="ibox-content m-b-sm border-bottom">
                            <div class="text-center p-sm">
                                <h2>Profile Settings </h2>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>


            <div class="row">
                <div class="col-md-6 col-md-offset-2">
        {!! Form::open(array('route'=>'profileSettings')) !!}
        {{Form::label('name','Username:')}}
        {{Form::text('name',null,['class'=>'form-control input-sm'])}}  <!-- edit field for title -->

        {{Form::label('email','Email:',['class'=>'form-spacing-top'])}}
        {{Form::email('email',null,['class'=>'form-control input-sm'])}}  <!-- edit field for slug url -->
        {{Form::label('password','Password:',['class'=>'form-spacing-top'])}}
        {{Form::password('password',null,['class'=>'form-control input-sm'])}}  <!-- edit field for slug url -->
<br>
    <br>
      {{Form::submit('Save Changes',['class'=>'btn btn-success btn-sm'])}}
      {!! Form::close()!!}<!-- Form closed here -->

            </div>
</div>
            <!-- FOOTER -->
            @include('partials/_footer')

        </div>
    </div>

<!-- Default Scripts for bottom-->
@include('partials/_bodyscripts')

    
</body>    
</html>