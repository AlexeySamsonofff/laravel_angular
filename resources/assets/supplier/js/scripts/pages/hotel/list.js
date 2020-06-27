/*=========================================================================================
    File Name: hotel.js
    Description: Hotels page
    --------------------------------------------------------------------------------------
    Item Name: Frest HTML Admin Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
$(document).ready(function () {

  // variable declaration
  var hotelsTable;
  var hotelsDataArray = [];

  // datatable initialization
  if ($("#hotels-list-datatable").length > 0) {
    hotelsTable = $("#hotels-list-datatable").DataTable({
      responsive: {
        details: {
          type: 'column'
        }
      },
      columnDefs: [{
        className: 'control',
        orderable: false,
        targets: [0]
      }],
      order: [1, 'asc']
    });
  }

  // on click selected hotels data from table(page named page-hotels-list)
  // to store into local storage to get rendered on second page named page-hotels-view
  $(document).on("click", "#hotels-list-datatable tr", function () {
    $(this).find("td").each(function () {
      hotelsDataArray.push($(this).text().trim())
    });
    localStorage.setItem("hotelsId", hotelsDataArray[0]);
    localStorage.setItem("hotelsCode", hotelsDataArray[1]);
    localStorage.setItem("hotelsName", hotelsDataArray[2]);
    localStorage.setItem("hotelsCity", hotelsDataArray[4]);
    localStorage.setItem("hotelsCountry", hotelsDataArray[5]);
    localStorage.setItem("hotelsStatus", hotelsDataArray[6]);
    localStorage.setItem("hotelsPropertyType", hotelsDataArray[7]);
    localStorage.setItem("hotelsStarRating", hotelsDataArray[8]);
    localStorage.setItem("hotelsEmail", hotelsDataArray[9]);
  });

  // render stored local storage data on page named page-hotels-view
  if (localStorage.hotelsId !== undefined) {
    $(".hotels-view-id").html(localStorage.getItem("hotelsId"));
    $(".hotels-view-code").html(localStorage.getItem("hotelsCode"));
    $(".hotels-view-name").html(localStorage.getItem("hotelsName"));
    $(".hotels-view-city").html(localStorage.getItem("hotelsCity"));
    $(".hotels-view-country").html(localStorage.getItem("hotelsCountry"));
    $(".hotels-view-status").html(localStorage.getItem("hotelsStatus"));
    $(".hotels-view-property-type").html(localStorage.getItem("hotelsPropertyType"));
    $(".hotels-view-star-rating").html(localStorage.getItem("hotelsStarRating"));
    $(".hotels-view-email").html(localStorage.getItem("hotelsEmail"));
  }

  // page hotels list apply filter
  $(".hotels-list-search").on("click", function () {
    var hotelsCodeInput = $("#hotels-list-code").val();
    var hotelsNameInput = $("#hotels-list-name").val();
    var hotelsRatingSelect = $("#hotels-list-rating").val();
    var hotelsCityInput = $("#hotels-list-city").val();
    var hotelsStatusSelect = $("#hotels-list-status").val();

    hotelsTable.column(1).search(hotelsCodeInput)
      .column(2).search(hotelsNameInput)
      .column(4).search(hotelsCityInput)
      .column(8).search(hotelsRatingSelect);

    // column search for exact match
    if (hotelsStatusSelect !== "") {
      hotelsTable.column(6).search("(^" + hotelsStatusSelect + "$)", true, false);
    } else {
      hotelsTable.column(6).search(hotelsStatusSelect);
    }

    hotelsTable.draw();
  });

  // page hotels list clear filter
  $(".hotels-list-clear").on("click", function () {
    hotelsTable.column(1).search("")
      .column(2).search("")
      .column(4).search("")
      .column(6).search("")
      .column(8).search("")
      .draw();
  });

  // @todo ---

  // hotels language select
  if ($("#hotels-language-select2").length > 0) {
    $("#hotels-language-select2").select2({
      dropdownAutoWidth: true,
      width: '100%'
    });
  }

  // hotels music select
  if ($("#hotels-music-select2").length > 0) {
    $("#hotels-music-select2").select2({
      dropdownAutoWidth: true,
      width: '100%'
    });
  }
  // hotels movies select
  if ($("#hotels-movies-select2").length > 0) {
    $("#hotels-movies-select2").select2({
      dropdownAutoWidth: true,
      width: '100%'
    });
  }
  // hotels birthdate date
  if ($(".birthdate-picker").length > 0) {
    $('.birthdate-picker').pickadate({
      format: 'mmmm, d, yyyy'
    });
  }
  // Input, Select, Textarea validations except submit button validation initialization
  if ($(".hotels-edit").length > 0) {
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
  }
});
