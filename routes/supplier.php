<?php

use App\Http\Controllers\Supplier\LanguageController;


// URL: /supplier/xxxxx
// Route name: supplier.xxxxx

// Authentication Routes
Route::get('login/supplier_login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login/supplier_login', 'Auth\LoginController@login');
Route::post('logout/supplier_logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Homepage Route
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index');
});

// Authenticated User Routes
Route::group(['middleware' => ['auth.supplier']], function () {

    // Dashboard Routes
    Route::get('/dashboard','DashboardController@dashboardEcommerce')->name('dashboard');

    // Hotel Routes
    Route::get('/hotel-list','HotelController@listHotel')->name('hotel.list');
    Route::get('/hotel-add','HotelController@addHotel')->name('hotel.add');


    // @todo -- default theme routes
    // Dashboard Routes
    Route::get('/dashboard-ecommerce','DashboardController@dashboardEcommerce');
    Route::get('/dashboard-analytics','DashboardController@dashboardAnalytics');

    // Application Routes
    Route::get('/app-email','ApplicationController@emailApplication');
    Route::get('/app-chat','ApplicationController@chatApplication');
    Route::get('/app-todo','ApplicationController@todoApplication');
    Route::get('/app-calendar','ApplicationController@calendarApplication');
    Route::get('/app-kanban','ApplicationController@kanbanApplication');
    Route::get('/app-invoice-view','ApplicationController@invoiceApplication');
    Route::get('/app-invoice-list','ApplicationController@invoiceListApplication');
    Route::get('/app-invoice-edit','ApplicationController@invoiceEditApplication');
    Route::get('/app-invoice-add','ApplicationController@invoiceAddApplication');
    Route::get('/app-file-manager','ApplicationController@fileManagerApplication');

    // Content Page Routes
    Route::get('/content-grid','ContentController@gridContent');
    Route::get('/content-typography','ContentController@typographyContent');
    Route::get('/content-text-utilities','ContentController@textUtilitiesContent');
    Route::get('/content-syntax-highlighter','ContentController@contentSyntaxHighlighter');
    Route::get('/content-helper-classes','ContentController@contentHelperClasses');
    Route::get('/colors','ContentController@colorContent');

    // Icons
    Route::get('/icons-livicons','IconsController@liveIcons');
    Route::get('/icons-boxicons','IconsController@boxIcons');

    // Card
    Route::get('/card-basic','CardController@basicCard');
    Route::get('/card-actions','CardController@actionCard');
    Route::get('/widgets','CardController@widgets');

    // Component route
    Route::get('/component-alerts','ComponentController@alertComponenet');
    Route::get('/component-buttons-basic','ComponentController@buttonComponenet');
    Route::get('/component-breadcrumbs','ComponentController@breadcrumbsComponenet');
    Route::get('/component-carousel','ComponentController@carouselComponenet');
    Route::get('/component-collapse','ComponentController@collapseComponenet');
    Route::get('/component-dropdowns','ComponentController@dropdownComponenet');
    Route::get('/component-list-group','ComponentController@listGroupComponenet');
    Route::get('/component-modals','ComponentController@modalComponenet');
    Route::get('/component-pagination','ComponentController@paginationComponenet');
    Route::get('/component-navbar','ComponentController@navbarComponenet');
    Route::get('/component-tabs-component','ComponentController@tabsComponenet');
    Route::get('/component-pills-component','ComponentController@pillComponenet');
    Route::get('/component-tooltips','ComponentController@tooltipsComponenet');
    Route::get('/component-popovers','ComponentController@popoversComponenet');
    Route::get('/component-badges','ComponentController@badgesComponenet');
    Route::get('/component-pill-badges','ComponentController@pillBadgesComponenet');
    Route::get('/component-progress','ComponentController@progressComponenet');
    Route::get('/component-media-objects','ComponentController@mediaObjectComponenet');
    Route::get('/component-spinner','ComponentController@spinnerComponenet');
    Route::get('/component-bs-toast','ComponentController@toastsComponenet');

    // Extra component
    Route::get('/ex-component-avatar','ExComponentController@avatarComponent');
    Route::get('/ex-component-chips','ExComponentController@chipsComponent');
    Route::get('/ex-component-divider','ExComponentController@dividerComponent');

    // Form elements
    Route::get('/form-inputs','FormController@inputForm');
    Route::get('/form-input-groups','FormController@inputGroupForm');
    Route::get('/form-number-input','FormController@numberInputForm');
    Route::get('/form-select','FormController@selectForm');
    Route::get('/form-radio','FormController@radioForm');
    Route::get('/form-checkbox','FormController@checkboxForm');
    Route::get('/form-switch','FormController@switchForm');
    Route::get('/form-textarea','FormController@textareaForm');
    Route::get('/form-quill-editor','FormController@quillEditorForm');
    Route::get('/form-file-uploader','FormController@fileUploaderForm');
    Route::get('/form-date-time-picker','FormController@datePickerForm');
    Route::get('/form-layout','FormController@formLayout');
    Route::get('/form-wizard','FormController@formWizard');
    Route::get('/form-validation','FormController@formValidation');
    Route::get('/form-repeater','FormController@formRepeater');

    // Table route
    Route::get('/table','TableController@basicTable');
    Route::get('/extended','TableController@extendedTable');
    Route::get('/datatable','TableController@dataTable');

    // Page Route
    Route::get('/page-user-profile','PageController@userProfilePage');
    Route::get('/page-faq','PageController@faqPage');
    Route::get('/page-knowledge-base','PageController@knowledgeBasePage');
    Route::get('/page-knowledge-base/categories','PageController@knowledgeCatPage');
    Route::get('/page-knowledge-base/categories/question','PageController@knowledgeQuestionPage');
    Route::get('/page-search','PageController@searchPage');
    Route::get('/page-account-settings','PageController@accountSettingPage');

    // User Route
    Route::get('/page-users-list','UsersController@listUser');
    Route::get('/page-users-view','UsersController@viewUser');
    Route::get('/page-users-edit','UsersController@editUser');

    // Authentication  Route
    Route::get('/auth-login','AuthenticationController@loginPage');
    Route::get('/auth-register','AuthenticationController@registerPage');
    Route::get('/auth-forgot-password','AuthenticationController@forgetPasswordPage');
    Route::get('/auth-reset-password','AuthenticationController@resetPasswordPage');
    Route::get('/auth-lock-screen','AuthenticationController@authLockPage');

    // Miscellaneous
    Route::get('/page-coming-soon','MiscellaneousController@comingSoonPage');
    Route::get('/error-404','MiscellaneousController@error404Page');
    Route::get('/error-500','MiscellaneousController@error500Page');
    Route::get('/page-not-authorized','MiscellaneousController@notAuthPage');
    Route::get('/page-maintenance','MiscellaneousController@maintenancePage');

    // Charts Route
    Route::get('/chart-apex','ChartController@apexChart');
    Route::get('/chart-chartjs','ChartController@chartJs');
    Route::get('/chart-chartist','ChartController@chartist');
    Route::get('/maps-google','ChartController@googleMap');

    // Extension route
    Route::get('/ext-component-sweet-alerts','ExtensionsController@sweetAlert');
    Route::get('/ext-component-toastr','ExtensionsController@toastr');
    Route::get('/ext-component-noui-slider','ExtensionsController@noUiSlider');
    Route::get('/ext-component-drag-drop','ExtensionsController@dragComponent');
    Route::get('/ext-component-tour','ExtensionsController@tourComponent');
    Route::get('/ext-component-swiper','ExtensionsController@swiperComponent');
    Route::get('/ext-component-treeview','ExtensionsController@treeviewComponent');
    Route::get('/ext-component-block-ui','ExtensionsController@blockUIComponent');
    Route::get('/ext-component-media-player','ExtensionsController@mediaComponent');
    Route::get('/ext-component-miscellaneous','ExtensionsController@miscellaneous');
    Route::get('/ext-component-i18n','ExtensionsController@i18n');

    // Locale Route
    Route::get('lang/{locale}',[LanguageController::class,'swap']);

    // Access controller
    Route::get('/access-control', 'AccessController@index');
    Route::get('/access-control/{roles}', 'AccessController@roles');
    Route::get('/ecommerce', 'AccessController@home')->middleware('role:Admin');

});
