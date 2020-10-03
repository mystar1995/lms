@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.speakups.management'))

@section('page-header')
<div class="top-area">
	<div class="" style="padding: 13px; padding-left: 30px;">
		<div class="row">
			<div class="col-md-1" style="cursor: pointer;">
				<div>
					<i class="fa fa-plus" style="color: #5597e4; font-size: 13px;"></i>
					<span style="cursor: pointer;">New</span>
				</div>
			</div>
			<div class="col-md-1" style="cursor: pointer;">
				<div>
					<i class="fa fa-trash" style="color: #5597e4"></i>
					<span style="cursor: pointer;">Delete</span>
				</div>				
			</div>
			<div class="col-md-1 top-content ms-env">
				<div  class="ms-Button" style="cursor: pointer;">					
					<i class="fa fa-edit" style=" color: #5597e4"></i>
					<span>Content</span>
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
<section class="page-section g" id="original-source">
  <div class="gr" style="background-color: white; padding: 30px;">
  	<div class="gr" style="">
    <div class="page-section__header g12-xs g9-xl">
      <h2 class="f1 cl-gray-1">
        <a href="#original-source">QA & Testing</a>
      </h2>
      <p class="f1 cl-white m0">Below are the original Latin passages from which Lorem Ipsum was derived, paired with their 1914 translations by H. Rackham.</p>
    </div>
  </div>
    <figure class="page-section__image g12-xs g3-md">
      <figcaption>
        <div class="page-section__squiggle">
          <div class="page-section__squiggle-one"></div>
          <div class="page-section__squiggle-two"></div>
        </div>
        <h4 class="page-section__caption f5 cl-gray-1" style="padding-top: 15px;">Qa & Testing</h4>
      </figcaption>
    </figure>
    <div class="page-section__block g12-xs g9-md g6-xl">
      <h3 class="f5 cl-orange mb16">Section 1.10.32 of Cicero's “De finibus bonorum et malorum”</h3>
      <p class="f4 cl-white mt0" style="color: #FF6A67;">Original Latin text:</p>
      <blockquote class="page-section__blockquote">“Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?”</blockquote>
      <p class="f4 cl-white">Translation by H. Rackham:</p>
      <blockquote class="page-section__blockquote">“But I must explain to you how all this mistaken idea of denouncing of a pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?”</blockquote>
      <h3 class="f5 cl-orange mt64 mb16">Section 1.10.33 of Cicero's “De finibus bonorum et malorum”</h3>
      <p class="f4 cl-white mt0">Original Latin text:</p>
      <blockquote class="page-section__blockquote">“At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat…”</blockquote>
      <p class="f4 cl-white">Translation by H. Rackham:</p>
      <blockquote class="page-section__blockquote">“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammeled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.”</blockquote>
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
</style>
<!-- <script type="text/javascript">
	jQuery(document).ready(function(){
		$('.ms-Icon--ChevronDown').click(function(){
			jQuery('dd000');
		})
	})
</script> -->




