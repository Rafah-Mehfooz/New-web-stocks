<!DOCTYPE html>
<html>
<head>
    <script src="js/angular.js"></script> <!-- path for angular js -->

<!-- Head elements-->
    @include('partials/_head')
    <script type="text/javascript">
  var app=angular.module('MarketSummary',[])
.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[%=');
    $interpolateProvider.endSymbol('%]');
  });
app.controller('marketCntrl',function($scope,$window,$http){

$scope.getPortfolios=function(){

              $http.get('{{url('getPortfolio')}}')
              .success(function(data){
              $scope.obj = angular.fromJson(data);
             $scope.portfolio = $scope.obj["portfolios"];
             console.log( $scope.portfolio);
             
               })
              .error(function(data){
                $scope.data="error in fetching data"
              });

   }

$scope.getPortfolios();
//setInterval($scope.getPortfolios,1000);



});
</script>

    <style>
        #drop,#drop2{
            padding-left:35px;
            left:0;
        }
        .slist-style{
            border-bottom:1px solid #1ab394;
            color:#676a6c;
            width:100%;
            height:30px;
        /* box-sizing:border-box;
            margin-top:1px;
            margin-bottom:1px;*/
            border-radius:4px;
            background-color:white;
            padding-left:2%;
            padding-top:0.5%;
        }
        .directing{
            color:#676a6c;
        }
    </style>

  <!-- FooTable -->
  <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
</head>

<body ng-app="MarketSummary" ng-controller="marketCntrl">

    <div id="wrapper">

        <!-- Side Navigation Bar-->
        @include ('partials/_sidebar')
 
        <!-- Main Side Body-->
        <div id="page-wrapper" class="gray-bg">
            
            <!-- Top Navigation Bar-->
            @include('partials/_topbar')
        
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            @if(Session::has('success'))
    <div class="alert alert-success" role="alert"><strong></strong> {{Session::get('success')}}
    </div>
    @endif
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
       <ul>
        @foreach($errors->all() as $error)
           <li>{{$error}}</li>
            @endforeach
       </ul>

    </div>
@endif
                           
         {!! Form::open(array('route' => 'addPortfolio')) !!} <!-- Laravel collective forms  -->
            <div class="input-group">
            {{Form::label('portfolio','Portfolio')}}

            {{Form::text('portfolio',null,array('class'=>'input input-sm form-control'))}}  <!-- form input field for title of the post-->
            <span class="input-group-btn">
            {{Form::submit('Add new symbol',array('class'=>'btn btn-sm btn-white','style'=>'margin-top:20px;'))}}  <!-- button to submit the form --></span>
</div>
          
            
            

            {!! Form::close() !!}




                            <!-- <div class="input-group" style="position:relative">
                                <input placeholder="Add New Symbol. " class="input input-sm form-control" type="text" ng-model="symbol">
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-white" ng-click="addPortfolios(symbol)" > <i class="fa fa-plus" ></i> Add New Symbol </button>
                                </span>
                            </div> -->

                            <!--adding suggestion list-->
                            
                            <ul id="drop" style="display:none;position:absolute;list-style:none"></ul>
                        
                            <table class="footable table table-stripped toggle-arrow-tiny" data-show-toggle="false">
                                <thead>
                                    <tr>
                                        <th>Symbol</th>
                                        <th data-hide="tablet,phone">Share Name</th>
                                        <th data-hide="tablet,phone">LDCP</th>
                                        <th data-hide="tablet,phone">OPEN</th>
                                        <th data-hide="tablet,phone">HIGH</th>
                                        <th data-hide="tablet,phone">LOW</th>
                                        <th>CURRENT</th>
                                        <th>CHANGE</th>
                                        <th data-hide="tablet,phone">VOLUME</th>
                                        <th data-hide="tablet,phone">URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <tr ng-repeat="p in portfolio track by $index" >
                                            <td>[%=p.symbol %]</td>
                                            <td>[%=p.shareName%]</td>
                                            <td>[%=p.LDCP%]</td>
                                            <td>[%=p.OPEN%]</td>
                                            <td>[%=p.HIGH%]</td>
                                            <td>[%=p.LOW%]</td>
                                            <td>[%=p.CURRENT%]</td>
                                            <td>[%=p.CHANGE%]</td>
                                            <td>[%=p.VOLUME%]</td>
                                            <td><a href="/[%=p.symbol%]">URL</a></td>


                                        </tr>
                                    
                                </tbody>
                               
                            </table>

                        </div>
                    </div>
                </div>
                </div>
            </div>

        
            <!-- FOOTER -->
    @include('partials/_footer')

        </div>
    </div>

    <!-- Default Scripts for bottom-->
    @include('partials/_bodyscripts')


 
    <script src="js/topsearchbar.js" defer></script>

</body>    
</html>