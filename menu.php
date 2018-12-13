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
  case 'userlist':
  case 'adduser':
    $userlist = "active open";
    $userlistactive = "<span class='active-page'></span>";
    break;
  case 'employee':
  case 'addperson':
    $employee = "active open";
    $employeeactive = "<span class='active-page'></span>";
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
      <li class="<?php echo $userlist; ?>">
        <a href="index.php?inc=userlist" class="clickShowLoad">
          <i class="fas fa-user-lock"></i>
          ผู้ใช้งานระบบ
          <?php echo $userlistactive; ?>
        </a>
      </li>
      <li class="<?php echo $employee; ?>">
        <a href="index.php?inc=employee" class="clickShowLoad">
          <i class="fas fa-users"></i>
          ข้อมูลเจ้าหน้าที่
          <?php echo $employeeactive; ?>
        </a>
      </li>



      <!-- Menu สำหรับผู้ใช้ทั่วไป -->
      <li class="<?php echo $history; ?>">
        <a href="index.php?inc=history" class="clickShowLoad">
          <i class="far fa-address-card"></i>
          ข้อมูลทะเบียนประวัติ
          <?php echo $historyactive; ?>
        </a>
      </li>
      <li class="<?php echo $profile; ?>">
        <a href="index.php?inc=profile" class="clickShowLoad">
          <i class="far fa-address-book"></i>
          ข้อมูลประวัติส่วนตัว
          <?php echo $profileactive; ?>
        </a>
      </li>
      <li class="<?php echo $leave; ?>">
        <a href="index.php?inc=leave" class="clickShowLoad">
          <i class="far fa-clock"></i>
          ข้อมูลวันลา
          <?php echo $leaveactive; ?>
        </a>
      </li>
      <li class="<?php echo $booking; ?>">
        <a href="index.php?inc=booking" class="clickShowLoad">
          <i class="far fa-calendar-alt"></i>
          การนัดหมาย
          <?php echo $bookingactive; ?>
        </a>
      </li>
    </ul>
</div>
