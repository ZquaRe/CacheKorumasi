<?php 
@Session_start(); //Session oluşturmamız şart.
//Eğer .cssler için ayrı .jsler için ayrı php dosyanız varsa XX_CACHE_KORUMA_SANIYE olarak değiştirin.
define('CACHE_KORUMA_SANIYE', 3); //Kaç saniyede bir koruma haline almasını istediğinizi yazın.

?>
<!-- Örnek Kullanım -->
 <link href="assets/css/bootstrap.min.css<?php if($_SESSION['CacheKorumasi'] > (time() - CACHE_KORUMA_SANIYE)) echo '?v='.rand(1,99); ?>" rel="stylesheet" type="text/css" />

<?php
/* 
KOD
.css veya .js dosyalarının sonuna koyun.

//Sayfaya ardı ardına basıldığında .css dosyalarının sonuna ?v=15 gibi rastgele sayılar gelecektir.
<?php if($_SESSION['CacheKorumasi'] > (time() - CACHE_KORUMA_SANIYE)) echo '?v='.rand(1,99); ?>

*/
?>
<?php //Eğer .cssler için ayrı .jsler için ayrı php dosyanız varsa XX_CacheKorumasi olarak değiştirin. ?>
<?php     $_SESSION['CacheKorumasi'] = time(); //Her zaman sayfanın en alt kısmında kalması gerekmektedir.   ?>
