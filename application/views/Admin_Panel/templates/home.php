<!doctype html>
<html lang="en">

<head>
     <?php  if (isset($header)) echo $header; ?>

   </head>

<body class="sidebar-menu-collapsed">
  
<section>
         <!--Sidebar-->
    <?=(isset($sidebar)) ? $sidebar : ''; ?>
         <!--Top Navigation-->
    <?=(isset($top_navi)) ? $top_navi : ''; ?>
         <!-- main content start-->
    <div id="page-wrapper">
          <?=(isset($main_content)) ? $main_content : ''; ?>
         </div>
         
         </section>
    <?php if (isset($footer)) echo $footer; ?>
    
   </body>
   </html>