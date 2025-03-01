jQuery( function() {
    var youdaoTranslateKey = TRP_Field_Toggler();
    youdaoTranslateKey.init('.trp-translation-engine', '#trp-youdao-api-key', 'youdao_translate' );

    function TRP_show_hide_machine_translation_options(){
        if( jQuery( '#trp-machine-translation-enabled' ).val() != 'yes' )
            jQuery( '.trp-machine-translation-options tbody tr:not(:first-child)').hide()
        else
            jQuery( '.trp-machine-translation-options tbody tr:not(:first-child)').show()

        if( jQuery( '#trp-machine-translation-enabled' ).val() == 'yes' )
            jQuery('.trp-translation-engine:checked').trigger('change')
    }

    TRP_show_hide_machine_translation_options();

});