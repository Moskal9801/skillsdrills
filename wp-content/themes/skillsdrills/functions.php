<?php
	add_action( 'wp_enqueue_scripts', function () {
		wp_enqueue_style( 'main-style', get_stylesheet_uri() );
		wp_enqueue_script( 'main-script', get_template_directory_uri() . '/main.js' );
	} );
	add_action( 'wp_head', function () {
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	} );
	add_filter( 'excerpt_length', function () {
		return 20;
	} );
	add_filter( 'excerpt_more', function ( $more ) {
		return '...';
	} );
	add_theme_support( 'post-thumbnails' );

	add_action( 'admin_head', function () {
		wp_enqueue_script( 'cat-script', get_template_directory_uri() . '/cat.js' );
	} );

	add_filter( 'login_headerurl', function () {
		return 'https://01cat.ru';
	} );

	add_action( 'login_header', function () { ?>
        <style>
			#login h1 a {
				background: url("logo.png") center top no-repeat !important;
				width:      111px !important;
				height:     180px !important;
			}
        </style>
	<?php } );
	add_filter( 'admin_footer_text', function () {
		return '<b>Сделано:</b>
			<a href="https://01cat.ru/" target="_blank">Двоичный кот</a>
			<br>
			<b>Техническая поддержка:</b> тел. <a href="tel:+79145416354">+7 (914) 541-63-54</a>, email: <a href="mailto:hello@01cat.ru">hello@01cat.ru</a>';
	} );

	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page( [
			'page_title' => 'Контактные данные',
			'menu_title' => 'Настройки сайта',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false
		] );
	}

	function is_cur_cat( $id ) {
		$i = get_the_category();
		if ( $i ) {
			$j = $i[ 0 ]->cat_ID;

			return ( $id == $j );
		}

		return false;
	}

	function is_cur( $id ) {
		$cur = get_the_ID();

		return ( $id == $cur );
	}

	function clearPhone( $phone ) {
		$to_replace = [ ' ', '-', '(', ')', '+' ];

		return str_replace( $to_replace, '', $phone );
	}

	// Отправка заявок в телеграм
	function wpspec_send_message_to_telegram( $contact_form ) {
		$subject = $contact_form->prop( 'mail' )[ 'subject' ];
		$body    = $contact_form->prop( 'mail' )[ 'body' ];

		$text = $subject . "\n\n";
		$text .= wpcf7_mail_replace_tags( $body );

        $text = str_replace( '&', 'and', $text );

		$open = fopen( 'wp-content/themes/skillsdrills/parts/body.php', 'w' );

		fwrite( $open, $text );
		fclose( $open );

		$id    = $contact_form->id();
		$token = '';
		if ( $id == 8 ) {
			$token = ""; //ТОКЕН ЧАТА ТГ
		} else if ( $id == 13 ) {
			$token = ""; //ТОКЕН ЧАТА ТГ
		}

		$chats = [
			"", //ID чата ТГ
		];
		foreach ( $chats as $chat_id ) {
			wp_remote_get( "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}" );
		}
	}

	add_action( 'wpcf7_mail_sent', 'wpspec_send_message_to_telegram' );