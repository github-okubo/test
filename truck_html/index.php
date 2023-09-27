<?
include("class/_dao.class");
$dao = new dao();

?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ダンプる｜ダンプの配車はダンプるで解決！</title>
    <meta name="description" content="貸したい×借りたいがマッチする、配車マッチングシステムダンプる！必要な時だけ貸し借りできるのでコストパフォーマンス◎、しかもエコ！配車ならダンプるで即解決です！">
    <!-- <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">


    <!-- スライダー -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <!-- ソーシャルメディアシェア用（任意） -->
    <!-- <meta property="og:url" content="ページのURL" />
    <meta property="og:title" content="ページのタイトル" />
    <meta property="og:type" content="ページのタイプ">
    <meta property="og:description" content="記事の抜粋" />
    <meta property="og:image" content="画像のURL" />
    <meta property="og:site_name" content="サイト名" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="fb:app_id" content="appIDを入力" /> -->

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <meta name="format-detection" content="telephone=no">
  </head>

  <body>
    <header>
    	<h1><img src="img/logo-ex.png" alt="ダンプるロゴマーク" class="header-logo"></h1>

    			<div class="login">
    				<p><a href="login.php" class="btn btn-primary my-2">ログイン</a></p>
    				<p><a href="newlogin.php" class="btn btn-secondary my-2">新規登録</a></p>
    			</div>


    	<section class="sl-wrap">
    		<h1>借りる。運ぶ。エコ。</h1>
    		<ul class="slider" id="slick">
    			<li><img src="img/sunrize.png" alt="" /></li>
    			<li><img src="img/hikari.png" alt="" /></li>
    			<li><img src="img/87384320.jpg" alt="" /></li>
      	 </ul>
    	</section>

    </header>
    <nav class="nav-top">
      <p>dump<br>truck<br>&times;<br>matching</p>
      <ul>
        <li><a href="#">ホーム</a></li>
        <li><a href="#news">配車</a></li>
        <li><a href="#feature">特徴</a></li>
        <li><a href="#price">価格設定</a></li>
        <li>お問い合わせ</li>
        <li>ログイン</li>
        <li>新規登録</li>
      </ul>
    </nav>

    <main>
      <div class="main-right-wrap">
      <section id="news">
        <h1>新着情報</h1>
        <ul>
          <li><img src="img/t1.jpg" alt="トラックイメージ"><p>注意事項等文言。雨天時も稼働は可能ですが到着時間は若干遅れる場合があります。トークルームにてご質問ください。</p><p><a href="">見る</a></p><p>2023-03-02</p></li>
          <li><img src="img/10.jpg" alt="トラックイメージ"><p>8tトラックを10台所有しています。主に建築現場での残土、埋め戻し等に利用しています。福岡、筑紫野、北九州を中心エリアとしてカバーしています。是非ご利用ください。</p><p><a href="">見る</a></p><p>2023-03-02</p></li>
          <li><img src="img/t1.jpg" alt="トラックイメージ"><p>注意事項等文言。雨天時も稼働は可能ですが到着時間は若干遅れる場合があります。トークルームにてご質問ください。</p><p><a href="">見る</a></p><p>2023-03-02</p></li>
          <li><img src="img/10.jpg" alt="トラックイメージ"><p>8tトラックを10台所有しています。主に建築現場での残土、埋め戻し等に利用しています。福岡、筑紫野、北九州を中心エリアとしてカバーしています。是非ご利用ください。</p><p><a href="">見る</a></p><p>2023-03-02</p></li>
          <li><img src="img/t1.jpg" alt="トラックイメージ"><p>注意事項等文言。雨天時も稼働は可能ですが到着時間は若干遅れる場合があります。トークルームにてご質問ください。</p><p><a href="">見る</a></p><p>2023-03-02</p></li>
          <li><img src="img/10.jpg" alt="トラックイメージ"><p>8tトラックを10台所有しています。主に建築現場での残土、埋め戻し等に利用しています。福岡、筑紫野、北九州を中心エリアとしてカバーしています。是非ご利用ください。</p><p><a href="">見る</a></p><p>2023-03-02</p></li>
          <li><img src="img/t1.jpg" alt="トラックイメージ"><p>注意事項等文言。雨天時も稼働は可能ですが到着時間は若干遅れる場合があります。トークルームにてご質問ください。</p><p><a href="">見る</a></p><p>2023-03-02</p></li>
          <li><img src="img/10.jpg" alt="トラックイメージ"><p>8tトラックを10台所有しています。主に建築現場での残土、埋め戻し等に利用しています。福岡、筑紫野、北九州を中心エリアとしてカバーしています。是非ご利用ください。</p><p><a href="">見る</a></p><p>2023-03-02</p></li>

        </ul>

      </section>

      <section id="feature">
   		 <h1>特徴</h1>
   		 <p>「ダンプる」はトラックのニーズをマッチングするシステムです。</p>
   		 <p>トラックの「無駄」を最大限削減し、トラックの所有者と使用者の双方にメリットの大きい、サステナブルな運用が可能になります。</p>
   		 <p>説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
   		 <div class="feature">
   			 <div>
   				 <img src="img/benefits-img1.png" alt="困る事務員のイラスト">
   				 <p>トラックの稼働少ないなあ…</p>
   			 </div>
   			 <div>
   				 <img src="img/benefits-img2.png" alt="困る現場監督のイラスト">
   				 <p>次の現場トラックが足りないぞ…</p>
   			 </div>
   		 </div>
   		 <div class="feature2">
   			 <img src="img/arrow.png" alt="矢印" class="arrow-bottom-right">
   			 <img src="img/benefits-img3.png" alt="OKサインのスタッフとトラックのイラスト">
   			 <img src="img/arrow.png" alt="矢印" class="arrow-bottom-left">
   			 <p>そんなときはすぐ配車マッチング！<br>今すぐ御社のお役に立ちます。</p>
   		 </div>
   	 </section>

   	 <section id="price">
   		 <h1>価格</h1>
   		 <ul>
   			 <li>
   				 <p>
   					 <img src="img/price-img2t.png" alt="">
   					 <span>1日8H</span>
   				 </p>
   				 <img src="img/arrow2.png" alt="矢印">
   				 <p>&yen;0,000&excl;</p>
   			 </li>
   			 <li>
   				 <p>
   					 <img src="img/price-img2t.png" alt="">
   					 <span>1日8H</span>
   				 </p>
   				 <img src="img/arrow2.png" alt="矢印">
   				 <p>&yen;0,000&excl;</p>
   			 </li>
   		 </ul>
   		 <p class="text-right">※価格は一例です。</p>
   	 </section>
     </div>

   	 <!-- トップへスクロールするボタン -->
   	 <div class="top-button">
   		 <a href="#"><p>&#9650;</p></a>
   	 </div>
     </main>

   <footer>
   	<img src="img/logo-ex.png" alt="ダンプるロゴマーク">

   	<ul class="footer-menu-left">
   		<li>
   			<a href="#">ホーム</a>
   		</li>
   		<li>
   			<a href="#news">配車</a>
   		</li>
   		<li>
   			<a href="#feature">特徴</a>
   		</li>
   		<li>
   			<a href="#price">価格設定</a>
   		</li>
   		<li>
   			<a href="info.html">お問い合わせ</a>
   		</li>
   		<li>
   			<a href="tokusho.html">特定商取引法に基づく表記</a>
   		</li>
   		<li>
   			<a href="policy.html">プライバシーポリシー</a>
   		</li>
   		<li>
   			<a href="company.html">会社概要</a>
   		</li>
   	</ul>

   	<ul  class="footer-menu-center">
   		<li>ログイン</li>
   		<li>新規登録</li>
   		<li>退会</li>
   	</ul>

   	<ul class="footer-menu-right">
   		<li>
   			<p>関連企業</p>
   			<ul class="company-link">
   				<li><a href="">企業名</a></li>
   				<li><a href="">企業名</a></li>
   				<li><a href="">企業名</a></li>
   				<li><a href="">企業名</a></li>
   				<li><a href="">企業名</a></li>
   			</ul>
   		</li>
   	</ul>

   <p class="copy">&copy;&nbsp;<?php echo date(" Y ") ?>&nbsp;2023 (株)YYC</p>
   </footer>

   <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <!-- スライダー -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script>
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 1200,
    dots: true,
    arrows: true,
    infinite: true,
});
</script>


  </body>

</html>
