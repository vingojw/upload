<?php 

header("content-type:text/html;charset=utf-8");

date_default_timezone_set("PRC");

$pImg=$_FILES['file'];

//print_r($pImg);

if($pImg['error']==UPLOAD_ERR_OK){

  //取得扩展名
  $array = explode('.',$pImg['name']);
  $extName=strtolower($array[count($array)-1]);

  //echo $extName;

  $filename=date("Ymdhis").rand(100,999).".".$extName;

  //echo $filename;

  $dest="./uploads/".$filename;

  move_uploaded_file($pImg['tmp_name'],$dest);

  echo $dest;

}else{
  echo "上传错误";
}
?>