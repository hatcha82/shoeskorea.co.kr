<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>


<button class="profile_btn">
	<span class="profile_img"><?php echo get_member_profile_img($member['mb_id']); ?></span>
	<strong class="profile_nick"><?php echo $nick ?></strong>
	<i class="fa fa-angle-down"></i>
</button>

<div class="tnb_member">
	<ul>
		<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
		<li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
		<li><li><a href="<?php echo G5_SHOP_URL; ?>/couponzone.php">쿠폰</a></li>
		<li><a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank">쪽지<span <?php echo ($memo_not_read ? 'class="arm_on"' : '') ?>><?php echo $memo_not_read ?></span></a></li>
		<li><a href="<?php echo G5_BBS_URL ?>/point.php" target="_blank">포인트<span <?php echo ($point ? 'class="arm_on"' : '') ?>><?php echo $point ?></span></a></li>
		<li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">마이페이지</a></li>
		<?php if ($is_admin == 'super' || $is_auth) {  ?>
		<li><a href="<?php echo G5_ADMIN_URL ?>" class="adm_btn">관리자</a></li>
		<?php }  ?>
	</ul>
</div>
<script>
$(document).ready(function(){
    $(document).on("click", ".profile_btn", function() {
        $(".tnb_member").toggle();
    });
});

// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G5_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>
<!-- 로그인 후 외부로그인 끝 -->
