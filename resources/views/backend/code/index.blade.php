@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.speakups.management'))

@section('page-header')
<div class="top-area">
	<div class="" style="padding: 13px; padding-left: 30px;">
		<div class="row" style="display: flex;">
			<div class="" style="cursor: pointer; width: 60px;">
				<div class="event">
					<i class="ms-Icon ms-font-sm ms-Icon--CalculatorAddition" style="color: #5597e4; font-size: 13px;"></i>
					<span style="cursor: pointer;">New</span>
				</div>
			</div>
			<div class="" style="cursor: pointer; width: 70px;margin-left:10px;">
				<div class="event">
					<i class="ms-Icon ms-font-sm ms-Icon--Delete" style="color: #5597e4"></i>
					<span style="cursor: pointer;">Delete</span>
				</div>				
			</div>
			<div class="top-content ms-setting">
				<div  class="ms-Button" style="cursor: pointer; width: 80px;margin-left:10px;">					
					<div class="event"><i class="ms-Icon ms-font-sm ms-Icon--Edit" style=" color: #5597e4"></i>
					<span>Content</span></div>
				</div>
				<div class="ms-Panel">
                  <button class="ms-Panel-closeButton ms-PanelAction-close">
                    <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
                  </button>
                  <div class="ms-Panel-contentInner">
                    <p class="ms-Panel-headerText">Contents</p>
                    <div class="ms-Panel-content">
                      <blockquote class="page-section__blockquote">“Nor is there anyone who loves or pursues or desires to obtain pain of itself.”</blockquote>
						<p class="f4 cl-white mt16 mb0">McClintock's eye for detail certainly helped narrow the whereabouts of <em>lorem ipsum's</em> origin, however, the “how and when” still remain something of a mystery, with competing theories and timelines.
                    </div>
                  </div>
                </div>
			</div>
		</div>
	</div>
</div>
                    
@endsection

@section('content')

<section class="section">
  <div class="section-body" style="background-color: white; padding: 30px; padding-top: 0px; padding-bottom: 20px;">
  	<div class="section-header" style=";padding-top: 40px">
	    <p class="f1 cl-white m0"><em><a href="#" style="color: #FF6A67;">Code of Ethics</a></em> began as scrambled, nonsensical Latin derived from Cicero's 1st-century BC text <em>De Finibus Bonorum et Malorum</em>.</p>
	  </div>
    <div class="page-section__block g12-xs g9-md g6-xl">
      <h3 class="f5 cl-orange mb16" style="padding-top: 0px;">Code of Ethics</h3>
      <p class="f4 cl-white mt0 mb16">Until recently, the prevailing view assumed <em>lorem ipsum</em> was born as a nonsense text. “It's not Latin, though it looks like it, and it actually says nothing,” <em>Before &amp; After</em> magazine <a href="#" target="_blank" rel="noopener" title="Straight Dope – What Does the Filler Text Lorem Ipsum Mean?">answered a curious reader</a>, “Its ‘words’ loosely approximate the frequency with which letters occur in English, which is why at a glance it looks pretty real.”
	</p>
      <p class="f4 cl-white mv16">As Cicero would put it, “Um, not so fast.”
	</p>
	      <p class="f4 cl-white mv16">The placeholder text, beginning with the line <em>“Lorem ipsum dolor sit amet, consectetur adipiscing elit”</em>, looks like Latin because in its youth, centuries ago, it was Latin.
	</p>
	      <p class="f4 cl-white mv16">Richard McClintock, a Latin scholar from Hampden-Sydney College, is <a href="#" target="_blank" rel="noopener" title="Wikipedia – Lorem Ipsum">credited</a> with discovering the source behind the ubiquitous filler text. In seeing a sample of <em>lorem ipsum</em>, his interest was piqued by <em>consectetur</em>—a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from <em>De Finibus Bonorum et Malorum</em> (“On the Extremes of Good and Evil”), a first-century B.C. text from the Roman philosopher Cicero.
	</p>
	      <p class="f4 cl-white mv16">In particular, the garbled words of <em>lorem ipsum</em> bear an unmistakable resemblance to sections 1.10.32–33 of Cicero's work, with the most notable passage excerpted below:
	</p>
	      <blockquote class="page-section__blockquote">“Neque porro quisquam est, qui <em>dolorem ipsum</em> quia <em>dolor sit amet, consectetur, adipisci velit, sed</em> quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.”</blockquote>
	      <p class="f4 cl-white mv16">A 1914 English translation by <a href="#" target="_blank" rel="noopener" title="Wikipedia – Lorem Ipsum English Translation">Harris Rackham</a> reads:
	</p>
	<blockquote class="page-section__blockquote">“Nor is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure.”</blockquote>
		<p class="f4 cl-white mt16 mb0">McClintock's eye for detail certainly helped narrow the whereabouts of <em>lorem ipsum's</em> origin, however, the “how and when” still remain something of a mystery, with competing theories and timelines.
	</p>      
    </div>
  </div>
</section>
@endsection

<style type="text/css">
	.treeview-menu2{
		display: block !important;
	}
	.f1{
		font-weight: 700;
	    font-style: normal;
	    font-family: "Quarto A", "Quarto B", Georgia, Times, "Times New Roman", "Microsoft YaHei New", "Microsoft Yahei", "微软雅黑", 宋体, SimSun, STXihei, "华文细黑", serif;
	    line-height: 1.125;
	    letter-spacing: 0.025em;
	    font-size: 1.9375em;
	}
	.f5 {
	    font-size: 12px;
	    font-size: 0.75em;
	    font-weight: 700;
	    font-style: normal;
	    font-family: "Gotham SSm A", "Gotham SSm B", "Helvetica Neue", Helvetica, Arial, sans-serif;
	    line-height: 1.2857142857;
	    letter-spacing: 0.075em;
	    text-transform: uppercase;
	    font-size: 1.1375em;
	}
	.f4 {
	    font-size: 14px;
	    font-size: 0.875em;
	    font-weight: 400;
	    font-style: normal;
	    font-family: "Mercury SSm A", "Mercury SSm B", Georgia, Times, "Times New Roman", "Microsoft YaHei New", "Microsoft Yahei", "微软雅黑", 宋体, SimSun, STXihei, "华文细黑", serif;
	    line-height: 1.5;
	    font-size: 1.1375em;
	}
	.top-area{
		background-color: #f3f2f1;
		height: 44px;
	}
	.content-header{
		padding:0px !important;
	}
	.top-area .ms-Button{
		color: #696969;
		border: none;
		padding: unset;
		height: 25px;
	}
	.top-area .ms-Button:hover{
		background-color: unset !important;
	}
	.content{
		padding: 0px !important;
	}
	.event{
		display: flex;padding: 5px; margin-top: -6px;
	}
	.event:hover{
		background-color: #e0dfdf;
	}
	.event span{
		padding-left: 3px;
		padding-top: 0.3px;
	}
	.treeview2 .fa-angle-up{
		transform:rotate(-180deg) !important;margin-right:7px !important;
	}
</style>