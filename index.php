<!DOCTYPE html>
<html lang="ru" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
<?php
    require "head.php";
?>

  <body>

    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

      <div class="layout-container clearfix">
      <?php
        require "header.php";
      ?>

      <?php
        require "main.php";
      ?>
      </div>

      <div class="push">
      </div>

<?php
    require "footer.php";
?>
  </body>

</html>