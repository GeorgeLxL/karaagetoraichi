<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/2arao/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/2arao/css/3menu.css">
    <script src="<?php echo get_template_directory_uri()?>/assets/js/menu_Btn.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <section class="header">
        <img class="header-bg" src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_key_arao_menu.png">
        <div class="logo">
            <div><a href="https://karaage-toraichi.com/"><img src="<?php echo get_template_directory_uri()?>/2arao/image/1top/t250_100.jpg" alt=""></a></div>
            <div class="logo-text">
                <div class="logo-text01">おいしいからあげ、骨付鳥のからあげとらいち</div>
                <a href="tel:0968-62-6268"><img src="<?php echo get_template_directory_uri()?>/2arao/image/1top/tel_arao_info1-1.png" alt=""></a>
            </div>
        </div>
		<div class="header-title">
			<img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_h2_arao_menu.png" alt="">
		</div>
        <div class="navmenu-container">
        	<div class="navmenu">
                <a class="navbtn" href="https://karaage-toraichi.com/arao-kodawari/">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/1top/btn_menu_arao_commitment.png">
                </a>
                <a class="navbtn" href="https://karaage-toraichi.com/arao-menu/">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/1top/btn_menu_arao_menu.png">
                </a>
				<a class="navmenu-logo" href="https://karaage-toraichi.com/arao-top/"><img src="<?php echo get_template_directory_uri()?>/2arao/image/1top/btn_menu_arao_logo.png"></a>
                <a class="navbtn" href="https://karaage-toraichi.com/arao-whatsnew/">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/1top/btn_menu_arao_whatsnew.png">
                </a>
                <a class="navbtn" href="https://karaage-toraichi.com/arao-store/">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/1top/btn_menu_arao_store.png">
                </a>
            </div>
        </div>
    </section>
	<div class="menu_btn" onclick="event.stopPropagation(); myFunction(this)">
		<div class="bar1"></div>
		<div class="bar2"></div>
		<div class="bar3"></div>
	</div>
	<div id="myDropdown" class="dropdown-content">
		<div class="sp-logo"><a href="https://karaage-toraichi.com/"><img src="<?php echo get_template_directory_uri()?>/2arao/image/1top/sp-logo.png" alt=""></a></div>
		<div>
			<a class="dropdown-link" href="https://karaage-toraichi.com/arao-top/">
				<div>Home</div>
				<div class="navbtn-subtitle">ホーム</div>
			</a>
		</div>
		<div><a class="dropdown-link" href="https://karaage-toraichi.com/arao-kodawari/">
			<div>Commitment</div>
			<div class="navbtn-subtitle">こだわり</div>
			</a></div>
		<div><a class="dropdown-link" href="https://karaage-toraichi.com/arao-menu/">
			<div>Menu</div>
			<div class="navbtn-subtitle">メニュー</div>
			</a></div>
		<div><a class="dropdown-link" href="https://karaage-toraichi.com/arao-whatsnew/">
			<div>What's New</div>
			<div class="navbtn-subtitle">お知らせ</div>
			</a></div>
		<div><a class="dropdown-link dropdown-link-last" href="https://karaage-toraichi.com/arao-store/">
			<div>Store</div>
			<div class="navbtn-subtitle">店舗情報</div>
			</a></div>
	</div>
	<div class="sp-tel">
		<div><a href="https://karaage-toraichi.com/arao-menu/">メニューはこちら</a></div>
		<div><a href="tel:0968-62-6268">とらいち本店<br>
			0968-62-6268</a></div>
	</div>
    <section class="bg-img">
        <div class="menu-introductiion"><img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_honetsukidori.jpg" alt=""></div>
        <div class="menu-introduction01">
            <div class="menu-introduction-content">
                <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_honetsukidori_h2.png" alt="">
                <div class="introduction-text">ガブリと食べたら、肉汁たっぷりのジューシーな骨付鳥は、ひと口食べたらやめられない美味しさ！噛みごたえのある親鳥、柔らかくジューシーな雛鳥、どちらもオススメです！</div>
                <table class="introduction-table">
					<tbody>
						<tr>
							<td>親鳥</td>
							<td>¥400〜¥800</td>
							<td>（税込）</td>
						</tr>
					</tbody>
                    <tbody>
						<tr>
							<td>雛鳥</td>
							<td>¥800</td>
							<td>（税込）</td>
						</tr>
					</tbody>
                </table>
            </div>
            <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/menu_honetsukidori_parts_01.png" alt="" class="menu-introduction-img">
        </div>
        <div class="garlic">
            <img class="garlic-bg" src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/bg_menu_arao_ninnikumomo.png" alt="">
            <div class="garlic-content">
                <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_h3_ninnikumomo.png" alt="">
                <div class="introduction-text">まろやかに仕上げた絶品にんにくだれは、ジューシーなもも肉との相性がピッタリ！クセになる美味しさです！</div>
                <table class="introduction-table">
                    <tr>
                        <td>親鳥</td>
                        <td>¥400〜¥800</td>
                        <td>（税込）</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="content">
            <div class="menu-title">骨付鳥</div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_honetsuki_oya.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">骨付鳥（親鳥）</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥400〜¥800</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">親鳥ならではの噛みごたえ！旨みたっぷり！</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_honetsuki_hina.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">骨付鳥（雛鳥）</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥800</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">やわらかジューシー</div>
                </div>
            </div>
            <div class="menu-title">からあげ単品</div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_ninnikumomo.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">にんにくもも</div>
                        <div class="menu-cost">
                            （約3コ）100g
                            <span class="menu-money">¥260</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">当店ダントツ1番人気！にんにくたっぷり！</div>
                </div>
                <div class="menu-box">
                    <div class="menu-header">
                        <div class="menu-name">しょうゆもも</div>
                        <div class="menu-cost">
                            （約3コ）100g
                            <span class="menu-money">¥260</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">唐揚げ発祥の地、大分・宇佐の繁盛店秘伝たれ使用！</div>
                    <img class="blank-bg" src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_honetsuki_blank.png" alt="">
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <div class="menu-header">
                        <div class="menu-name">塩もも</div>
                        <div class="menu-cost">
                            （約3コ）100g
                            <span class="menu-money">¥250</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">天然塩使用。冷えても美味しい！</div>
                </div>
                <div class="menu-box">
                    <div class="menu-header">
                        <div class="menu-name">四川花椒もも</div>
                        <div class="menu-cost">
                            （約3コ）100g
                            <span class="menu-money">¥265</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">人気のにんにくももに、しびれる香り高い花椒をかけました。</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <div class="menu-header">
                        <div class="menu-name">にんにくむね</div>
                        <div class="menu-cost">
                            （約3コ）100g
                            <span class="menu-money">¥230</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">にんにくのパンチを限界まで効かせました！</div>
                </div>
                <div class="menu-box">
                    <div class="menu-header">
                        <div class="menu-name">むね</div>
                        <div class="menu-cost">
                            （約3コ）100g
                            <span class="menu-money">¥220</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">あっさりでヘルシー。サンドイッチやカレーに合います。</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_currygake.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">カレーがけ唐揚げ</div>
                        <div class="menu-cost">
                            （単品）（4コ入り1パック）
                            <span class="menu-money">¥500</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">カレーのスパイスがからあげとよく合います。</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_yuzufumi.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">ゆず風味唐揚げ</div>
                        <div class="menu-cost">
                            （単品）（5コ入り1パック）
                            <span class="menu-money">¥500</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">ゆずの香りでさっぱりいただけます。</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_amazu.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">甘酢唐揚げ</div>
                        <div class="menu-cost">
                            （単品）（5コ入り1パック）
                            <span class="menu-money">¥500</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">甘酸っぱい香りが食欲をそそります。</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_nanban.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">チキン南蛮</div>
                        <div class="menu-cost">
                            （単品）（5コ入り1パック）
                            <span class="menu-money">¥500</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">手作りのタルタルソースとの相性バツグン！</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_shioteba.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">塩手羽</div>
                        <div class="menu-cost">
                            （1本）
                            <span class="menu-money">¥100</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">パリパリ！あっさり塩手羽に仕上げました！</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_tareteba.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">タレ手羽</div>
                        <div class="menu-cost">
                            （1本）
                            <span class="menu-money">¥100</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">甘辛だれの旨みたっぷり</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <div class="menu-header">
                        <div class="menu-name">砂ズリ</div>
                        <div class="menu-cost">
                            （12〜15コ）100g
                            <span class="menu-money">¥250</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">ビールとの相性最高！</div>
                </div>
                <div class="menu-box">
                    <div class="menu-header">
                        <div class="menu-name">軟骨</div>
                        <div class="menu-cost">
                            （約10コ）100g
                            <span class="menu-money">¥270</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">にんにくとコリコリの食感が最高！</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <div class="menu-header">
                        <div class="menu-name">鳥皮</div>
                        <div class="menu-cost">
                            （1パック100g）
                            <span class="menu-money">¥230</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">塩加減が絶妙と評判！パリパリ鳥皮をぜひ！</div>
                </div>
            </div>
            <div class="menu-title">その他単品</div>
            <div class="menu-container">
                <div class="menu-box">
                    <div class="menu-header">
                        <div class="menu-name">鶏香湯スープ</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥80</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">お弁当のおともに。</div>
                </div>
                <div class="menu-box">
                    <div class="menu-header">
                        <div class="menu-name">絶品キムチ</div>
                        <div class="menu-cost">
                            （1コ300g）
                            <span class="menu-money">¥540</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">全国キムチグランプリ奨励賞受賞！うまい！！</div>
                </div>
            </div>
            <div class="menu-title">お弁当</div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_momobento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">もも弁当</div>
                        <div class="menu-cost">
                            （にんにく・しょうゆ・塩）
                            <span class="menu-money">¥580</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">ももが5コ！3種類の味から選べます！！</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_nanbansteakbento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">チキン南蛮&チキンステーキ弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥600</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">2種類の人気メニューがコラボ！</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_momojubento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">もも重弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥550</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">もも肉をオリーブオイルで焼き上げました！</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_amazubento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">甘酢唐揚げ弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥590</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">甘酢と塩唐揚げの相性抜群！！</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_nanbanbento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">チキン南蛮弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥600</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">手作りタルタルソースが好評！！</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_karatarudon.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">からタル丼</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥550</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">人気商品。タルタル、キャベツが入ったデラックスな丼！</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_currygakebento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">カレーがけ唐揚げ弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥600</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">唐揚げの上にスパイシーカレーをかけました！</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_karaagebento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">唐揚げ弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥550</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">もも3コ、むね2コ！にんにくの有無が選べます。</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_minikaraagebento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">ミニ唐揚げ弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥380</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">もも2コ、むね1コが入ったミニサイズのお弁当</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_kimuchibento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">豚キムチ唐揚げ弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥620</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">全国キムチグランプリ奨励賞受賞キムチ使用、唐揚げ3コ入</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_karatarukimuchidon.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">からタルキムチ丼</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥580</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">人気のからタル丼に、絶品キムチをトッピング！</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_mixbento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">ミックス弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥550</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">カニクリームコロッケが美味！にんにく有り無し選択可！</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_tarutarubento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">タルタル弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥580</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">唐揚げ弁当にタルタルソースが入ってます！</div>
                </div>
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_munebento.png" alt="">
                    <div class="menu-header">
                        <div class="menu-name">むね弁当</div>
                        <div class="menu-cost">
                            <span class="menu-money">¥480</span> （税込）
                        </div>
                    </div>
                    <div class="menu-text">ヘルシー志向のあなたに。にんにく有り無し選択可！</div>
                </div>
            </div>
            <div class="menu-container">
                <div class="menu-box">
                    <img src="<?php echo get_template_directory_uri()?>/2arao/image/3menu/img_menu_hosoku.png" alt="">
                </div>
                <div class="menu-box menu-box01">
                    <div class="menu-header">
                        <div class="menu-name"></div>
                        <div class="menu-cost">
                            とらいち特製オードブル
                            <span class="menu-money">¥5,000</span> （税込）
                        </div>
                    </div>
                    <div class="menu-header">
                        <div class="menu-name"></div>
                        <div class="menu-cost">
                            オードブルA（4〜5名用）
                            <span class="menu-money">¥3,500</span> （税込）
                        </div>
                    </div>
                    <div class="menu-header">
                        <div class="menu-name"></div>
                        <div class="menu-cost">
                            オードブルB（2〜3名用）
                            <span class="menu-money">¥2,450</span> （税込）
                        </div>
                    </div>
                    <div class="menu-header">
                        <div class="menu-name">オードブル</div>
                    </div>
                    <div class="menu-text">大人数の集まりや、ファミリーに最適！袋の場合は200円引き。</div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <img class="footer-top" src="<?php echo get_template_directory_uri()?>/2arao/image/1top/bg_footer_arao_top.jpg" alt="">
        <div class="content">
            <div class="slider-container">
				<img class="slider-back" src="<?php echo get_template_directory_uri()?>/2arao/image/1top/img_footer_slide_arao01.jpg" alt="" />
				<img class="footerslide01" src="<?php echo get_template_directory_uri()?>/2arao/image/1top/img_footer_slide_arao01.jpg" alt="" />
				<img class="footerslide02" src="<?php echo get_template_directory_uri()?>/2arao/image/1top/img_footer_slide_arao02.jpg" alt="" />
				<img class="footerslide03" src="<?php echo get_template_directory_uri()?>/2arao/image/1top/img_footer_slide_arao03.jpg" alt="" />
				<img class="footerslide04" src="<?php echo get_template_directory_uri()?>/2arao/image/1top/img_footer_slide_arao04.jpg" alt="" />
				<img class="footerslide05" src="<?php echo get_template_directory_uri()?>/2arao/image/1top/img_footer_slide_arao05.jpg" alt="" />
            </div>
            <div class="copyright">©からあげ虎一 All Rights Reserved.</div>
        </div>
    </section>
    <script src="<?php echo get_template_directory_uri()?>/2arao/js/animation.js"></script>
</body>

</html>