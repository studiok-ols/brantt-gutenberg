<?php
class BranttBase
{
    public static function afterSetupTheme(): void
    {
        add_theme_support('responsive-embeds');
        add_theme_support('admin-bar',['callback' => ['BranttBase','adminBarStyle']] );
    }

    public static function adminBarStyle(): void
    {
//	    show_admin_bar(false);
        $style = '<style type="text/css">';
        $style .= '#wpadminbar { background-color: #00000066; }';
        $style .= '#wpadminbar:hover { background-color: #000000ff; }';
        $style .= '</style>';
        echo $style;
    }

	public static function allowedBlockTypes( $allowed_blocks, $editor_context ): array
	{
		$allowed_blocks = [
			'create-block/subtitle',
			'create-block/contents',
			'create-block/all-posts',
			'create-block/cta',
		];
		return $allowed_blocks;
	}

	public static function wpEnqueueScripts(): void
	{
		$version = wp_get_theme()->get('Version');
		$version = uniqid( $version);
		wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/css/main.css', false, $version );
	}

	public static function addFont(): void
	{
		$font = '<link rel="preconnect" href="https://fonts.googleapis.com">';
		$font .= '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
		$font .= '<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">';
		$font .= '<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">';
		echo $font;
	}

}



