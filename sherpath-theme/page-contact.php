<?php
	/**
	 * Template Name: お問い合わせ
	 */
	get_header(); ?>


  <main class="contact">

    <div class="page__visual">
      <h1>お問い合わせ<span>CONTACT</span></h1>
      <div>CONTACT</div>
    </div>

    <div class="page__text">
      <p>弊社にご関心をお持ちいただき、ありがとうございます。<br>
        不動産のご相談、サービスに関することなど、お気軽にお問い合わせください。<br>
        お問合せ内容を確認後、担当者よりご連絡致します。<br>
        下記よりお問い合わせになりたい項目をご選択ください。</p>
    </div>

    <div class="contact__form">
      <div class="form__item">
				<?php
					if (have_posts()) :
						while (have_posts()) : the_post();
							// 本文の表示
							the_content();
						endwhile;
					endif;
				?>
      </div>
    </div>
  </main>

<?php get_footer(); ?>