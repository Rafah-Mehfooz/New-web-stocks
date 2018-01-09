
<!DOCTYPE html>
<html>
<head>
<!-- Head elements-->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>XRTS-Real Time Stock Exchnage</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet">

    
    <!-- Toastr style -->
    <link href="../../css/plugins/toastr/toastr.min.css" rel="stylesheet">

<script src="../../js/platform.js" defer></script>

</head>
<body class="black-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">Pakistan Stock Exchnage Real Time</h1>
            </div>
            <br>
          <div class="panel panel-default">

                <div class="panel-header"><h2>Reset Password</h2></div>
                <div class="panel-body">

                      {!! Form::open(['url'=>'password/reset','method'=>'POST']) !!}
                       {{ Form::hidden('token',$token) }}
            <div class="form-group">
            {{Form::label('email','Email Address:')}}
            {{Form::email('email',$email,['class'=>'form-control'])}}
            </div>
             <div class="form-group">
            {{Form::label('password','New Passowrd:')}}
            {{Form::password('password',['class'=>'form-control'])}}
            </div>
             <div class="form-group">
            {{Form::label('password_confirmation','Confirm New Password:')}}
            {{Form::password('password_confirmation',['class'=>'form-control'])}}
            </div>
           
            {{Form::submit('Reset Password',['class'=>'btn btn-primary block full-width m-b'])}}
            {!! Form::close() !!}

          </div>
        </div>
           
         
        </div>
    </div>

<!-- Default Scripts for bottom-->


 <!-- Mainly scripts -->
<script src="../../js/jquery-3.1.1.min.js"></script>
<script src="../../js/bootstrap.min.js" defer></script>
<script src="../../js/plugins/metisMenu/jquery.metisMenu.js" defer></script>
<script src="../../js/plugins/slimscroll/jquery.slimscroll.min.js" defer></script>

<!-- FooTable -->
<script src="../../js/plugins/footable/footable.all.min.js" defer></script>


<!-- Custom and plugin javascript -->
<script src="../../js/inspinia.js" defer></script>
<script src="../../js/plugins/pace/pace.min.js" defer></script>


    <!-- Idle Timer plugin -->
    <script src="../../js/plugins/idle-timer/idle-timer.min.js" defer></script>

    <!-- Toastr script -->
    <script src="../../js/plugins/toastr/toastr.min.js" defer></script>



<script>
$(function () {
    setNavigation();
});
function setNavigation() {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    
    path = decodeURIComponent(path);
    
    $(".nav a").each(function () {
        var href = $(this).attr('href');
        
        href= "/stocks/"+href;
        console.log(href);
        if (path.substring(0, href.length) === href) {
            $(this).closest('li').addClass('active');
            $(this).closest('li').parents().addClass('active');
        }
    });
}

</script>


<script>


    $(document).ready(function () {

        // Set idle time
        $( document ).idleTimer( 60000 );

    });

    $( document ).on( "idle.idleTimer", function(event, elem, obj){
        toastr.options = {
            "positionClass": "toast-top-right",
            "timeOut": 8000
        }

        toastr.warning('You can call any function after idle timeout.','Idle time');
        $('.custom-alert').fadeIn();
        $('.custom-alert-active').fadeOut();

    });

    $( document ).on( "active.idleTimer", function(event, elem, obj, triggerevent){
        // function you want to fire when the user becomes active again
        toastr.clear();
        $('.custom-alert').fadeOut();
        toastr.success('Great that you decided to move a mouse.','You are back. ');



    });
</script>

</body>    
</html>
