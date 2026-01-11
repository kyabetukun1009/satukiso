<?php get_header();?>
<main class="main">
    <h2 class="h2">ご利用案内</h2>
    <p>五月荘でのご滞在を安心してお楽しみいただくため、チェックイン・チェックアウトの流れ、注意事項、緊急時の対応など、事前に知っておいていただきたい内容をまとめています。ご到着前に一度ご確認ください。</p>
    <section class="section">
        <h3 class="h3">1.入室・退室</h3>
        <div class="card">
            <div class="textList">
                <strong class="side">ご宿泊について</strong>
                <ul class="inOut">
                    <li><strong>チェックイン15:00(PM) ～</strong></li>
                    <li><strong>チェックアウト ～ 10:00(AM)</strong></li>
                </ul>
                <strong class="side">ご注意</strong>
                <ul class="attention">
                    <li><p>※予約チェックイン時間の2時間を超えての無連絡については、<strong>当日キャンセル扱い</strong>となる場合がございますので、ご了承ください</p></li>
                    <li><p>※チェックアウト時間は<strong>15時まで</strong>となっております。時間を大幅に過ぎた場合は、追加の清掃費用や延長料金をご請求させていただく場合がございます。</p></li>
                </ul>
                <strong class="side">キャンセルについて</strong>
                <ul class="attention">
                    <li><p>※キャンセルポリシー：キャンセル料は以下の通り頂戴いたします。</p></li>
                    <li><p>※連絡なしの不泊の場合：宿泊料金の100%</p></li>
                    <li><p>※宿泊当日～3日前までのキャンセルの場合：宿泊料金の80%</p></li>
                </ul>
            </div>
            <div class="image"><img class="lazy" src="<?=esc_url(get_theme_file_uri('/img/dammy2.png'))?>" data-src="<?=esc_url(get_theme_file_uri('/img/checkin.png'))?>" alt="入室・退室の際の時間や注意点、キャンセルについて"></div>
        </div>
    </section>
        
    <section class="section">
        <h3 class="h3">2.入室の流れ</h3>
        <ul class="key">
            <li><a href="<?=esc_url(get_theme_file_uri('/img/key1.png'))?>" target="_blank" title="五月荘ドアの場所"><img class="key-lazy" src="<?=esc_url(get_theme_file_uri('/img/dammy2.png'))?>" data-src="<?=esc_url(get_theme_file_uri('/img/key1.png'))?>" alt="五月荘ドアの場所"><strong>1.建物を正面にして左上の部屋に向かいます。(よく見るとドアの色が違う部屋)</strong></a></li>
            <li><a href="<?=esc_url(get_theme_file_uri('/img/key2.png'))?>" target="_blank" title="五月荘キーボックスの置き場所"><img class="key-lazy" src="<?=esc_url(get_theme_file_uri('/img/dammy2.png'))?>" data-src="<?=esc_url(get_theme_file_uri('/img/key2.png'))?>" alt="五月荘キーボックスの置き場所"><strong>2.ドアの左側にキーボックスがあるので予めお伝えした番号にダイヤルを合わせる。</strong></a></li>
            <li><a href="<?=esc_url(get_theme_file_uri('/img/key3.png'))?>" target="_blank" title="五月荘キーボックスの開け方"><img class="key-lazy" src="<?=esc_url(get_theme_file_uri('/img/dammy2.png'))?>" data-src="<?=esc_url(get_theme_file_uri('/img/key3.png'))?>" alt="五月荘キーボックスの開け方"><strong>3.手前に強めに引くとロックが外れるのでその後表側のふたを開ける(※少し硬い場合があります)</strong></a></li>
            <li><a href="<?=esc_url(get_theme_file_uri('/img/key4.png'))?>" target="_blank" title="五月荘鍵の使い方"><img class="key-lazy" src="<?=esc_url(get_theme_file_uri('/img/dammy2.png'))?>" data-src="<?=esc_url(get_theme_file_uri('/img/key4.png'))?>" alt="五月荘鍵の使い方"><strong>4.鍵を差し込み左に回すとドアが開きます。(※キーボックスは入室後元の状態に戻してください)</strong></a></li>
        </ul>
    </section>
    
    <section class="section">
        <h3 class="h3">3.注意・禁止事項</h3>
        <div class="card2">
            <div class="image"><img class="lazy" src="<?=esc_url(get_theme_file_uri('/img/dammy2.png'))?>" data-src="<?=esc_url(get_theme_file_uri('/img/attention.png'))?>" alt="五月荘利用時の注意点と禁止事項"></div>
            <div class="textList">
                <strong class="side">騒音について</strong>
                <ul class="attention">
                    <li><p>近隣にお住まいの方がいらっしゃいますので、夜間・早朝はお静かにお過ごしください。ご協力お願いします</p></li>
                </ul>
                <strong class="side">禁煙・喫煙について</strong>
                <ul class="attention">
                    <li><p>建物内は電子タバコを含め<strong>全面禁煙</strong>となっております。ご了承ください</p></li>
                </ul>
                <strong class="side">ペットについて</strong>
                <ul class="attention">
                    <li><p>ペットの同伴・お持ち込みはご遠慮いただいております。あらかじめご了承ください</p></li>
                </ul>
                <strong class="side">備品・設備の取り扱いについて</strong>
                <ul class="attention">
                    <li><p> 破損や汚損が確認された場合、修理費等をご請求させていただくことがあります。</p></li>
                </ul>
                <strong class="side">ゴミ・持ち込みについて</strong>
                <ul class="attention">
                    <li><p>ゴミは室内にまとめて置いていただきますようお願いいたします。危険物や強い臭いのするものの持ち込みはご遠慮ください。</p></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section">
        <h3 class="h3">4.緊急時について</h3>
        <div class="card">
            <div class="textList">
                <strong class="side">避難経路について</strong>
                <ul class="attention">
                    <li><p>1.避難経路図は、入口ドアの反対側の壁面に掲示されています。（室内から外へ出る際、正面に見える位置です）</p></li>
                    <li><p>2.掲示されている避難経路図をご確認のうえ、落ち着いて建物の外へ避難してください。</p></li>
                    <li><p>※無理に荷物を持ち出そうとせず、安全を最優先してください。</p></li>
                </ul>
                <strong class="side">消火器について</strong>
                <ul class="attention">
                    <li><p>1.消火器は、入口通路のドア横に設置されています。</p></li>
                    <li>2.初期消火が可能な場合のみ、消火器をご使用ください</li>
                    <li>※少しでも危険を感じた場合はすぐに避難し、必要に応じて消防(119)へご連絡ください</li>
                </ul>
                <strong class="side">停電・電気が使えない場合</strong>
                <ul class="attention">
                    <li><p>1.ブレーカーは、入口ドアの反対側の壁面・右上に設置されています。</p></li>
                    <li><p>2.ブレーカーが落ちていないかご確認ください</p></li>
                    <li><p>※復旧しない場合は、無理に操作せずご連絡ください</p></li>
                </ul>
            </div>
            <div class="image"><img class="lazy" src="<?=esc_url(get_theme_file_uri('/img/dammy2.png'))?>" data-src="<?=esc_url(get_theme_file_uri('/img/emergency.png'))?>" alt="停電や火事など緊急事態時の避難経路図や道具、対応について"></div>
        </div>
    </section>
    <div class="number">
        <p>万が一、場所が分からない場合やお困りのことがございましたらお気軽に下記の電話番号までご連絡ください。</p>
        <a href="tel:xxxxxxxxxx" title="五月荘にお問い合わせ電話をかける">xxx-xxx-xxxx</a>
    </div>
</main>
<?php get_footer();?>