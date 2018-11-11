<?php

	function subTxt($text,$encode,$count,$end)
	{
		if(mb_strlen(strip_tags($text),$encode)>$count){
			$txt=strip_tags($text);
			$txt=iconv_substr($txt, 0,$count, $encode)."".$end;
		}else{
			$txt=strip_tags($text);
		}

		return $txt;
	}
	//ลบวัน
	function DateDiff($strDate1,$strDate2)
	{
		return (strtotime($strDate2) - strtotime($strDate1))/ ( 60 * 60 * 24 ); // 1 day = 60*60*24
	}

//$date_name = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
//$month_name = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");

function switchIF($condition,$chk1,$chk2,$text1,$text2)
	{
		if($condition==$chk1){return $text1;}
		if($condition==$chk2){return $text2;}
	}

/* ---------------------------------------------------------------------- *\
  Function		:	For date
  Description	:	แสดงวัน,วันเวลา
  Usage			:
  Arguments	:	ไม่มี
\* ---------------------------------------------------------------------- */
function _Tdate($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$date_name = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
		$month_name = array("","มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
		return "วัน".$date_name[date("w",$d)]."ที่ ".date("j",$d)." ".$month_name[date("n",$d)]." พ.ศ ".(date("Y",$d)+543);
	}

function _Tdates($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
		return "วันที่ ".date("j",$d)." ".$month_name[date("n",$d)]." พ.ศ ".(date("Y",$d)+543);
	}

function _Tdates2($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
		return "".sprintf("%02d", date("j",$d))." ".$month_name[date("n",$d)]." ".(date("Y",$d)+543);
	}

function _Edates2($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		return "".sprintf("%02d", date("j",$d))." ".$month_name[date("n",$d)]." ".(date("Y",$d));
	}

function _EshortDates($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec");
		return "".sprintf("%02d", date("j",$d))." ".$month_name[date("n",$d)]." ".(date("Y",$d));
	}
function _Day($d)
{
	if(is_string($d)){$d=strtotime($d);}
	return "".sprintf("%02d", date("j",$d));
}
function _YearEn($d)
{
	if(is_string($d)){$d=strtotime($d);}
	return "".(date("Y",$d));
}
function _YearTh($d)
{
	if(is_string($d)){$d=strtotime($d);}
	return "".(date("Y",$d)+543);
}
function _shortMonthEn($d)
{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec");
		return "".$month_name[date("n",$d)];
}

function _shortMonthTh($d)
{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
		return "".$month_name[date("n",$d)];
}

function thaiDate($d)
	{
		if(is_string($d)){$d=strtotime($d);}
		$dateText=date("d",$d)."-".date("m",$d)."-".(date("Y",$d)+543)." ".date("H",$d).":".date("i",$d);
		return $dateText;
	}

function thaiDatenoTime2($d)
	{
		if(is_string($d)){$d=strtotime($d);}
		$dateText=date("d",$d)."-".date("m",$d)."-".date("Y",$d);
		return $dateText;
	}

function thaiDatenoTime($d)
	{
		if(is_string($d)){$d=strtotime($d);}
		$dateText=date("d",$d)."-".date("m",$d)."-".(date("Y",$d)+543);
		return $dateText;
	}

function dateDateTh($d)
	{
		if(is_string($d)){$d=strtotime($d);}
		$dateText=date("d",$d)."/".date("m",$d)."/".(date("Y",$d)+543);
		return $dateText;
	}

function dateData($d)
	{
		if(is_string($d)){$d=strtotime($d);}
		$dateText=date("d",$d)."/".date("m",$d)."/".date("Y",$d);
		return $dateText;
	}

function EnDatenoTime($d)
	{
		$time=explode('-',$d);
		$dateText=$time[2]."-".$time[1]."-".$time[0];
		return $dateText;
	}

function EnDatenoTime2($d)
	{
		$time=explode('/',$d);
		$dateText=$time[0]."-".$time[1]."-".$time[2];
		return $dateText;
	}
//วันเวลา
function getTIME()
	{
		return date("Y-m-d H:i:s");
	}

//วัน
function _getDate()
	{
		return date("Y-m-d");
	}

//ลบวัน
function day_diff($first_date,$second_date)
	{
		 $first_date = strtotime($first_date);
		 $second_date = strtotime($second_date);

		 $time_diff = $second_date-$first_date;
		 $day_diff = $time_diff/86400;
		 return 	$day_diff;
	}

//เพิ่มวัน
function day_sum($first_date,$num)
	{
		 $first_date = strtotime($first_date);
		 $day_sum = $first_date+(86400*$num);
		 return 	$day_sum;
	}

/* ---------------------------------------------------------------------- *\
  Function		:	For images
  Description	:	จัดการรูปภาพ
  Usage			:
  Arguments	:	ไม่มี
\* ---------------------------------------------------------------------- */

//ส่งค่าของ Size ของรูปภาพและขนาด
/*
		array[0]		กว้าง
		array[1]		ยาว
		array[2]		กว้าง*ยาว ออกมาในรูปของ width=500 height=500
		array[3]		ขนาดเป็น byte
		array[4]		ขนาดเป็น kb ปัดค่าเศษขึ้น
		array[5]		ขนาดเป็น mb ค่าเศษ 2 ตำแหน่ง
		array[6]		ชนิดของรูป

		fn จะทำการส่งค่ากลับมาเป็น array แต่ถ้า fn ส่งค่ามาเป็น 1 หมายความว่าไฟล์ที่ระบุไม่มีเป็นค่าว่าง ถ้าเป็น 2 หมายความว่าไฟล์ไม่ใช่ไฟล์รูปภาพ

*/

function oneImg($Imgs){
	$imgs=explode(",",$Imgs);

	for($i=0;$i<count($imgs);$i++){
		if($imgs[$i]){
			$img=$imgs[$i];
			$i=count($imgs);
		}
	}

	return $img;
}

//Random One Img
function ROI($Imgs){
	$imgs=explode(",",$Imgs);
	$img=$imgs[rand(0,count($imgs)-1)];
	/*for($i=0;$i<count($imgs);$i++){
		if($imgs[$i]){
			$img=$imgs[$i];
			$i=rand(count($imgs));
		}
	}*/

	return $img;
}

function _IMGZ($_objIMG)
	{
		$img=array();
		$type=array("","gif", "jpg","png","swf","psd","bmp","tiff"," tiff","jpc","jp2","jpx","jb2","swc","iff","wbmp", "xbm");

		/*if(is_file($_objIMG))
			{*/
				list($img[0],$img[1],$tmp,$img[2])=GetimageSize($_objIMG);

				if($tmp>=1 && $tmp<=16)
					{
						$img[3]=filesize($_objIMG);
						$img[4]=ceil((filesize($_objIMG)/1024)/1024);
						$img[5]=number_format((filesize($_objIMG)/1024)/1024,2);
						$img[6]=$type[$tmp];
						return $img;
					}else{return 2;}

			//}else{return 1;}
	}

function ResizeFileW($newSize,$file,$newName,$quality)
		{
			$chk=false;

			$images = $file;
			//กำหนดความกว้างของรูปใหม่ ความสูงจะปรับเอง
			// เพราะโปรแกรมจะทำการคำรวณความสูงให้พอดีกับขนาดของรูปที่ได้ทำการ Resize
			$width=$newSize;
			$size=GetimageSize($images);

					//<--สลับตำแหน่ง size[1] size[0]
					$height=round($width*$size[1]/$size[0]);

			//$images_orig = ImageCreateFromJPEG($images);

			//ตรวจสอบชนิดของรูป
			//$images_orig = ($size[2] == 1) ? imagecreatefromgif($images) : imagecreatefromjpeg($images);
			switch($size[2])
				{
					case 1:{$images_orig =  imagecreatefromgif($images);break;}
					case 2:{$images_orig =  imagecreatefromjpeg($images);break;}
					case 3:{$images_orig =  imagecreatefrompng($images);break;}
				}


			$photoX = ImagesX($images_orig);
			$photoY = ImagesY($images_orig);

			$transColor=imagecolorclosest($images_orig, 0, 0, 0);
			imagecolortransparent($images_orig, $transColor);

			$images_fin = ImageCreateTrueColor($width, $height);
			ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);

			// ชื่อไฟล์ใหม่
			if(ImageJPEG($images_fin,$newName,$quality)){$chk=true;}else{$chk=false;}

			ImageDestroy($images_orig);
			ImageDestroy($images_fin);
			return $chk;
		}

	function ResizeFileH($newSize,$file,$newName,$quality)
		{
			$images = $file;
			//กำหนดความสูงของรูปใหม่ ความกว้างจะปรับเอง
			// เพราะโปรแกรมจะทำการคำรวณความกว้างให้พอดีกับขนาดของรูปที่ได้ทำการ Resize
			$height=$newSize;
			$size=GetimageSize($images);

			//ตรวจสอบว่าขนาดของรูปน้อยกว่าที่กำหนดไหม
			if($height>$size[1])
				{
					$width=$size[0];
					$height=$size[1];
				}
			else
				{
					//<--สลับตำแหน่ง size[1] size[0]
					$width=round($height*$size[0]/$size[1]);
				}

			//$images_orig = ImageCreateFromJPEG($images);

			//$images_orig = ($size[2] == 1) ? imagecreatefromgif($images) : imagecreatefromjpeg($images);
			switch($size[2])
				{
					case 1:{$images_orig =  imagecreatefromgif($images);break;}
					case 2:{$images_orig =  imagecreatefromjpeg($images);break;}
					case 3:{$images_orig =  imagecreatefrompng($images);break;}
				}

			$photoX = ImagesX($images_orig);
			$photoY = ImagesY($images_orig);

			$transColor=imagecolorclosest($images_orig, 0, 0, 0);
			imagecolortransparent($images_orig, $transColor);

			$images_fin = ImageCreateTrueColor($width, $height);
			ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);

			// ชื่อไฟล์ใหม่
			if(ImageJPEG($images_fin,$newName,$quality)){return true;}else{return false;}

			ImageDestroy($images_orig);
			ImageDestroy($images_fin);
		}

