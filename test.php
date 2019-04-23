""
<?php

// $manual =<<<EOF
// 	<div class="headline" id="cont_m_6">
// 					<h1><a href="//sports.sina.com.cn/zz/2019-03-18/doc-ihrfqzkc4771704.shtml" target="_blank" class="linkRed">2019英超第一射手！马内势不可挡刷新同胞纪录</a></h1>
// 		<div class="c_line"></div>
// 	</div>

// 	<div class="imp_news"><ul class="list_009">			
// 	<li><a href="http://sports.sina.com.cn/zz/2019-03-21/doc-ihtxyzsk9282503.shtml" target="_blank">抵制萨里 蓝军季票持有者出售球票拒看比赛</a></li>
// 			<li><a href='https://sports.sina.com.cn/zz/2019-03-21/doc-ihtxyzsk9230392.shtml' target="_blank">红军边缘人现身罗马城 加盟拉齐奥在即</a></li>
// 			<li><a href ="http://sports.sina.com.cn/zz/2019-03-20/doc-ihtxyzsk9108303.shtml" target="_blank">拉比奥转会巴萨生变  英超两豪门黄雀在后捡漏</a></li>
// 			<li><a href= "http://sports.sina.com.cn/zz/2019-03-20/doc-ihsxncvh4158840.shtml" target="_blank">拉什福德续长约触礁 曼联欲先激活自动续约条款</a></li>
// 			<li><a href  = "https://sports.sina.com.cn/zz/2019-03-20/doc-ihtxyzsk9090812.shtml" target="_blank">天作之合 安切洛蒂：齐达内和皇马是一段好姻缘</a></li>
// 			<li><a href='http://sports.sina.com.cn/zz/2019-03-20/doc-ihsxncvh4147971.shtml' target="_blank">解决锋无力 天津泰达将祭出三杆洋枪组合</a></li>
// 			<li><a href="sports.sina.com.cn/zz/2019-03-20/doc-ihtxyzsk9087974.shtml" target="_blank">恒大弃将老地方重生 率队力挫葡超豪门证明自己</a></li>
			
// 	</ul>
// 	</div>
// EOF;

// $manUrlList = array();

// // 提取手动url
// $pattern = '/<a.*?href *\= *["\'](http:|https:)?(\/\/.*?)["\']>(.*?)<\/a>/s'; 
// if (preg_match_all($pattern, $manual, $res)) {
// 	$manUrlList = $res[2];
// }

// print_r($manUrlList);

// $html =<<<EOF
// <div>
// 	<div class="list clearfix">
// 	<h3><a style="font-weight:bold;color:red;" href="http://sports.sina.com.cn/g/laliga/2018-11-21/doc-ihnyuqhi5437473.shtml" target="_blank" title="欧国联-妖锋破门 10人葡萄牙战平出线">欧国联-妖锋破门 10人葡萄牙战平出线</a></h3><p class="c_memo"><a href="http://sports.sina.com.cn/g/pl/2018-11-21/doc-ihnyuqhi5496076.shtml" target="_blank" title="欧国联升降级球队全部出炉：德国克罗地亚降级">欧国联升降级球队全部出炉：德国克罗地亚降级</a></p><p class="c_memo"><a href="http://sports.sina.com.cn/g/seriea/2018-10-12/doc-ifxeuwws3398043.shtml" target="_blank" title="没C罗葡萄牙更强？主帅：世界最佳都不在怎么强">没C罗葡萄牙更强？主帅：世界最佳都不在怎么强</a></p><p class="c_memo"><a href="http://sports.sina.com.cn/g/seriea/2018-10-12/doc-ifxeuwws3393999.shtml" target="_blank" class="videoNewsLeft">葡萄牙太稳了！没有C罗也不慌 等他明年回来争冠</a></p><p class="c_memo"><a href="http://sports.sina.com.cn/g/pl/2018-10-12/doc-ifxeuwws3416420.shtml" target="_blank" title="瓜帅妙笔又造出一位真核！葡萄牙后C罗时代他扛旗">瓜帅妙笔又造出一位真核！葡萄牙后C罗时代他扛旗</a></p>
// 	<div aaaa></div>
// 	</div>
// </div>
// EOF;

// $count = 0;
// $html = preg_replace("/<div(.*?)>(.*)<\/div>/s", "\$2", $html, -1, $count);


// print_r($html);

// print ($count);

$html =<<<EOF
<h3><a style="font-weight:bold;color:red;" href="http://sports.sina.com.cn/g/laliga/2018-11-21/doc-ihnyuqhi5437473.shtml" target="_blank">欧国联-妖锋破门 10人葡萄牙战平出线</a></h3><p><a href="http://sports.sina.com.cn/g/pl/2018-11-21/doc-ihnyuqhi5496076.shtml" target="_blank" title="欧国联升降级球队全部出炉：德国克罗地亚降级">欧国联升降级球队全部出炉：德国克罗地亚降级</a></p><p><a href="http://sports.sina.com.cn/g/pl/2018-10-12/doc-ifxeuwws3416420.shtml" target="_blank" title="瓜帅妙笔又造出一位真核！葡萄牙后C罗时代他扛旗">瓜帅妙笔又造出一位真核！葡萄牙后C罗时代他扛旗</a></p><p><a href="http://sports.sina.com.cn/g/seriea/2018-10-12/doc-ifxeuwws3398043.shtml" target="_blank" title="没C罗葡萄牙更强？主帅：世界最佳都不在怎么强">没C罗葡萄牙更强？主帅：世界最佳都不在怎么强</a></p><p><a href="http://sports.sina.com.cn/g/pl/2019-03-22/doc-ihsxncvh4576485.shtml" target="_blank" title="阿扎尔再次示爱皇马:齐达内是我偶像 因他踢足球">阿扎尔再次示爱皇马:齐达内是我偶像 因他踢足球</a></p>
			
EOF;
$pattern = "/<a.*?href *\= *[\"'](http:|https:)?(\/\/.*?)[\"'](.*?)>(.*?)<\/a>/s"; 
if (preg_match_all($pattern, $html, $res)) {
	$urlListMan = $res[2];
	$numMan = count($urlListMan);
}

print_r($urlListMan);
print_r($numMan);



?>
