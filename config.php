<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Listen on event set up theme.
        'onSetTheme' => function($theme)
        {

        },

        // Listen on event set up layout.
        'onSetLayout' => function($theme)
        {

        },

        // Listen on event before render theme.
        'beforeRenderTheme' => function($theme)
        {
            // You may use this event to set up your assets.
            //$theme->asset()->usePath()->add('name', 'test.js');
        },

        // Listen on event before render layout.
        'beforeRenderLayout' => function($theme)
        {

        },

        // Listen on event before render theme and layout
        'beforeRenderThemeWithLayout' => function($theme)
        {

        }

    ),
    'num_display' => array(
        'home_product'=>6,
        'main_product'=>8,
        'related_product'=>3,
        'latest_product'=>4,
        'bestseller'=>4,
        'featured'=>4,
        'blog'=>6,
        'testimonial'=>4,    
    ),
    'banner' => true,
    'themesColor' => array(
        'type'=> 'false',
        'warnaDef'=>'main-color:#724606',
        'color'=>false
        ),
    'layout' => false,

);