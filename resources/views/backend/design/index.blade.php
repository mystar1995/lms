@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.speakups.management'))

@section('page-header')
   <section class="page-section g" id="controversy">
  <div class="gr">
    <div class="page-section__header g12-xs g9-xl">
      <h2 class="f1 cl-gray-1" style="margin-top: 40px;margin-bottom: 10px;">
        <a href="#">Analysis & Design </a>
      </h2>
    </div>
  </div>
  <div class="gr" style="background-color: white; padding: 30px; padding-top: 0px; padding-bottom: 20px;">
    <figure class="page-section__image g12-xs g3-md">
      <figcaption>
        <div class="page-section__squiggle">
          <div class="page-section__squiggle-one"></div>
          <div class="page-section__squiggle-two"></div>
        </div>
        <h4 class="page-section__caption f5 cl-gray-1" style="padding-top: 50px;">Analysis & Design </h4>
      </figcaption>
    </figure>
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
</style>