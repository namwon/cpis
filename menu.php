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
  case 'booking':
    $booking = "active open";
    $bookingactive = "<span class='active-page'></span>";
    break;
  default:
    $history = "active open";
    $historyactive = "<span class='active-page'></span>";
    break;
}
?>
<div id="sidebar-wrapper">
  <div class="sidebar-profile">
    <img src="assets/img/no-image.png" class="rounded-circle img-fluid" alt="">
  </div>
    <ul class="sidebar-nav">
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
      </li class="<?php echo $booking; ?>">
      <li>
        <a href="index.php?inc=booking">
          <i class="far fa-calendar-alt"></i>
          การนัดหมาย
          <?php echo $bookingactive; ?>
        </a>
      </li>
    </ul>
</div>
