
vacayme.controller('hotelsController', function ($scope, $http,API_URL,$window,myservice) {

        var mainresult;
        var allamenities;

        $http({
            method: 'get',
            //url:  API_URL + "hotels",
            url:  API_URL + "hotels",
            // data: { srchinfo : $window.localStorage.getItem("srchval")},
            headers: { 'Content-Type': 'application/json' }
        }).then(function (response) {
            var rangeval = [];
            $scope.hotels = response.data.hotels;
            $scope.citySearch=response.data.cityName;
            $scope.checkIn=response.data.checkIn;
            $scope.checkOut=response.data.checkOut;
            $scope.roomcount=response.data.adult;
            $scope.guestscount =response.data.room;
            $scope.childcount=response.data.child;
           myservice.roomcount=response.data.room;
           myservice.guestcount=response.data.adult;
           myservice.childcount=response.data.child;
            $scope.myservice=myservice;

            //vacayme.value("roomcounts", response.data.room);
            $(".adultsF").html(response.data.adult);
            $(".childsF").html(response.data.child);
            $(".room_countF").html(response.data.room);
            for (i=0;i<5;i++){
                rangeval.push(i+1);
            }
            $scope.rangevalue = rangeval;
            mainresult = response.data.hotels;
            $scope.amenities();
            //$scope.hotelamenities();
            console.log(response);
            console.log("roomcounts: " + roomcounts);
            $('.accordion-heading').each(function () {
                var $this = $(this);
                $this.click(function () {
                    if ($this.next('.accordion-content').is(':visible')) {
                    $this.next('.accordion-content').slideUp('slow');
                    $this.find('span').removeClass('fa-angle-down').addClass('fa-angle-right');
                    } else {
                    $this.next('.accordion-content').slideDown('slow');
                    $this.find('span').removeClass('fa-angle-right').addClass('fa-angle-down');
                    }
                });
            });




            $("#priceSlider").slider({
                range: true,
                min: 100,
                max: 3000,
                values: [ 100, 3000 ],
                slide: function( event, ui ) {
                    $("#price-start").html("USD "+ui.values[0]);
                    $("#minPrice").val(ui.values[0]);
                    $("#price-end").html("USD "+ui.values[1]);
                    $("#maxPrice").val(ui.values[1]);
                    // angular.element(document.getElementById("priceFilter")).scope().pricesliderevent($("#minPrice").val(),$("#maxPrice").val());
                }
            });

            $('.ListMapView').on('click', function() {
                $('.ListMapView').parent().find("a").removeClass("active");
                $(this).find("a").addClass('active');
                if ($(this).find("a").attr("data-val")=="List"){
                    $("#list-view").show();
                    $("#grid-view").hide();
                } else {
                    $("#list-view").hide();
                    $("#grid-view").show();
                }
            });
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



        }, function (error) {
            console.log(error);
        });


        $scope.modifyButton = function(){
                var searchinfo = JSON.stringify({
                    cityName:$("#city_name").val(),
                    checkIn:$("#dph1").val(),
                    checkOut:$("#dph2").val()
                });
                Cookies.set('srchval', searchinfo, { expires: 1 });
                $window.location.href = "/homesearch";
        };

        $scope.showmap = function(hcode, hlat, hlong){
            $(".resultdiv").hide();
            if ($("#maphid").val()=="" || $("#maphid").val()!=hcode){
                $("#map"+hcode).show();
                $("#map"+hcode).html("<iframe src='https://maps.google.com/maps?q="+hlat+","+hlong+"&amp;hl=es;z=14&amp;output=embed' width='100%' height='250' frameborder='0' style='border:0' allowfullscreen=''></iframe>");
                $("#maphid").val(hcode);
            }
            if ($("#gridmaphid").val()=="" || $("#gridmaphid").val()!=hcode){
                $("#gridmap"+hcode).show();
                $("#gridmap"+hcode).html("<iframe src='https://maps.google.com/maps?q="+hlat+","+hlong+"&amp;hl=es;z=14&amp;output=embed' width='100%' height='250' frameborder='0' style='border:0' allowfullscreen=''></iframe>");
                $("#gridmaphid").val(hcode);
            }
        }
        //Sorting
        // $scope.changeCount = function(obj) {
        //     var orderByExpression = [];
        //     if ($scope.SortColumn) {
        //       orderByExpression.push($scope.SortColumn);
        //     }
        //     $scope.hotels = $filter('orderBy')($scope.hotels,orderByExpression, false);
        //   };

        //Filter stars (pending)
        //$scope.starRate = [];
        confirmedval = [];
        $scope.filterByStar = function(val) {
            var index = confirmedval.indexOf(val);
            if(index>-1){ confirmedval.splice(index,1);
                $('input[value="'+val+'"]').parents("li").removeClass("active");
            } else {
                confirmedval.push(val);
                $('input[value="'+val+'"]').parents("li").addClass("active");
            }
            if (JSON.stringify(confirmedval)!="[]"){
                $scope.starRate = function(hotel){
                    return (confirmedval.indexOf(hotel.star) !== -1);
                }
            } else {
                $scope.starRate = function(hotel){
                    return true;
                }
            }
        };
        //Show amenties

        $scope.showAmenties = function(val,amenities) {
            confirmedamenty = [];
            replaceval = val.split(",");
            for(i=0;i<replaceval.length;i++){
                confirmedamenty.push(
                    replaceval[i]
                );

            }
            return confirmedamenty;
            filterbyid = {id: confirmedamenty};
           console.log(amenities.filter(o => Object.keys(filterBy).every(k => filterBy[k].some(f => o[k] === f))));
            return amenities.filter(o => Object.keys(filterBy).every(k => filterBy[k].some(f => o[k] === f)));


            $scope.amenitieshid = function(amenity){
                return (confirmedamenty.indexOf(amenity.id) !== -1);
            }

        };

        $scope.pricesliderevent = function(){
                $scope.minPrice = $("#minPrice").val();
                $scope.maxPrice = $("#maxPrice").val();

                $scope.priceFilter = function(hotel){
                    if ((parseFloat(hotel.orgamt)>=parseFloat($scope.minPrice)) && (parseFloat(hotel.orgamt) <= parseFloat($scope.maxPrice))){
                        return true;
                    }
                };
        };

        //Amenities
        $scope.amenities=function(){
            $http({
                method: 'get',
                url: "getAmenities",
                headers: { 'Content-Type': 'application/json' }
            }).then(function (response) {
                $scope.amenities = response.data.amenities;
                allamenities = response.data.amenities;
                console.log(response);
            }, function (error) {
                console.log(error);
            });
         }


        //  hcodeamenty=[];
         $scope.hotelamenities=function(amenityids,hcode){

            $http({
                method: 'get',
                url: "gethotelAmenities/"+ amenityids,
                headers: { 'Content-Type': 'application/json' }
            }).then(function (response) {
                amentyval="";
                for (i=0;i<5;i++){
                    if (amentyval==""){

                        amentyval=response.data.hotelamenities[i].facility;
                    }else{
                        amentyval=amentyval+", "+response.data.hotelamenities[i].facility
                    }
                }
                // console.log(JSON.stringify(response.data));
                $("#amenty"+hcode).html(amentyval);
                // hcodeamenty.push({
                //     hcodeval:hcode,
                //     amentyval:response.data.amenities
                // })
                // response.data.hotelamenities;
                // $scope.hotelamenities=hcodeamenty;
                // console.log(response);
                //return hcodeamenty;
                //  console.log(hcode+" - "+JSON.stringify(hcodeamenty));
            }, function (error) {
                console.log(error);
            });
         }
        //AWS
        $scope.s3Url = 'https://s3.us-east-2.amazonaws.com/vacaymenow.com/';


        $scope.imgval = function(){
            // $http.get('imagetest' )
            //         .then(function (response) {alert(response);
            //             console.log(response);
            //             $scope.s3Url = response.data.imgUrl;
            //         });
            //return true;
        }

        $scope.hotelDetail = function(hotelid){


            $window.localStorage['newhotelcost']=$("#hotelcost"+hotelid).val();
            Cookies.set('hotelid', hotelid, { expires: 1 })
             $window.location.href = "/hoteldetail";
           //$window.location.href = "hoteldetail/"+ hotelid;
        }

        $scope.showdescription = function(val){
            // var changedString = String(val).replace(/<[^>]+>/gm, '');
            // var length = changedString.length;
            // var limit=5;
            //  length > limit ? changedString.substr(0, limit - 1) + suffix : changedString;

            if ($("#read"+val).html()=="Read More"){
                $("#read"+val).html("Read Less");
                $("#"+val).attr("style","height:auto;overflow:visible;");
            }
            else{
                    $("#read"+val).html("Read More");
                    $("#"+val).attr("style","height:40;overflow:hidden;");
            }

            if ($("#readgrid"+val).html()=="Read More"){
                $("#readgrid"+val).html("Read Less");
                $("#grid"+val).attr("style","height:auto;overflow:visible;");
            }
            else{
                    $("#readgrid"+val).html("Read More");
                    $("#grid"+val).attr("style","height:40;overflow:hidden;");
            }

        }

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




vacayme.controller('hoteldetailController', function ($scope, $http,$window,myservice) {


        $http({
            method: 'get',
            url:  "gethoteldetail",
           // headers: { 'Content-Type': 'application/json' }
        }).then(function (response) {
            $scope.roomcheckvalue=false;
            console.log(response);
            $scope.hoteldetails = response.data.hoteldetails;
            $scope.amenities();
            $scope.roomdetails();
            // $scope.citySearch=response.data.cityName;
            // $scope.checkIn=response.data.checkIn;
            // $scope.checkOut=response.data.checkOut;
            // var dateone = new Date(response.data.checkIn);
            // var datetwo = new Date(response.data.checkOut);
            // var datediff = (datetwo - dateone)/ 1000 / 60 / 60 / 24;;
            // var numdays = Math.round(datediff);
            // $scope.numOfnights=numdays;
            // //$scope.roomcount=response.data.room;
            // $scope.guestscount =response.data.adult;
            // $scope.childcount=response.data.child;
            // //$scope.roomamenities();
            // $scope.myservice=myservice;
            // console.log("date: " + $scope.dayDifference);
            $scope.hotelcost=$window.localStorage['newhotelcost'];
            $scope.roomcount=$window.localStorage['newroomcount'];
            $scope.roomtype=$window.localStorage['newroomtype'];
            $scope.guestscount =$window.localStorage['newadultcount'];
            $scope.numOfnights=$window.localStorage['newnumofdays'];
            $scope.roomcost=$window.localStorage['newroomcost'];
            $scope.subtotal=$window.localStorage['newsubtotal'];
        });

        //Amenities
        $scope.amenities=function(){
            $http({
                method: 'get',
                url: "getAmenities",
                headers: { 'Content-Type': 'application/json' }
            }).then(function (response) {
                $scope.amenities = response.data.amenities;
                allamenities = response.data.amenities;
                console.log(response);
            }, function (error) {
                console.log(error);
            });
         }

         //Room details
         $scope.roomdetails=function(){
            $http({
                method: 'get',
                url: "getroomdetail",
                headers: { 'Content-Type': 'application/json' }
            }).then(function (response) {
                $scope.roomdetails = response.data.roomdetails;
                if ($scope.roomdetails=="" || $scope.roomdetails==undefined){
                    $scope.roomcheckvalue=true;
                }
                else{
                    $scope.roomcheckvalue=false;
                }
                console.log(response);
            }, function (error) {
                console.log(error);
            });
         }

         //Room Amenities
         $scope.roomamenities=function(){
            amenityids=3,4,5,7,13,14,15,17,18,19,20,22;
            $http({
                method: 'get',
                url: "getroomAmenities/"+ amenityids,
                headers: { 'Content-Type': 'application/json' }
            }).then(function (response) {
                $scope.roomamenities = response.data.roomamenities;
                console.log(response);
            });
        }
        //Room Image
        $scope.s3Url = 'https://s3.us-east-2.amazonaws.com/vacaymenow.com/';
        $scope.roomimage=function(roomcode){
            //roomcode="0000100004";
            $http({
                method: 'get',
                url: "getroomImages/"+ roomcode,
                headers: { 'Content-Type': 'application/json' }
            }).then(function (response) {
                $scope.roomimage = response.data.roomimage;
                console.log(response);
            });
        }
        $scope.goto=function(){
            $window.location.href = "/personalinfo";
        }

        $scope.showroomdesc=function(rcode) {

            if ($("#roomdetailhid").val().trim()==rcode.trim()){
                $(".details-content").attr("style","display:none");
                $("#details-content"+rcode).attr("style","display:none");
                $("#roomdetailhid").val("");
            }
            else {
                $(".details-content").attr("style","display:none");
                $("#details-content"+rcode).attr("style","display:block");
                $("#roomdetailhid").val(rcode);
            }
        }

        $scope.roomrate=function(rcode){
            $("#grand-total").html($scope.roomcount * $("#rratehid"+rcode).val());
            var selectroomdetails = JSON.stringify({
                RoomCost:$("#grand-total").html(),
                RoomCount:$scope.roomcount,
                NofNights:$("#nonhid"+rcode).val()
            });
            Cookies.set('selroom', selectroomdetails, { expires: 1 })

            $window.localStorage['newroomcost'] = $("#roomcost"+rcode).val();
            $window.localStorage['newsubtotal'] = $("#grand-total").html();
            $window.localStorage['newroomtype'] = $("#roomtype"+rcode).val();
        }


        $scope.roomrateval = function(){
            setTimeout( function(){
            var totalroomval=($scope.roomdetails.length)-1;
            var rcode = $scope.roomdetails[totalroomval].room_code;
            $("#grand-total").html($scope.roomcount * $("#rratehid"+rcode).val());
            var selectroomdetails = JSON.stringify({
                RoomCost:$("#grand-total").html(),
                RoomCount:$scope.roomcount,
                NofNights:$("#nonhid"+rcode).val()
            });
            Cookies.set('selroom', selectroomdetails, { expires: 1 })
            },100);
        }

});

vacayme.controller('personaldetailController', function ($scope, $http,$window) {


    var rdetails = JSON.parse(Cookies.get('selroom'));

    $("#roomcost").html(rdetails.RoomCost);
    $("#nonvalue").html(rdetails.NofNights);
    $("#totalrooms").html(rdetails.RoomCount);
    $("#subtotal").html(rdetails.RoomCost);
    $("#personaldiv").attr("style","display:block;");
    // $("#totalguests").html(rdetails.RoomCost);
    $scope.addUserinfo = function () {
        $(".inputinfo").attr("style","display:none;");
        $("#guestdiv").attr("style","display:block;");
        $http({
            method: 'POST',
            url: "/userinfo",
            data: $.param($scope.user),
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).then(function (response) {
            console.log(response);
        });
    };
    $scope.addGuestinfo = function () {
        $(".inputinfo").attr("style","display:none;");
        $("#transportdiv").attr("style","display:block;");
        $http({
            method: 'POST',
            url: "/guestinfo",
            data: $.param($scope.guest),
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).then(function (response) {
            console.log(response);
        });
    };

    $scope.addextras = function() {
        $(".inputinfo").attr("style","display:none;");
        $("#paymentdiv").attr("style","display:block;");
    };

    $scope.previouswindow=function(val){
        $(".inputinfo").attr("style","display:none;");
        $("#"+val).attr("style","display:block;");

    }

});




