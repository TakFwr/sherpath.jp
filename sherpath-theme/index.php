<?php
	/**
	 * Template Nmae: トップページ
	 */
	get_header(); ?>

<div class="mv">
  <div class="mv_inner">
    <div class="images__wrap">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
</div>

<section id="mission" class="top__section">
  <div class="section__visual">MISSION</div>
  <div class="mission__contents">
    <div class="mission__text">
      <h2>もっと自由に、自分のストーリーを</h2>
      <p>
        日本では、同じ仕事をしているにもかかわらず、女性の平均給与は男性よりも24.8%低く、企業の管理職に占める女性の割合は12.7%と非常に低い状況があります。</p>
      <p>
        こうしたジェンダーギャップの背後には、根強く存在している無意識の偏見や性別による役割分担があります。シェルパスではこれを「謎のルール」と呼び、女性の人生に「制限」を引き起こしていると考えています。</p>
      <p>
        例えば、出産とキャリア構築がトレードオフになる「キャリアにおける制約」、将来が不透明で大きな決断を躊躇する「プライベートにおける制約」、性別間の給与格差による「お金における制約」などが「制約」の一例です。</p>
      <p>シェルパスは人生における「制約」を解消し、自分らしいストーリーを描くことに伴走します。</p>
    </div>
    <div class="mission__image">
      <div class="contents__image left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mission_3x.png" width="640" height="520"
             alt="MISSION">
      </div>
    </div>
  </div>
</section>

<section id="about" class="top__section">
  <div class="about__wrap">
    <div class="section__visual">ABOUT US</div>
    <div class="about__contents">
      <h2>シェルパスに<br class="pc-none">ついて</h2>
      <p>会社設立の経緯、メンバー、会社概要についてご紹介しています。</p>
      <a class="arrow__link" href="<?php echo esc_url(home_url('/about')); ?>" class="btn">VIEW MORE</a>
    </div>
  </div>
</section>

<section id="what" class="top__section">
  <div class="section__visual">WHAT WE DO</div>
  <div class="what__contents">
    <div class="what__text">
      <h2>事業内容</h2>
      <p>シェルパスはミッションに基づき、女性に特化したビジネスを展開します。</p>
      <p>
        人生の前向きな転機となることが多い「自宅購入」に伴走する「不動産に関するサービス」、キャリアプランとプライベートの計画のトレードオフを解消し、キャリア構築の選択肢を拡げる「卵子凍結に関わる事業」も展開します。</p>
      <p>
        人生の重要な要素である「キャリア」「プライベート」「お金」に関して、個々の女性にとって最良な選択に伴走する事業を展開します。</p>
    </div>
    <div class="what__image contents__image right">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/what_3x.png" width="640" height="520"
           alt="WHAT WE DO">
    </div>
  </div>
</section>

<section id="services">
  <div class="service01">
    <div class="service__contents">
      <div class="service__img__pc">
        <div class="contents__image left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service01_3x.png" width="640" height="520"
               alt="SERVICE">
        </div>
      </div>
      <div class="service__item">
        <div class="service__title">REAL ESTATE</div>
        <div class="service__text">
          <h3>女性特化の不動産サービス</h3>
          <p>「ライフプランとキャリアの先行きが不透明で本当に買っていいのかわからない」
            「不動産会社に軽くあしらわれた経験がある」</p>
          <p>女性の自宅購入は増えている一方で、女性が自宅を購入する際に多くの困りごとが存在しています。</p>
          <p>
            シェルパスはそのような課題をこれまでの事業経験・ユーザーインタビューを通じて深く理解し、お客様の納得できる最適な選択に寄り添い、短期的な利益追求をすることなく女性がより良い人生を実現するための「家選びのシェルパ」として伴走します。</p>
        </div>
      </div>
    </div>
    <div class="service__links">
      <!-- TODO:リリース初期はコメントアウトで非表示 -->
      <!--
        <div class="bracket__box">
          <div class="bracket__box__title">不動産サービス</div>
          <p>女性に特化した不動産仲介サービスを提供しています。 短期的な利益追求ではなく、お客様の納得できる最適な選択に寄り添い、中立的な提案を行います。</p>
          <a class="arrow__link" target="_blank" href="<?php //echo esc_url(home_url('/')); ?>">SERVICE SITE</a>
        </div>
        -->
      <div class="bracket__box">
        <div class="bracket__box__title">不動産相談サービス</div>
        <p>不動産購入に関する女性特有の疑問や悩みについて、匿名で相談できるオンラインサービスを提供しています。</p>
        <a class="arrow__link" target="_blank" href="<?php echo esc_url(home_url('/')); ?>">SERVICE SITE</a>
      </div>
    </div>

    <div class="service__img__sp">
      <div class="contents__image left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service01_3x.png" width="640" height="520"
             alt="SERVICE">
      </div>
    </div>
  </div>

  <div class="service02">
    <div class="service__contents">
      <div class="service__img__pc contents__image left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service02_3x.jpg" width="640" height="520"
             alt="SERVICE">
      </div>
      <div class="service__item">
        <div class="service__title">REPRODUCTIVE MEDICAL CARE</div>
        <div class="service__text">
          <h3>卵子凍結に関わる事業</h3>
          <p>卵子凍結は、キャリアプランと出産計画のトレードオフを解消し、女性の人生の選択肢を広げる手段となり得ます。</p>
          <p>
            しかし、卵子凍結を具体的に検討する際には卵子凍結をするべきか、自分に適した進め方、どのクリニックで行うのが良いかを判断するための情報を入手しづらいのが現状です。</p>
          <p>今後、これらの課題を解決するサービスを展開する予定です。</p>
          <p style="text-align: center; color: #6A6458; margin-top: 40px">Coming Soon</p>
        </div>
      </div>
    </div>
    <div class="service__img__sp contents__image left">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service02_3x.jpg" width="640" height="520"
           alt="SERVICE">
    </div>
  </div>
</section>

<section id="note">
  <div class="note__title">note</div>
  <div class="note__contents">
    <div class="note__item">
      <div class="note__item__title">noteについて</div>
      <div class="note__item__text">
        <p>
          会社の創業ストーリーや私たちの想い、役立つコンテンツを発信しています。私たちシェルパスについて知っていただければ幸いです。</p>
        <a class="arrow__link" href="<?php echo esc_url(home_url('/')); ?>">note</a>
      </div>
    </div>
</section>

<section id="news" class="top__section">
  <div class="section__visual">NEWS</div>
  <div class="news__contents">
    <div class="news__item">
      <div class="news__title">シェルパスに関するお知らせ</div>
      <ul class="news__list">
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <div class="news__date">2024.10.05</div>
            <div class="news__text">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </div>
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <div class="news__date">2024.10.05</div>
            <div class="news__text">テキストテキストテキストテキストテキストテキスト</div>
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <div class="news__date">2024.10.05</div>
            <div class="news__text">テキストテキストテキストテキストテキストテキスト</div>
          </a>
        </li>
      </ul>
    </div>
    <div><a class="arrow__link" href="<?php echo esc_url(home_url('/')); ?>">VIEW MORE</a></div>
</section>

<section id="contact" class="bottom">
  <div class="bottom__contents">
    <div class="bottom__title"><span>CONTACT</span>シェルパスへのお問い合わせ</div>
    <p>各種お問合せ（取材・提携・採用・その他）はこちらからお願いします。</p>
    <a class="arrow__link" href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
  </div>
</section>

<?php get_footer(); ?>
