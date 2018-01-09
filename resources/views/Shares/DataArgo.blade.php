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

            <div class="wrapper wrapper-content  animated fadeInRight">
             
                <div class="row">
                    <div class="col-md-7">
                        <div class="ibox">
                            <div class="ibox-title">Data Argo Line Graph</div>
                               <div class="app ibox-content">
                                    <center>
                                        {!! $chart->html() !!}
                                    </center>
                                </div>
                        </div>                                
                                {!! Charts::scripts() !!}
                                {!! $chart->script() !!}
                   </div>

                    <div class="col-md-5">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5 data-toggle="tooltip" data-placement="top" >Data Argo Share Statistics
                                    
                                </h5>
                            </div>
                            <div class="ibox-content text-center">
                            <table class="table text-left">
                                <tbody>
                                    <tr>
                                        <th>
                                       Max LDCP
                                        </th>
                                        <td>{{$ldcp}}</td>
                                    </tr>
                                    <tr>
                                    <th>  Max CHANGE    </th>
                                        <td>{{$change}}  </td>
                                    </tr>
                                    
                                    <tr>
                                    <th>Max HIGH</th>
                                        <td>{{$high}}  </td>
                                    </tr>
                                    <tr>
                                    <th>Max LOW</th>
                                        <td>{{$low}}  </td>
                                    </tr>
                                    <tr>
                                        <th>
                                        Max Volume
                                        </th>
                                        <td>{{$volume}} </td>
                                    </tr>
                                    <tr>
                                        <th>
                                        Max Current
                                        </th>
                                        <td>{{$current}} </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
              
                <br>
</div>
 <!-- FOOTER -->
@include('partials/_footer')
</div>               
           

        <!-- Default Scripts for bottom-->
@include('partials/_bodyscripts')
    
    </body>    
</html>