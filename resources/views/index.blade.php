<!DOCTYPE html>
<html>
<head>
<!-- Head elements-->
@include('partials/_head')
    <!-- Bootstrap Tour -->
    <link href="css/plugins/bootstrapTour/bootstrap-tour.min.css" rel="stylesheet">
    
    <!-- c3 Charts -->
    <link href="css/plugins/c3/c3.min.css" rel="stylesheet">

    
    <!-- FooTable -->
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">

        <!-- Side Navigation Bar-->
@include('partials/_sidebar')

        <!-- Main Side Body-->
        <div id="page-wrapper" class="gray-bg">
            
            <!-- Top Navigation Bar-->
@include('partials/_topbar')

            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Market Summary Tour</h5>
                            </div>
                            <div class="ibox-content">
                                <div class=" m-t-sm">
                                    <a href="#" class="btn btn-primary startTour">
                                    <i class="fa fa-play"></i> Start Tour</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox float-e-margins">
                           
                            <div class="app ibox-content" id="step1">
                                <div class="app ibox-content">
                                    <center>
                                        {!! $chart1->html() !!}
                                    </center>
                                </div>
                            </div>
                        </div>
                        {!! Charts::scripts() !!}
                        {!! $chart1->script() !!}
                        {!! $chart2->script() !!}
                    </div>
                    <div class="col-md-6">
                         <div class="ibox float-e-margins">
                           
                            <div class="app ibox-content" id="step1">
                                <div class="app ibox-content">
                                    <center>
                                        {!! $chart2->html() !!}
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" data-placement="top" href="#tab-1"> Top Symbols</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Top Gainers</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3">Top Losers</a></li>
                            </ul>
                            <div class="tab-content" id="step3">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <table class="footable1 table table-stripped toggle-arrow-tiny" data-show-toggle="false">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>PRICE</th>
                                                    <th>CHANGE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr >
                                                    <td> TRG Pak Ltd	</td>
                                                    <td>26.60	</td>
                                                    <td>-1.00	</td>
                                                </tr>
                                                            
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">
                                        <table class="footable2 table table-stripped toggle-arrow-tiny" data-show-toggle="false">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>PRICE</th>
                                                    <th>CHANGE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr >
                                                    <td>  Khyber Tobacco	</td>
                                                    <td>26.60	</td>
                                                    <td>-1.00	</td>
                                                </tr>
                                                            
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">
                                        <table class="footable3 table table-stripped toggle-arrow-tiny" data-show-toggle="false">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>PRICE</th>
                                                    <th>CHANGE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr >
                                                    <td>  Island Textil	</td>
                                                    <td>26.60	</td>
                                                    <td>-1.00	</td>
                                                </tr>
                                                            
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Strong Buy and Sell Notifications</h5>
                            </div>
                            
                            <div class="ibox-content text-left" id="step4">  
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>Strong Buy:</h5>
                                            <h2>Fauji Cement</h2>
                                            <div id="sparkline1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="ibox">
                                        <div class="ibox-content">
                                            <h5>Strong Sell:</h5>
                                            <h2>PTCL</h2>
                                            <div id="sparkline3"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>  
                                            
                            </div>
                        </div>
                    </div>
                </div>
                <br>

               
          
        
            <!-- FOOTER -->
@include('partials/_footer')

        
    </div>

<!-- Default Scripts for bottom-->
@include('partials/_bodyscripts')
    <!-- Bootstrap Tour -->
    <script src="js/plugins/bootstrapTour/bootstrap-tour.min.js"></script>

<script>
$(document).ready(function (){

        // Instance the tour
        var tour = new Tour({
            steps: [{
                    element: "#step1",
                    title: "Market Summary Graph",
                    content: "You will be able to see Whole Market Chart in your dashboard updating in Realtime",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#wrapper',
                    onShown: function (tour){
                        $('body').addClass('tour-open')
                    },
                    onHidden: function (tour){
                        $('body').removeClass('tour-close')
                    }
                },
                {
                    element: "#step2",
                    title: "Market Statistics",
                    content: "Whole Market Statistic Updating in Real time",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#wrapper'
                },
                {
                    element: "#step3",
                    title: "Top Symbols",
                    content: "Market Top Symbols and their data in real time updates",
                    placement: "bottom",
                    backdrop: true,
                    backdropContainer: '#wrapper'
                },
                {
                    element: "#step4",
                    title: "Strongest Shares in terms of Buying and Selling",
                    content: "User can see which shares are strong buying and selling based on their performance and future predictions",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#wrapper'
                },
                {
                    element: "#step5",
                    title: "Market Portfolio",
                    content: "User can add shares of his choice and view real time updates",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#wrapper'
                }

            ]});

        // Initialize the tour
        tour.init();

        $('.startTour').click(function(){
            tour.restart();

            // Start the tour
            // tour.start();
        })

    });

</script>

<!-- d3 and c3 charts -->
    <script src="js/plugins/c3/c3.min.js"></script>
    <script src="js/plugins/d3/d3.min.js"></script>
    
    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>


    <script>

        $(document).ready(function () {
            c3.generate({
                bindto: '#lineChart',
                data:{
                    columns: [
                        [' CURRENT INDEX', 30, 400, 150, 250, 50, 20, 10, 40, 15, 25],
                    ],
                    colors:{
                        INDEX: '#1ab394'
                    }
                }
            });
        });

    </script>


    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.footable1').footable();
            
            $('.footable2').footable();
            
            $('.footable3').footable();
        });
        /*
        We can use [body] or the element class/id that wraps the elements with tooltip/popover.
            Include the data-[] attribute in each element that needs it.
            */
            $(document).ready(function () {
            //can also be wrapped with:
            //1. $(function () {...});
            //2. $(window).load(function () {...});
            //3. Or your own custom named function block.
            //It's better to wrap it.

            //Tooltip, activated by hover event
            $("body").tooltip({   
                selector: "[data-toggle='tooltip']",
                container: "body"
            })
                //Popover, activated by clicking
                .popover({
                selector: "[data-toggle='popover']",
                container: "body",
                html: true
            });
            //They can be chained like the example above (when using the same selector).
            
            });
    </script>
    
    <script defer>
        $(document).ready(function() {
            var sparklineCharts = function(){
                $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                    type: 'line',
                    width: '100%',
                    height: '60',
                    lineColor: '#1ab394',
                    fillColor: "#ffffff"
                });
                $("#sparkline3").sparkline([74, 43, 23, 55, 54, 32, 24, 12], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#ed5565',
                     fillColor: "#ffffff"
                 });
            };
            var sparkResize;
            $(window).resize(function(e) {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineCharts, 500);
            });
            sparklineCharts();
        });
    </script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.footable').footable();
        });
    </script>
</body>    
</html>