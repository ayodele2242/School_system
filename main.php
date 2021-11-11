<?php include("header-2.php"); ?>

<div class="btPageWrap" id="top">
    
 <?php include("menu-2.php"); ?>

   <div class="btContentWrap btClear">
      <div class="btContentHolder">
         <div class="btContent">

            <div class="bt_bb_wrapper">

               <section id="bt_bb_section607848aed4f66" data-parallax="0.7" data-parallax-offset="0" 
               class="bt_bb_section bt_bb_layout_wide bt_bb_full_screen bt_bb_vertical_align_middle bt_bb_parallax" >
                  <div class="bt_bb_port">
                     <div class="bt_bb_cell">
                        <div class="bt_bb_cell_inner">
                           <div class="bt_bb_row_wrapper">
                              <div  class="bt_bb_row bt_bb_shape_inherit" >
                                 <div  class="bt_bb_column col-xl-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal bt_bb_shape_inherit"  data-width="12" data-bt-override-class="{}">
                                    <div class="bt_bb_column_content">
                                       <div class="bt_bb_column_content_inner">
                                          <div class="bt_bb_content_slider bt_bb_gap_no_gap bt_bb_arrows_size_no_arrows bt_bb_show_dots_hide bt_bb_height_full_screen bt_bb_animation_fade">
                                             <div class="slick-slider fade"  data-slick='{ "lazyLoad": "progressive", "cssEase": "ease-out", "speed": "600", "fade": true, "arrows": false, "adaptiveHeight": true,"autoplay": true, "autoplaySpeed": 4000,"pauseOnHover": false}' >
                                               
<?php            
$sele = mysqli_query($mysqli, "select * from slider order by id desc limit 5");
$break = 25;


