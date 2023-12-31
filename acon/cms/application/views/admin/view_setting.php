<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin/login');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Settings</h1>
	</div>
</section>


<section class="content" style="min-height:auto;margin-bottom: -30px;">
	<div class="row">
		<div class="col-md-12">
			<?php if($error): ?>
			<div class="callout callout-danger">
			<p><?php echo $error; ?></p>
			</div>
			<?php endif; ?>

			<?php if($success): ?>
			<div class="callout callout-success">
			<p><?php echo $success; ?></p>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-12">
							
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_logo" data-toggle="tab">Logo</a></li>
						<li><a href="#tab_favicon" data-toggle="tab">Favicon</a></li>
						<li><a href="#tab_login_bg" data-toggle="tab">Login Background</a></li>
						<li><a href="#tab_general" data-toggle="tab">General Content</a></li>
						<li><a href="#tab_email" data-toggle="tab">Email Settings</a></li>
						<li><a href="#tab_sidebar_footer" data-toggle="tab">Sidebar & Footer</a></li>
						<li><a href="#tab_home" data-toggle="tab">Home Page</a></li>
                        <li><a href="#tab_banner" data-toggle="tab">Banner</a></li>
						<li><a href="#tab_color" data-toggle="tab">Color</a></li>
						<li><a href="#tab_other" data-toggle="tab">Other</a></li>
					</ul>
					<div class="tab-content">
          				<div class="tab-pane active" id="tab_logo">							

							<h3 class="seo-info">Website Logo</h3>
          					<?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>								
                            <div class="form-group">
						            <label for="" class="col-sm-2 control-label">Existing Photo</label>
						            <div class="col-sm-6" style="padding-top:6px;background: #f2f2f2;">
						                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" class="existing-photo" style="height:80px;">
						            </div>
						        </div>
								<div class="form-group">
						            <label for="" class="col-sm-2 control-label">New Photo</label>
						            <div class="col-sm-6" style="padding-top:6px;">
						                <input type="file" name="photo_logo">
						            </div>
						        </div>
						        <div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_logo">Update Logo</button>
									</div>									
						         </div>
							<?php echo form_close(); ?>

							<h3 class="seo-info">Admin Logo</h3>
							<?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>								
                            <div class="form-group">
						            <label for="" class="col-sm-2 control-label">Existing Photo</label>
						            <div class="col-sm-6" style="padding-top:6px;background: #f2f2f2;">
						                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo_admin']; ?>" class="existing-photo" style="height:80px;">
						            </div>
						        </div>
								<div class="form-group">
						            <label for="" class="col-sm-2 control-label">New Photo</label>
						            <div class="col-sm-6" style="padding-top:6px;">
						                <input type="file" name="photo_logo_admin">
						            </div>
						        </div>
						        <div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_admin_logo">Update Logo</button>
									</div>
								</div>
							<?php echo form_close(); ?>
          				</div>


          				<div class="tab-pane" id="tab_favicon">
          					<?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>							
                            <div class="box box-info">
								<div class="box-body">
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">Existing Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" class="existing-photo" style="height:40px;">
							            </div>
							        </div>
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">New Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <input type="file" name="photo_favicon">
							            </div>
							        </div>
							        <div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form_favicon">Update Favicon</button>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
          				</div>



          				<div class="tab-pane" id="tab_login_bg">
          					<?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>							
                            <div class="box box-info">
								<div class="box-body">
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">Existing Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['login_bg']; ?>" class="existing-photo" style="width:500px;">
							            </div>
							        </div>
									<div class="form-group">
							            <label for="" class="col-sm-2 control-label">New Photo</label>
							            <div class="col-sm-6" style="padding-top:6px;">
							                <input type="file" name="login_bg">
							            </div>
							        </div>
							        <div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form_login_bg">Update Photo</button>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
          				</div>
          				
          				<div class="tab-pane" id="tab_general">
							<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Footer - Copyright </label>
										<div class="col-sm-6">
											<input class="form-control" type="text" name="footer_copyright" value="<?php echo $setting['footer_copyright']; ?>">
										</div>
									</div>								
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Footer - Address </label>
										<div class="col-sm-6">
											<textarea class="form-control" name="footer_address" style="height:70px;"><?php echo $setting['footer_address']; ?></textarea>
										</div>
									</div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Footer - Phone </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="footer_phone" style="height:70px;"><?php echo $setting['footer_phone']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Footer - Working Hour </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="footer_working_hour" style="height:70px;"><?php echo $setting['footer_working_hour']; ?></textarea>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Footer - About us </label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="footer_about" style="height:140px;"><?php echo $setting['footer_about']; ?></textarea>
                                        </div>
                                    </div>
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Top Bar Email </label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="top_bar_email" value="<?php echo $setting['top_bar_email']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Top Bar Phone Number </label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="top_bar_phone" value="<?php echo $setting['top_bar_phone']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 control-label">Contact Map iFrame </label>
										<div class="col-sm-6">
											<textarea class="form-control" name="contact_map_iframe" style="height:200px;"><?php echo $setting['contact_map_iframe']; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form_general">Update</button>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>

                            <h3 class="seo-info">Footer - Address Icon</h3>
                            <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>                                
                            <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Existing Icon</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['footer_address_icon']; ?>" class="existing-photo" style="width:120px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">New Icon</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="footer_address_icon">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_icon_address">Update</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>

                            <h3 class="seo-info">Footer - Phone Icon</h3>
                            <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>                                
                            <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Existing Icon</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['footer_phone_icon']; ?>" class="existing-photo" style="width:120px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">New Icon</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="footer_phone_icon">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_icon_phone">Update</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>

                            <h3 class="seo-info">Footer - Working Hour Icon</h3>
                            <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>                                
                            <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Existing Icon</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['footer_working_hour_icon']; ?>" class="existing-photo" style="width:120px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">New Icon</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="footer_working_hour_icon">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_icon_working_hour">Update</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
          				</div>

          				<div class="tab-pane" id="tab_email">
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">Send Email From</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="send_email_from" value="<?php echo $setting['send_email_from']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">Receive Email To</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="receive_email_to" value="<?php echo $setting['receive_email_to']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">SMTP Host</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="smtp_host" value="<?php echo $setting['smtp_host']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">SMTP Port</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="smtp_port" value="<?php echo $setting['smtp_port']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">SMTP Username</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="smtp_username" value="<?php echo $setting['smtp_username']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">SMTP Password</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="smtp_password" value="<?php echo $setting['smtp_password']; ?>">
										</div>
									</div>
									

									<div class="form-group">
										<label for="" class="col-sm-4 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form_email">Update</button>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
          				</div>

          				<div class="tab-pane" id="tab_sidebar_footer">
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">How many recent posts? <span>*</span></label>
										<div class="col-sm-2">
											<input type="text" class="form-control" name="total_recent_post" value="<?php echo $setting['total_recent_post']; ?>">
										</div>
									</div>		
									<div class="form-group">
										<label for="" class="col-sm-4 control-label">How many popular posts? <span>*</span></label>
										<div class="col-sm-2">
											<input type="text" class="form-control" name="total_popular_post" value="<?php echo $setting['total_popular_post']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-4 control-label"></label>
										<div class="col-sm-5">
											<button type="submit" class="btn btn-success pull-left" name="form_sidebar_footer">Update</button>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>
          				</div>


          				<div class="tab-pane" id="tab_home">

          					<h3 class="seo-info">Why Choose Us</h3>
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Title </label>
									<div class="col-sm-6">
										<input type="text" name="why_choose_title" class="form-control" value="<?php echo $setting['why_choose_title']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Subtitle </label>
									<div class="col-sm-6">
										<input type="text" name="why_choose_subtitle" class="form-control" value="<?php echo $setting['why_choose_subtitle']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Status </label>
									<div class="col-sm-2">
										<select name="why_choose_status" class="form-control select2">
											<option value="Show" <?php if($setting['why_choose_status'] == 'Show') {echo 'selected';} ?>>Show</option>
											<option value="Hide" <?php if($setting['why_choose_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_why_choose">Update</button>
									</div>
								</div>								
							<?php echo form_close(); ?>


							<h3 class="seo-info">Service</h3>
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Title </label>
									<div class="col-sm-6">
										<input type="text" name="service_title" class="form-control" value="<?php echo $setting['service_title']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Subtitle </label>
									<div class="col-sm-6">
										<input type="text" name="service_subtitle" class="form-control" value="<?php echo $setting['service_subtitle']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Status </label>
									<div class="col-sm-2">
										<select name="service_status" class="form-control select2">
											<option value="Show" <?php if($setting['service_status'] == 'Show') {echo 'selected';} ?>>Show</option>
											<option value="Hide" <?php if($setting['service_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_service">Update</button>
									</div>
								</div>								
							<?php echo form_close(); ?>


							<h3 class="seo-info">Portfolio</h3>
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Title </label>
									<div class="col-sm-6">
										<input type="text" name="portfolio_title" class="form-control" value="<?php echo $setting['portfolio_title']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Subtitle </label>
									<div class="col-sm-6">
										<input type="text" name="portfolio_subtitle" class="form-control" value="<?php echo $setting['portfolio_subtitle']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Status </label>
									<div class="col-sm-2">
										<select name="portfolio_status" class="form-control select2">
											<option value="Show" <?php if($setting['portfolio_status'] == 'Show') {echo 'selected';} ?>>Show</option>
											<option value="Hide" <?php if($setting['portfolio_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_portfolio">Update</button>
									</div>
								</div>								
							<?php echo form_close(); ?>


							<h3 class="seo-info">Team</h3>
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Title </label>
									<div class="col-sm-6">
										<input type="text" name="team_title" class="form-control" value="<?php echo $setting['team_title']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Subtitle </label>
									<div class="col-sm-6">
										<input type="text" name="team_subtitle" class="form-control" value="<?php echo $setting['team_subtitle']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Status </label>
									<div class="col-sm-2">
										<select name="team_status" class="form-control select2">
											<option value="Show" <?php if($setting['team_status'] == 'Show') {echo 'selected';} ?>>Show</option>
											<option value="Hide" <?php if($setting['team_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_team">Update</button>
									</div>
								</div>								
							<?php echo form_close(); ?>


							<h3 class="seo-info">Testimonial</h3>
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Title </label>
									<div class="col-sm-6">
										<input type="text" name="testimonial_title" class="form-control" value="<?php echo $setting['testimonial_title']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Subtitle </label>
									<div class="col-sm-6">
										<input type="text" name="testimonial_subtitle" class="form-control" value="<?php echo $setting['testimonial_subtitle']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Status </label>
									<div class="col-sm-2">
										<select name="testimonial_status" class="form-control select2">
											<option value="Show" <?php if($setting['testimonial_status'] == 'Show') {echo 'selected';} ?>>Show</option>
											<option value="Hide" <?php if($setting['testimonial_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_testimonial">Update</button>
									</div>
								</div>								
							<?php echo form_close(); ?>


							<h3 class="seo-info">FAQ</h3>
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Title </label>
									<div class="col-sm-6">
										<input type="text" name="faq_title" class="form-control" value="<?php echo $setting['faq_title']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Subtitle </label>
									<div class="col-sm-6">
										<input type="text" name="faq_subtitle" class="form-control" value="<?php echo $setting['faq_subtitle']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Status </label>
									<div class="col-sm-2">
										<select name="faq_status" class="form-control select2">
											<option value="Show" <?php if($setting['faq_status'] == 'Show') {echo 'selected';} ?>>Show</option>
											<option value="Hide" <?php if($setting['faq_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_faq">Update</button>
									</div>
								</div>								
							<?php echo form_close(); ?>


							<h3 class="seo-info">Gallery</h3>
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Title </label>
									<div class="col-sm-6">
										<input type="text" name="gallery_title" class="form-control" value="<?php echo $setting['gallery_title']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Subtitle </label>
									<div class="col-sm-6">
										<input type="text" name="gallery_subtitle" class="form-control" value="<?php echo $setting['gallery_subtitle']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Status </label>
									<div class="col-sm-2">
										<select name="gallery_status" class="form-control select2">
											<option value="Show" <?php if($setting['gallery_status'] == 'Show') {echo 'selected';} ?>>Show</option>
											<option value="Hide" <?php if($setting['gallery_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_gallery">Update</button>
									</div>
								</div>								
							<?php echo form_close(); ?>


							<h3 class="seo-info">Recent Post</h3>
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Title </label>
									<div class="col-sm-6">
										<input type="text" name="recent_post_title" class="form-control" value="<?php echo $setting['recent_post_title']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Subtitle </label>
									<div class="col-sm-6">
										<input type="text" name="recent_post_subtitle" class="form-control" value="<?php echo $setting['recent_post_subtitle']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Status </label>
									<div class="col-sm-2">
										<select name="recent_post_status" class="form-control select2">
											<option value="Show" <?php if($setting['recent_post_status'] == 'Show') {echo 'selected';} ?>>Show</option>
											<option value="Hide" <?php if($setting['recent_post_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_recent_post">Update</button>
									</div>
								</div>								
							<?php echo form_close(); ?>


							<h3 class="seo-info">Partner</h3>
          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Title </label>
									<div class="col-sm-6">
										<input type="text" name="partner_title" class="form-control" value="<?php echo $setting['partner_title']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Subtitle </label>
									<div class="col-sm-6">
										<input type="text" name="partner_subtitle" class="form-control" value="<?php echo $setting['partner_subtitle']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Status </label>
									<div class="col-sm-2">
										<select name="partner_status" class="form-control select2">
											<option value="Show" <?php if($setting['partner_status'] == 'Show') {echo 'selected';} ?>>Show</option>
											<option value="Hide" <?php if($setting['partner_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_partner">Update</button>
									</div>
								</div>								
							<?php echo form_close(); ?>


							<h3 class="seo-info">Counter Background Photo</h3>
          					<?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>							
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Previous Photo </label>
									<div class="col-sm-9">
										<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['counter_bg']; ?>" alt="" style="width:300px;">
									</div>
								</div>		
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Change Photo </label>
									<div class="col-sm-9" style="padding-top:5px;">
										<input type="file" name="counter_bg">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_counter_bg">Update</button>
									</div>
								</div>								
							<?php echo form_close(); ?>


                            <h3 class="seo-info">Counter Settings</h3>
                            <?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Counter1 Text <span>*</span></label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="counter1_text" value="<?php echo $setting['counter1_text']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Counter1 Value <span>*</span></label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="counter1_value" value="<?php echo $setting['counter1_value']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Counter2 Text <span>*</span></label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="counter2_text" value="<?php echo $setting['counter2_text']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Counter2 Value <span>*</span></label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="counter2_value" value="<?php echo $setting['counter2_value']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Counter3 Text <span>*</span></label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="counter3_text" value="<?php echo $setting['counter3_text']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Counter3 Value <span>*</span></label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="counter3_value" value="<?php echo $setting['counter3_value']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Counter4 Text <span>*</span></label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="counter4_text" value="<?php echo $setting['counter4_text']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label">Counter4 Value <span>*</span></label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="counter4_value" value="<?php echo $setting['counter4_value']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="border-top: 1px solid #ddd;margin-top: 10px;padding-top: 20px;">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Counter Status <span>*</span></label>
                                            <div class="col-sm-2">
                                                <select name="counter_status" class="form-control select2">
                                                	<option value="Show" <?php if($setting['counter_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                                	<option value="Hide" <?php if($setting['counter_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                                
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-5">
                                        <button type="submit" class="btn btn-success pull-left" name="form_counter">Update</button>
                                    </div>
                                </div>                                
                            <?php echo form_close(); ?>


							
                            <h3 class="seo-info">Total Recent Post (How many last posts will be shown?)</h3>
                            <?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Total Recent Posts </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="total_recent_post_home" class="form-control" value="<?php echo $setting['total_recent_post_home']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_total_recent_post_home">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
          				</div>


          				<div class="tab-pane" id="tab_color">

          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Theme Color 1 </label>
										<div class="col-sm-2">
											<input type="text" name="theme_color_1" class="form-control jscolor" value="<?php echo $setting['theme_color_1']; ?>">
										</div>
									</div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Theme Color 2 </label>
                                        <div class="col-sm-2">
                                            <input type="text" name="theme_color_2" class="form-control jscolor" value="<?php echo $setting['theme_color_2']; ?>">
                                        </div>
                                    </div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form_color">Update</button>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>


          				</div>



          				<div class="tab-pane" id="tab_other">

          					<?php echo form_open(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Preloader Status </label>
                                        <div class="col-sm-2">
                                            <select name="preloader_status" class="form-control select2">
                                            	<option value="On" <?php if($setting['preloader_status'] == 'On') {echo 'selected';} ?>>On</option>
                                            	<option value="Off" <?php if($setting['preloader_status'] == 'Off') {echo 'selected';} ?>>Off</option>
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Tawk Live Chat Code </label>
										<div class="col-sm-6">
											<textarea name="tawk_live_chat_code" class="form-control" cols="30" rows="10"><?php echo $setting['tawk_live_chat_code']; ?></textarea>
										</div>
									</div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Tawk Live Chat Status </label>
                                        <div class="col-sm-2">
                                            <select name="tawk_live_chat_status" class="form-control select2">
                                            	<option value="On" <?php if($setting['tawk_live_chat_status'] == 'On') {echo 'selected';} ?>>On</option>
                                            	<option value="Off" <?php if($setting['tawk_live_chat_status'] == 'Off') {echo 'selected';} ?>>Off</option>
                                            </select>
                                        </div>
                                    </div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form_other">Update</button>
										</div>
									</div>
								</div>
							</div>
							<?php echo form_close(); ?>


          				</div>


                        <div class="tab-pane" id="tab_banner">
                            <table class="table table-bordered">
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing About Us Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_about']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change About Us Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_about">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing FAQ Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_faq']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change FAQ Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_faq">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing Gallery Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_gallery']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Gallery Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_gallery">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing Service Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_service']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Service Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_service">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing Portfolio Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_portfolio']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Portfolio Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_portfolio">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing Testimonial Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_testimonial']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Testimonial Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_testimonial">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing News Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_news']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change News Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_news">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing Contact Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_contact']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Contact Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_contact">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing Search Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_search']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Search Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_search">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing Category Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_category']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Category Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_category">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing Terms and Conditions Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_terms']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Terms and Conditions Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_terms">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                                <tr>
                                    <?php echo form_open_multipart(base_url().'admin/setting/update',array('class' => 'form-horizontal')); ?>
                                        <td style="width:50%">
                                            <h4>Existing Privacy Page Banner</h4>
                                            <p>
                                                <img src="<?php echo base_url().'public/uploads/'.$setting['banner_privacy']; ?>" alt="" style="width: 100%;height:auto;">  
                                            </p>                                        
                                        </td>
                                        <td style="width:50%">
                                            <h4>Change Privacy Page Banner</h4>
                                            Select Photo<input type="file" name="photo">
                                            <input type="submit" class="btn btn-primary" value="Change" style="margin-top:10px;" name="form_banner_privacy">
                                        </td>
                                    <?php echo form_close(); ?>
                                </tr>
                            </table>
                        </div>


          			</div>
				</div>

				

			<?php echo form_close(); ?>
		</div>
	</div>

</section>