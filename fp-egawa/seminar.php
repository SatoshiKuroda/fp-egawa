<?php require('./news/wp-blog-header.php'); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>江川聡美</title>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="topTel">011-123-456 <img src="img/top-icon.png" alt="">札幌市中央区南1条東1丁目2-22-222</div>
		<div class="top">
			<article>
			<section>
				<h1>ファイナンャルプランナー</h1>
				<p><img src="img/top-name.png" alt=""></p>
				<p>江 川　聡 美</p>
				<p class="sabTitle">＜セミナー情報＞</p>
			</section>
			</article>
		</div>
		<nav>
			<ul>
				<li><a href="index.html">ホーム</a></li>
				<li><a href="flow-price.html">ご相談の流れ・費用</a></li>
				<li><a href="seminar.html">セミナー情報</a></li>
				<li><a href="profile.html">プロフィール</a></li>
				<li><a href="">お問い合わせ</a></li>
			</ul>
		</nav>
	</header>
	<article class="seminar">
		<h2>セミナー情報について</h2>
		<section class="seminar-main-content">
			<div class="semi-con-text">
			<h3>お金について様々なお悩みをお持ちの方は是非セミナーに参加してみませんか？</h3>
			<ul>
				<li>どうやって節約をしたらいいのか？</li>
				<li>どこの部分をを削減できるのか？</li>
				<li>税金がよくわからない。</li>
				<li>貯金が出来ない。</li>
				<li>保険は入ってて損がないのか？</li>
			</ul>
			<p>などの悩みをお持ちの方はお気軽にご参加ください。<br>セミナーにご参加頂いたお客様は<span class="orenge">個別相談が無料</span>となっております。</p>
			</div>
			<div class="semi-con-img">
				<img src="img/seminar1.png" alt="">
			</div>
		</section>

		<section class="seminar-new">
			<div class="seminar-nwe-img">
				<img src="img/seminar2.png" alt="">
			</div>
			<div class="seminar-new-text">
				<h3>【将来を考える未婚の方に、得する資金運用術】</h3>
					<table>
          <?php

            $args = array( 'posts_per_page' => 10, 'order'=> 'DESC', 'orderby' => 'date' );
            $posts = get_posts($args);

            foreach ($posts as $p) :

          ?>

					<table>
						<tr>

            <h3><?php echo $p->post_title; ?></h3>
            <div><?php echo $p->post_content; ?></div>
						<!-- <tr>
							<th>日　時</th>
							<td>2019/07/30　14時〜15時半</td>
						</tr>
						<tr>
							<th>場　所</th>
							<td>札幌市中央区大通西８　札幌ビューホテル大通公園（大通駅何番出口より徒歩3分）</td>
						</tr>
						<tr>
							<th>定　員</th>
							<td>20名</td>
						</tr>
						<tr>
							<th>参加費</th>
							<td>無料（ドリンク、プチスイーツ付き）</td>
						</tr>
						<tr>
							<th>講　師</th>
							<td>江川 聡美</td>
            </tr> -->
            <?php endforeach; ?>
					</table>
					<p>お申し込みは<a href="">お電話</a>又は<a href="">メールフォーム</a>にて</p>
			</div>
		</section>

		<section class="seminar-old">
			
		</section>
	</article>

	<footer>
		<div class="footer-tel">
			<p><a href="">0120-123-345</a><img src="img/footer-icon.png" alt="">札幌市中央区南1条東1丁目2-22-222</p>
		</div>
		<div class="footer-text">
			<a href="">個人情報のお取り扱いについて</a>
			<p>Copyright(c) Satomi egawa, All Rights Reserved.</p>
		</div>
	</footer>
</body>
</html>