function FixResize($newSize,$file,$NewName,$quality)
		{
			//ปรับความสูงของไฟล์

			//หาขนาดของไฟล์
			$size=GetimageSize($file);

			//ดึงค่าขนาดของไฟล์จริง
			$width=$size[0];		# กว้าง
			$height=$size[1];	# สูง

			//หาค่า % จากการย่อโดยใช้ค่าที่กำหนดมาเป็นตัวตั้ง ($newSize)
			$tmp_height=round(($newSize*100)/$height);	#round()  ปัดค่าลงให้เป็นจำนวนเต็ม เช่น 4.3 = 4
			$tmp_width=round(($newSize*100)/$width);	#round()  ปัดค่าลงให้เป็นจำนวนเต็ม เช่น 4.3 = 4

			//echo "จากกำหนดความสูง $newSize คิด % จากความสูง $height ได้เท่ากับ =".$tmp_height." %<br>";
			//echo "จากกำหนดความกว้า $newSize คิด % จากความกว้าง $width ได้เท่ากับ =".$tmp_width." %<br>";

			//ทำการย่อรูป
			//echo $width." ".$newSize." ".$height;
			//echo "นำเอาค่าที่ได้จากการหา % จากความสูงมากคิดกับความกว้างจะได้เท่ากับ ".($tmp_height/100)*$width;

			if($width<=$newSize && $height<=$newSize)
				{
					//echo "ขนาดรูปพอดี";
					/*if(!copy($file,$NewName)){echo "ไม่สามารถ Copy รูปภาพได้";}
					else{return true;}*/
					return ResizeFileIMG($width,$height,$file,$NewName,$quality);

				}
			elseif(($tmp_height/100)*$width>$newSize)
				{
					//echo "ความกว้างที่ได้มีค่ามากกว่าความสูง";
					return ResizeFileW($newSize,$file,$NewName,$quality);
				}
			else
				{
					//echo "ความย่อส่วนของความสูงให้มีขนาดพอดี";
					return ResizeFileH($newSize,$file,$NewName,$quality);
				}
			//------------------------------------------------------------

		}

