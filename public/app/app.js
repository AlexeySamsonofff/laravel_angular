

var vacayme = angular.module('vacaymeApp',['ngSanitize']).constant('API_URL', 'https://projectupgrade.frb.io/api/v1/');




vacayme.directive("signupController", function(){
    return {
        templateUrl : 'partials/signup.html'
      };
});
vacayme.directive("leftmenuController", function(){
    return {
        templateUrl : 'partials/leftmenu.html'
      };
});
vacayme.directive("myaccountController", function(){
    return {
        templateUrl : 'partials/myaccount.html'
      };
});

vacayme.directive("bookingController", function(){
    return {
        templateUrl : 'partials/bookings.html'
      };
});


/*Yamuna*/

vacayme.directive("headerController", function(){
    return {
        templateUrl : 'partials/header.html'
      };
});
vacayme.directive("contentController", function(){
    return {
        templateUrl : 'partials/mainContent.html'
      };
});
vacayme.directive("footerController", function(){
    return {
        templateUrl : 'partials/footer.html'
      };
});
vacayme.directive("blackresultController", function(){
    return {
        templateUrl : 'partials/black_result.html'
      };
    });
vacayme.directive("searchresultController", function(){
    return {
        templateUrl : 'hotels/search-ajax_result.html'
        };
});

vacayme.directive("hoteldetailController", function(){
    return {
        templateUrl : 'hotels/hoteldetails.html'
        };
});
vacayme.directive("roomdetailsController",function(){
    return{
        templateUrl : 'hotels/rooms_available.html'
    };
});
vacayme.directive("personaldetailsController",function(){
    return{
        templateUrl : 'hotels/personaldetails.html'
    };
});
vacayme.service('myservice', function() {
    this.roomcount;
    this.guestcount;
    this.childcount;
    this.checkIn;
  });


//Modules
// var homeapp=angular.module('homeSearch',[]);

// var hotelapp=angular.module('hotelRecords',[]);






