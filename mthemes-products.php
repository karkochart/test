<script src="<?php echo get_template_directory_uri(); ?>/assets/js/froogaloop.min.js"></script>
<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css"/>-->

<script>
	var iframe = document.getElementById('content-video-bkg');

	var player = $f(iframe);
	
	jQuery(function($){
		
		$(".controls").each(function(){
			$(this).width($(this).parent().width());
			$(this).css('margin-top', $(this).parent().height()/2);
		})
		
		
		
		 $(document).on('click', '.next', function(){
		 	$(this).parent().parent().animate({scrollLeft: '+=300'}, 500);
			if($(this).parent().parent().attr('id') == 'gallery-1'){
				$(this).parent().css('left', $(this).parent().parent().offset().left);
			}
      		return false;
		 })
		 $(document).on('click', '.prev', function(){
		 	$(this).parent().parent().animate({scrollLeft: '-=300'}, 500);
      		return false;
		 })
		  
		$(document).on('click', '#pause', function(){
			player.api("setvolume", "0");
			$(this).attr('src', 'http://yanlegends.com/wp-content/themes/yanlegends/assets/img/play.png').attr('id', 'play');
		})
		$(document).on('click', '#play', function(){
			player.api("setvolume", "1");
			$(this).attr('src', 'http://yanlegends.com/wp-content/themes/yanlegends/assets/img/pause.png').attr('id', 'pause');
		})
		
		$(".galdrop li").click(function(){
			var main = $(this).text();
			$(".topproduct").css("visibility", "hidden");
			$("#half-page-column-22").css("visibility", "hidden");
			$("#gallery-1 dl").fadeOut(200);
			$("#gallery-1 dl").each(function(){
				//console.log($(this).attr('cats'));
				if($(this).attr('cats').toLowerCase().indexOf( ","+main.toLowerCase()+"," ) > -1){
					$(this).fadeIn(200);
				}
			})
			$(".galdrop li").removeClass('currmenu');
			$(this).addClass('currmenu');
			
			if($(this).attr('id') == 'winesp'){
				$(".verticalmenu").html('<ul class="winesp"><li text="Wine">Wine</li><li text="Brandy">Brandy</li><li text="Vodka">Vodka</li></ul>');
				$(".productwrap").css("background-image", "url(/wp-content/themes/yanlegends/bokal-main1.png)").css('background-size', '100% 100%').attr('id', 'owine');
				$("#owine .topproduct").css('margin-top', '11px').css('height', '350px');
				$(".winesp li").css('margin-top', '-389px');
			}
			
			if($(this).attr('id') == 'jamsp'){
				$(".verticalmenu").html('<ul class="jamsp"><li text="Rose">Rose</li><li text="Fruit">Fru<span class="letter">i</span>t</li><li text="berries">BERR<span class="letter">i</span>ES</li><li text="vegetables">VEGETABLES</li><li text="nuts">NUTS</li><li text="chocolate">CHOCOLATE</li><li text="fruit paste">Fru<span class="letter">i</span>t PASTE</li></ul>');
				$(".productwrap").css("background-image", "url(/wp-content/themes/yanlegends/jam.png)").css('background-size', '100% 100%').attr('id', 'ojam');
				$(".topproduct").css('margin-top', '11%').css('height', '29%');
			}
			
			if($(this).attr('id') == 'oil'){
				$(".verticalmenu").html('<ul class="oil"><li text="Herbs soap">Herbs</li><li text="Garden">Garden</li><li text="Specials">Spec<span class="letter">i</span>als</li><li text="Cream soaps">Cream soaps</li><li text="Yummies">Yumm<span class="letter">i</span>es</li><li text="Gift sets">G<span class="letter">i</span>ft Sets</li><li text="Organic oils">Organ<span class="letter">i</span>c o<span class="letter">i</span>ls</li></ul>');
				$(".productwrap").css("background-image", "url(/wp-content/themes/yanlegends/soapoil.png)").css('background-size', '100% 100%').attr('id', 'ooil');
				$(".topproduct").css('margin-top', '10%').css('height', '29%');
			}
			
			if($(this).attr('id') == 'teah'){
				$(".verticalmenu").html('<ul class="teah"><li text="Honey">Honey</li><li  text="spices" style="margin-left: 5.5%; margin-right: 7.3%;">SPICES</li><li  text="herbal tea" style="margin-right: 7.5%;margin-left: 5.3%;">HERBAL TEA</li><li text="green tea">GREEN TEA</li><li text="berry tea">BERRY TEA</li><li text="herbs tea">HERBS</li><li text="black tea">BLACK TEA</li></ul>');
				$(".productwrap").css("background-image", "url(/wp-content/themes/yanlegends/teaherb.png)").css('background-size', '100% 100%').attr('id', 'otea');
				$(".topproduct").css('margin-top', '10.5%').css('height', '29%');
			}
			if($(this).attr('id') == 'water'){
				$(".verticalmenu").html('<ul class="water"><li text="Water">Water</li><li text="Lemonade">Lemonade</li><li text="Organics">Organ<span class="letter">i</span>cs</li><li text="Juices">Ju<span class="letter">i</span>ces</li></ul>');
				$(".productwrap").css("background-image", "url(/wp-content/themes/yanlegends/water.png)").css('background-size', '100% 100%').attr('id', 'owat');
				$(".topproduct").css('margin-top', '13.5%').css('height', '26%');
			}
			if($(this).attr('id') == 'waterch'){
				$(".verticalmenu").html('<ul class="waterch"><li text="Water">矿泉水</li><li text="Lemonade">起泡水</li><li text="Organics">有机</li><li text="Juices">果汁</li></ul>');
				$(".productwrap").css("background-image", "url(/wp-content/themes/yanlegends/waterch.png)").css('background-size', '100% 100%').attr('id', 'owat');
				$(".topproduct").css('margin-top', '13.5%').css('height', '26%');
			}
			
			
			if($(this).attr('id') == 'teahch'){
				$(".verticalmenu").html('<ul class="teahch"><li text="Honey">蜂蜜</li><li  text="spices" style="margin-left: 5.5%; margin-right: 7.3%;">香料</li><li  text="herbal tea" style="margin-right: 8%;margin-left: 4.3%;">草药茶</li><li text="green tea">绿茶</li><li text="berry tea">浆果茶</li><li text="herbs tea" style="margin-right: 8%;margin-left: 4.3%;">草药茶</li><li text="black tea">黑茶</li></ul>');
				$(".productwrap").css("background-image", "url(/wp-content/themes/yanlegends/teaherbch.png)").css('background-size', '100% 100%').attr('id', 'otea');
				$(".topproduct").css('margin-top', '10.5%').css('height', '29%');
			}
			
			if($(this).attr('id') == 'oilch'){
				$(".verticalmenu").html('<ul class="oilch"><li text="Herbs soap">草药</li><li text="Garden">花园</li><li text="Specials">特殊</li><li text="Cream soaps">露肥皂</li><li text="Yummies">Yummies</li><li text="Gift sets">礼品套装</li><li text="Organic oils">有机精油</li></ul>');
				$(".productwrap").css("background-image", "url(/wp-content/themes/yanlegends/soapoilch.png)").css('background-size', '100% 100%').attr('id', 'ooil');
				$(".topproduct").css('margin-top', '10%').css('height', '29%');
			}
			
			if($(this).attr('id') == 'jamspch'){
				$(".verticalmenu").html('<ul class="jamspch"><li text="Rose">玫瑰</li><li text="Fruit">水果</li><li text="berries">浆果</li><li text="vegetables">蔬菜</li><li text="nuts">坚果</li><li text="chocolate">巧克力</li><li text="fruit paste">果膏</li></ul>');
				$(".productwrap").css("background-image", "url(/wp-content/themes/yanlegends/jamch.png)").css('background-size', '100% 100%').attr('id', 'ojam');
				$(".topproduct").css('margin-top', '11%').css('height', '29%');
			}
			
			if($(this).attr('id') == 'winespch'){
				$(".verticalmenu").html('<ul class="winespch"><li text="Fruit Vodka">水果伏特加</li><li text="White Voskehat">白 <span class="pink">Voskehat</span></li><li text="White Kangun">白 <span class="pink">Kangun</span></li><li text="White Rkatsiteli">白 <span class="pink">Rkats<span class="letter">i</span>tel<span class="letter">i</span></span></li><li text="White Muscat">白 <span class="pink">Muscat</span></li><li text="Fruit Brandy">水果白兰地</li><li text="Brandy">白兰地</li><li text="Exclusive Brandy">独特白兰地</li><li text="Rose Areni">玫瑰红 <span class="pink">Aren<span class="letter">i</span></span></li><li text="Rose Kakhet">玫瑰红 <span class="pink">Kakhet</span></li><li text="Rose Rkatsiteli">玫瑰红 <span class="pink">Rkats<span class="letter">i</span>tel<span class="letter">i</span></span></li><li text="Rose Areni Noir">玫瑰红 <span class="pink">Aren<span class="letter">i</span> No<span class="letter">i</span>r</span></li><li text="Red Areni">红 <span class="pink">Aren<span class="letter">i</span></span></li><li text="Red Kakhet">红 <span class="pink">Kakhet</span></li><li text="Red Khndoghni">红 <span class="pink">Khndoghn<span class="letter">i</span></span></li><li text="Red merlot">红 <span class="pink">merlot</span></li><li text="Red Cabernet Sauvignon">红 <span class="pink">Cabernet Sauv<span class="letter">i</span>gnon</span></li><li text="Red Haghtanak">红 <span class="pink">Haghtanak</span></li><li text="Red Areni Noir">红 <span class="pink">Aren<span class="letter">i</span> No<span class="letter">i</span>r</span></li><li text="Fruit Wine">水果酒</li></ul>');
				$(".productwrap").css("background-image", "url(/wp-content/themes/yanlegends/bokalmainch.png)").css('background-size', '100% 100%').attr('id', 'owine');
				$("#owine .topproduct").css('margin-top', '11px').css('height', '350px');
				$(".winespch li").css('margin-top', '-389px');
			}
		})
		
		$(document).on('click', ".verticalmenu li", function(){
			console.log("***************** 0 ****************");
			var main = $(this).attr('text');
			
			$(".verticalmenu li").css('color', 'white');
			$(".verticalmenu li").find('.pink').css('color', 'rgb(212, 110, 120)');
			$(".verticalmenu li").children('.letter').css('color', 'white');
			
			$(this).css('color', 'rgb(223, 0, 0)');
			$(this).children().css('color', 'rgb(223, 0, 0)');
			$("#gallery-1 dl").hide();
			$("#gallery-1 dl").each(function(){
				if($(this).attr('color').toLowerCase().indexOf( ","+main.toLowerCase()+"," ) > -1){
					$(this).show();
				}
			})
			$(".topproduct").css("visibility", "visible");
			//setTimeout(function() {
				if($("#gallery-1").find('.gallery-item:visible').length < 5){
					console.log($("#gallery-1").find('.gallery-item:visible').length);
					$("#gallery-1 .controls").addClass('hidcon');
					console.log("***************** 1 ****************");
				}
				else{
					console.log($("#gallery-1").find('.gallery-item:visible').length);
					$("#gallery-1 .controls").removeClass('hidcon');
					console.log("***************** 2 ****************");
				}
			//}, 500);
		})
		if($.cookie('eighteen') == undefined){
			$('.verticalmenu li').css('pointer-events', 'none');
			$(".popover").show();
		}
		if($.cookie('eighteen') == 'false'){
			$("#winesp, #winespch").css('pointer-events', 'none');
			$("#water, #waterch").trigger('click');
		}
		if($.cookie('eighteen') == 'true'){
			$(".topproduct").css('margin-top', '11px').css('height', '350px');
			$(".winesp li, .winespch li").css("margin-top", "-389px");
		}
		$(document).on('click', "#winesp, #winespch", function(e){
			if($.cookie('eighteen') != 'true'){
				e.preventDefault();
				$('.verticalmenu li').css('pointer-events', 'none');
				$(".popover").show();
			}	
		})
		$(document).on('click',".yes",function(){
			$.cookie('eighteen', 'true');
			$('.verticalmenu li').css('pointer-events', 'initial');
			$(".winesp li, .winespch li").eq(0).trigger('click');
			$(this).parent().parent().fadeOut();
			$(".topproduct").css('margin-top', '11px').css('height', '350px');
			$(".winesp li, .winespch li").css("margin-top", "-389px");
		})
		$(document).on('click',".no",function(){
			$.cookie('eighteen', 'false');
			$("#winesp, #winespch").css('pointer-events', 'none');
			var t = $(this);
			var h = $(this).parent().parent().html();
			$('.verticalmenu li').css('pointer-events', 'initial');
			$(this).parent().parent().html($(".redir").html());
			$("#water, #waterch").trigger('click');
			setTimeout(function(){$(".popover").fadeOut(400);}, 2000);
			setTimeout(function(){$(".popover").html(h);}, 2500);
			console.log(h);
			
		})
		$(document).on('click', "#gallery-1 .gallery-item", function(){
			if($(this).attr('background') != undefined){
				$(".imgdesc").html('');
				$(".imgdesc").css('background-image', 'url('+$(this).attr('background')+')').css('background-size', 'contain').css('background-repeat', 'no-repeat');
			}
			else{
				if($(this).attr('cats') == ',Preserves & Dried Fruit,'){
				$(".imgdesc").css('background-image', 'initial');
				$(".imgdesc").html("<div class='bigimg'><img class='zoom-img' src='"+$(this).attr('full')+"' data-zoom-image='"+$(this).attr('full')+"' width='300'></div><div class='desc' style='margin-left: -5%'><h3 class='redh4'>"+$(this).attr('firm').replace(/(^,)|(,$)/g, "")+"</h3><h4>"+$(this).attr('caption')+"</h4>"+$(this).find('dd').html()+"</div>");
			}
			else{
				$(".imgdesc").css('background-image', 'initial');
				$(".imgdesc").html("<div class='bigimg'><img class='zoom-img' src='"+$(this).attr('full')+"' data-zoom-image='"+$(this).attr('full')+"' width='300'></div><div class='desc'><h3 class='redh4'>"+$(this).attr('firm').replace(/(^,)|(,$)/g, "")+"</h3><h4>"+$(this).attr('caption')+"</h4>"+$(this).find('dd').html()+"</div>");
				}
			}
			
			
			var simil = '<div class="controls"><div class="next"></div><div class="prev"></div></div>';
			var firm = $(this).attr('firm');
			$("#gallery-1 .gallery-item").each(function(){
				if($(this).attr('firm') == firm){
					simil += $(this).prop('outerHTML');
				}
			})
			$(".simslider").html(simil);
			
			$(".simslider dl").each(function(){
				if($(this).is(":visible")){
					$(this).hide();
					$(this).show();
				}
				else{
					$(this).show();
				}
			})
			
			$("#half-page-column-22").css('visibility', 'visible');
			$(".simslider .controls").each(function(){
				$(this).width($(this).parent().width());
				$(this).css('margin-top', $(this).parent().height()/2 -16);
			})
			if($(this).attr('cats') == 'Preserves & Dried Fruit,'){
				$(".simslider img").css('height', '300px').css('margin-top', '-14px');
			}
			
			if($(".simslider").find('.gallery-item:visible').length < 5){
				$(".simslider .controls").addClass('hidcon');
			}
			
		})
		
		$(document).on('click', ".simslider .gallery-item", function(){
			
			if($(this).attr('background') != undefined){
				$(".imgdesc").html('');
				$(".imgdesc").css('background-image', 'url('+$(this).attr('background')+')').css('background-size', 'contain').css('background-repeat', 'no-repeat');
			}
			else{
				
			if($(this).attr('cats') == ',Preserves & Dried Fruit,'){
				$(".imgdesc").css('background-image', 'initial');
				$(".imgdesc").html("<div class='bigimg'><img class='zoom-img' src='"+$(this).attr('full')+"' data-zoom-image='"+$(this).attr('full')+"' width='300'></div><div class='desc' style='margin-left: -5%'><h3 class='redh4'>"+$(this).attr('firm').replace(/(^,)|(,$)/g, "")+"</h3><h4>"+$(this).attr('caption')+"</h4>"+$(this).find('dd').html()+"</div>");
			}
			else{
				$(".imgdesc").css('background-image', 'initial');
				$(".imgdesc").html("<div class='bigimg'><img class='zoom-img' src='"+$(this).attr('full')+"' data-zoom-image='"+$(this).attr('full')+"' width='300'></div><div class='desc'><h3 class='redh4'>"+$(this).attr('firm').replace(/(^,)|(,$)/g, "")+"</h3><h4>"+$(this).attr('caption')+"</h4>"+$(this).find('dd').html()+"</div>");
			}
			}
		})
		
		$(document).on('click', "#a856, #a854", function(e){
			$(".imgdesc").html("<div class='bigimg2'><img class='zoom-img' src='"+$(this).attr('full')+"' data-zoom-image='"+$(this).attr('full')+"' width='300'></div><div class='desc2'><h3 class='redh4'>"+$(this).attr('firm').replace(/(^,)|(,$)/g, "")+"</h3><h4>"+$(this).attr('caption')+"</h4>"+$(this).find('dd').html()+"</div>");
			e.preventDefault();
			return false;
		})
		
		$(document).on('click', "dl[color='Brandy'], dl[color='Exclusive Brandy']", function(e){
			$(".bigimg img").width("100%").css('margin-left', '0');
			$(".desc").css('margin-left', '0');
			e.preventDefault();
			return false;
		})
		window.onresize = function() {
		$(".controls").each(function(){
			$(this).width($(this).parent().width());
			$(this).css('margin-top', $(this).parent().height()/2);
			
			$("#gallery-1 .controls").css('left', $("#gallery-1").offset().left);
		})
		}
	})
	
	
