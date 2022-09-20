
<script>
  const base_url  = "<?=base_url();?>";
</script>

<!-- Essential javascripts for application to work-->
<script src="<?php echo media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo media(); ?>/js/popper.min.js"></script>
    <script src="<?php echo media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo media(); ?>/js/main.js"></script>
    <script src="<?php echo media(); ?>/js/fontawesome.js"></script>
    <script src="<?php echo media(); ?>/js/functions_admin.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo media(); ?>/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?=media();?>/js/plugins/sweetalert.min.js"></script>

        <!-- Data table plugin-->
    <script type="text/javascript" src="<?php echo media(); ?>/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo media(); ?>/js/plugins/dataTables.bootstrap.min.js"></script>
  

    <?php if($data['page_name'] == "rol_usuario"){?>
    <script src="<?php echo media(); ?>/js/functions_roles.js"></script>
    <?php }?>
  
    <?php if($data['page_name'] == "usuarios"){?>
      <script src="<?php echo media(); ?>/js/functions_usuarios.js"></script>
    <?php }?>


  </body>
</html>