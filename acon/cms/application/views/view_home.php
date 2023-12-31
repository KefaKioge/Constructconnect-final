<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="slider">
	<div class="slide-carousel owl-carousel">		
		<?php
		foreach ($slider as $row) {
			?>
			<div class="slider-item" style="background-image:url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>);">
				<div class="bg"></div>
				<div class="slider-table">
					<div class="slider-text">
						<div class="slider-animated">
							<h2><?php echo $row['heading']; ?></h2>
						</div>
						<div class="slider-animated">
							<p>
								<?php echo nl2br($row['content']); ?>
							</p>
						</div>
						<div class="slider-animated">
							<ul>
								<li><a href="<?php echo $row['button1_url']; ?>"><?php echo $row['button1_text']; ?></a></li>
								<li><a href="<?php echo $row['button2_url']; ?>"><?php echo $row['button2_text']; ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>


<?php if($setting['why_choose_status'] == 'Show'): ?>
<div class="choose-area pt-60">
	<div class="headline">
		<div class="headline-shadow">
			<h2><?php echo $setting['why_choose_title']; ?></h2>
			<p><?php echo $setting['why_choose_subtitle']; ?></p>
		</div>
	</div>
	<?php
	foreach ($why_choose_us_photo as $row) {
		$why_choose_main_photo = $row['main_photo'];
		$why_choose_item_bg = $row['item_bg'];
	}
	?>
	<div class="container-fluid">
		<div class="row choose-item-row">
			<div class="col-md-6 choose-left" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $why_choose_main_photo; ?>);">
			</div>
			<div class="col-md-6 choose-right" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $why_choose_item_bg; ?>);">
				<div class="bg-choose"></div>
				<div class="choose-item">
					<ul>
						<?php
						foreach ($why_choose_us as $row) {
							?>
							<li>
								<div class="choose-icon">
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="Why Choose Photo">
								</div>
								<div class="choose-text">
									<h3><?php echo $row['heading']; ?></h3>
									<p><?php echo $row['content']; ?></p>
								</div>
							</li>
							<?php
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<?php if($setting['service_status'] == 'Show'): ?>
<div class="services-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="headline">
				<div class="headline-shadow">
					<h2><?php echo $setting['service_title']; ?></h2>
					<p><?php echo $setting['service_subtitle']; ?></p>
				</div>
			</div>
		</div>
		<div class="row">			
			<?php
			foreach ($service as $row) {
				?>
				<div class="col-md-4 col-sm-6 col-xs-12 clear-three">
					<div class="services-item">
						<div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)"></div>
						<div class="services-text">
							<h3><a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo $row['heading']; ?></a></h3>
							<?php echo $row['short_content']; ?>
							<div class="services-link">
								<a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo READ_MORE; ?> <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<?php endif; ?>


<?php if($setting['portfolio_status'] == 'Show'): ?>
<div class="recent-works bg-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="headline">
				<div class="headline-shadow">
					<h2><?php echo $setting['portfolio_title']; ?></h2>
					<p><?php echo $setting['portfolio_subtitle']; ?></p>
				</div>
			</div>
			<div class="recent-menu">
				<ul>					
					<li class="hvr-bounce-to-right" data-filter="all">All</li>
					<?php
					foreach ($portfolio_category as $row) {
						?>
						<li class="hvr-bounce-to-right" data-filter="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></li>
						<?php
					}
					?>
				</ul>
			</div>
			<div class="filtr-container">			

				<?php
				foreach ($portfolio as $row) {
					?>
					<div class="col-md-4 col-sm-6 col-xs-12 filtr-item clear-three" data-category="<?php echo $row['category_id']; ?>" data-sort="value">
						<div class="recent-item">
							<div class="lightbox-item">
								<div class="recent-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)">
									<div class="lightbox-bg"></div>
									<div class="lightbox-text">
										<div class="lightbox-table">
											<div class="lightbox-icon">
												<a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="recent-text">
									<h3><?php echo $row['name']; ?></h3>
									<?php echo $row['short_content']; ?>
									<div class="services-link">
										<a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><?php echo READ_MORE; ?> <i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>

			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<?php if($setting['team_status'] == 'Show'): ?>
<div class="team-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="headline">
				<div class="headline-shadow">
					<h2><?php echo $setting['team_title']; ?></h2>
					<p><?php echo $setting['team_subtitle']; ?></p>
				</div>
			</div>
			<div class="col-md-12">
				<div class="team-carousel owl-carousel">

					<?php
					foreach ($team as $row) {
						?>
						<div class="team-item">
							<div class="team-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)"></div>
							<div class="team-text">
								<h4><?php echo $row['name']; ?></h4>
								<p><?php echo $row['designation_name']; ?></p>
							</div>
							<div class="team-social">
								<ul>
									<?php if(!empty($row['facebook'])): ?>
									<li><a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<?php endif; ?>
									
									<?php if(!empty($row['twitter'])): ?>
									<li><a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<?php endif; ?>

									<?php if(!empty($row['linkedin'])): ?>
									<li><a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									<?php endif; ?>

									<?php if(!empty($row['youtube'])): ?>
									<li><a href="<?php echo $row['youtube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
									<?php endif; ?>

									<?php if(!empty($row['google_plus'])): ?>
									<li><a href="<?php echo $row['google_plus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
									<?php endif; ?>

									<?php if(!empty($row['instagram'])): ?>
									<li><a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
									<?php endif; ?>

									<?php if(!empty($row['flickr'])): ?>
									<li><a href="<?php echo $row['flickr']; ?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>



<?php if($setting['testimonial_status'] == 'Show'): ?>
<?php
foreach ($testimonial_photo as $row) {
	$testimonial_main_photo = $row['main_photo'];
}
?>
<div class="testimonial-area ptb-60" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $testimonial_main_photo; ?>)">
	<div class="bg-testimonial"></div>
	<div class="container">
		<div class="row">
			<div class="testimonial-headline">
				<h2><?php echo $setting['testimonial_title']; ?></h2>
				<p><?php echo $setting['testimonial_subtitle']; ?></p>
			</div>
			<div class="col-md-12">
				<div class="testimonial-carousel owl-carousel">
			
					<?php
					foreach ($testimonial as $row) {
						?>
						<div class="testimonial-item">
							<div class="testimonial-text">
								<div class="client-name">
									<h4><?php echo $row['name']; ?></h4>
									<span><?php echo $row['designation'] ?>, <?php echo $row['company']; ?></span>
								</div>
								<div class="testimonial-detail">
								<i class="fa fa-quote-left"></i>
									<p><?php echo nl2br($row['comment']); ?></p>
								</div>
							</div>
							<div class="testimonial-photo">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>">
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<?php if($setting['faq_status'] == 'Show'): ?>
<div class="faq-home pt-30">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="faq-gallery-main">
					<?php
					foreach ($faq_photo as $row) {
						$faq_main_photo = $row['main_photo'];
					}
					?>
					<img src="<?php echo base_url(); ?>public/uploads/<?php echo $faq_main_photo; ?>" alt="FAQ Main Photo" class="img-responsive">
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="faq-gallery">
					<h3><?php echo $setting['faq_title']; ?></h3>
					<h4 class="sub"><?php echo $setting['faq_subtitle']; ?></h4>
					<div class="panel-group" id="accordion">
						<?php
						$i=0;
						foreach ($faq as $row) {
							$i++;
							?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row['faq_id']; ?>"><?php echo $row['faq_title']; ?></a>
									</h4>
								</div>
								<div id="<?php echo $row['faq_id']; ?>" class="panel-collapse collapse <?php if($i==1) {echo 'in';} ?>">
									<div class="panel-body">
										<?php echo $row['faq_content']; ?>
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<?php if($setting['counter_status'] == 'Show'): ?>
<div class="counterup-area pt-30 pb-60" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['counter_bg']; ?>)">
	<div class="bg-counterup"></div>
	<div class="container">
		<div class="row">			
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter"><?php echo $setting['counter1_value']; ?></h2>
					<h4><?php echo $setting['counter1_text']; ?></h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter"><?php echo $setting['counter2_value']; ?></h2>
					<h4><?php echo $setting['counter2_text']; ?></h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter"><?php echo $setting['counter3_value']; ?></h2>
					<h4><?php echo $setting['counter3_text']; ?></h4>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 counter-border">
				<div class="counter-item">
					<h2 class="counter"><?php echo $setting['counter4_value']; ?></h2>
					<h4><?php echo $setting['counter4_text']; ?></h4>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<?php if($setting['gallery_status'] == 'Show'): ?>
<div class="caption-photo-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="headline">
				<div class="headline-shadow">
					<h2><?php echo $setting['gallery_title']; ?></h2>
					<p><?php echo $setting['gallery_subtitle']; ?></p>
				</div>
			</div>
		</div>
		<div class="row">			
			<?php
			foreach ($gallery as $row) {
				?>
				<div class="col-md-3 col-sm-4 col-xs-12 clear-four">
					<div class="caption-item">
						<div class="caption-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>)">
							<div class="caption-bg"></div>
							<div class="caption-box">
								<div class="caption-table">
									<div class="caption-icon">
										<a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="caption-text">
							<p><?php echo $row['photo_caption']; ?></p>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<?php endif; ?>


<?php if($setting['recent_post_status'] == 'Show'): ?>
<div class="blog-area bg-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headline">
					<div class="headline-shadow">
						<h2><?php echo $setting['recent_post_title']; ?></h2>
						<p><?php echo $setting['recent_post_subtitle']; ?></p>
					</div>
				</div>
				<div class="blog-carousel owl-carousel">					
					<?php
					$i=0;
					foreach ($latest_news as $row) {
						$i++;
						if($i>$setting['total_recent_post_home']) {
							break;
						}
						?>
						<div class="blog-item">
							<div class="blog-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)"></div>
							<div class="blog-author">
								<ul>
									<li class="gro"><?php echo POSTED_ON; ?> <?php echo $row['news_date']; ?></li>
									<li><i class="fa fa-user-circle-o"></i><?php echo ADMIN; ?></li>
								</ul>
							</div>
							<div class="blog-text">
								<h3><a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></h3>
								<?php echo $row['news_short_content']; ?>
								<div class="services-link">
									<a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo READ_MORE; ?><i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<?php if($setting['partner_status'] == 'Show'): ?>
<div class="brand-area ptb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headline">
					<div class="headline-shadow">
						<h2><?php echo $setting['partner_title']; ?></h2>
						<p><?php echo $setting['partner_subtitle']; ?></p>
					</div>
				</div>
				<div class="brand-carousel owl-carousel">					
					<?php
					foreach ($partner as $row) {
						?>
						<div class="brand-item" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)"></div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>