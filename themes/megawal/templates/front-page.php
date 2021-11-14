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

  
     
             