while($ro = mysqli_fetch_array($sele)){

?>                                            
<div class="bt_bb_content_slider_item" style=";background-image:url(<?php echo $set['installUrl']; ?>imaging/<?php echo $ro['img']; ?>)">
   <div class="bt_bb_content_slider_item_content content">
      <div class="bt_bb_separator bt_bb_bottom_spacing_large bt_bb_border_style_none"></div>
      <header class="bt_bb_headline bt_bb_color_scheme_6 bt_bb_dash_none bt_bb_size_extrahuge bt_bb_superheadline bt_bb_align_inherit" data-bt-override-class="{}">
         <h2 class="bt_bb_headline_tag"><span class="bt_bb_headline_superheadline"> </span><span class="bt_bb_headline_content">
            <span><?php echo implode(PHP_EOL, str_split($ro['name'], $break)); ; ?></span></span>
         </h2>
      </header>
      <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
      <?php if($set['allowRegistrations'] =='1'){ ?>
      <div class="bt_bb_button bt_bb_icon_position_left bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_medium bt_bb_width_inline bt_bb_shape_inherit 
      bt_bb_align_inherit" data-bt-override-class="{}">
      <a href="<?php echo $set['installUrl']; ?>registration/registration" 
      target="_self" class="bt_bb_link" title="APPLY TODAY"><span class="bt_bb_button_text">
          APPLY TODAY</span>
      </a>
      </div>
      <?php }  ?>
      <div class="bt_bb_separator bt_bb_bottom_spacing_large bt_bb_border_style_none"></div>
   </div>
</div>
<?php
}
?>


                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>


              

               <section id="bt_bb_section6078ed6e32dfe" data-parallax="0.7" data-parallax-offset="0" data-background_image_src="'img/brush_pattern.jpg'" class="bt_bb_section bt_bb_top_spacing_large bt_bb_bottom_spacing_large bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_parallax btLazyLoadBackground bt_bb_background_image" style="background-image:url(&#039;img/blank.gif&#039;);">
            <div class="bt_bb_port">
               <div class="bt_bb_cell">
                  <div class="bt_bb_cell_inner">
                     <div class="bt_bb_row_wrapper">
                        <div  class="bt_bb_row" >
                           <div  class="bt_bb_column col-xl-6 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal bt_bb_shape_inherit"  data-width="6" data-bt-override-class="{}">
                              <div class="bt_bb_column_content">
                                 <div class="bt_bb_column_content_inner">
                                    
                                    <header class="bt_bb_headline bt_bb_color_scheme_5 bt_bb_dash_top_bottom bt_bb_size_large bt_bb_superheadline bt_bb_align_inherit bt_bb_dash_color_scheme_4" data-bt-override-class="{}">
                                       <h1 class="bt_bb_headline_tag"><span class="bt_bb_headline_superheadline">ABOUT US</span></h1>
                                    </header>
                                  
                                 </div>
                              </div>
                           </div>
                           <div  class="bt_bb_column col-xl-6 bt_bb_align_left bt_bb_vertical_align_top bt_bb_padding_normal"  data-width="6" data-bt-override-class="{}">
                              <div class="bt_bb_column_content">
                                 <div class="bt_bb_column_content_inner"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="bt_bb_row_wrapper">
                        <div  class="bt_bb_row bt_bb_shape_inherit" >
                           <div  class="bt_bb_column col-xl-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_padding_normal bt_bb_shape_inherit"  data-width="12" data-bt-override-class="{}">
                              <div class="bt_bb_column_content">
                                 <div class="bt_bb_column_content_inner">
                                    <div class="bt_bb_separator bt_bb_bottom_spacing_large bt_bb_border_style_none"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="bt_bb_row_wrapper">
                        <div  class="bt_bb_row bt_bb_column_gap_5 bt_bb_shape_inherit" >
                           <div  class="bt_bb_column col-xl-6 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"  data-width="6" data-bt-override-class="{}">
                              <div class="bt_bb_column_content">
                                 <div class="bt_bb_column_content_inner">
                                    <div class="bt_bb_image bt_bb_shape_square bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle"><span>
                                       <img src = "img/blank.gif" 
                                       data-image_src="img/head.png" 
                                       title="team_1" alt="img/head.png" 
                                       class="btLazyLoadImage"></span></div>
                                    <div class="bt_bb_separator bt_bb_bottom_spacing_large bt_bb_border_style_none"></div>
                                 </div>
                              </div>
                           </div>
                           <div  class="bt_bb_column col-xl-6 bt_bb_align_left bt_bb_vertical_align_middle bt_bb_animation_fade_in animate bt_bb_padding_double bt_bb_shape_inherit"  data-width="6" data-bt-override-class="{}">
                              <div class="bt_bb_column_content">
                                 <div class="bt_bb_column_content_inner">
                                    <header class="bt_bb_headline bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_size_large bt_bb_superheadline bt_bb_subheadline bt_bb_align_inherit" data-bt-override-class="{}">
                                       <h5 class="bt_bb_headline_tag"><span class="bt_bb_headline_content"><span>‘The important thing is not to stop questioning’’ - Albert Einstein.'</span></span></h5>
                                       <div class="bt_bb_headline_subheadline">Twee echo park celiac YOLO dreamcatcher bushwick. Pitchfork fam tousled sustainable mumblecore tote bag trust fund tacos artistic, impressionism four dollar toast kickstarter school color.</div>
                                    </header>
                                    <div class="bt_bb_separator bt_bb_bottom_spacing_small bt_bb_border_style_none"></div>
                                    <div  class="bt_bb_text" >
                                       <p>Masters Lighthouse Montessori School is a co-education institution in the suburbs of Lagos state, Agungi-Lekki environs.</p>
                                       <p>We offer classes from foundation to elementary level (3 months – 11 years) using the Montessori method. Our toddlers are well cared for and we accept children between the ages of 3months to 10years.</p>
                                    <p>In the new session starting September 2021, our primary school will kick start, we are admitting pupils from age 5+. </p>
                                    <p>It is our core responsibility to raise a generation of children who will shine as light in the world, this starts from the first step into our school. We instill a balance of a well-educated child, raised and nurtured in the fear and love of God.</p>
                                    
                                    </div>
                                  
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>

         <section id="bt_bb_section6079315443824"  class="bt_bb_section bt_bb_bottom_spacing_medium bt_bb_layout_boxed_1500 bt_bb_vertical_align_top"  >
            <div class="bt_bb_port">
               <div class="bt_bb_cell">
                  <div class="bt_bb_cell_inner">
                   

                     <div class="bt_bb_row_wrapper">
                        <div  class="bt_bb_row" >
                           <div  class="bt_bb_column col-xl-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_padding_normal"  data-width="12" data-bt-override-class="{}">
                              <div class="bt_bb_column_content">
                                 <div class="bt_bb_column_content_inner">
                                    <header class="bt_bb_headline bt_bb_dash_none bt_bb_size_medium bt_bb_superheadline bt_bb_align_inherit" data-bt-override-class="{}">
                                       <h1 class="bt_bb_headline_tag"><span class="bt_bb_headline_superheadline"></span><span class="bt_bb_headline_content"><span>Gallery Preview</span></span></h1>
                                    </header>
                                    <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                                    <div class="bt_bb_slider bt_bb_height_half_screen bt_bb_show_dots_bottom bt_bb_multiple_slides">
                                       <div class="slick-slider"  data-slick='{ "lazyLoad": "progressive", "cssEase": "ease-out", "speed": "300", "adaptiveHeight": true, "dots": true, "prevArrow": "", "nextArrow": "","slidesToShow": 4,"autoplay": true, "autoplaySpeed": 2000, "responsive": [{ "breakpoint": 480, "settings": { "slidesToShow": 1, "slidesToScroll": 1 } },{ "breakpoint": 768, "settings": { "slidesToShow": 2, "slidesToScroll": 2 } },{ "breakpoint": 920, "settings": { "slidesToShow": 3, "slidesToScroll": 3 } }]}' >
                                          <div class="bt_bb_slider_item" style="background-image:url('slide/IMG-20210516-WA0087.jpg')" data-src-full="slide/IMG-20210516-WA0087.jpg"></div>
                                          <div class="bt_bb_slider_item" style="background-image:url('slide/IMG-20210516-WA0088.jpg')" data-src-full="slide/IMG-20210516-WA0088.jpg"></div>
                                          <div class="bt_bb_slider_item" style="background-image:url('slide/IMG-20210516-WA0089.jpg')" data-src-full="slide/IMG-20210516-WA0089.jpg"></div>
                                          <div class="bt_bb_slider_item" style="background-image:url('slide/IMG-20210516-WA0090.jpg')" data-src-full="slide/IMG-20210516-WA0090.jpg"></div>
                                          <div class="bt_bb_slider_item" style="background-image:url('slide/IMG-20210516-WA0093.jpg')" data-src-full="slide/IMG-20210516-WA0093.jpg"></div>
                                          <div class="bt_bb_slider_item" style="background-image:url('slide/IMG-20210516-WA0094.jpg')" data-src-full="slide/IMG-20210516-WA0094.jpg"></div>
                                          <div class="bt_bb_slider_item" style="background-image:url('slide/IMG-20210516-WA0101.jpg')" data-src-full="slide/IMG-20210516-WA0101.jpg"></div>
                                       </div>
                                    </div>
                                    <!--<div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>-->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>




            </div>
         </div>
         <!-- /boldthemes_content -->
      </div>
      <!-- /contentHolder -->
   </div>
   <!-- /contentWrap -->


  <?php  include("footer-top.php"); ?>
</div>
<!-- /pageWrap -->


<?php include("footer-2.php"); ?>