function ResizeFileIMG($newSize_Width,$newSize_Hight,$file,$newName,$quality)
	{
		$images = $file;
		$width=$newSize_Width;
		$height=$newSize_Hight;
		$size=GetimageSize($images);


		//$images_orig = ImageCreateFromJPEG($images);

		//$images_orig = ($size[2] == 1) ? imagecreatefromgif($images) : imagecreatefromjpeg($images);
		switch($size[2])
			{
				case 1:{$images_orig =  imagecreatefromgif($images);break;}
				case 2:{$images_orig =  imagecreatefromjpeg($images);break;}
				case 3:{$images_orig =  imagecreatefrompng($images);break;}
			}

		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);

		$transColor=imagecolorclosest($images_orig, 0, 0, 0);
		imagecolortransparent($images_orig, $transColor);

		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);

		// ชื่อไฟล์ใหม่
		if(ImageJPEG($images_fin,$newName,$quality)){return true;}else{return false;}

		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
	}
/* ---------------------------------------------------------------------- *\
  Function		:	For File Manager
  Description	:	จัดการไฟล์
  Usage			:
  Arguments	:	ไม่มี
\* ---------------------------------------------------------------------- */


function delFile($path)
	{
		if(@file_exists($path))
			{
				if(@unlink($path)){return true;}
			}
	}

	function crateFolder($path,$mode)
	{
		/*
		some examples:
		drwxr-xr-x => 755
		drwxr-xr-x => 755
		dr-xr-xr-x => 555
		drwxr-xr-x => 755
		drwxr-xr-x => 755
		drwxr-xr-x => 755
		drwxr-xr-x => 755
		drwxrwxrwt => 776
		drwxr-xr-x => 755
		drwxr-xr-x => 755
		lrwxrwxrwx => 777
		*/
		if(!is_dir($path))
			{
				if(!mkdir($path,$mode))
					{return false;}else{return true;}
			}
		else{return "Found";}
	}

function remove_directory($dir)
	{
		 if($dir!="../" && $dir!=".." && $dir!="." && $dir!="./")
			{
		 if(substr($dir, -1, 1) == "/"){
		   $dir = substr($dir, 0, strlen($dir) - 1);
		 }
		 if (@$handle = opendir("$dir")) {
		   while (false !== ($item = readdir($handle))) {
			 if ($item != "." && $item != "..") {
			   if (is_dir("$dir/$item")) { remove_directory("$dir/$item");  }
			   else { unlink("$dir/$item"); }
			 }
		   }
		   closedir($handle);
		   rmdir($dir);
		 }
			}
   }

function _getType($objType)
	{
		$aType=array();
		$chk=false;

		//Make Array File Type
		$aType[0]="image/jpeg:jpg";
		$aType[1]="application/vnd.ms-excel:xls";
		$aType[2]="application/msword:doc";
		$aType[3]="application/x-zip-compressed:zip";
		$aType[4]="application/pdf:pdf";
		$aType[5]="application/vnd.openxmlformats-officedocument.wordprocessingml.document:docx";
		$aType[6]="application/txt:txt";
		$aType[7]="application/x-shockwave-flash:swf";
		$aType[8]="text/plain:txt";
		$aType[9]="image/x-png:png";
		$aType[10]="image/gif:gif";
		$aType[11]="video/3gpp:3gp";
		$aType[12]="video/x-ms-wmv:wmv";
		$aType[13]="audio/mpeg:mp3";
		$aType[14]="audio/wav:wav";
		$aType[15]="application/octet-stream:rar";
		$aType[16]="application/x-msdownload:exe";
		$aType[17]="application/vnd.ms-powerpoint:ppt";
		$aType[18]="application/vnd.openxmlformats-officedocument.presentationml.presentation:pptx";
		$aType[19]="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet:xlsx";
		for($x=0;$x<=count($aType)-1;$x++)
			{
				$tmp=explode(":",$aType[$x]);
				if($tmp[0]==$objType)
					{
						return $tmp[1];
						exit();
					}
			}

		return 0;

	}

//หาไฟล์ที่ระบบเปิดอยู่
function FileRUN()
	{
		//หาไฟล์ที่เปิดอยู่
		$tmp=explode("/",$_SERVER["PHP_SELF"]);
		return $tmp[count($tmp)-1];
	}

