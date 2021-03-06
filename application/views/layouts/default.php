<!DOCTYPE html>
<html>
  <head>
    <title><?=$template['title']?></title>
    <!-- Bootstrap -->
<!--     <link rel="stylesheet/less" href="<?=less_url()?>bootstrap/bootstrap.less" />
    <link rel="stylesheet/less" href="<?=less_url()?>app.less" /> -->

    <link rel="stylesheet" href="<?=css_url()?>app.css">
    <!-- uncomment for use static bootstrap css -->
    <!-- <link href="<?=css_url()?>/bootstrap.min.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="<?=css_url()?>/bootstrap-responsive.min.css" rel="stylesheet" media="screen"> -->

    <?=jquery('1.9.1') // embed minified jquery version from google CDN  ?>
    <script type="text/javascript" src="<?=js_url()?>bootstrap//bootstrap.min.js"></script>
    <!-- uncomment for autocompile less with javascript -->
    <!--<script type="text/javascript" src="<?=js_url()?>less-1.3.1.min.js"></script> -->

  </head>
  <body>
     <?=$template['partials']['header']?>
    <div class="container">
    <?=$template['body']?>
    </div>

  </body>
</html>