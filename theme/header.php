<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <meta name="theme-color" content="#0f0f0f">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="msapplication-navbutton-color" content="#0f0f0f">
</head>

<body class="body" <?php body_class(); ?>>
<header class="header">
    <ul class="spBtnList">
        <li><a href="https://reserva.be/satukiso" target="_blank" rel="nofollow" title="五月荘をオンラインで宿泊予約する"><strong><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-week"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M7 14h.013" /><path d="M10.01 14h.005" /><path d="M13.01 14h.005" /><path d="M16.015 14h.005" /><path d="M13.015 17h.005" /><path d="M7.01 17h.005" /><path d="M10.01 17h.005" /></svg>オンライン予約</strong></a></li>
		<li><a href="tel:xxxxxxxxxx" title="五月荘を電話で宿泊予約する"><strong><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone-outgoing"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2c-8.072 -.49 -14.51 -6.928 -15 -15a2 2 0 0 1 2 -2" /><path d="M15 5h6" /><path d="M18.5 7.5l2.5 -2.5l-2.5 -2.5" /></svg>予約</strong></a></li>
		<li><a href="mailto:xxxxx@gmail.com" title="五月荘をメールで宿泊予約する"><strong><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail-forward"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" /><path d="M3 6l9 6l9 -6" /><path d="M15 18h6" /><path d="M18 15l3 3l-3 3" /></svg>予約</strong></a></li>
    </ul>
    <ul class="subMenu">
        <li><a href="<?=esc_url(home_url('/faq/'))?>" title="よくある質問ページに移動する">よくある質問</a></li>
        <li><a href="<?=esc_url(home_url('/voice/'))?>" title="お客様の声ページに移動する">お客様の声</a></li>
    </ul>
	<div class="menu">
		<h1 class="h1"><a href="<?=esc_url(home_url('/'));?>" title="名古屋・千種区・東山の古民家民泊 五月荘"><img src="<?=esc_url(get_theme_file_uri('/img/logo.png'));?>" alt="名古屋・千種区・東山の古民家民泊 五月荘"></a></h1>
		<ul class="btnList">
			<li><a href="https://reserva.be/satukiso" target="_blank" rel="nofollow" title="五月荘をオンラインで宿泊予約する"><strong>オンライン予約</strong></a></li>
			<li><a href="tel:xxxxxxxxxx" title="五月荘を電話で宿泊予約する"><strong>電話予約</strong></a></li>
			<li><a href="mailto:xxxxx@gmail.com" title="五月荘をメールで宿泊予約する"><strong>メール予約</strong></a></li>
            <li class="menuIcon"><button class="menuBtn" type="button" onclick="menu(this)" title="ナビゲーションリストを開く" aria-label="ナビゲーションリストを開く"><i></i><i></i><i></i></button><span>MENU</span></li>
        </ul>
	</div>
	<nav>
		<ul class="navList">
			<li><a href="<?=esc_url(home_url('/'))?>" title="トップページへ移動する">トップ<span>TOP</span></a></li>
			<li><a href="<?=esc_url(home_url('/room/'))?>" title="物件・部屋紹介ページへ移動する">物件・部屋紹介<span>ROOM</span></a></li>
			<li><a href="<?=esc_url(home_url('/guide/'))?>" title="利用案内ページへ移動する">利用案内<span>GUIDE</span></a></li>
			<li><a href="<?=esc_url(home_url('/access/'))?>" title="アクセスページへ移動する">アクセス<span>ACCESS</span></a></li>
			<li><a href="<?=esc_url(home_url('/contact/'))?>" title="お問い合わせページへ移動する">お問い合わせ<span>CONTACT</span></a></li>
            <li class="onlySp"><a href="<?=esc_url(home_url('/faq'))?>" title="よくある質問ページへ移動する">よくある質問<span>FAQ</span></a></li>
            <li class="onlySp"><a href="<?=esc_url(home_url('/voice'))?>" title="お客様の声ページに移動する">お客様の声<span>VOICE</span></a></li>
            <li><button class="langBtn" title="言語を変更する" aria-label="言語を変更する"><svg class="langSvg" xmlns="http://www.w3.org/2000/svg" width="40" height="auto" x="0px" y="0px" viewBox="0 0 600 400" enable-background="new 0 0 600 400"><rect y="0.00051" fill="#FFFFFF" width="600" height="399.999481"/><ellipse fill="#FF0000" cx="299.999756" cy="200.000351" rx="103.466553" ry="103.089447"/></svg><span class="text-en">LANGUAGE</span></button></li>
		</ul>
	</nav>
</header>