//เรียดูข้อมูลในตารางแล้วนำข้อมูลที่ได้มาต่อกันด้วยเครื่องหมาย ,
function FileStr($filed,$table,$condition)
	{
		$strName="";
		if(empty($condition))
			{
				$sql="select $filed from $table";
			}
		else
			{
				$sql="select $filed from $table where ".$condition;
			}

	$_result=mysql_query($sql);
	while($_row=mysql_fetch_array($_result))
		{
			$strName.=$_row[$filed].",";
		}
	if(strlen($strName)>0){return substr($strName,0,strlen($strName)-1);}
	else{return null;}
}

//ค้นหาไฟล์แล้วทำการเปรียบเทียบกับไฟล์ที่เก็บในฐานข้อทูล ถ้าไม่มีในฐานข้อมูลก็จะถูกลบออกไป
//ใช้ร่วมกับ fn FileStr()
function compareDB2IMG($fieldStr,$folder)
	{
		//ตรวจสอบว่ามีรายชื่อไฟล์ส่งมาหรือไม่
		if(strlen($fieldStr)==0){echo "<br>String Not Found<br>";return false;}

		//ตรวจสอบห้องว่ามีหรือไม
		if(!is_dir($folder)){echo "<br>Directory Not Found<br>";return false;}

		//ตัดค่าจาก $fieldStr ให้อยู่ในรูปของ Array
		$fieldArray=explode(",",$fieldStr);

		//เปิดห้องที่ต้องการตรวจสอบ

		#-----------------------
		$countFound=0;
		$countNotFound=0;
		$chkFound=false;
		#-----------------------

		$d = dir($folder);
		while (false !== ($entry = $d->read()))
			{
				if($entry!="." && $entry!="..")
					{
						for($x=0;$x<=count($fieldArray)-1;$x++)
							{
								if($fieldArray[$x]==$entry)
									{
										$countFound++;
										$chkFound=true;
									}
								if($chkFound){break;}
							}
						if($chkFound){$chkFound=false;}
							else
								{
									$countNotFound++;
									if(is_file("$folder/$entry"))
										{
											if(!unlink("$folder/$entry")){echo "<br>Can't Delete File $folder/$entry<br>";}
										}
								}
					}
			}
		$d->close();
	}

//ลบไฟล์ที่อยู่ใน Field ที่ต้องการ
function delFieldIMG($table,$fieldName,$condition,$imgPath)
	{
		$sql="select $fieldName from $table";
		$sql.=$condition!=""?" where $condition":"";

		if(!$_result=mysql_query($sql)){echo "Check SQL : $sql";}
		elseif(mysql_num_rows($_result)>0){
		$_row=mysql_fetch_array($_result);
		if(is_file("$imgPath/$_row[$fieldName]"))
			{

				if(unlink("$imgPath/$_row[$fieldName]")){return true;}else{return false;}
			}}
	}

/* ---------------------------------------------------------------------- *\
  Function		:	Check Compatible
  Description	:	ตรวจสอบความเท่ากัน
  Usage			:
  Arguments	:	ไม่มี
\* ---------------------------------------------------------------------- */

function comP($x,$y,$txt)
	{
		if($x==$y){echo $txt;}
	}

function _comP($x,$y,$txt)
	{
		if($x==$y){return $txt;}
	}

//ตรวจสอบ email
function checkEmail($email) {
   if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)){
      return false;
   }

   list($Username, $Domain) = split("@",$email);

   if(@getmxrr($Domain, $MXHost)){
      return TRUE;
   }else{
      if(@fsockopen($Domain, 25, $errno, $errstr, 30)){
         return TRUE;
      }else {
         return FALSE;
      }
   }
}

function CheckEmail1($email)
	{
		return preg_match('/^[a-zA-Z0-9][a-zA-Z0-9-_.\s]+@[a-zA-Z0-9-\s].+\.[a-zA-Z]{2,5}$/',$email);
	}

function CheckEmail2($email)
	  {
		// checks proper syntax
		return preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" , $email);
	  }
 /* strip_selected_tags ( string str [, string strip_tags[, strip_content flag]] )
     * ---------------------------------------------------------------------
     * Like strip_tags() but inverse; the strip_tags tags will be stripped, not kept.
     * strip_tags: string with tags to strip, ex: "<a><p><quote>" etc.
     * strip_content flag: TRUE will also strip everything between open and closed tag
     */
   function strip_selected_tags($str, $tags = "", $stripContent = false)
   {
       preg_match_all("/<([^>]+)>/i",$tags,$allTags,PREG_PATTERN_ORDER);
       foreach ($allTags[1] as $tag){
           if ($stripContent) {
               $str = preg_replace("/<".$tag."[^>]*>.*<\/".$tag.">/iU","",$str);
           }
           $str = preg_replace("/<\/?".$tag."[^>]*>/iU","",$str);
       }
       return $str;
   }

function filterText($str,$tags)
	{
		$str=strip_selected_tags($str, $tags, $stripContent = false);
		$str=addslashes($str);
		return $str;
	}

/* ---------------------------------------------------------------------- *\
  Function		:	Javascript Add on
  Description	:	เรียกใช้ Javascript
  Usage			:
  Arguments	:	ไม่มี
\* ---------------------------------------------------------------------- */

