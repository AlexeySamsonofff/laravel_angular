
vacayme.controller('homeController', function ($scope, $http,$window,RoomCount) {

    $('.datepicker').datepicker();
    $("#city_name").autocomplete();

    $( ".travellers-input" ).click(function() {
        $(this).closest('.pax_drop').find( ".travellers-input-popup" ).fadeIn( "slow", function() {
            // Animation complete.
        });
    });
    $( "i.fa.fa-times" ).click(function() {
        $(this).closest('.pax_drop').find( ".travellers-input-popup" ).fadeOut( "slow", function() {
            // Animation complete.
        });
    });

    $scope.go = function() {
        var searchinfo = JSON.stringify({
            cityName:$("#city_name").val(),
            checkIn:$("#dph1").val(),
            checkOut:$("#dph2").val(),
            adult:$(".adultsF").html(),
            child:$(".childsF").html(),
            room:$(".room_countF").html()
        });

        var dateone = new Date($("#dph1").val());
        var datetwo = new Date($("#dph2").val());
        var datediff = (datetwo - dateone)/ 1000 / 60 / 60 / 24;;
        var numdays = Math.round(datediff);

        $window.localStorage['newcityname'] = $("#city_name").val();
        $window.localStorage['newroomcount'] = $(".room_countF").html();
        $window.localStorage['newadultcount'] = $(".adultsF").html();
        $window.localStorage['newchildcount'] = $(".childsF").html();
        $window.localStorage['newcheckin'] = $("#dph1").val();
        $window.localStorage['newcheckout'] = $("#dph2").val();
        $window.localStorage['newnumofdays'] = numdays;

        // alert($window.localStorage['newcityname']);
        // alert($window.localStorage['newroomcount']);
        // alert($window.localStorage['newadultcount']);
        // alert($window.localStorage['newchildcount']);
        // alert($window.localStorage['newcheckin']);
        // alert($window.localStorage['newcheckout']);
        // alert($window.localStorage['newnumofdays']);


        this.RoomCount = $(".room_countF").html();
        // $window.localStorage.setItem("srchval",searchinfo);
        Cookies.set('srchval', searchinfo, { expires: 1 })
        $window.location.href = "/homesearch";
    };


    $scope.searchcity = function() {
    $("#city_name").autocomplete({
        source: function(request,response){
            $.ajax({
                url:"autocompletesearch",
                data:{
                    term:request.term
                    },
                dataType:"json",
                success:function(data){
                    var resp=$.map(data,function(obj){
                        // alert(obj);
                        return obj.city_name;
                    });
                    response(resp);
                    console.log(resp);
                }
            });
        },
        minLength: 1
     });
    }

});


