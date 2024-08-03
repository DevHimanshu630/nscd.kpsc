<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

        $text = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if (stripos($text, "hi_IN") !== false) {	
	     //$satellite_id=1033; 
		 //$satellite_id=1985; 
		 $satellite_id=2050; 
		 $media_gallery = "मीडिया गैलरी";
		 $kpsc = "केपीएससी नवाचार केन्द्रों के अपने नेटवर्क के माध्यम से नवाचार को बढ़ावा देता है।";
		 $plan_your_visit = "अपनी यात्रा की योजना";
		 $dot = '.';
		}else{
		 $satellite_id=979; 
		 $media_gallery	= "Media Gallery";
		 $kpsc = "KPSC promotes Innovation through its network of Innovation Hubs.";
		 $plan_your_visit = "Plan Your Visit";
		 $dot = '';
		}
 ?>

<div class="new-sticky">
<div class="new-sticky-inner"> 
	<div class="latest-news"> 
		<marquee class="news_listt" direction="alternate" truespeed="truespeed" scrolldelay="50" scrollamount="3" onmouseover="stop();" onmouseout="start();"> 
			<?php $text = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if (stripos($text, "hi_IN") !== false) { ?>
			<!-- <a href="http://kpsc.nscd.gov.in/wp-content/uploads/2020/03/Message-regarding-closing-of-Centre.pdf" target="_blank"> <img src="http://buat.edu.in/wp-content/uploads/2020/02/new_red.gif" style="margin-top: -4px;"> महत्वपूर्ण सूचना - रजि. केंद्र को जनता के लिए बंद किया जा रहा है।   </a> 
			 -->
			 <!--<a href="#" target="_blank"> <img src="http://buat.edu.in/wp-content/uploads/2020/02/new_red.gif" style="margin-top: -4px;"> महत्वपूर्ण सूचना - भारत सरकार के आदेशानुसार यह केन्द्र दर्शकों हेतु प्रतिदिन (केवल होली और दिवाली को छोड़कर) सुबह 9:30 से साएं 6:00 बजे तक खुला है।  </a> -->
			
			 <!--a href="#" target="_blank"> <img src="http://buat.edu.in/wp-content/uploads/2020/02/new_red.gif" style="margin-top: -4px;"> नोवल कोरोना वायरस के संक्रमण के कारण तथा  भारत सरकार के आदेशा अनुसार यह केंद्र आगामी आदेश तक दर्शको हेतु बंद रहेगा। असुविधा के लिए खेद है। </a>
			<!--?php }else { ?>
			<!-- <a href="http://kpsc.nscd.gov.in/wp-content/uploads/2020/03/Message-regarding-closing-of-Centre.pdf" target="_blank"> <img src="http://buat.edu.in/wp-content/uploads/2020/02/new_red.gif" style="margin-top: -4px;"> Important Notice - Reg. closing of the centre for public  </a> 
			 -->
			 <!--<a href="#" target="_blank"> <img src="http://buat.edu.in/wp-content/uploads/2020/02/new_red.gif" style="margin-top: -4px;"> Important Notice - As per the directives of Govt. of India, this Centre is now open for public viewing from 9:30 am to 6:00 pm on all days (except Holi and Diwali).  </a> -->
			 <!--a href="#" target="_blank"> <img src="http://buat.edu.in/wp-content/uploads/2020/02/new_red.gif" style="margin-top: -4px;"> IN VIEW OF THE NOVEL CORONA VIRUS OUTBREAK AND AS PER THE DIRECTIVES OF GOVT. OF INDIA, THIS CENTRE IS CLOSED FOR PUBLIC ENTRY UNTIL FURTHER NOTICE. INCONVENIENCE IS HIGHLY REGRETTED.</a> -->
			<?php } ?>
		</marquee>
	</div> 
