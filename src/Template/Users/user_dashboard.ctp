<?php use Cake\Utility\Inflector; ?>
<style>
.user-block h2{
  font-size: 14px;
  margin: 3px;
}
#view-selector-container{
  margin-top: 10px;
}
.ViewSelector2-item{
  display: inline-block;
}
.product-thumb{
    height: 100px;
    width: 100px;
}
.box-body, .box-header{
    overflow:auto;
}
input.FormField, select.FormField, textarea.FormField {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #d4d2d0;
    border-radius: 4px;
    box-sizing: border-box;
    font-family: inherit;
    font-feature-settings: inherit;
    font-kerning: inherit;
    font-language-override: inherit;
    font-size: inherit;
    font-size-adjust: inherit;
    font-stretch: inherit;
    font-style: inherit;
    font-synthesis: inherit;
    font-variant: inherit;
    font-weight: 400;
    height: 2.42857em;
    line-height: 1.42857em;
    padding: 0.42857em;
    transition: border-color 0.2s cubic-bezier(0.4, 0, 0.2, 1) 0s;
}
#dt-transactions-list .label{
  width:75px;
  padding: 5px;
  display: inline-block;

}
</style>
<script>
var BASE_URL = "<?php echo $base_url; ?>";
</script><!-- Main content -->
<section class="content">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-close"></i></span>

        <div class="info-box-content">
          <a href="javascipt:void(0);">
            <span class="info-box-text">Sample Counter A</span>
            <span class="info-box-number">2</span>
            <span class="info-box-text" style="margin-top:2px;">View All</span>
          </a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>
        <div class="info-box-content">
          <a href="javascipt:void(0);">
            <span class="info-box-text">Sample Counter B</span>
            <span class="info-box-number">2</span>
            <span class="info-box-text" style="margin-top:2px;">View All</span>
          </a>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">       
    
  </div>
  <!-- End Transactions -->
  
</section>
<!-- /.content -->
