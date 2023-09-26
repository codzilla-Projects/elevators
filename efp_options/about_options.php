<?php 

function about_page_area_callback(){

	$wp_editor_settings = array( 

		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

		'textarea_rows'=> 2

	);    

	if( isset( $_POST['efp_save'] ) && !empty( $_POST['efp_save']) ){

		foreach ($_POST as $key => $value) {

			if(in_array($key,['about_page_content'])){

				$value = stripcslashes($value);

			}				

			update_option( $key, $value);

		}

	}

?>
	<div dir="rtl" class="container-fluid text-right padding-right-4">
			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
					<!-- Top Navigation -->
					<header class="codrops-header">
						<h1 class="text-center efp-title"><span>إعدادات صفحة عن الشركة </span></h1>
					</header>
				</div>
					<br/>
				<div class="d-flex align-items-start p-0 m-0">
					<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="false">عن الشركة </button>
						<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">الخدمات </button>
						<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">عملاؤنا </button>
					</div>
					<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back_ar p-5" id="v-pills-tabContent">
						<form class="form-horizontal" method="post" action="#">

						    <div class="tab-content" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

									<div class="form-group text-right">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="about_page_hidden" name="about_page_hidden" value="1" <?php echo get_option('about_page_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="about_page_hidden" class="text-white">إخفاء السكشن </label>
			                        </div>
						        	<div class="form-group">
										<label for="about_page_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="about_page_title" name="about_page_title" value="<?php echo get_option('about_page_title'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="about_page_content" class="col-sm-6 control-label text-white">المقال </label>
										<div class="col-sm-12">
			                				<?php wp_editor( get_option('about_page_content'), 'about_page_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_page_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_page_content','class'=>'form-control',) );  ?>
										</div>
									</div>
									
									<div class="form-group">
										<label for="about_page_youtube_link" class="col-sm-12 text-right  control-label text-white">لينك الفيديو على اليوتيوب </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="about_page_youtube_link" name="about_page_youtube_link" value="<?php echo get_option('about_page_youtube_link'); ?>">
										</div>
									</div>

									<div class="form-group">
									  	<label for="about_page_img" class="col-sm-12 text-right  control-label text-white">الصورة </label>
									  	<div class="col-sm-12 text-right ">
									    	<input class="about_page_img_url efp_half" type="text" name="about_page_img" size="60" value="<?php echo get_option('about_page_img'); ?>">
									    	<a href="#" class="about_page_img_upload btn btn-info">اختر </a>
									    	<img class="about_page_img" src="<?php echo get_option('about_page_img'); ?>" height="100" style="max-width:100%" />
									  	</div>
									</div>

									<div class="form-group">
										<label for="about_page_year" class="col-sm-12 text-right  control-label text-white">عام التاسيس </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="about_page_year" name="about_page_year" value="<?php echo get_option('about_page_year'); ?>">
										</div>
									</div>
						        </div>      

								<div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
									<div class="form-group text-right">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="about_services_hidden" name="about_services_hidden" value="1" <?php echo get_option('about_services_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="about_services_hidden" class="text-white">إخفاء السكشن </label>
			                        </div>
						        	<div class="form-group">
										<label for="about_services_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="about_services_title" name="about_services_title" value="<?php echo get_option('about_services_title'); ?>">
										</div>
									</div>

								</div>

								<div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
									<div class="form-group text-right">                  
			                            <div class="inline-block">
			                                <input type="checkbox" id="about_cleints_hidden" name="about_cleints_hidden" value="1" <?php echo get_option('about_cleints_hidden') == '1' ? 'checked' : ''; ?>>
			                            </div>
			                            <label for="about_cleints_hidden" class="text-white">إخفاء السكشن </label>
			                        </div>
						        	<div class="form-group">
										<label for="about_cleints_title" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي </label>
										<div class="col-sm-12 text-right ">
											<input type="text" class="form-control" id="about_cleints_title" name="about_cleints_title" value="<?php echo get_option('about_cleints_title'); ?>">
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