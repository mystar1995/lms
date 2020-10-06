@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.speakups.management'))

@section('page-header')
<div class="top-area">
	<div class="" style="padding: 13px; padding-left: 30px;">
		<div class="row">
			<div class="col-md-1" style="cursor: pointer;">
				<div class="event">
					<i class="ms-Icon ms-font-sm ms-Icon--CalculatorAddition" style="color: #5597e4; font-size: 13px;"></i>
					<span style="cursor: pointer;">New</span>
				</div>
			</div>
			<div class="col-md-1" style="cursor: pointer;">
				<div class="event">
					<i class="ms-Icon ms-font-sm ms-Icon--Delete" style="color: #5597e4"></i>
					<span style="cursor: pointer;">Delete</span>
				</div>				
			</div>
			<div class="col-md-1 top-content ms-setting">
				<div  class="ms-Button" style="cursor: pointer;">					
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
      <p class="f4 cl-white mv16">And that’s why a 15th century typesetter might have scrambled a passage of Cicero; he wanted people to focus on his fonts.
</p>
                      <blockquote class="page-section__blockquote">“There to be decorated by designers who can’t be bothered to read. Lorem Ipsum exists because words are powerful.”
</blockquote>
      <p class="f4 cl-white mv16">He wanted people to see, and to get them to see he had to keep them from reading.
</p>
                    </div>
                  </div>
                </div>
			</div>
		</div>
	</div>
</div>
<section class="page-section g" id="controversy" style="">
  <div class="gr" style="background-color: white; padding: 30px;padding-top: 20px;">  	
    <div class="">
      <h2 class="f1 cl-gray-1">
        <a href="#">Analysis & Design </a>
      </h2>
    </div>
    <div class="">
      <div>
        <h4 class="page-section__caption f5 cl-gray-1" style="padding-top: 15px;">Analysis & Design </h4>
      </div>
    </div>
    <div class="page-section__block g12-xs g9-md g6-xl">
      <h3 class="f5 cl-orange mb16" style="color: #FF6A67; font-size: 0.875em; font-weight: bolder;">Design or (Dis)content</h3>
      <p class="f4 cl-white mv16">Among design professionals, there's a bit of controversy surrounding the filler text. Controversy, as in <a href="#" target="_blank" rel="noopener" title="Death to Lorem Ipsum">Death to Lorem Ipsum</a>.
</p>
      <p class="f4 cl-white mv16">The strength of <em>lorem ipsum</em> is its weakness: it doesn't communicate. To some, designing a website around placeholder text is unacceptable, akin to sewing a custom suit without taking measurements. <a href="#" target="_blank" rel="noopener" title="Adaptive Path – Death to Lorem Ipsum &amp; Other Adventures in Content">Kristina Halvorson</a> notes:
</p>
      <blockquote class="page-section__blockquote">“I’ve heard the argument that “lorem ipsum” is effective in wireframing or design because it helps people focus on the actual layout, or color scheme, or whatever. What kills me here is that we’re talking about creating a user experience that will (whether we like it or not) be DRIVEN by words. The entire structure of the page or app flow is FOR THE WORDS.”
</blockquote>
      <p class="f4 cl-white mv16"><em>Lorem ipsum</em> is so ubiquitous because it is so versatile. Select how many paragraphs you want, copy, paste, and break the lines wherever it is convenient. Real copy doesn't work that way.
</p>
      <p class="f4 cl-white mv16">As front-end developer <a href="#" target="_blank" rel="noopener" title="Smashing Magazine – Lorem Ipsum is Killing Your Designs"> Kyle Fiedler put it</a>:
</p>
      <blockquote class="page-section__blockquote">“When you are designing with Lorem Ipsum, you diminish the importance of the copy by lowering it to the same level as any other visual element. The text simply becomes another supporting role, serving to make other aspects more aesthetic. Instead of your design enhancing the meaning of the content, your content is enhancing your design.”
</blockquote>
      <p class="f4 cl-white mv16">But despite zealous cries for the demise of <em>lorem ipsum</em>, others, such as <a href="#" target="_blank" rel="noopener" title="Karen McGrane – In Defense of Lorem Ipsum">Karen McGrane</a>, offer appeals for moderation:
</p>
      <blockquote class="page-section__blockquote">“Lorem Ipsum doesn’t exist because people think the content is meaningless window dressing, only there to be decorated by designers who can’t be bothered to read. Lorem Ipsum exists because words are powerful. If you fill up your page with draft copy about your client’s business, they will read it. They will comment on it. They will be inexorably drawn to it. Presented the wrong way, draft copy can send your design review off the rails.”
</blockquote>
      <p class="f4 cl-white mv16">And that’s why a 15th century typesetter might have scrambled a passage of Cicero; he wanted people to focus on his fonts, to imagine their own content on the pages. He wanted people to see, and to get them to see he had to keep them from reading.
</p>
    </div>
  </div>
</section>
@endsection

@section('content')
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