</div>
</div>


  <?php $text1 = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if (stripos($text1, "hi_IN") != false) {	 ?>
		
<!--================Main Slider Area =================-->
<section class="main_slider_area">
  <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
    <ul>
      <li data-index="rs-2972" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Creative"
                    data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> 
        <!-- MAIN IMAGE --> 
        <img src="<?php echo get_template_directory_uri(); ?>/img/home-slider/slider_1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina> 
        <!-- LAYERS -->
        <div class="slider_text_box">
          <div class="tp-caption first_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['270','270','270','140']" data-fontsize="['34','34','34','20']" data-lineheight="['44','44','44','30']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> </div>
          <div class="tp-caption secand_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['300','300','300','190']" data-fontsize="['30','30','30','30']" data-lineheight="['60','60','60','40']"
                            data-width="['730','730','730','400']" data-height="none" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">कुरूक्षेत्र पैनोरमा एवं विज्ञान केन्द्र में आपका स्वागत है |</div>
          <div class="tp-caption slider_btn" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['470','470','470','335']" data-fontsize="['16','16','16','16']" data-lineheight="['26','26','26','26']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a class="quote_btn hidden-xs" href="#">KNOW MORE <i class="fa fa-angle-right"></i></a></div>
          <div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','-25']" data-voffset="['230','230','230','80']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]' data-responsive_offset="on"><i class="fa fa-angle-left"></i> </div>
          <div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['50','50','50','25']" data-voffset="['230','230','230','80']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on"><i class="fa fa-angle-right"></i> </div>
        </div>
      </li>
      <li data-index="rs-2973" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Creative"
                    data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> 
        <!-- MAIN IMAGE --> 
        <img src="<?php echo get_template_directory_uri(); ?>/img/home-slider/slider_2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina> 
        <!-- LAYERS -->
        <div class="slider_text_box">
          <div class="tp-caption first_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['270','270','270','140']" data-fontsize="['34','34','34','20']" data-lineheight="['44','44','44','30']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Welcome to</div>
          <div class="tp-caption secand_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['300','300','300','190']" data-fontsize="['30','30','30','30']" data-lineheight="['60','60','60','40']"
                            data-width="['730','730','730','400']" data-height="none" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">KURUKSHETRA PANORAMA & SCIENCE CENTRE</div>
          <div class="tp-caption slider_btn" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['470','470','470','335']" data-fontsize="['16','16','16','16']" data-lineheight="['26','26','26','26']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a class="quote_btn hidden-xs" href="#">KNOW MORE <i class="fa fa-angle-right"></i></a></div>
          <div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','-25']" data-voffset="['230','230','230','80']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]' data-responsive_offset="on"><i class="fa fa-angle-left"></i> </div>
          <div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['50','50','50','25']" data-voffset="['230','230','230','80']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on"><i class="fa fa-angle-right"></i> </div>
        </div>
      </li>
    </ul>
  </div>
</section>
<!--================End Main Slider Area =================--> 

<?php } else {  ?>  

<!--================Main Slider Area =================-->
<section class="main_slider_area">
  <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
    <ul>
      <li data-index="rs-2972" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Creative"
                    data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> 
        <!-- MAIN IMAGE --> 
        <img src="<?php echo get_template_directory_uri(); ?>/img/home-slider/slider_1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina> 
        <!-- LAYERS -->
        <div class="slider_text_box">
          <div class="tp-caption first_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['270','270','270','140']" data-fontsize="['34','34','34','20']" data-lineheight="['44','44','44','30']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Welcome to </div>
          <div class="tp-caption secand_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['300','300','300','190']" data-fontsize="['30','30','30','30']" data-lineheight="['60','60','60','40']"
                            data-width="['730','730','730','400']" data-height="none" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">KURUKSHETRA PANORAMA & SCIENCE CENTRE</div>
          <div class="tp-caption slider_btn" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['470','470','470','335']" data-fontsize="['16','16','16','16']" data-lineheight="['26','26','26','26']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a class="quote_btn hidden-xs" href="#">KNOW MORE <i class="fa fa-angle-right"></i></a></div>
          <div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','-25']" data-voffset="['230','230','230','80']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]' data-responsive_offset="on"><i class="fa fa-angle-left"></i> </div>
          <div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['50','50','50','25']" data-voffset="['230','230','230','80']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on"><i class="fa fa-angle-right"></i> </div>
        </div>
      </li>
      <li data-index="rs-2973" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Creative"
                    data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> 
        <!-- MAIN IMAGE --> 
        <img src="<?php echo get_template_directory_uri(); ?>/img/home-slider/slider_2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina> 
        <!-- LAYERS -->
        <div class="slider_text_box">
          <div class="tp-caption first_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['270','270','270','140']" data-fontsize="['34','34','34','20']" data-lineheight="['44','44','44','30']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Welcome to</div>
          <div class="tp-caption secand_text" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['300','300','300','190']" data-fontsize="['30','30','30','30']" data-lineheight="['60','60','60','40']"
                            data-width="['730','730','730','400']" data-height="none" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]">KURUKSHETRA PANORAMA & SCIENCE CENTRE</div>
          <div class="tp-caption slider_btn" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','0']" data-voffset="['470','470','470','335']" data-fontsize="['16','16','16','16']" data-lineheight="['26','26','26','26']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a class="quote_btn hidden-xs" href="#">KNOW MORE <i class="fa fa-angle-right"></i></a></div>
          <div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['0','0','0','-25']" data-voffset="['230','230','230','80']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]' data-responsive_offset="on"><i class="fa fa-angle-left"></i> </div>
          <div class="tp-caption ContentZoom-SmallIcon tp-resizeme rs-parallaxlevel-0" data-x="['left','left','left','center']" data-y="['top','top','top','top']" data-hoffset="['50','50','50','25']" data-voffset="['230','230','230','80']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(111, 124, 130, 1.00);cursor:pointer;" data-transform_in="opacity:0;s:500;e:Power1.easeInOut;"
                            data-transform_out="opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" data-start="0" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on"><i class="fa fa-angle-right"></i> </div>
        </div>
      </li>
    </ul>
  </div>