</script>


<?php  
$second_column_content = mthemes_get_field(array('field' => 'second_column_content', 'is' => 'string', 'default' => ''));
global $post;
?>
<?php if($post->post_name == 'ourproducts'): ?>
<div class="popover"><div class="headp"><h1>You  must be of legal drinking age of your country to visit this section. <br>
Please confirm.</h1></div>
<div class="footp"><button class="yes">Yes</button><button class="no">No</button></div></div>

<div class="redir" style="display: none;"><div class="headp"><h1>We are redirecting you to our special products section.<br>
 You will love it!</h1></div></div>
<?php endif; ?>
<?php if($post->post_name == 'our-productschin'): ?>
<div class="popover"><div class="headp"><h1>是否达到你所在国家法定饮酒年龄 <br>
请确认</h1></div>
<div class="footp"><button class="yes">是</button><button class="no">否</button></div></div>

<div class="redir" style="display: none;"><div class="headp"><h1>我们将为你转到我们独特的产品页面！ <br>
你会喜欢的！</h1></div></div>
<?php endif; ?>
<div id="section-half-page" data-region="halfpage">
    <?php if ( have_posts() ) : the_post(); ?>
    <h1 class="page-title"><?php the_title();
	do_action('icl_language_selector'); 
	
	$imgids = get_gallery_attachments($post);
		echo "<img id='pause' src='".get_template_directory_uri()."/assets/img/pause.png' width='32'style='margin-top: 9px;position: absolute;right: 162px;'>"; ?></h1>
	
	
	
    <div id="post-<?php the_ID(); ?>" <?php post_class('page-content text-format'); ?>>
        <div id="half-page-container">
            <div id="half-page-column-1" class="half-page-column">
                <div class="half-page-column-content">
                <?php if($post->post_name == 'ourproducts'): ?>
                <div class="productwrap" id="owine">
                <?php endif; ?>
                <?php if($post->post_name == 'our-productschin'): ?>
                <div class="productwrap chinprod" id="owine">
                <?php endif; ?>
                	<div class="topproduct">
                	<div class="hidden" style="">
                	<?php //the_content(); ?>
                	<style type='text/css'>
						.slick-list{
							height: 220px;
						}
						#gallery-1 {
							margin: auto;
							height: 124px;
							display: -webkit-box;
							display: -moz-box;
  							display: -ms-flexbox;
  							display: -webkit-flex; 
							display: flex;
 							overflow-x: hidden;
 							padding-bottom: 6px;
						}
						.gallery-item {
							position: relative;
							float: left;
							text-align: center;
							min-width: 150px;
							z-index: 9998;
						}
						.simslider .gallery-item{
							min-width: 120px;
						}
						#gallery-1 img, .simslider img {
							cursor: pointer;
						}
						.simslider img{
							margin-top:4px;
							height: 100px;
  							margin-top: 25px;
						}
						.gallery-caption {
							margin-left: 0;
							display: none;
						}
						
					</style>
                	<div id='gallery-1' class='gallery galleryid-<?php echo $post->ID; ?> gallery-columns-3 gallery-size-thumbnail'>
					<div class="controls">
                	<div class="next"></div>
                	<div class="prev"></div>
					</div>
	                	<?php 
	                	foreach($imgids as $im){ $src = wp_get_attachment_image_src($im); 
	                	$catids = wp_get_post_categories($im);
	                	$cats = "";
	                	foreach($catids as $c){
							$cats .= ",".get_category($c)->name.",";
						}
						
						$colids = wp_get_post_terms($im, 'color');
						$col = "";
						foreach($colids as $k){
							$col .= ",".get_term($k, 'color')->name.",";
						}
						
						$firmids = wp_get_post_terms($im, 'firm');
						$firm = "";
						foreach($firmids as $f){
							$firm .= ",".get_term($f, 'firm')->name.",";
						}
						
						//var_dump($catids);
	                	$meta =  wp_prepare_attachment_for_js($im);
						//var_dump($meta);
	                	$full = $meta['sizes']['full']['url']; ?>
						<dl class='gallery-item' cats='<?php echo $cats; ?>' firm='<?php echo $firm; ?>' color='<?php echo $col; ?>' full='<?php echo $full; ?>' id='<?php echo 'a'.$meta['id']; ?>' caption='<?php if($post->post_name == 'ourproducts'){echo($meta['caption']);}elseif($post->post_name == 'our-productschin'){echo(get_post_meta($im, "_chintitle", true));} ?>' <?php if(get_post_meta($im, "_credit", true) && $post->post_name == 'ourproducts'){echo "background='".get_post_meta($im, "_credit", true)."'";}elseif(get_post_meta($im, "_credit", true) && $post->post_name == 'our-productschin'){echo "background='".get_post_meta($im, "_chincredit", true)."'";} ?>>
							<dt class='gallery-icon landscape'>
							<?php 
								$mySrc = $src[0];
								$mySrc = str_replace("-150x150", "-300x300", $mySrc);
							?> 
								<img height="300" src="<?php echo($mySrc); ?>" class="attachment-thumbnail" alt="backpacks1" aria-describedby="gallery-1-<?php echo $im; ?>" />
							</dt>
							<dd class='wp-caption-text gallery-caption' id='gallery-1-<?php echo $im; ?>'>
							<?php  if($post->post_name == 'ourproducts'){echo($meta['description']);}
							elseif($post->post_name == 'our-productschin'){echo(get_post_meta($im, "_chindesc", true));} ?>
							</dd>
						</dl>
						<?php } //the_content(); ?>
						
                	</div>
                	</div>
                	</div>
                	
					<?php if($post->post_name == 'ourproducts'): ?>
					<div class="verticalmenu">
                	<ul class="winesp">
	                	<li text='Wine'>Wine</li> 
	                	<li text='Brandy'>Brandy</li>
	                	<li text='Vodka'>Vodka</li>
                	</ul>
                	</div>
                </div>
                	<ul class="galdrop">
						<!--<div>Menu</div>-->
						<li id="winesp">Wines & Spirits</li>
						<li id="teah">Special Teas & Honey</li>
						<li id="water">Water & Juices</li>
						<li id="jamsp">Preserves & Dried Fruit</li>
						<li id="oil">Soaps & Oils</li>
					</ul>
					<?php elseif($post->post_name == 'our-productschin'): ?>
					<div class="verticalmenu chin">
					<ul class="winespch winesp ">	                	
                		<li text='Wine'>红酒</li> 
	                	<li text='Brandy'>白兰地</li>
	                	<li text='Vodka'>伏特加酒</li>
                	</ul>
                	</div>
                </div>
                	<ul class="galdrop">
						<!--<div>Menu</div>-->
						<li id="winespch">葡萄酒&洋酒</li>
						<li id="teahch">茶-草药-蜂蜜</li>
						<li id="waterch">矿泉水   果汁</li>
						<li id="jamspch">蜜饯和干果</li>
						<li id="oilch">香皂-精油</li>
					</ul>
					
					<?php endif; ?>
                </div>
            </div>
            <div id="half-page-column-22" class="half-page-column">
                <div class="half-page-column-content">
			    	<div class="imgdesc"></div>
			    	<div class="simslider"></div>
                    <?php echo $second_column_content; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
	<script src='<?php echo get_template_directory_uri(); ?>/elevatezoom/jquery.elevatezoom.js'></script>
	<script>
		jQuery(document).ready(function(){
			var myInterval = setInterval(function(){
				jQuery('.zoom-img').elevateZoom({
					zoomWindowPosition: 1,
					zoomWindowWidth:300, 
					borderSize: 1, 
					easing:false
				});
				// jQuery(".hidden").append("<div class='next-bg'></div><div class='prev-bg'></div>");
				// clearInterval(myInterval); 
			}, 1000);
		});
</script>
</div>