function PHPalert($text)
  {
	echo '<script language="JavaScript">';
	echo "alert(\"".$text."\");";
	echo '</script>';
  }

 function PHPconfirm($text,$url)
  {
	echo '<script language="JavaScript">';
	echo "if(!confirm(\"$text\")){window.location.href=\"$url\";}";
	echo '</script>';
  }

  function PHPgourl($text)
  {
	echo '<script language="JavaScript">';
	echo 'window.location="'.$text.'";';
	echo '</script>';
  }

  function PHPmetaURL($url,$time)
  {
	echo "<meta http-equiv=\"refresh\" content=\"$time;URL=$url\">";
  }

  function PHPback()
  {
	echo '<script language="JavaScript">';
	echo 'history.back();';
	echo '</script>';
  }

 function PHPreload()
  {
	echo '<script language="JavaScript">';
	echo 'window.opener.location.reload();';
	echo '</script>';
  }

  function PHPclose()
  {
	echo '<script language="JavaScript">';
	echo 'window.close();';
	echo '</script>';
  }

   function PHPJavaScript($text)
  {
	echo '<script language="JavaScript">';
	echo $text;
	echo '</script>';
  }



/* ---------------------------------------------------------------------- *\
  Function		:	Randon
  Description	:	สุ่มตัวอักษร
  Usage			:
  Arguments	:	ไม่มี
\* ---------------------------------------------------------------------- */
//ชื่อนามสกุลไฟล์รูป
 function img($PIC)
		  {
		  $x=getimagesize($PIC);
			if($x[2]>0 and $x[2]<17)
			{
				if($x[2]==1){$type="gif";}
				elseif($x[2]==2){$type="jpg";}
				elseif($x[2]==3){$type="png";}
				elseif($x[2]==4){$type="swf";}
				elseif($x[2]==5){$type="psd";}
				elseif($x[2]==6){$type="bmp";}
				elseif($x[2]==7){$type="tiff";}
				elseif($x[2]==8){$type="tiff";}
				elseif($x[2]==9){$type="jpc";}
				elseif($x[2]==10){$type="jp2";}
				elseif($x[2]==11){$type="jpx";}
				elseif($x[2]==12){$type="jb2";}
				elseif($x[2]==13){$type="swc";}
				elseif($x[2]==14){$type="iff";}
				elseif($x[2]==15){$type="wbmp";}
				else{$type="xbm";}
				return $type;
				return true;
				}
				else
				{
				return false;
				}
			}

//สุ่มตัวเลขตามกำหนด
	function ranNum($num)
	{
		$tmp="";
		for($x=1;$x<=$num;$x++)
			{
				$tmp=$tmp.chr(rand(48,57));
			}
		return $tmp;
	}

//สุ่มตัวอักษรตามกำหนด
function ranTEXT($text,$count)
	{
		$newText="";
		if(strlen($text)>0)
			{
			  for($x=1;$x<=$count;$x++)
					{
						$newText.=substr($text,rand(0,strlen($text)-1),1);
					}
				return $newText;
			}
		else{echo "ระบุตัวอักษรที่ต้องการ";}
	}
//สุ่มตัวอักษรตามกำหนด
function ranTEXT2($count)
	{
		$newText="";
		  for($x=1;$x<=$count;$x++)
				{
					$newText.=chr(rand(97,122));
				}
			return $newText;
	}

//สุ่มเลขและตัวอักษร
function ran_all($num)
	{
		for($x=1;$x<=$num;$x++)
			{
				if(rand(1,2)==2)
					{
						$text=$text.chr(rand(48,57));
					}
				else
					{
						$text=$text.chr(rand(97,122));
					}
			}
		return $text;
	}

//สุ่มค่าจากฐานข้อมูล โดยสุ่มไม่ซ้ำ
function randb($countdb,$num)
	{
		$tmp = array();
		$run_array=0;
		$chk=false;

		if($num>$countdb){$num=$countdb;}


		while($run_array<$num)
			{
				$_ran=rand(0,$countdb-1);

				for($x=0;$x<=count($tmp)-1;$x++)
					{
						if($_ran==$tmp[$x]){$chk=true;break;}
					}

				if($chk==false)
					{
						$tmp[$run_array]=$_ran;
						$run_array++;
					}
				$chk=false;
			}
		return $tmp;

	}


/* ---------------------------------------------------------------------- *\
  Function		:	จัดการตัวอักษร
  Description	:
  Usage			:
  Arguments	:	ไม่มี
\* ---------------------------------------------------------------------- */
function db2html($text)
	{
		$text=str_replace(" ","&nbsp;",$text);
		$text=str_replace(chr(13),"<br>",$text);
		echo $text;
	}

function _db2html($text)
	{
		$text=str_replace(" ","&nbsp;",$text);
		$text=str_replace(chr(13),"<br>",$text);
		return $text;
	}

//เพิ่มเครื่องหมาย / เข้าไป
function _ads($text)
	{
		return addslashes($text);
	}

//ลบเครื่องหมาย /
function _rms($text)
	{
		return stripslashes($text);
	}
/* ---------------------------------------------------------------------- *\
  Function		:	For mysql
  Description	:	จัดการฐานข้อมูล mysql
  Usage			:
  Arguments	:	ไม่มี
\* ---------------------------------------------------------------------- */

//ตรวจสอบจำนวนของข้อมูล
function CountDB($sql)
	{
		$result=mysql_query($sql);
		return mysql_num_rows($result);
	}

//ตรวจสอบค่าสูงสุดในตาราง
function maxID($filed,$table,$condition) {

	if(empty($condition))
	{
		$sql="select MAX($filed) from $table";
	}else
	{
		$condition=" where ".$condition;
		$sql="select MAX($filed) from $table".$condition;
	}

	$result=mysql_query($sql);
	if(@mysql_num_rows($result)>0){
		$row=mysql_fetch_row($result);
		return $row[0];
	}else{return 0;}
}

