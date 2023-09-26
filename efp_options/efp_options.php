<?php 

function main_content_area_callback(){

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

	}

?>
	<div dir="rtl" class="container-fluid text-left padding-right-4">
			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
					<!-- Top Navigation -->
					<header class="codrops-header">
						<h1 class="text-center efp-title"><span>إعدادات عامة </span></h1>
					</header>
				</div>
					<br/>
				<div class="d-flex align-items-start p-0 m-0">
					<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">الشعارات </button>
						<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">التواصل </button>
						<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">السوشيال ميديا </button>
						<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">الفوتر </button>
					</div>
					<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back_ar p-5" id="v-pills-tabContent">
						<form class="form-horizontal" method="post" action="#">

						    <div class="tab-content" id="v-pills-tabContent">

						        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

									<div class="form-group">
									  	<label for="efp_website_logo" class="col-sm-12 text-left  control-label text-white"> شعار ال  header</label>
									  	<div class="col-sm-12 text-left ">
									    	<input class="header_img_url efp_half" type="text" name="efp_logo_img" size="60" value="<?php echo get_option('efp_logo_img'); ?>">
									    	<a href="#" class="header_img_upload btn btn-info">اختر </a>
									    	<img class="header_img" src="<?php echo get_option('efp_logo_img'); ?>" height="100" style="max-width:100%" />
									  	</div>
									</div>

									<div class="form-group">
									  	<label for="efp_favicon" class="col-sm-12 text-left  control-label text-white">صورة  Favicon </label>
									  	<div class="col-sm-12 text-left ">
									    	<input class="favicon_img_url efp_half" type="text" name="efp_favicon" size="60" value="<?php echo get_option('efp_favicon'); ?>">
									    	<a href="#" class="favicon_img_upload btn btn-info">اختر </a>
									    	<img class="favicon_img" src="<?php echo get_option('efp_favicon'); ?>" height="100" style="max-width:100%" />
									  	</div>
									</div>
						        </div>

						        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

									<div class="form-group">
										<label for="efp_phone" class="col-sm-12 text-left  control-label text-white">رقم الهاتف </label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="efp_phone" name="efp_phone" value="<?php echo get_option('efp_phone'); ?>">
										</div>
									</div>	

									<div class="form-group">
										<label for="efp_email" class="col-sm-12 text-left  control-label text-white">البريد الالكترونى </label>
										<div class="col-sm-12 text-left ">
											<input type="email" class="form-control text-left" id="efp_email" name="efp_email" value="<?php echo get_option('efp_email'); ?>">
										</div>
									</div>

									<div class="form-group">
										<label for="efp_location" class="col-sm-12 text-left  control-label text-white">موقع الشركة </label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control text-left" id="efp_location" name="efp_location" value="<?php echo get_option('efp_location'); ?>">
										</div>
									</div>

									<div class="form-group">
										<label for="efp_map" class="col-sm-12 text-left  control-label text-white">الموقع على خريطة جوجل </label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control text-left" id="efp_map" name="efp_map" value="<?php echo get_option('efp_map'); ?>">
										</div>
									</div>

							    </div>	      

								<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

									<div class="form-group">

										<label for="efp_fb" class="col-sm-12 text-left  control-label text-white">الفيسبوك </label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="efp_fb" name="efp_fb" value="<?php echo get_option('efp_fb'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="efp_twitter" class="col-sm-12 text-left  control-label text-white">تويتر </label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="efp_twitter" name="efp_twitter" value="<?php echo get_option('efp_twitter'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="efp_youtube" class="col-sm-12 text-left  control-label text-white">يوتيوب</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="efp_youtube" name="efp_youtube" value="<?php echo get_option('efp_youtube'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="efp_insta" class="col-sm-12 text-left  control-label text-white">انستجرام </label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="efp_insta" name="efp_insta" value="<?php echo get_option('efp_insta'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="efp_linkedin" class="col-sm-12 text-left  control-label text-white">لينكد ان </label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="efp_linkedin" name="efp_linkedin" value="<?php echo get_option('efp_linkedin'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="efp_whatsapp" class="col-sm-12 text-left  control-label text-white">واتس اب </label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="efp_whatsapp" name="efp_whatsapp" value="<?php echo get_option('efp_whatsapp'); ?>">

										</div>

									</div>

								</div>

								<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

									<div class="form-group">
									    <label for="efp_website_logo_footer" class="col-sm-12 text-left  control-label text-white"> شعار الفوتر </label>
									    <div class="col-sm-12 text-left ">
									  	    <input class="footer_img_url efp_half" type="text" name="efp_logo_footer_img" size="60" value="<?php echo get_option('efp_logo_footer_img'); ?>">
									    <a href="#" class="footer_img_upload btn btn-info">اختر </a>
									    <img class="footer_img" src="<?php echo get_option('efp_logo_footer_img'); ?>" height="100" style="max-width:100%" />
									  </div>
									</div>

									<div class="form-group text-left">
										<label for="footer_content" class="col-sm-6 control-label text-white">محتوى الفوتر </label>
										<div class="col-sm-12">
			                				<?php wp_editor( get_option('footer_content'), 'footer_content',  array('textarea_rows'=>5,'textarea_name'=> 'footer_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'footer_content','class'=>'form-control',) );  ?>
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