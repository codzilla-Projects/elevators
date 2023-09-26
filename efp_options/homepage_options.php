<?php 

function home_page_area_callback(){

	$wp_editor_settings = array( 

		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

		'textarea_rows'=> 2

	);    

	if( isset( $_POST['efp_save'] ) && !empty( $_POST['efp_save']) ){

		foreach ($_POST as $key => $value) {

			if(in_array($key,['footer_content'])){

				$value = stripcslashes($value);

			}				

			update_option( $key, $value);

		}
		if(!isset($_POST['slider_hidden'])) {delete_option('slider_hidden');}
		if(!isset($_POST['about_hidden'])) {delete_option('about_hidden');}
		if(!isset($_POST['services_hidden'])) {delete_option('services_hidden');}
		if(!isset($_POST['projects_hidden'])) {delete_option('projects_hidden');}
		if(!isset($_POST['products_hidden'])) {delete_option('products_hidden');}
		if(!isset($_POST['testimonials_hidden'])) {delete_option('testimonials_hidden');}
		if(!isset($_POST['contact_hidden'])) {delete_option('contact_hidden');}

	}

?>
	<div dir="rtl" class="container-fluid text-right padding-right-4">
			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
					<!-- Top Navigation -->
					<header class="codrops-header">
						<h1 class="text-center efp-title"><span>إعدادات الصفحة الرئيسية </span></h1>
					</header>
				</div>
					<br/>
				<div class="d-flex align-items-start p-0 m-0">
					<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">الصور المتحركة </button>
						<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">عن الشركة </button>
						<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">الخدمات </button>
						<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">المشاريع </button>
						<button class="nav-link" id="v-pills-fivthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fivthsection" type="button" role="tab" aria-controls="v-pills-fivthsection" aria-selected="false">المنتجات </button>
						<button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="false">اراء العملاء</button>
						<button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">ثواصل معنا </button>
					</div>
					<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back_ar p-5" id="v-pills-tabContent">
						<form class="form-horizontal" method="post" action="#">

						    <div class="tab-content" id="v-pills-tabContent">

						        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

						        	<div class="form-group text-right">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="slider_hidden" name="slider_hidden" value="1" <?php echo get_option('slider_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="slider_hidden" class="text-white">إخفاء السكشن </label>
			                        </div>

			                        <div class="form-group text-right">
									  	<label for="slider_number" class="col-sm-12 control-label text-white">عدد الصور المتحركة التى تظهر </label>
									  	<div class="col-sm-12">
									    	<input class="atco_half w-100" type="number" name="slider_number" size="60" value="<?php echo get_option('slider_number'); ?>">
									  </div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

									<div class="form-group text-right">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="about_hidden" name="about_hidden" value="1" <?php echo get_option('about_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="about_hidden" class="text-white">إخفاء السكشن </label>
			                        </div>
						        	<div class="form-group">
										<label for="about_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="about_title" name="about_title" value="<?php echo get_option('about_title'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="about_small_title" class="col-sm-12 text-right  control-label text-white">العنوان الفرعى </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="about_small_title" name="about_small_title" value="<?php echo get_option('about_small_title'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="about_content" class="col-sm-6 control-label text-white">المقال </label>
										<div class="col-sm-12">
			                				<?php wp_editor( get_option('about_content'), 'about_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_content','class'=>'form-control',) );  ?>
										</div>
									</div>
									<div class="form-group">
										<label for="about_link_text" class="col-sm-12 text-right  control-label text-white">نص الرابط </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="about_link_text" name="about_link_text" value="<?php echo get_option('about_link_text'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="about_link_url" class="col-sm-12 text-right  control-label text-white">عنوان الرابط </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="about_link_url" name="about_link_url" value="<?php echo get_option('about_link_url'); ?>">
										</div>
									</div>
									
									<div class="form-group">
									  	<label for="about_img" class="col-sm-12 text-right  control-label text-white">الصورة </label>
									  	<div class="col-sm-12 text-right ">
									    	<input class="about_img_url efp_half" type="text" name="about_img" size="60" value="<?php echo get_option('about_img'); ?>">
									    	<a href="#" class="about_img_upload btn btn-info">اختر </a>
									    	<img class="about_img" src="<?php echo get_option('about_img'); ?>" height="100" style="max-width:100%" />
									  	</div>
									</div>
						        </div>      

								<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
									<div class="form-group text-right">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="services_hidden" name="services_hidden" value="1" <?php echo get_option('services_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="services_hidden" class="text-white">إخفاء السكشن </label>
			                        </div>
						        	<div class="form-group">
										<label for="services_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="services_title" name="services_title" value="<?php echo get_option('services_title'); ?>">
										</div>
									</div>

								</div>

								<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
									<div class="form-group text-right">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="projects_hidden" name="projects_hidden" value="1" <?php echo get_option('projects_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="projects_hidden" class="text-white">إخفاء السكشن </label>
			                        </div>
						        	<div class="form-group">
										<label for="projects_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="projects_title" name="projects_title" value="<?php echo get_option('projects_title'); ?>">
										</div>
									</div>
						        </div>

						        <div class="tab-pane fade show" id="v-pills-fivthsection" role="tabpanel" aria-labelledby="v-pills-fivthsection-tab">
									<div class="form-group text-right">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="products_hidden" name="products_hidden" value="1" <?php echo get_option('products_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="products_hidden" class="text-white">إخفاء السكشن </label>
			                        </div>
						        	<div class="form-group">
										<label for="products_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="products_title" name="products_title" value="<?php echo get_option('products_title'); ?>">
										</div>
									</div>
						        </div>

						        <div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">
									<div class="form-group text-right">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="testimonials_hidden" name="testimonials_hidden" value="1" <?php echo get_option('testimonials_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="testimonials_hidden" class="text-white">إخفاء السكشن </label>
			                        </div>
						        	<div class="form-group">
										<label for="testimonials_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="testimonials_title" name="testimonials_title" value="<?php echo get_option('testimonials_title'); ?>">
										</div>
									</div>
						        </div>

						        <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">
									<div class="form-group text-right">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="contact_hidden" name="contact_hidden" value="1" <?php echo get_option('contact_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="contact_hidden" class="text-white">إخفاء السكشن </label>
			                        </div>
						        	<div class="form-group">
										<label for="contact_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="contact_title" name="contact_title" value="<?php echo get_option('contact_title'); ?>">
										</div>
									</div>
						        </div>

						    </div>

							<div class="form-group">

								<div class="col-sm-12">

								<input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 efp_save_route" name="efp_save" value="حفظ الاعدادات ">

								</div>

							</div>

						</form>
					</div>
				</div>
			</div>

		</div><!-- /container -->

<?php

}