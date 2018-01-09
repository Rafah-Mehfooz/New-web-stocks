<!DOCTYPE html>
<html>
<head>
<!-- Head elements-->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>XRTS-Real Time Stock Exchnage</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

    
    <!-- Toastr style -->
    <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">
<meta name="google-signin-client_id" content="969010122649-92mcpnrs8pc2amuq4oq172cof8tfnn4d.apps.googleusercontent.com" defer>
<script src="../js/platform.js" defer></script>
<link href="../css/plugins/iCheck/custom.css" rel="stylesheet">


</head>

<body class="black-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">Real Time Stock Exchnage</h1>
            </div>
            <h3>Sign Up</h3>
            <p>Create account to see it in action.</p>
            <br>
             {!! Form::open() !!}
            <div class="form-group">
            {{Form::label('name','Name:')}}
            {{Form::text('name',null,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('email','Email:')}}
            {{Form::email('email',null,['class'=>'form-control'])}}
            </div>
           <div class="form-group">
            {{Form::label('password','Password:')}}
            {{Form::password('password',['class'=>'form-control'])}}
            </div>
           <div class="form-group">
            {{Form::label('password_confirmation','Confirm Password:')}}
            {{Form::password('password_confirmation',['class'=>'form-control'])}}
            </div>
           
            {{Form::submit('Register',['class'=>'btn btn-primary block full-width m-b'])}}

           {!! Form::close() !!}
            <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/auth/login">Login</a>
            <!-- <form class="m-t" role="form" name="registration" method="post">
               
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" required="" name="username" id="username">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="" name="email" id="email">  
                    <div id="emaill"></div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password" id="password">
                  
                </div>
                 <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" required="" name="Confirm password" id="password">
                  
                </div>
               
                <button type="submit" class="btn btn-primary block full-width m-b" id="submit" name="submit">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/login">Login</a>
                 
            </form> -->
          
        </div>
    </div>



<!-- Default Scripts for bottom-->

<!--  <audio id="my_audio" src="music/stock-.mp3" loop="loop"></audio>
 --><!-- Mainly scripts -->
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js" defer></script>
<script src="../js/plugins/metisMenu/jquery.metisMenu.js" defer></script>
<script src="../js/plugins/slimscroll/jquery.slimscroll.min.js" defer></script>

<!-- FooTable -->
<script src="../js/plugins/footable/footable.all.min.js" defer></script>


<!-- Custom and plugin javascript -->
<script src="../js/inspinia.js" defer></script>
<script src="../js/plugins/pace/pace.min.js" defer></script>


    <!-- Idle Timer plugin -->
    <script src="../js/plugins/idle-timer/idle-timer.min.js" defer></script>

    <!-- Toastr script -->
    <script src="../js/plugins/toastr/toastr.min.js" defer></script>
<script type="text/javascript" src="../js/googleAPI.js"></script>


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