<?php
add_filter('the_content', 'ffl_add_footer');
function ffl_add_footer($content)
{
    global $ffl_options;
    $footer_output = '<hr>';
    $footer_output .= '<div class="footer_content">';
    $footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me one <a style="color:'.$ffl_options['link_color'].'"target="_blank" href="'.$ffl_options['facebook_url'].'">Facebook</a>';
    $footer_output .= '</div>';

    $enable = false;
    if(isset($ffl_options['enable']))
    {
        $enable = $ffl_options['enable'];
    }

    $show_on_feed = false;
    if(isset($ffl_options['show_on_feed']))
    {
        $show_on_feed = $ffl_options['show_on_feed'];
    }

    if($enable)
    {
        if(is_single() || is_home() && $show_on_feed)
        {
            return $content . $footer_output;
        }
        else if(is_single() && $show_on_feed)
        {
            return $content . $footer_output;
        }
    }
    return $content;
}
?>