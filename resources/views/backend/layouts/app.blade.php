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

</style>
<script src="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/js/fabric.min.js"></script>
<script type="text/javascript">
  /////////////////////Collaps menu////////////
  $('.treeview1').click(function(){
    if($(this).hasClass('tree_has'))
    {
      $('.treeview-menu1').attr('style', 'display:none !important');
      $(this).removeClass('tree_has');
    }
    else
    {      
      $('.treeview-menu1').attr('style', 'display:block');
      $('.treeview-menu2').attr('style', 'display:none');
      $('.treeview-menu3').attr('style', 'display:none');
      $(this).addClass('tree_has');
    }
  })
  $('.treeview2').click(function(){
    if($(this).hasClass('tree_has'))
    {
      $('.treeview-menu2').attr('style', 'display:none !important');
      $(this).removeClass('tree_has');
    }
    else
    {      
      $('.treeview-menu2').attr('style', 'display:block');
      $('.treeview-menu1').attr('style', 'display:none');
      $('.treeview-menu3').attr('style', 'display:none');
      $(this).addClass('tree_has');
    }
  })
  $('.treeview3').click(function(){
    if($(this).hasClass('tree_has'))
    {
      $('.treeview-menu3').attr('style', 'display:none !important');
      $(this).removeClass('tree_has');
    }
    else
    {      
      $('.treeview-menu3').attr('style', 'display:block');
      $('.treeview-menu2').attr('style', 'display:none');
      $('.treeview-menu1').attr('style', 'display:none');
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
        }
        
      });
    }());
  }
  var PanelExamples = document.getElementsByClassName("ms-env");
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
</script>