<!--<?php
$met_foot_nav = methtml_footnav();//底部导航标签（次导航）
$met_foot_txt = metlabel_foot();//底部信息标签
$foot_menu=wap_foot_menu();
echo <<<EOT
-->
<footer class="tem_footer">
	<section class="tem_inner">
		<div class="tem_footer_nav">{$met_foot_nav}</div>
		<div class="tem_footer_text">
		{$met_foot_txt}
		</div>
	</section>
</footer>
<div class="powered_by_metinfo">
				&copy;2017-{$m_now_year} Powered&nbsp;by&nbsp;<a href="http://lmecology.com" target="_blank" title="北京林淼生态环境技术有限公司">MetInfo&nbsp;{$metcms_v}</a>
</div>
{$foot_menu}
<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
</body>
</html>
<!--
EOT;
?>-->