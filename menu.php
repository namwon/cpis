<?php
// $currentfilename =  _getCurFile();

switch ($inc) {
  case 'profile':
    $profile = "active open";
    $profileactive = "<span class='active-page'></span>";
    break;
  case 'leave':
    $leave = "active open";
    $leaveactive = "<span class='active-page'></span>";
    break;
  case 'history':
    $history = "active open";
    $historyactive = "<span class='active-page'></span>";
    break;
  default:
  $booking = "active open";
  $bookingactive = "<span class='active-page'></span>";
    break;
}
?>
<div id="sidebar-wrapper">
  <div class="sidebar-profile">
    <img src="assets/img/no-image.png" class="rounded-circle img-fluid" alt="">
    <!-- <a href="logout.php" class="memnuAlink">ออกจากระบบ</a> -->
  </div>
    <ul class="sidebar-nav">
      <li class="">
        <a href="index.php?inc=userlist">
          <i class="fas fa-user-lock"></i>
          ผู้ใช้งานระบบ
        </a>
      </li>
      <li>
        <a href="index.php?inc=employee">
          <i class="fas fa-users"></i>
          ข้อมูลเจ้าหน้าที่
        </a>
      </li>
      <li class="<?php echo $history; ?>">
        <a href="index.php?inc=history">
          <i class="far fa-address-card"></i>
          ข้อมูลทะเบียนประวัติ
          <?php echo $historyactive; ?>
        </a>
      </li>
      <li class="<?php echo $profile; ?>">
        <a href="index.php?inc=profile">
          <i class="far fa-address-book"></i>
          ข้อมูลประวัติส่วนตัว
          <?php echo $profileactive; ?>
        </a>
      </li>
      <li class="<?php echo $leave; ?>">
        <a href="index.php?inc=leave">
          <i class="far fa-clock"></i>
          ข้อมูลวันลา
          <?php echo $leaveactive; ?>
        </a>
      </li>
      <li class="<?php echo $booking; ?>">
        <a href="index.php?inc=booking">
          <i class="far fa-calendar-alt"></i>
          การนัดหมาย
          <?php echo $bookingactive; ?>
        </a>
      </li>
    </ul>
</div>
