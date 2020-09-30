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
  .left-img{
    cursor: pointer;
    margin-top: -4px;
    margin-right: -10px !important;
  }
  .ms-Icon{
    font-size: 17px;
  }
  .navbar .ms-Button{
    min-width:53px;
    padding: 4px 5px 6px;
  }
  .ms-Button--indigo{
    height: 53px;
    background-color: #5c2d91;
    border: 1px solid #5c2d91;
  }
  .ms-Button--indigo:hover{
    height: 53px;
    background-color: #3c1765;
    border: 1px solid #3c1765;
  }
  .ms-Panel{
    background-color: #faf9f8;
    box-shadow:-28px 0 24px -42px rgb(0 0 0);
  }
.collapsible {
  color: #333;
  cursor: pointer;
  padding: 9px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}


.collapsible:after {
  content: "\02C7";
  font-size: 35px;
  padding-top: 13px;
  margin-bottom: -20px;
  float: right;
  margin-left: 5px;
  color: #848b90;
}
li button:focus{
  outline: unset;
}
.active1:after {
 content: "\02C6";
  color: #848b90;
}

/*.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0s ease-out;
  background-color: #f1f1f1;
}
.content a {
  padding-top: 7px !important;
  padding-bottom: 7px !important;
  padding-left: 52px !important;
}*/
.content .active {
  background-color: #e0ccff;
}
.ms-Panel {
  box-shadow: -38px 0 6px -41px rgb(0 0 0);
}
.ms-Panel-closeButton .ms-Icon--Cancel{
  margin-top: 54px;
}
.ms-Panel{
  padding-top: 40px;
}
.user-m .ms-Button{
  color: white;
  height: auto;
  min-width: auto;
}
.ms-Button{
  color: white;
}
.user-m .ms-Button:hover{
  color: white;
  text-decoration:none;
}
.user-m .ms-Button--danger{
  background-color: #949494;
}
.ms-Icon:before{
  font-size: 15px;
  padding-top: 2px;
}
.role-sel, .update-sel{
  background-color: unset !important;
  border-radius: 0px !important;
  height: 40px !important;
}
.title-label{
  font-weight: bold;
}
.card-body td, .card-body th, .card-body label{
  font-family: Segoe UI WestEuropean,Segoe UI,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif;
}
.user-m .table-striped tbody tr:nth-of-type(odd){
  background-color: unset;
}
.user-m table td,.user-m table th {
  height: 50px !important;
  border-top: 1px solid #b9bdbf;
}
.user-m table{
  margin-bottom: 0px;
}
.user-m table .action{
  text-align: right;
  margin-right: 100px;
}
.user-m .card-header{
  border-bottom-color:#ececec !important;
}
.ms-Icon--Cancel{
  padding-right: 10px;
  padding-left: 10px;
}
.ms-Dropdown-title{
  border:unset !important;
  background-color: unset;
}
.ms-Dropdown-select *{
  font-family: Segoe UI WestEuropean,Segoe UI,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif;
}
.helpful .ms-Icon--ChromeBack:before{
  font-size: 17px;
}
.helpful .ms-Icon--Home:before{
  font-size: 20px;
}
.btn-group .btn-warning{
    display: none;
}
</style>
<script src="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/js/fabric.min.js"></script>
<script type="text/javascript">
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
</script>