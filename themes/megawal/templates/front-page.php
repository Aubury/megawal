<?php
/*
Template Name: Main page
*/


 get_header();
  get_template_part( 'template-parts/content', 'page' );
 ?>
 
     <main id="primary" class="site-main">
     
  

<div class="benefits">
         <?php

         $data_arr = carbon_get_post_meta( $post->ID, 'enefits_content' );
         if ( ! empty( $data_arr ) ):
         foreach ( $data_arr as $cnt => $item ): 
            	echo '<div class="bro_item"><div id="diamond"></div>'.
		 wp_get_attachment_image( $item['icon'], 'post-thumbnail', true, array( 'alt' => $item['alt'],))
          .'<span class="bro_item_h2">' . 
           $item['title'] .
          '</span><p>' . $item['description']. '</p></div>';

            endforeach;
    endif;
?></div>
<!--  Выполненные проекты -->

<?php
 $slider_projects = carbon_get_post_meta( $post->ID, 'slider_projects' );
 $main_photo_projects = carbon_get_post_meta( $post->ID, 'main_photo_projects' );
 $num = 0;

 echo "<div id='projects'>";
echo   "<div class='projects_info'>
          <div id='main_carousel_projects'>";

 foreach ($slider_projects as $slide_item){
     if(!empty($slide_item)){
     $num++;
     echo "<div id='".$slide_item['id']."' class='slider_projects project' style=' display:". $slide_item['display'] . "'>
         <div class='slider_description'>" . $slide_item['description'] . "</div>
            <div class='slider_img_container project_".$num."'>
                 <div class='slider_wrapper'>";

         foreach ( $slide_item['slider_projects_item'] as $item){

                 if( ! $item[ 'photo' ] ) {
                     continue;
                 }
                        echo '<div class="slider_item">'.
                               wp_get_attachment_image( $item['photo'],
                                 'medium', '', array( 'alt' => $item['alt'],));
                        echo '</div>';

                 }

         echo  "</div>
                 <a class='slider_control slider_control_left slider_control_show' href='#' role='button'></a>
		         <a class='slider_control slider_control_right slider_control_show' href='#' role='button'></a>
             </div>
         </div>";

     }
}
  echo "</div><div id='icons_projects'>";
 foreach ($main_photo_projects as $main_photo_item){
     if(!empty($main_photo_item)){
         echo "<div class='main_photo_project' role='button'
                onclick='open_project(". $main_photo_item['link'] .", this);'>"
             . wp_get_attachment_image($main_photo_item['photo'], 'post-thumbnail', '', array( 'alt' => $main_photo_item['alt'],))
             . "</div>";
     }
 }
   echo "</div></div></div>";

?>
<!-- Наши заказчики и партнеры -->
<div class="parthners">
<?php
    $part_arr = carbon_get_post_meta( $post->ID, 'parthners_content' );
    echo '<h2 class="partners_h2">' . blue_title(carbon_get_the_post_meta("parthners_title")) . '</h2><div class="partners_all ">';
   
    if ( ! empty( $part_arr ) ):
        $count=0;
    foreach ( $part_arr as $cnt => $item ): 
        $count++;
         if($count%2==1){
             echo '<div class="partners_item ">';
             }else{
                 echo '<div class="partners_item black_n">';
                }
         echo  wp_get_attachment_image( $item['icon'], 'post-thumbnail', true, array( 'alt' => $item['alt'],))
     .'</div>';

       endforeach;
       echo '</div>';
endif;


// Виды офисных перегородок

    $part_arr = carbon_get_post_meta( $post->ID, 'partition' );
    
    if ( ! empty( $part_arr ) ):
        echo '<h2 class="partners_h2">' . blue_title(carbon_get_the_post_meta("title")) . '</h2><div class="partition ">'. 
        '<div class="tabs">
        <nav class="tabs__items">';
       $tabcount=0;
       
    foreach ( $part_arr as $cnt => $item ): 
         echo  '<a href="#tab_'.$tabcount++.'" class="tabs__item"><span>' . $item['title']. '</span></a>'; 
       endforeach;
        echo '
        </nav>
        <div class="tabs__body">';
        $tabcount=0;
    foreach ( $part_arr as $cnt => $item ): 
         echo  '<div id="tab_'. $tabcount++ .'" class="tabs__block">' .wp_get_attachment_image( $item['icon'], 'post-thumbnail', true, array( 'alt' => $item['alt'],)) .
           carbon_get_the_post_meta("description") . '</div>';
       endforeach;
       echo '</div></div>';
endif;
   ?>
</div>

</main>
 <?php
 get_sidebar();
 get_footer();
 

// title
// icon
// alt
// carbon_get_the_post_meta("description") .

  
     
             
