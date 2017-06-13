
/* * ********************************************************** */
/*  Generate link from block options  */
/* * ********************************************************* */

if (! function_exists('excite_general_link_for_shortcode')) :

    function excite_general_link_for_shortcode($atts) {
        $link_source = fw_akg('link/selected', $atts, '');
        if ('page' === $link_source) {
            $link = get_permalink(fw_akg('link/selected/page/link/0', $atts, ''));
        } else {
            $link = fw_akg('link/selected/url/link', $atts, '');
        }
        $target = fw_akg('link/target', $atts, '_self');
        $url['link'] = $link;
        $url['target'] = $target;

        return $url;
    }

endif;