//ตรวจสอบค่าซ้ำในฐานข้อมูล ส่งค่า True กลับ เมื่อซ้ำ
function check_repeatSQL($table,$fild,$check)
	{
		$sql="Select count($fild) from $table where $fild='$check'";
		$result=mysql_query($sql);
		$row=mysql_fetch_row($result);
		return $row[0]>0?true:false;
	}

//ทำการ query โดยไม่หวังผลลัพ แต่จะตรวจสอบว่าประมวลผลผ่านหรือไม่ ส่งค่า True กลับเมื่อประมวลผลผ่าน
function RunSQL($sql)
	{
		$result=mysql_query($sql);
		return $result==true?true:false;
	}

//ทำการ query และส่งค่าที่ประมวลผลได้กลับ
function _RunSQL($sql)
	{
		return mysql_query($sql);
	}
//ทำการ query และส่งค่าที่ประมวลผลได้กลับ
function _RunSQLarr($sql)
	{
		$result=mysql_query($sql);
		return mysql_fetch_array($result);
	}
//ทำการ return ค่าโดยสามารถระบุตำแหน่งของ field ได้
function _SeekTo($result,$index)
	{
		if($result)
			{
				mysql_data_seek($result,$index);
				return mysql_fetch_assoc($result);
			}
		else{echo "ประมวลผลไม่ผ่าน ตรวจสอบ คำสั่ง SQL หรือตรวจสอบการติดต่อฐานข้อมูล";return false;}
	}

function SQLnum($sql)
	{
		if(!empty($sql))
			{
				$result=mysql_query($sql);
				if($result)
					{
						return mysql_num_rows($result);
					}
				else{echo "ไม่สามารถติดต่อฐานข้อมูลได้";}
			}
	}

//Convert
function tis620_to_utf8($text) {
  $utf8 = "";
  for ($i = 0; $i < strlen($text); $i++) {
    $a = substr($text, $i, 1);
    $val = ord($a);

    if ($val < 0x80) {
      $utf8 .= $a;
    } elseif ((0xA1 <= $val && $val < 0xDA) || (0xDF <= $val && $val <= 0xFB)) {
      $unicode = 0x0E00+$val-0xA0;
      $utf8 .= chr(0xE0 | ($unicode >> 12));
      $utf8 .= chr(0x80 | (($unicode >> 6) & 0x3F));
      $utf8 .= chr(0x80 | ($unicode & 0x3F));
    }
  }
  return $utf8;
}

function utf8_to_tis620($string) {
  $str = $string;
  $res = "";
  for ($i = 0; $i < strlen($str); $i++) {
    if (ord($str[$i]) == 224) {
      $unicode = ord($str[$i+2]) & 0x3F;
      $unicode |= (ord($str[$i+1]) & 0x3F) << 6;
      $unicode |= (ord($str[$i]) & 0x0F) << 12;
      $res .= chr($unicode-0x0E00+0xA0);
      $i += 2;
    } else {
      $res .= $str[$i];
    }
  }
  return $res;
}

function array_trim ( $array, $index ) {
   if ( is_array ( $array ) ) {
     unset ( $array[$index] );
     array_unshift ( $array, array_shift ( $array ) );
     return $array;
     }
   else {
     return false;
     }
   }

 /*เปลี่ยนค่า Permissions ของ Folder*\
รูปแบบ servername:username:password เช่น

chmodFolder("202.151.177.37:darawan:hT2NbR2r","/public_html/uploads/2007-05-16_19-50-31","0777");

\*-------------------------------------*/
function chmodFolder($connect,$path,$mode)
	{
		//แยกตัวแปร
		list($server,$name,$password)=explode(":",$connect);

		// ftp configuration:
		$ftp['server']=$server;
		$ftp['username']=$name;
		$ftp['userpassword']=$password;

		// connect to ftp:
		$conn_id = ftp_connect($ftp['server']);

		$login_result = ftp_login($conn_id, $ftp['username'], $ftp['userpassword']);

		// set mode for the folder "uploads"
		$chmod_cmd="CHMOD $mode "."$path";

		if (!ftp_site($conn_id, $chmod_cmd)){ftp_close($conn_id);return false;}
		else{ftp_close($conn_id);return true;}
	}

/*ดึงไฟล์จากห้อง*/
function _filedir($path)
	{
		if(is_dir($path))
			{
		$tmp=array();
		$d = dir($path);
		$x=0;
		while (false !== ($entry = $d->read()))
			{
				if($entry!=".." && $entry!=".")
					{
						if(is_file("$path/$entry"))
							{
								$tmp[$x]=$entry;
								$x++;
							}
					}
			}
		$d->close();
		return $tmp;
			}else{return false;}
	}

function null2line($text)
  {
    $text=str_replace(" ","_",$text);
	return $text;
  }

 /*ตัดรูปออกจาก Code  Html*\

\*-------------------------------------*/
function splitIMG($codeHtml)
	{
		if(preg_match_all('/src="(.*?)"/i', $codeHtml, $image)){return $image[1];}
		else{return false;}
	}

