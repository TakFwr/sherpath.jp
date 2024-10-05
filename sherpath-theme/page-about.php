<?php
	/**
	 * Template Name: ABOUT US
	 */
	get_header(); ?>


  <main class="about">

    <div class="page__visual">
      <h1>シェルパスについて<span>ABOUT SHERPATH</span></h1>
      <div>ABOUT SHERPATH</div>
    </div>

    <div class="page__text">
      <p>
        私たちシェルパスの創業者たちには、それぞれ娘がいます。彼女たちの将来を考える中で、無意識のジェンダーバイアスや性別による役割分担が彼女たちの人生の選択肢を狭める可能性があると感じたことが、シェルパスを立ち上げるきっかけとなりました。</p>
      <p>
        また、私たちのこれまでのキャリアを通じて、女性が活躍する組織では意思決定が柔軟で、課題解決の精度も高いことを実感し、女性の活躍がいかに重要かも強く認識しています。</p>
      <p>
        さらに、不動産事業で女性顧客と接する中で、男性には見えにくい悩みや諦めを感じることが多くありました。私たちはこれらの経験を踏まえ、女性が社会で自由な選択肢を持って生きることに伴走するサービスを提供します。</p>
    </div>

    <div id="services">
      <div class="service01">
        <div class="service__contents">
          <div class="service__img__pc">
            <div class="contents__image left">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mission_3x.png" width="640" height="520"
                   alt="MISSION">
            </div>
          </div>
          <div class="service__item">
            <div class="service__title">MISSION</div>
            <div class="service__text">
              <h3>もっと自由に、<br class="pc-none">自分のストーリーを</h3>
              <p>「世間には「根拠のない謎のルール」があります。<br>
                性別役割分担の偏り、ジェンダーバイアスと表現されることもあり、人生に制約をもたらしています。</p>
              <p>誰もが謎のルールに縛られることなく、もっと自由に、自分のストーリーを描く社会に。</p>
            </div>
          </div>
        </div>
        <div class="service__img__sp">
          <div class="contents__image left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mission_3x.png" width="640" height="520"
                 alt="MISSION">
          </div>
        </div>
      </div>
    </div>

    <div class="about__logo">
      <div class="about__logo__inner">
        <div class="about__logo__title"><span>SHERPATH</span>会社名シェルパスの由来</div>
        <div class="about__logo__text"><p>
            私たちは、一人ひとりが自分らしく生きることを応援するため<br>それぞれの人生（HER PATH）に伴走するシェルパ（SHERPA）として<br>社名を「SHERPATH」と名付けました。
          </p></div>
      </div>
    </div>

    <div class="member">
      <div class="member__inner">
        <div class="about-page__title">
          <h2><span>MEMBER</span>創業メンバー</h2>
        </div>
        <div class="member__lists">
          <ul class="member__list">
            <li>
              <div class="member__list__img"><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/member1.png" width="180" height="180"
                  alt="新井 豪一郎"></div>
              <div class="member__list__name"><span>代表取締役</span>新井 豪一郎</div>
              <div class="member__list__text">
                <p>イギリス、オーストラリア、日本育ち。
                  1997年NTT入社後、戦略系コンサルティングファームのStrategy&を経て、株式会社星野リゾートにてスキー場事業責任者およびスキー場再生ジョイントベンチャーの取締役COO。</p>
                <p>
                  2010年に株式会社CLEARNOTE（旧アルクテラス）を創業し、ノート共有アプリ「Clearnote」を日本、台湾、タイ、インドネシアで展開。各国で最もユーザー数の多い学習アプリに。国籍、性別、性別マイノリティも含むダイバーシティのある組織づくりを実施し、組織のDE&Iの重要性を認識する。</p>
                <P>CLEARNOTE社をコクヨ株式会社に売却後、DNX
                  Venturesでのスタートアップ投資を経て、娘がより活躍できる社会を築くためにシェルパスを共同創業。</P>
                <p>1997年慶應義塾大学　経済学部卒業<br>
                  2003年慶應義塾大学大学院　経営管理研究課修了<br>
                  情報経営イノベーション専門職大学　客員教授</p>
              </div>
<!-- TODO: リース初期はコメントアウトで非表示 -->
<!--
              <div class="member__link">
                <a class="arrow__link" href="<?php // echo esc_url(home_url('/about')); ?>">VIEW MORE</a>
              </div>
-->
            </li>
