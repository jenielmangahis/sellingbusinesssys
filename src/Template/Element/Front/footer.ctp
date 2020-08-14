<!--footer start-->
<footer class="site-footer">
  <div class="text-center">
    <p>&nbsp;</p>
    <div class="credits">
    </div>
    <a href="index.html#" class="go-top">
      <i class="fa fa-angle-up"></i>
      </a>
  </div>
</footer>

</section>
<!--footer end-->
<script>
  var base_url = "<?= $base_url; ?>";  
</script>
<?php   
  echo $this->Html->script('front/jquery.min.js');
  echo $this->Html->script('front/bootstrap.min.js'); 
?>
</body>
</html>