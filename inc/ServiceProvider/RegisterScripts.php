<?php

namespace hollisho\translatepress\translate\youdao\inc\ServiceProvider;

use hollisho\translatepress\translate\youdao\inc\Base\Common;
use hollisho\translatepress\translate\youdao\inc\Base\ServiceProviderInterface;

class RegisterScripts extends Common implements ServiceProviderInterface
{

    public function register()
    {
        add_action( 'admin_enqueue_scripts', [ $this, 'admin_enqueue_scripts' ], 10, 1 );
    }

    function admin_enqueue_scripts($hook)
    {
        if ($hook == 'admin_page_trp_machine_translation') {
            wp_enqueue_script('trp-settings-script-youdao',
            $this->plugin_url . 'assets/js/trp-back-end-script-youdao.js',
            ['trp-settings-script'], Common::HO_PLUGIN_VERSION, true);
        }
        
    }
}