<!-- TODO: リース初期はコメントアウトで非表示 -->
<!-- 福永さんブロック開始
            <li>
              <div class="member__list__img"><img
                  src="<?php // echo get_template_directory_uri(); ?>/assets/img/member2.png" width="180" height="180"
                  alt="福永 夕太"></div>
              <div class="member__list__name"><span>取締役</span>福永 夕太</div>
              <div class="member__list__text">
                <p>
                  2004年にスルガ銀行に新卒入行。東京支店にて法人融資・資産運用・住宅ローンに従事。</p>
                <p>2008年に南青山にて青山物産を共同創業し不動産仲介・リノベ・賃貸管理・買取再販など総合的に不動産ビジネスを展開。同時期、写真家らと共に二子玉川にAPART GALLERYを創業し共同館長を経験。</p>
                <P>
                  不動産会社退任後、Ralsnet（不動産ポータルサイト事業）に取締役副社長として就任し、国内不動産会社に対してコンサルティングを行う。</P>
                <p>
                  退任後、約1年間キャリアブレイクの傍ら主夫業に専念し、性別役割分担やアンコンシャスバイアスについて考えるようになる。その後、娘がより活躍できる社会を築くためにシェルパスを共同創業。</p>
                <p>◆保有資格◆<br>CPM（米国不動産経営管理士）・宅地建物取引士・ファイナンシャルプランナー・賃貸不動産経営管理士・相続アドバイザー・基礎心理カウンセラー</p>
              </div>
              <div class="member__link">
                <a class="arrow__link" href="<?php // echo esc_url(home_url('/about')); ?>">VIEW MORE</a>
              </div>
            </li>
福永さんブロック コメントアウトここまで -->
          </ul>
        </div>
      </div>
    </div>

<!-- TODO: リース初期はコメントアウトで非表示 -->
<!-- ADVISORS コメントアウト開始
    <div class="adviser">
      <div class="adviser__inner">
        <div class="about-page__title">
          <h2><span>ADVISORS</span>アドバイザー</h2>
        </div>
        <div class="member__lists">
          <ul class="member__list">
            <li>
              <div class="member__list__img"><img
                  src="<?php // echo get_template_directory_uri(); ?>/assets/img/member1.png" width="180" height="180"
                  alt="新井 豪一郎"></div>
              <div class="member__list__name"><span>代表取締役</span>新井 豪一郎</div>
              <div class="member__list__text">
                <p>
                  １００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字</p>
              </div>
              <div class="member__link">
                <a class="arrow__link" href="<?php // echo esc_url(home_url('/about')); ?>">VIEW MORE</a>
              </div>
            </li>

            <li>
              <div class="member__list__img"><img
                  src="<?php // echo get_template_directory_uri(); ?>/assets/img/member1.png" width="180" height="180"
                  alt="新井 豪一郎"></div>
              <div class="member__list__name"><span>代表取締役</span>新井 豪一郎</div>
              <div class="member__list__text">
                <p>
                  １００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字</p>
              </div>
              <div class="member__link">
                <a class="arrow__link" href="<?php // echo esc_url(home_url('/about')); ?>">VIEW MORE</a>
              </div>
            </li>

            <li>
              <div class="member__list__img"><img
                  src="<?php // echo get_template_directory_uri(); ?>/assets/img/member1.png" width="180" height="180"
                  alt="新井 豪一郎"></div>
              <div class="member__list__name"><span>代表取締役</span>新井 豪一郎</div>
              <div class="member__list__text">
                <p>
                  １００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字</p>
              </div>
              <div class="member__link">
                <a class="arrow__link" href="<?php // echo esc_url(home_url('/about')); ?>">VIEW MORE</a>
              </div>
            </li>

            <li>
              <div class="member__list__img"><img
                  src="<?php // echo get_template_directory_uri(); ?>/assets/img/member1.png" width="180" height="180"
                  alt="新井 豪一郎"></div>
              <div class="member__list__name"><span>代表取締役</span>新井 豪一郎</div>
              <div class="member__list__text">
                <p>
                  １００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字１００文字</p>
              </div>
              <div class="member__link">
                <a class="arrow__link" href="<?php // echo esc_url(home_url('/about')); ?>">VIEW MORE</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
ADVISORS コメントアウトここまで -->

    <section class="bottom">
      <div class="bottom__contents">
        <div class="bottom__title"><span>CORPORATE OVERVIEW</span>会社概要</div>
        <div class="bottom__lists">
          <ul>
            <li>
              <dl>
                <dt>会社名</dt>
                <dd>シェルパス株式会社 (SHERPATH, Inc.)</dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>代表取締役</dt>
                <dd>新井 豪一郎</dd>
              </dl>
            </li>
<!-- TODO: リース初期はコメントアウトで非表示 -->
<!--
            <li>
              <dl>
                <dt>取締役</dt>
                <dd>福永 夕太</dd>
              </dl>
            </li>
-->
            <li>
              <dl>
                <dt>事業所</dt>
                <dd>152-0035 東京都目黒区自由が丘1−3-19-305</dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>事業内容</dt>
                <dd>不動産関連事業、インターネットメディア運営事業</dd>
              </dl>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>