@extends('marketSummary')
@section('script')
<script type="text/javascript">
  var app=angular.module('MarketSummary',[])
.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[%=');
    $interpolateProvider.endSymbol('%]');
  });
app.controller('marketCntrl',function($scope,$window,$http){

$scope.abc=function(){

              $http.get('{{url('chemical')}}')
              .success(function(data){
              $scope.obj = angular.fromJson(data);
             $scope.shares = $scope.obj["shares"];
             console.log($scope.shares);
               })
              .error(function(data){
                $scope.data="error in fetching data"
              });

   }

$scope.abc();
//setInterval($scope.abc,30000);


});
</script>
@endsection
@section('table')
                                            <tr ng-repeat="share in shares track by $index">
                                          <td class="min-mobile"><a href="/[%=share.symbol%]">[%=share.shareName%]</a></td>  <td class="min-mobile">[%=share.symbol%]</td>

                                            <td class="min-tablet-l">[%= share.LDCP %]</td>
                                            <td class="min-tablet-p">[%= share.OPEN %]</td>
                                            <td class="min-tablet-l">[%= share.HIGH %]</td>
                                            <td class="min-tablet-l">[%= share.LOW %]</td>
                                            <td class="min-mobile">[%= share.VOLUME %]</td>
                                            <td class="min-mobile-p">[%= share.CURRENT %]</td>
                                            <td class="min-tablet-p">[%= share.CHANGE %]</t>
                                           
                                        </tr>

 @endsection