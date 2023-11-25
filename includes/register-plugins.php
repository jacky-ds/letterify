<?php

function ltf_register_plugins() {
    $plugins = [
        [ 'name' => 'Regenerate Thumbnails', 'slug' => 'regenerate-thumbnails', 'required' => false ],
        [ 'name' => 'Letterify Plus', 'slug' => 'letterify-plus', 'required' => true, 'source' => get_template_directory().'/plugins/letterify-plus.zip']
    ];
    $config = [ 'id' => 'letterify', 'menu' => 'tgmpa-install-plugins', 'parent_slug' => 'themes.php', 'capability' => 'edit_theme_options', 'has_notices' => true, 'dismissable' => true ];
    tgmpa($plugins, $config);
}