function getTableFiled($TableName,$KeyFiled,$IdFiled,$ValueFiled,$ReturnVariable,$orderby)
	{
		$mText="";

		if(strlen($ReturnVariable)==0){$textReturn="noVariable";}

		if(!empty($KeyFiled))
			{
				$sql="select $IdFiled,$KeyFiled,$ValueFiled from $TableName order by $orderby";
				$result=mysql_query($sql);
				$num=mysql_num_rows($result);

				if($num>0)
					{
						for($x=0;$x<=($num-1);$x++)
							{
								$row=mysql_fetch_array($result);
								$mText.=$row[$KeyFiled].":".$row[$IdFiled].":".addslashes($row[$ValueFiled]).",";
							}

						$mText=substr($mText,0,strlen($mText)-1);

					}
			}

		return "var ".$ReturnVariable."=\"".$mText."\";\r\n";

	}

//ตัดรูป ให้มีขนาดตามต้องการ
// สร้าง thumbnail ตัดส่วนที่เกิน เพื่อให้ได้ขนาดที่กำหนด
function cropImage( $source , $target , $thumbwidth , $thumbheight )
{
 	$size = getimagesize( $source );
    $w = $size[0];
    $h = $size[1];

 switch ( $size[mime] )
 {
  case 'image/gif':
   $o_im = imageCreateFromGIF( $source );
   break;
  case 'image/jpeg':
   $o_im = imageCreateFromJPEG( $source );
   break;
  case 'image/png':
   $o_im = imageCreateFromPNG( $source );
   break;
  default:
   $error = $size[mime].' ไม่รองรับ.';
   break;
 };

 if ( $error == '' )
 {
  $wm = $w / $thumbwidth;
  $hm = $h / $thumbheight;
  $h_height = $thumbheight / 2;
  $w_height = $thumbwidth / 2;

  $t_im = ImageCreateTrueColor( $thumbwidth , $thumbheight );

  if( $w > $h )
  {
   $adjusted_width = $w  / $hm;
   $half_width = $adjusted_width / 2;
   $int_width = $half_width - $w_height;
   ImageCopyResampled( $t_im , $o_im , -$int_width , 0 , 0 , 0 , $adjusted_width , $thumbheight , $w , $h );
  }
  elseif ( ( $w < $h ) || ( $w == $h ) )
  {
   $adjusted_height = $h / $wm;
   $half_height = $adjusted_height / 2;
   $int_height = $half_height - $h_height;
   ImageCopyResampled( $t_im , $o_im , 0 , -$int_height , 0 , 0 , $thumbwidth , $adjusted_height , $w , $h );
  }
  else
  {
   ImageCopyResampled( $t_im , $o_im , 0 , 0 , 0 , 0 , $thumbwidth , $thumbheight , $w , $h );
  };

  if ( !@ImageJPEG( $t_im , $target ) )
  {
   $error = "ไม่สามารถสร้างรูปได้, ตรวจสอบไดเร็คทอรี่ให้ถูกต้อง";
  };

  imageDestroy( $o_im );
  imageDestroy( $t_im );
 };

 return $error;
}

function encrypt($string, $key) {
   $result = '';
   for($i=0; $i<strlen($string); $i++) {
     $char = substr($string, $i, 1);
     $keychar = substr($key, ($i % strlen($key))-1, 1);
     $char = chr(ord($char)+ord($keychar));
     $result.=$char;
   }

   return base64_encode($result);
  }

  function decrypt($string, $key) {
   $result = '';
   $string = base64_decode($string);

   for($i=0; $i<strlen($string); $i++) {
     $char = substr($string, $i, 1);
     $keychar = substr($key, ($i % strlen($key))-1, 1);
     $char = chr(ord($char)-ord($keychar));
     $result.=$char;
   }

   return $result;
  }

  //ฟังก์ชั่นในการลบตัว \ ออกเพื่อให้แสดงผลได้ถุกต้อง
function FixQuotes ($what = "") {
        $what = ereg_replace("'","''",$what);
        while (eregi("\\\\'", $what)) {
                $what = ereg_replace("\\\\'","'",$what);
        }
        return $what;
}

//แปลงเวลาเป็นภาษาไทย
function ThaiTimeConvert($timestamp="xxx",$full="",$showtime=""){
	global $SHORT_MONTH, $FULL_MONTH, $DAY_SHORT_TEXT, $DAY_FULL_TEXT;
	$day = date("l",$timestamp);
	$month = date("n",$timestamp);
	$year = date("Y",$timestamp);
	$time = date("H:i:s",$timestamp);
	$times = date("H:i",$timestamp);

	if($full){
		$ThaiText = $DAY_FULL_TEXT[$day]." ที่ ".date("j",$timestamp)." เดือน ".$FULL_MONTH[$month]." พ.ศ.".($year+543) ;
	}else{
		$ThaiText = date("j",$timestamp)." / ".$SHORT_MONTH[$month]." / ".($year+543);
	}

	if($showtime == "1"){
		return $ThaiText." เวลา ".$time;
	}else if($showtime == "2"){
		$ThaiText = date("j",$timestamp)." ".$SHORT_MONTH[$month]." ".($year+543);
		return $ThaiText." : ".$times;
	}else{
		return $ThaiText;
	}
}

function checkfile($filename)
{
	if($filename == "application/pdf")	{    $exp=".pdf";	 }
	 else  if($filename == "application/msword")	{  $exp=".doc";  }
	 else  if($filename== "application/vnd.ms-excel")	{  $exp=".xls";   }
	 else  if($filename== "application/vnd.ms-powerpoint")	{  $exp=".ppt";   }
     else  if($filename== "application/vnd.visio")	{  $exp=".vsd";   }
	 else if($filename == "image/x-png")	{    $exp=".png";	 }
	else if($filename == "image/bmp")	{    $exp=".bmp";	 }
	else  if($filename== "image/pjpeg")	{  $exp=".jpg";   }
	else if($filename== "image/jpeg")	{  $exp=".jpg";   }
    else  if($filename == "image/gif")	{  $exp=".gif";   }
	else  if($filename == "application/x-shockwave-flash"){  $exp=".swf";   }
	return $exp;
}

