<?php 
    get_header();
    get_template_part('page_title');  
?>
             
<!-- SECTION CONTENTG START -->
<div class="section-full mobile-page-padding p-tb150 bg-bottom-left bg-no-repeat" style="background-image:url(<?= efp_URL; ?>assets/images/background/bg-4.png)">  
    <div class="container">
        <div class="section-content">
        	<div class="page-notfound row">
            	<div class="col-md-7">
            		<img src="<?= efp_URL; ?>assets/images/error-404.png" alt="">
                </div>
                <div class="col-md-5">
                    <strong>الصفحة غير موجودة</strong>
                    <span class="title">خطأ 404</span>
                    <p>تعذر العثور على الصفحة المطلوبة نحن نعمل عليها</p>
                    <a href="<?php bloginfo('url'); ?>" title="Back to home" class="site-button btn-half"><span> العودة إلى المنزل</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->
<?php get_footer(); ?>