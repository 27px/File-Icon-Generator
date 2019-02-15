<?php
  //GET[]
  //ext=File Extension
  //light=Light Color of Ribbon //hexcode
  //dark=Dark Color of Ribbon //hexcode
  //case=Case of Extension //upper,lower
  header("content-type:image/svg+xml");
  if(isset($_GET['ext'])&&($_GET['ext']!=""))
  {
    $extension=$_GET['ext'];
    if(isset($_GET['case'])&&($_GET['case']!=""))
    {
      $case=$_GET['case'];
      if($case=="upper")
      {
        $extension=strtoupper($extension);
      }
      else if($case=="lower")
      {
        $extension=strtolower($extension);
      }
    }
  }
  else
  {
    $extension="?";
  }
  $length=strlen($extension);
  if($length==1)
  {
    $x="55%";
  }
  else if($length==2)
  {
    $x="50%";
  }
  else if($length==3)
  {
    $x="45%";
  }
  else if($length==4)
  {
    $x="39%";
  }
  else if($length>=5)
  {
    $extension="?";
    $x="55%";
  }
  if(isset($_GET['light'])&&($_GET['light']!=""))
  {
    $light="#".$_GET['light'];
  }
  else
  {
    $light="#343C4F";
  }
  if(isset($_GET['dark'])&&($_GET['dark']!=""))
  {
    $dark="#".$_GET['dark'];
  }
  else
  {
    $dark="#1E2537";
  }
?>
<?xml version="1.0"?>
<svg style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<style type="text/css">
.paper
{
  fill:#E0E0E0;
  stroke:#B0B0B0;
  stroke-width:1px;
}
.fold,.shadow
{
  fill:#B0B0B0;
}
.light
{
  fill:<?php echo $light; ?>;
}
.dark
{
  fill:<?php echo $dark; ?>;
}
.ext
{
  fill:#FFFFFF;
  user-select:none;
}
</style>
<g>
<path class="paper" d="M363.8,103.7v304.6c0,14.8-12,26.9-26.9,26.9l0,0H140.5c-14.8,0-26.9-12-26.9-26.9l0,0V163.9l87.2-87.1h136.1 C351.8,76.8,363.8,88.8,363.8,103.7z"/>
<path class="fold" d="M113.7,163.9l87.1-87.1v60.4c0,14.8-12,26.8-26.8,26.8L113.7,163.9z"/>
<polygon class="shadow" points="363.8,309.1 363.8,400.4 196.6,400.4 140.2,385.5 113.7,385.5 113.7,324.1 140.2,324.1 140.2,324 196.6,309.1"/>
<path class="light" d="M196.6,298.3h194.1c11.9,0,21.6,9.7,21.6,21.6l0,0V368c0,11.9-9.7,21.6-21.6,21.6l0,0H196.6l0,0V298.3 L196.6,298.3z"/>
<polygon class="dark" points="196.6,389.6 140.2,374.6 140.2,313.2 196.6,298.3"/>
<rect class="light" height="61.4" width="40.6" x="99.7" y="313.3"/>
<polygon class="dark" points="99.7,313.3 113.7,305 113.7,313.3"/>
<polygon class="dark" points="99.7,374.6 113.7,383 113.7,374.6"/>
<text class="ext" x="<?php echo $x; ?>" y="72%" fill="#FFFFFF" font-size="65" font-family="arial black"><?php echo $extension; ?></text>
</g>
</svg>
