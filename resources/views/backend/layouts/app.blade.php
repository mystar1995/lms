<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <link rel="icon" sizes="16x16" type="image/png" href="{{route('frontend.index')}}/img/favicon_icon/{{settings()->favicon}}"> --}}
        <title>License2Code</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Default Description')">
        <meta name="author" content="@yield('meta_author', 'Viral Solani')">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/css/fabric.min.css" />
        <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/css/fabric.components.min.css" />
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        @langrtl
            {{ Html::style(getRtlCss(mix('css/backend.css'))) }}
        @else
            {{ Html::style(mix('css/backend.css')) }}
        @endlangrtl

        {{ Html::style(mix('css/backend-custom.css')) }}
        @yield('after-styles')

        <!-- Html5 Shim and Respond.js IE8 support of Html5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        {{ Html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        {{ Html::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}
        <![endif]-->

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([ 'csrfToken' => csrf_token() ]) !!};
        </script>
        <?php
            if (!empty($google_analytics)) {
                echo $google_analytics;
            }
        ?>
    </head>
    <body class="skin-{{ config('backend.theme') }} {{ config('backend.layout') }}">
        <div class="loading" style="display:none"></div>
        @include('includes.partials.logged-in-as')

        <div class="wrapper" id="app">
            @include('backend.includes.header')
            @include('backend.includes.sidebar-dynamic')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    @yield('page-header')
                    <!-- Breadcrumbs would render from routes/breadcrumb.php -->
                    @if(Breadcrumbs::exists())
                        {!! Breadcrumbs::render() !!}
                    @endif
                </section>

                <!-- Main content -->
                <section class="content">
                    @include('includes.partials.messages')
                    @yield('content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            @include('backend.includes.footer')
        </div><!-- ./wrapper -->

        <!-- JavaScripts -->
        @yield('before-scripts')
        {{ Html::script(mix('js/backend.js')) }}
        {{ Html::script(mix('js/backend-custom.js')) }}
        @yield('after-scripts')
    </body>
</html>
<style type="text/css">
 .set_area img{
    width: 54px;
    margin-right: 6px;
    margin-bottom: 6px;
    cursor: pointer;

 }
 .set_area {
   display: flex; width: 100%;flex-wrap:wrap;
 }
 .ms-Panel-contentInner{
   padding: 0 19px 20px !important;
 }
 .ms-Dialog.ms-Dialog--lgHeader .ms-Dialog-title{
  padding: 2px 24px !important;
 }
 .ms-Dialog{
  width:70%;
  max-width:70%;
 }
 .ms-Icon--ChromeClose:before{
  font-size: 12px !important;
 }
 .sidebar-collapse .sidebar-menu:hover{
  overflow: hidden;
 }
 .sidebar-collapse .treeview-menu3{
  display: none !important;
 }
</style>
<script src="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/js/fabric.min.js"></script>

<script type="text/javascript">
  (function() {
    var example = document.querySelector(".docs-DialogExample-lgHeader");
    var button = example.querySelector(".docs-DialogExample-button");
    var dialog = example.querySelector(".ms-Dialog");
    var label = example.querySelector(".docs-DialogExample-label")
    var actionButtonElements = example.querySelectorAll(".ms-Dialog-action");
    var actionButtonComponents = [];
    // Wire up the dialog
    var dialogComponent = new fabric['Dialog'](dialog);
    // Wire up the buttons
    for (var i = 0; i < actionButtonElements.length; i++) {
      actionButtonComponents[i] = new fabric['Button'](actionButtonElements[i], actionHandler);
    }
    // When clicking the button, open the dialog
    button.onclick = function() {
      openDialog(dialog);
    };
    function actionHandler(event) {
      label.innerText = this.innerText.trim() + " clicked";
    }
    function openDialog(dialog) {
      // Open the dialog
      dialogComponent.open();
      $('.main-header').css('opacity', '0.3');
      $('.main-sidebar').css('opacity', '0.3');
    }
    
    $('.ms-Dialog-action').click(function(){
      $('.main-header').css('opacity', '1');
      $('.main-sidebar').css('opacity', '1');
    })
  }());
</script>
<script type="text/javascript">
  ///////////notification/////////////////////

  $('.notis').click(function(){
    $('.my_noti').css('display','block');
    $('.main-sidebar').css('margin-top','73px');
    $('.sidebar-toggle').css('margin-top','135px');
  })
  $('.ms-Icon--ChromeClose').click(function(){    
    $('.my_noti').css('display','none');
    $('.main-sidebar').css('margin-top','0px');
    $('.sidebar-toggle').css('margin-top','53px');
  })
  /////////////////////Collaps menu////////////
  $('.treeview1').click(function(){
    if($(this).hasClass('tree_has'))
    {
      $('.treeview1 .fa-angle-down').attr('style', 'transform:rotate(0deg) !important; margin-right:15px; font-size:20px;');
      $('.treeview-menu1').attr('style', 'display:none !important');
      $(this).removeClass('tree_has');
    }
    else
    {      
      $('.treeview-menu1').attr('style', 'display:block');
      $('.treeview1 .fa-angle-down').attr('style', 'transform:rotate(-180deg) !important;font-size:20px;margin-right:8px;');
      $('.treeview-menu2').attr('style', 'display:none !important');
      $('.treeview-menu3').attr('style', 'display:none !important');
      $(this).addClass('tree_has');
    }
  })
  $('.treeview2').click(function(){
    if($(this).hasClass('tree_has'))
    {
      $('.treeview2 .fa-angle-down').attr('style', 'transform:rotate(0deg) !important; margin-right:15px !important;font-size:20px;');
      $('.treeview-menu2').attr('style', 'display:none !important');
      $(this).removeClass('tree_has');
    }
    else
    {      
      $('.treeview2 .fa-angle-down').attr('style', 'transform:rotate(-180deg) !important;font-size:20px;margin-right:7px;');
      $('.treeview-menu2').attr('style', 'display:block');
      $('.treeview-menu1').attr('style', 'display:none !important');
      $('.treeview-menu3').attr('style', 'display:none !important');
      $(this).addClass('tree_has');
    }
  })
  $('.treeview3').click(function(){
    if($(this).hasClass('tree_has'))
    {
      $('.treeview3 .fa-angle-down').attr('style', 'transform:rotate(0deg) !important; margin-right:15px !important;font-size:20px;');
      $('.treeview-menu3').attr('style', 'display:none !important');
      $(this).removeClass('tree_has');
    }
    else
    {      
      $('.treeview3 .fa-angle-down').attr('style', 'transform:rotate(-180deg) !important; margin-right:7px;font-size:20px;');
      $('.treeview-menu3').attr('style', 'display:block');
      $('.treeview-menu2').attr('style', 'display:none !important');
      $('.treeview-menu1').attr('style', 'display:none !important');
      $(this).addClass('tree_has');
    }
  })
  /////////////////////Panel///////////////////
  var PanelExamples = document.getElementsByClassName("ms-PanelExample");
  for (var i = 0; i < PanelExamples.length; i++) {
    (function() {
      var PanelExampleButton = PanelExamples[i].querySelector(".ms-Button");
      var PanelExamplePanel = PanelExamples[i].querySelector(".ms-Panel");
      PanelExampleButton.addEventListener("click", function(i) {
        if($(this).hasClass('closebtn'))
        {
          $('.ms-PanelAction-close').click();
          $(this).removeClass('closebtn');
        }
        else
        {
          new fabric['Panel'](PanelExamplePanel);
          $(this).addClass('closebtn');  
          $('.ms-Icon--ChevronDown').css('transform','rotate(0deg)');
          $('.ms-env button').removeClass('closebtn');
          $('.ms-setting button').removeClass('closebtn');
          $('.ms-help button').removeClass('closebtn');
        }
      });
    }());
  }
  var PanelExamples = document.getElementsByClassName("ms-help");
  for (var i = 0; i < PanelExamples.length; i++) {
    (function() {
      var PanelExampleButton = PanelExamples[i].querySelector(".ms-Button");
      var PanelExamplePanel = PanelExamples[i].querySelector(".ms-Panel");
      PanelExampleButton.addEventListener("click", function(i) {
        if($(this).hasClass('closebtn'))
        {
          $('.ms-PanelAction-close').click();
          $(this).removeClass('closebtn');
        }
        else
        {
          new fabric['Panel'](PanelExamplePanel);
          $(this).addClass('closebtn');  
          $('.ms-Icon--ChevronDown').css('transform','rotate(0deg)');
          $('.ms-setting .ms-PanelAction-close').click();
          $('.ms-setting button').removeClass('closebtn');
          $('.ms-env button').removeClass('closebtn');
          $('.ms-PanelExample button').removeClass('closebtn');
        }
        
      });
    }());
  }
  $('.ms-Icon--Cancel').click(function(){
    $('.ms-Icon--ChevronDown').css('transform','rotate(0deg)');
    $('.ms-Button').removeClass('closebtn');
    $('.ms-PanelAction-close').click();
  })
  var PanelExamples = document.getElementsByClassName("ms-env");
  for (var i = 0; i < PanelExamples.length; i++) {
    (function() {
      var PanelExampleButton = PanelExamples[i].querySelector(".ms-Button");
      var PanelExamplePanel = PanelExamples[i].querySelector(".ms-Panel");
      PanelExampleButton.addEventListener("click", function(i) {
        if($(this).hasClass('closebtn'))
        {
          $('.ms-Icon--ChevronDown').attr('style', 'transform:rotate(0deg)');
          $('.ms-PanelAction-close').click();
          $(this).removeClass('closebtn');
        }
        else
        {
          $('.ms-Icon--ChevronDown').attr('style', 'transform:rotate(-180deg)');
          new fabric['Panel'](PanelExamplePanel);
          $(this).addClass('closebtn');  
          $('.ms-PanelExample button').removeClass('closebtn');
          $('.ms-setting button').removeClass('closebtn');
          $('.ms-help button').removeClass('closebtn');
        }
        
      });
    }());
  }
  var PanelExamples = document.getElementsByClassName("ms-setting");
  for (var i = 0; i < PanelExamples.length; i++) {
    (function() {
      var PanelExampleButton = PanelExamples[i].querySelector(".ms-Button");
      var PanelExamplePanel = PanelExamples[i].querySelector(".ms-Panel");
      PanelExampleButton.addEventListener("click", function(i) {
        if($(this).hasClass('closebtn'))
        {
          $('.ms-PanelAction-close').click();
          $(this).removeClass('closebtn');
        }
        else
        {
          new fabric['Panel'](PanelExamplePanel);
          $(this).addClass('closebtn');  
          $('.ms-Icon--ChevronDown').css('transform','rotate(0deg)');
          $('.ms-help .ms-PanelAction-close').click();
          $('.ms-help button').removeClass('closebtn');
          $('.ms-env button').removeClass('closebtn');
          $('.ms-PanelExample button').removeClass('closebtn');
        }
        
      });
    }());
  }

  // var PanelExamples = document.getElementsByClassName("ms-option");
  // for (var i = 0; i < PanelExamples.length; i++) {
  //   (function() {
  //     var PanelExampleButton = PanelExamples[i].querySelector(".ms-Button");
  //     var PanelExamplePanel = PanelExamples[i].querySelector(".ms-Panel");
  //     PanelExampleButton.addEventListener("click", function(i) {
  //       new fabric['Panel'](PanelExamplePanel);
  //     });
  //   }());
  // }

  /////////////////////side bar menu///////////////////
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active1");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      } 
    });
  }
  /////////////////////search///////////////////////////////////
   var SearchBoxElements = document.querySelectorAll(".ms-SearchBox");
  for (var i = 0; i < SearchBoxElements.length; i++) {
    new fabric['SearchBox'](SearchBoxElements[i]);
  }
  /////////////////////select box///////////////////////////
    var DropdownHTMLElements = document.querySelectorAll('.ms-Dropdown');
    for (var i = 0; i < DropdownHTMLElements.length; ++i) {
      var Dropdown = new fabric['Dropdown'](DropdownHTMLElements[i]);
    }
    //////////////////////set image///////////////////////
    $('.set_area img').click(function(){
      $('img').css('border', 'none');
      $('img').css('padding','0px');
      $(this).css('border','2px solid #1b1b1b94');
      $(this).css('padding','2px');
      
    })
    $('.set_area .1').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/55.jpg") }})');
    })
    $('.set_area .2').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/44.jpg") }})');
    })
    $('.set_area .3').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/1.jpg") }})');
    })
    $('.set_area .4').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/4.jpg") }})');
    })
    $('.set_area .5').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/5.jpg") }})');
    })
    $('.set_area .6').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/6.jpg") }})');
    })
    $('.set_area .7').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/7.jpg") }})');
    })
    $('.set_area .default').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/default.jpg") }})');
    })
    $('.set_area .8').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/8.jpg") }})');
    })
    $('.set_area .9').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/9.jpg") }})');
    })
    $('.set_area .10').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/10.jpg") }})');
    })
    $('.set_area .11').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/11.jpg") }})');
    })
    $('.set_area .22').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/22.jpg") }})');
    })
    $('.set_area .33').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/33.jpg") }})');
    })
    $('.set_area .44').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/44.jpg") }})');
    })
    $('.set_area .55').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/55.jpg") }})');
    })
    $('.set_area .66').click(function(){
        $('.navbar-static-top').css('background-image','url({{ asset("img/theme/top/66.jpg") }})');
    })
    $('.view').click(function(){
      $('.set_area').css('height','auto');
      $(this).css('display','none');
      $('.hideset').css('display','block');
    })
    $('.hideset').click(function(){
      $(this).css('display','none');
      $('.view').css('display','block');
      $('.set_area').css('height','115px');
    })
    $('.docs-DialogExample-button').click();
</script>