function detectBrowser() {
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);

   if (preg_match('/opera/', $userAgent)) {
            $name = 'opera';
    }
   elseif (preg_match('/webkit/', $userAgent)) {
            $name = 'safari';
   }
   elseif (preg_match('/msie/', $userAgent)) {
            $name = 'msie';
   }
   elseif (preg_match('/mozilla/', $userAgent) && !preg_match('/compatible/', $userAgent)) {
            $name = 'mozilla';
   }
   else {
            $name = 'unrecognized';
   }

   if (preg_match('/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/', $userAgent, $matches)) {
            $version = $matches[1];
   }
   else {
            $version = 'unknown';
   }

   if (preg_match('/linux/', $userAgent)) {
            $platform = 'linux';
   }
   elseif (preg_match('/macintosh|mac os x/', $userAgent)) {
            $platform = 'mac';
   }
   elseif (preg_match('/windows|win32/', $userAgent)) {
            $platform = 'windows';
   }
   else {
            $platform = 'unrecognized';
   }

    return array(
            'name'      => $name,
            'version'   => $version,
            'platform'  => $platform,
            'userAgent' => $userAgent
    );
}
function currentPageURL($uri="") {
    $curpageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$curpageURL.= "s";}
    $curpageURL.= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
    	$curpageURL.= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
    } else {
    	$curpageURL.= $_SERVER["SERVER_NAME"];
    }
	if($uri=="")
	{
		$curpageURL.=$_SERVER["REQUEST_URI"];
	}
    return $curpageURL;
}
function _getCurFile()
{
	return basename($_SERVER["SCRIPT_FILENAME"], '.php');
}

function checkID($id) {

	if(strlen($id) != 13){
		return false;
	}

	for($i=0, $sum=0; $i<12;$i++){
		$sum += (int)($id{$i})*(13-$i);
	}

	if((11-($sum%11))%10 == (int)($id{12})){
		return true;
	}else{
		return false;
	}

}
function RSC($txt){ //Replace Special Characters in HTML
	$txt = str_replace("'","&#39;",$txt);
	$txt = str_replace("!","&#33;",$txt);
	$txt = str_replace("’","&rsquo;",$txt);
	$txt = str_replace("‘","&lsquo;",$txt);
	$txt = str_replace('“',"&ldquo;",$txt);
	$txt = str_replace('”',"&rdquo;",$txt);

	return $txt;
}

function watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile) {
   list($width, $height) = getimagesize($SourceFile);
   $image_p = imagecreatetruecolor($width, $height);
   $image = imagecreatefromjpeg($SourceFile);
   imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height);
   $black = imagecolorallocate($image_p, 0, 0, 0);//กำหนดสี
   $font = 'tahoma.ttf';//กำหนดชื่อฟอนต์
   $font_size = 14; //กำหนดขนาดฟอนต์
   imagettftext($image_p, $font_size, 0, 30, 500, $black, $font, $WaterMarkText);
   //อธิบาย imagettftext($image_p,ขนาดฟอนต์,องศ์ษา,แนวนอน,แนวตั้ง,สี,ชื่อฟอร์ตที่ใช้,ข้อความ);
   if ($DestinationFile<>'') {
      imagejpeg ($image_p, $DestinationFile, 100);
   } else {
      header('Content-Type: image/jpeg');
      imagejpeg($image_p, null, 100);
   };
   imagedestroy($image);
   imagedestroy($image_p);
};

function left($str, $length) {
//echo left("Hello World", 5); // Hello
     return substr($str, 0, $length);
}

function right($str, $length) {
//echo right("Hello World", 5); // World
     return substr($str, -$length);
}

function RunNum($num,$n){
	return sprintf('%0'.$n.'d', $num+1);
}
// กรณีวันเกิดที่เก็บอยู่ในรูปแบบของ date แบบมาตรฐาน คือ ปี ค.ศ.- เดือน - วันที่
// ตัวอย่าง 1990-02-14
// ฟังก์ชันคำนวณหาอายุใช้ดังนี้
function getAge1($birthday) {
$then = strtotime($birthday);
return(floor((time()-$then)/31556926));
}
// การใช้งาน
//$dateB="1990-02-14"; // ตัวแปรเก็บวันเกิด
//echo getAge1($dateB);
// ผลลัพธ์จะได้ 19


// กรณีวันเกิดที่เก็บสามารถแยกออกเป็นแต่ละส่วน เช่นปี ค.ศ. เดือน และ วัน
// ตัวอย่าง ปีเกิด 1990 เดือนเกิด 2 (กุมภาพันธ์)  วันที่ 14
// ฟังก์ชันคำนวณหาอายุใช้ดังนี้
function getAge2($year,$month,$day) {
$then = mktime(1,1,1,$month,$day,$year);
return(floor((time()-$then)/31556926));
}
// การใช้งาน
//echo getAge2(1990,2,14);
// ผลลัพธ์จะได้ 19

function getAge3($birthday) {
$then = explode('-',$birthday);
$then = $then[0];
$now = date('Y');
return $now-$then;
}

//ฟังก์ชัน PHP แปลงตัวเลขอาราบิก เป็น ตัวเลขไทย อย่างง่าย
function thainumDigit($num){
    return str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
	array( "๐" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),
    $num);
}

?>
