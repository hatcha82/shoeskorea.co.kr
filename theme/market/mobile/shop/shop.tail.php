<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
</div><!-- container End -->

<div id="ft">
	<div id="ft_wr">
        <ul class="ft_ul">
        	<li><a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a></li>
        	<li><a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보</a></li>
        	<li><a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a></li>
        	<li>
        	<?php
		    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
		    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전</a>
		    <?php
		    }
		
		    if ($config['cf_analytics']) {
		        echo $config['cf_analytics'];
		    }
		    ?>
		    </li>
		</ul>
	</div>
	
	<div class="ft_info">
    	<p class="ft_call">고객센터 1234-5678</p>
    	<ul class="ft_sns">
    		<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    		<li><a href=""><i class="fab fa-twitter"></i></a></li>
    		<li><a href=""><i class="fab fa-instagram"></i></a></li>
		</ul>
    	<div>
        <span><b>회사명</b> <?php echo $default['de_admin_company_name']; ?></span>
        <span><b>주소</b> <?php echo $default['de_admin_company_addr']; ?></span><br>
        <span><b>사업자 등록번호</b> <?php echo $default['de_admin_company_saupja_no']; ?></span><br>
        <span><b>대표</b> <?php echo $default['de_admin_company_owner']; ?></span>
        <span><b>전화</b> <?php echo $default['de_admin_company_tel']; ?></span>
        <span><b>팩스</b> <?php echo $default['de_admin_company_fax']; ?></span><br>
        <!-- <span><b>운영자</b> <?php echo $admin['mb_name']; ?></span><br> -->
        <span><b>통신판매업신고번호</b> <?php echo $default['de_admin_tongsin_no']; ?></span><br>
        <span><b>개인정보 보호책임자</b> <?php echo $default['de_admin_info_name']; ?></span>

        <?php if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?><br>
        </div>
        <p>Copyright &copy; 2001-2013 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.</p>
	</div>
</div>
<a href="#" id="ft_to_top"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></a>

<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
