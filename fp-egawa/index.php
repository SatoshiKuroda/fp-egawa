<?php require('./news/wp-blog-header.php'); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>江川聡美</title>

	<link rel="stylesheet" href="css/style.css">
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
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
					<p class="sabTitle">＜あなたの笑顔が見たいから＞</p>
				</section>
			</article>
		</div>
		<nav>
			<ul>
				<li><a href="index.html">ホーム</a></li>
				<li><a href="flow-price.html">ご相談の流れ・費用</a></li>
				<li><a href="seminar.php">セミナー情報</a></li>
				<li><a href="profile.html">プロフィール</a></li>
				<li><a href="">お問い合わせ</a></li>
			</ul>
		</nav>
	</header>


	<main class="top-main">
		<article class="about-content">
			<h2>ファイナンシャルプランナー（FP）とは？</h2>
			<div class="about-con">
				<div class="left">
					<img src="img/top-about.png" alt="">
				</div>
				<section>
					<h3>お金まわりのご相談を承るお仕事です。</h3>
					<div class="about-con-flex">
						<h4>特にこの様なことについての<br>ご相談はお任せ下さい。</h4>
						<img src="img/arrow.png" alt="">
						<ul>
							<li>・住宅ローン</li>
							<li>・家計管理</li>
							<li>・教育資金づくり</li>
							<li>・老後の資金づくり</li>
							<li>・保険の相談・見直し</li>
							<li>・資産運用</li>
						</ul>
					</div>
					<div class="about-text">
						<p>ファイナンシャルプランナーはあなたにとって身近な存在です。</p>
						<p>
							生活に欠かせないお金まわりのことについて<br>お客様と一緒に相談をしながらどう生計を立てていくか、<br>今後の将来の不安を解決していくお手伝いをさせていただいております。
						</p>
					</div>
				</section>
			</div>
		</article>


		<article class="flow-content">
			<h2>ご相談の流れ・費用</h2>
			<div class="flow-con con">
				<div class="flow-con-flex">
					<div class="left">
						<section>
							<div class="flow-text-con">
								<div class="step">
									<p class="step-num">Step1</p>
								</div>
								<p>お電話からのご連絡。<br>又は、お問い合わせフォームからのご連絡をお願い致します。</p>
							</div>
							<i class="fas fa-chevron-down"></i>
							<div class="flow-text-con">
								<div class="step">
									<p class="step-num">Step2</p>
								</div>
								<p>日程調整</p>
							</div>
							<i class="fas fa-chevron-down"></i>
							<div class="flow-text-con">
								<div class="step">
									<p class="step-num">Step3</p>
								</div>
								<p>お伺い頂きます。<br>又は、札幌近郊であれば訪問可能(要相談)</p>
							</div>
							<i class="fas fa-chevron-down"></i>
							<div class="flow-text-con">
								<div class="step">
									<p class="step-num">Step4</p>
								</div>
								<p>個別相談</p>
							</div>
							<p class="flow-text">ご相談までの詳しい流れ・費用については▶︎<a href="flow-price.html">こちらから</a></p>
						</section>
					</div>
					<img src="img/top-flow.png" alt="">
				</div>
			</div>
		</article>


		<article class="seminar-content con">

			<h2>セミナー情報</h2>
			<div class="seminar-con">
				<div class="seminar-con-flex">
				<div class="left">
					<img src="img/top-seminar.png" alt="">
				</div>
				<section>
<?php

$args = array( 'posts_per_page' => 1, 'order'=> 'DESC', 'orderby' => 'date' );
$posts = get_posts($args);

foreach ($posts as $p) :

?>

					<table>
						<tr>

            <h3><?php echo $p->post_title; ?></h3>
            <div><?php echo $p->post_content; ?></div>
							<!-- <th>日　時</th>
							<td></td>
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
							<td>江川 聡美</td> -->
            </tr>
            <?php endforeach; ?>
					</table>
					<p>お申し込みは<a href="">お電話</a>又は<a href="">メールフォーム</a>にて</p>
					<p class="seminar-text">
						過去のセミナー情報については▶︎<a href="">こちらから</a>
					</p>
				</section>
			</div>
			</div>


<!-- ナビゲーション -->
<div class="tablenav">
	<?php
		global $wp_rewrite;
		$paginate_base = get_pagenum_link(1);
		if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
		$paginate_format = '';
		$paginate_base = add_query_arg('paged', '%#%');
} else {
$paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
user_trailingslashit('page/%#%/', 'paged');;
$paginate_base .= '%_%';
}
echo paginate_links( array(
'base' => $paginate_base,
'format' => $paginate_format,
'total' => $wp_query->max_num_pages,
'mid_size' => 5,
'current' => ($paged ? $paged : 1),
)); ?></div>
<!-- //ナビゲーション -->


		</article>

		<article class="profile-content con">
			<h2>プロフィール</h2>
			<div class="profile-con">
				<div class="profile-con-flex">
				<section>
					<h3>江 川　聡 美</h3>
					<p>
						大学卒業後、銀行に勤め、その後大手保険代理店勤務を経て、現在は独立系ファイナンシャルプランナーとしてコンサルティングの他にもセミナー講師としての活動もしている。金融機関での経験を活かし、住宅ローンや保険、資産運用等のライフコンサルティングを得意としている。
					</p>
					<p class="profile-text">▶︎
						<a href=""> 詳しくはこちら </a>
					</p>
				</section>

				<div class="right">
				<img src="img/no.jpg" alt="">
				</div>
				</div>
			</div>
		</article>
	</main>

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