</section>
<!--================End Main Slider Area =================--> 
<?php }    ?>  


<!--================Feature Slider Area =================-->
<section class="feature_slider_area">
  <div class="container">
    <div class="row feature_row">
      <div class="feature_slider_inner owl-carousel">
      
       <?php  
	 $category_id = get_cat_ID('Featured Slider');
	  if($category_id==4){
                 $args = array('category' => $category_id );
                
                $featured_slider = get_posts( $args );
                foreach ( $featured_slider as $post ) : setup_postdata( $post );
				
				
				 $fontawesome =  explode(' ',get_post_meta(get_the_ID(), 'fontawesome', TRUE));
				 $readmore =  get_post_meta(get_the_ID(), 'readmore', TRUE);
				  ?>
            <div class="item">
          <div class="feature_s_item" id="feature_s_item1"> <!--<img alt="" class="svg social-link" src="<?php echo get_template_directory_uri(); ?>/img/icon/svg/aeroplane.svg" />--> 
          <!--<i class="fa fa-car fa-4x" aria-hidden="true"></i>-->     
           <i class="fa fa-<?php echo $fontawesome[0];?> fa-4x" aria-hidden="true"></i>
		<?php $text1 = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if (stripos($text1, "hi_IN") != false) {	 ?>
			   <img src="<?php echo $dot.$fontawesome[0];?>" />
			   <?php }else { ?> 
			   <img src=".<?php echo $dot.$fontawesome[0];?>" />
			   <?php } ?> 
<a href="<?php echo $url?$url:the_permalink();?>">        <h4><?php the_title();?></h4>        </a>
            <p> </p>
        <a href="<?php the_permalink();?>"><?php print($readmore);?></a>
          </div>
        </div>      
                  
            <?php endforeach; 
	  }?> 
      
        
      </div>
    </div>
  </div>
</section>
<!--================End Feature Slider Area =================--> 


