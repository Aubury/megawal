<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

 
Container::make( 'theme_options', __( 'Сдайдер банера' ) )
->set_page_parent( 'themes.php' ) 
->add_fields( array(
    
    Field::make( 'complex', 'slider_content', 'Слайдер, максимум 5 изображений' )->set_layout( 'tabbed-vertical' )->set_max( 5 )
	->add_fields( array(
        Field::make( 'image', 'photo', __( ' Photo' ) )->set_width( 30 ),
        Field::make( 'text', 'title', __( ' Альтернативный текст для изображения "Alt"' ) )->set_width( 70 ),
	) ),
    Field::make( 'rich_text', 'offer', __( ' Оффер' ) ),

) );


Container::make("post_meta", "Наши преимущества")
  // ->set_context('side')
  ->set_priority("high")
  ->show_on_template("templates/front-page.php")
  // video box
  ->add_fields( array(
    
    Field::make( 'complex', 'enefits_content', 'Блок "плитка"  максимум 20шт' )->set_layout( 'tabbed-horizontal' )->set_max( 20 )
	->add_fields( array(
        Field::make( 'image', 'icon', __( ' Иконка' ))->set_width( 10 ),
        Field::make( 'textarea', 'alt', __( ' "Alt" иконки' ))->set_width( 10 ),
        Field::make( 'textarea', 'title', __( ' Заголовок' ))->set_width( 30 ),
        Field::make( 'textarea', 'description', __( ' Описание' ))->set_width(50 ),
	) ),
    

) );
Container::make("post_meta", "Наши заказчики и партнеры")
  // ->set_context('side')
  ->set_priority("high")
  ->show_on_template("templates/front-page.php")
  // video box
  ->add_fields( array(
    Field::make( 'text', 'parthners_title', __( ' Заголовок блока' )),
    
    Field::make( 'complex', 'parthners_content', 'Блок "плитка"  максимум 50шт' )->set_layout( 'tabbed-horizontal' )->set_max( 50 )
	->add_fields( array(
        Field::make( 'image', 'icon', __( ' Иконка' ) )->set_width( 50 ),
        Field::make( 'textarea', 'alt', __( ' "Alt" иконки' ))->set_width( 50 )
	) ),
    

) );

Container::make("post_meta", "Виды офисных перегородок")
  // ->set_context('side')
  ->set_priority("high")
  ->show_on_template("templates/front-page.php")
  // video box
  ->add_fields( array(
    Field::make( 'text', 'partition_title', __( ' Заголовок Блока' )),
    Field::make( 'text', 'partition_title_small', __( ' Подзаголовок' )),
    
    Field::make( 'complex', 'partition', 'кнопка  максимум 10шт' )->set_layout( 'tabbed-horizontal' )->set_max( 10 )
	->add_fields( array(
        Field::make( 'textarea', 'title', __( ' Заголовок кнопки' ))->set_width( 15 ),
        Field::make( 'image', 'icon', __( ' Фоновое изображение' ) )->set_width( 10 ),
        Field::make( 'textarea', 'alt', __( ' "Alt" Фонового изображения' ))->set_width( 15 ),
        Field::make( 'rich_text', 'description', __( ' Описание' ))->set_width( 60 ),
	) ),
    

) );

Container::make( 'post_meta', __( 'Single project' ) )
    ->set_priority("high")
    ->show_on_template("templates/front-page.php")
    ->add_fields( array(
        Field::make( 'complex', 'slider_projects', 'Слайдер, максимум 35 изображений' )->set_layout( 'tabbed-vertical' )->set_max( 35 )
      ->add_fields( array(
          Field::make( 'complex', 'slider_projects_item', 'Слайдер, максимум 5 изображений' )->set_layout( 'tabbed-vertical' )->set_max( 5 )
              ->add_fields( array(
                  Field::make( 'image', 'photo', __( ' Photo' ) )->set_width( 50 ),
                  Field::make( 'text', 'alt', __( ' Альтернативный текст для изображения "Alt"' ) )->set_width( 50 ),
              ) ),
          Field::make( 'rich_text', 'display', __( ' Стили' ))->set_width(50),
          Field::make( 'rich_text', 'id', __( ' Индификатор' ))->set_width(50),
          Field::make( 'rich_text', 'description', __( ' Описание' ))->set_width(100),


      ))
    ));

Container::make( 'post_meta', __( 'Выполненные проекты - Главное фото' ) )
    ->set_priority("high")
    ->show_on_template("templates/front-page.php")
    ->add_fields( array(

        Field::make( 'complex', 'main_photo_projects', 'Слайдер, максимум 35 изображений' )->set_layout( 'tabbed-vertical' )->set_max( 35 )
            ->add_fields( array(
                Field::make( 'image', 'photo', __( ' Photo' ) )->set_width( 50 ),
                Field::make( 'text', 'alt', __( ' Альтернативный текст для изображения "Alt"' ) )->set_width( 50 ),
                Field::make( 'text', 'link', __( 'ID проекта' ) )->set_width( 50 ),
            ) ),
    ) );

  
