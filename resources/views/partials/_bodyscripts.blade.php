<script type="text/javascript">
    
    /*transalte*/
    function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}

</script>

<script  src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="modal inmodal" id="myModal4" tabindex="-2" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clock-o modal-icon"></i>
                <h4 class="modal-title">Really You Wanna Leave...</h4>
                <small>Are you sure you want to Log out ?</small>
            </div>
            <div class="modal-body">
                <p><strong> If you want to Log out click on Logout otherwise cancel, this modal prevents 
                    Logging out by mistake. So, if you really want to Logout just Log out.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                <a type="button" href="login.php" class="btn btn-primary" data-dismiss="login.php">LogOut</a>
            </div>
        </div>
    </div>
</div>
<!--  <audio id="my_audio" src="music/stock-.mp3" loop="loop"></audio>
 --><!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js" defer></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js" defer></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js" defer></script>

<!-- FooTable -->
<script src="js/plugins/footable/footable.all.min.js" defer></script>


<!-- Custom and plugin javascript -->
<script src="js/inspinia.js" defer></script>
<script src="js/plugins/pace/pace.min.js" defer></script>


    <!-- Idle Timer plugin -->
    <script src="js/plugins/idle-timer/idle-timer.min.js" defer></script>

    <!-- Toastr script -->
    <script src="js/plugins/toastr/toastr.min.js" defer></script>
<script type="text/javascript" src="js/googleAPI.js"></script>


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
<script type="text/javascript">
   

$(function () {
   $("#my_audio").get(0).play();
});
</script>
