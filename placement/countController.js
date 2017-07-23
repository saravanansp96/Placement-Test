function countController($scope){
    $scope.countDown = 10;
    var timer = setInterval(function(){
        $scope.countDown--;
        $scope.$apply();
        console.log($scope.countDown);
    }, 1000);
}