<!--================About Us Area =================-->
<section class="about_area">
  <div class="container">
  <?php $text1 = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if (stripos($text1, "hi_IN") != false) {	 ?>
		   <div class="row">
			  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="about_left_text">
				  <h4 class="single_title" style="font-size: 23px;margin-top: 15px;">कुरूक्षेत्र पैनोरमा एवं विज्ञान केन्द्र में आपका स्वागत है</h4> 
				  <span style="text-align:justify;"><p>कुरूक्षेत्र पैनोरमा एवं विज्ञान केन्द्र जो कि भारत सरकार के संस्कृति मंत्रालय के अधीन राष्ट्रीय विज्ञान संग्रहालय परिषद् के तहत कार्यरत है का मृख्य उद्देश्य युवाओं में वर्ष भर पारस्परिक माडaल प्रदर्शनियों] शैक्षणिक कार्यक्रमों तथा गतिविधियों के द्वारा विज्ञान के लोकप्रियकरण तथा विज्ञान के प्रति जागरूकता उत्पन्न करना है। केन्द्र का उद्घाटन 6 मार्च, 2001 को तत्कालीन प्रधानमंत्री मान्नीय श्री अटल बिहारी वाजपेयी जी ने किया था। <!--कुरूक्षेत्र स्थित कुरूक्षेत्र पैनोरमा एवं विज्ञान केन्द्र, भारत सरकार के संस्कृति मंत्रालय के अधीन राष्ट्रीय विज्ञान संग्रहालय परिषद् के तहत प्रायोगिक माडल, प्रदर्शनियों, शैक्षणिक कार्यक्रमों तथा क्रिया कलापों के माध्यम से मुख्यतः नवयुवकों में विज्ञान के लोकप्रियकरण तथा उन्नति हेतु 6 मार्च, 2001 से तत्कालीन प्रधानमंत्री माननीय श्री. अटल बिहारी वाजपेयी जी द्वारा लोकापर्ण के उपरान्त निरन्तर कार्यरत है।--><!-- NCSM, कोलकाता में अपने मुख्यालय के साथ, देश में फैले 25 विज्ञान संग्रहालयों / केंद्रों और कोलकाता में केंद्रीय अनुसंधान प्रशिक्षण प्रयोगशाला (CRTL) का अपना नेटवर्क है। CRTL व्यावसायिक प्रशिक्षण, अनुसंधान और विकास के लिए परिषद का केंद्रीय केंद्र है। इसके अलावा, NCSM भारत के विभिन्न राज्यों और केंद्र शासित प्रदेशों के लिए विज्ञान केंद्र / संग्रहालय विकसित करता है। एनसीएसएम का भी विकास ...-->
				  <a class="more_btn11" href="about-us/">अधिक पढ़ें <i class="fa fa-angle-right"></i></a> </p></span></div>
			  </div>
			  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">             <!-- 
				<h6 class="single_title" style="font-size: 18px !important;"><p>कुरूक्षेत्र पैनोरमा एवं विज्ञान केन्द्र में आपका स्वागत है</p></h6> -->    
				<p> <img src="http://kpsc.nscd.gov.in/wp-content/themes/kuru_museum/img/home-slider/Kuruk4.jpg" alt="" style="width:100%; height:330px;"></p>
			  </div>
			</div>
    <?php }else {  ?> 
	<div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="about_left_text">
          <h3 class="single_title">ABOUT US</h3>
          <span style="text-align:justify;"><p>Kurukshetra Panorama & Science Centre (KPSC) in Kurukshetra, working under the National Council of Science Museums (NCSM), Ministry of Culture, Govt. of India, is engaged in popularizing and promoting science especially among the youth through various interactive models, exhibitions, educational programmes and activities throughout the year after the inauguration on 6th March 2001 by the then Hon'ble former Prime Minister Shri Atal Bihari Vajpayee<!-- NCSM, with its Headquarters in Kolkata, has its own network of 25 science museums/centres spread across the country and a&nbsp;Central Research &amp; Training Laboratory (CRTL), in Kolkata. CRTL is the Council's central hub for professional training, research and development. In addition, NCSM develops Science Centres/Museums for different States and Union Territories of India. NCSM has also dev -->...
          <a class="more_btn11" href="about-us/">Read More <i class="fa fa-angle-right"></i></a> </p></span></div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">             
        <h6 class="single_title" style="font-size: 18px !important;"><p>Welcome To KURUKSHETRA PANORAMA & SCIENCE CENTRE</p></h6>    
        <p> <img src="http://kpsc.nscd.gov.in/wp-content/themes/kuru_museum/img/home-slider/Kuruk4.jpg" alt="" style="width:100%; height:330px;"></p>
      </div>
    </div> 
    <?php } ?>
	
	 <?php
	/* $about_us_id = 50; 
$about_us = get_page( $about_us_id );
  $about_us_title = get_the_title($about_us_id);
  $about_us_content = apply_filters('the_content', $about_us->post_content);
	
	
	
	?><div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="about_left_text">
          <h3 class="single_title"><?php echo $about_us_title;?></h3>
          <span style="text-align:justify;"><?php echo mb_strimwidth($about_us_content, 0, 400, '...');?></span>
          <a class="more_btn11" href="about-us/">Read More <i class="fa fa-angle-right"></i></a> </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <?php $id=574; 
             $post = get_post($id); 
             $title = get_the_title($id);
             $content = apply_filters('the_content', $post->post_content);  ?>

        <h6 class="single_title" style="font-size: 18px !important;"><?php  echo $content; ?></h6>
        <p> <img src="<?php echo get_template_directory_uri(); ?>/img/home-slider/Kuruk4.jpg" alt="" style="width:100%; height:330px;"></p>
      </div>
    </div><?php */?>
  </div>
</section>

<!--================End About Us Area =================--> 


 


<!--================Main Feature Area =================-->


