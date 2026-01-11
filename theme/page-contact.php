<?php 
	if(function_exists('wpcf7_enqueue_scripts')){
        wpcf7_enqueue_scripts();
    }
    if(function_exists( 'wpcf7_enqueue_styles' )){
        wpcf7_enqueue_styles();
    }
    get_header();
?>
<main class="main">
    <h2 class="h2">お問い合わせ</h2>
    <strong>※稀に迷惑メールフォルダにメールが届く場合がありますがご容赦ください。</strong>
    <strong>五月荘メールアドレス(<a href="mailto:satukiso@proton.me" title="五月荘のお問い合わせメールアドレス">satukiso@proton.me</a>)からご返信いたします。</strong>
    <strong>送信後2～3日経過しても返信がない場合はお電話(<a href="tel:xxxxxxxxxx" title="五月荘のお問い合わせ電話番号">xxx-xxx-xxxx</a>)にてご連絡くださいますよう、お願い申し上げます。</strong>
    <?=do_shortcode('[contact-form-7 id="19efe2c" title="五月荘 | お問い合わせフォーム"]');?>
</main>
<?php get_footer();?>