<section class="main_feature_area">
  <div class="container">
    <?php $id=423; 
             $post = get_post($id); 
             $title = get_the_title($id);
             $content = apply_filters('the_content', $post->post_content);  ?>
             <?php echo $content; ?>
   
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="right_feature_image">
    <div class="panel panel-default">
      <div class="panel-heading"> <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> <span class="news_heading"><?php echo get_the_category_by_ID( 3 ) ?></span></div>
      <div class="panel-body">
        <div class="row">
          <div class="col-xs-12">
            <ul id="demo3">
				<?php 
				$latest_new_id = get_cat_ID('News and Events');
				 if($latest_new_id==3){
                 $args = array('category' => $latest_new_id );
                
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                
                <li class="news-item"><?php the_title(); ?> <a href="<?php the_permalink(); ?>">Read more...</a></li>
                <?php endforeach; 
				}?> 
            </ul>
          </div>
        </div>
      </div>
      <div class="panel-footer"> </div>
    </div>
  </div>
    </div>
  </div>

</section>
<!--================End Main Feature Area =================--> 
<!--================Gallery Area =================-->
 <?php
$media_id = 513; 
$mediacenter = get_page( $media_id );
  $mediacenter_title = get_the_title($media_id);
  $mediacenter_content = apply_filters('the_content', $mediacenter->post_content);
  ?>
 
 
<section class="gallery_area">
  <div class="container">
    <div class="col-md-12">
      <div class="left_gallery_area">
      <div class="col-md-4 gallery">
        <h3 class="single_title"><a href="<?php echo get_site_url().'/media-centre/';?>"><?php echo $mediacenter_title;?></a></h3>
<ul class="list-group">
    <?php  $video_link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  if (stripos($video_link, "hi_IN") !== false) {   ?>
  	<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=2" class="gallery">कुरूक्षेत्र पैनोरमा एवं विज्ञान केन्द्र</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=2">पार्क साइंस</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=3">3 डी फिल्म काल्पनिक</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=4"> भारतीय वैज्ञानिक विरासत गैलरी</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=5">महाभारत पर पैनोरमा- कुरुक्षेत्र की लड़ाई</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=6">डायनासोर एन्क्लेव</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=7">क्रोमा कुंजी टीवी स्टूडियो </a></li>
  <?php }else{?>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=2" class="gallery">Kurukshetra Panorama & Science Center</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=2">Park Science</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=3">3D Film Fantcy</a></li>
		<li class="list-group-item "><a href="<?php echo get_site_url();?>/?album=1& gallery=4"> Indian Scientific Heritage Gallery</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=5">Panorama on Mahabharat-Battle of kurukshetra</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=6">Dinosour Enclave</a></li>
		<li class="list-group-item"><a href="<?php echo get_site_url();?>/?album=1& gallery=7">Chroma Key TV Studio </a></li>
          <?php }?>
	</ul>
</div>
<div class="col-md-8 youtube">   <h3 class="single_title"><a href="<?php echo get_site_url().'/video';?>"><?php echo $media_gallery;//$mediacenter_title;?></a></h3>

                    <!----------------------Start For Video On Scroll Play & Stop-------------->    
             
<div class="youtube-video" 
     id="demo-1" 
     data-video-id="3IDeaXoeFuI" 
     width="100%" 
     height="315">
     </div>

<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.youtube-inview-autoplay.js"></script>
<script>
// Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  function onYouTubeIframeAPIReady() {
    $('.youtube-video').inViewAutoplay({
      autohide: 1,
      modestbranding: 1,
      rel: 0,
      quality: 'hd144'
    });
  }
</script>
</div>
        
      </div>
    </div>
    
    
  
  </div>
</section>

<section class="gallery_area">
	
	  <?php 
	   
             $satellite_page = get_post($satellite_id); 
             $satellite_title = get_the_title($satellite_id);
	        $satellite_content = apply_filters('get_the_content', $satellite_page->post_content); 
			
			?>
            
	<div class="container">
		<center><h3 class="single_title"><?php echo $satellite_title;?></h3></center>
             <?php echo  $satellite_content; 
			
			 ?>
             
             
		
</div> 
</section>
<!--================Get Quote Area =================-->
<section class="get_quote_area">
  <div class="container">
    <div class="pull-left">
      <h4><?php echo $kpsc;?></h4>
      
    </div>
    <div class="pull-right"> <a class="b_get_btn" href="/kurukshetra_museum/school-registration/"><?php echo $plan_your_visit;?><i class="fa fa-angle-right"></i></a> </div>
  </div>
</section>
<!--================End Get Quote Area =================--> 





<?php get_footer(); ?>
