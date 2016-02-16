<?php 
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}


include "company/portfolio_header.php"; 

include "company/menu.php"; 

?>
            

        

		<!-- Site Main content start //-->
		

			
		<section>

				<div class="container margin-top-20">

					<div class="row">
						
                       <div class="col-lg-3">

		
									<?php include "company/left_quick_menu.php"; ?>
<div id="leftCol">
 <div id="sidebar">
				
		  	<div class="widget widget-categories margin-top-20">                    
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b> CONTACT US</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
						<form class="comment-form floating-form" id="portfolioform" method="post" name="getquote" data-toggle="validator" action="universal/define.php">
	
	<input type="hidden" name="return_nomail" value="<?php echo basename($_SERVER['PHP_SELF']); ?>">
					   <?php 
					   //print_r($_SESSION);
					   if(@isset($_SESSION['msgsent']) == 1 ) { ?>


								<div id="sendMessageStatus" class="status green align-center" style="height:400px;">Thank you for contacting us. We will respond to you as soon as possible.</div>
								
							   <button class="biss-btn biss-btn-success margin-top-25" id="send-green"><i class="fa fa-check"></i> Submitted</button>

<?php 


unset($_SESSION['msgsent']);

} else { ?>
	
	<div id="collapse2">

								<div class="form-elem form-elem-full">

									<label for="name">Your name (required)</label>
									
									<div class="name">

									<input type="text" placeholder="your name..." id="name" name="name">
									
									</div>

								</div>

								<div class="form-elem form-elem-full">

									<label for="email">Your email (required)</label>
									
									<div class="email">

									<input type="text" placeholder="your email..." id="email" name="email">
									
									</div>

								</div>

								<div class="form-elem form-elem-full">

									<label for="website">Your website (optional)</label>

									<input type="text" placeholder="your website..." id="website" name="website">

								</div>

								<div class="form-elem form-elem-full">

									<label for="message">Your message (optional)</label>

									<textarea placeholder="your message..." id="message" name="message"></textarea>

								</div>
								
								</div>
								
								<div id="collapse1" style="display:none; height:385px;">
									
								
								<div class="form-elem form-elem-full">

								<label class="align-center green">Thank you for contacting us. We will respond to you as soon as possible.</label>
								
								
								
								</div>
								
								</div>

								<div class="form-elem form-elem-full">

									<button class="biss-btn biss-btn-primary margin-top-25" type="submit">Submit</button>

								</div>
								
								<?php } ?>

							</form>
</div>
</div>
</div>

</div>

</div>
		
		</div>

</div>

<!--- News end --->


		
		                          
		
		
									<!-- Categories end //-->
	
								</div>
								
								<div class="clearfix hidden-md hidden-lg"></div>
								
								<!-- Main head //-->

						<div class="col-lg-9">
							
                        <p class="section-subtitle">Blaze</p>

							<h2 class="section-title margin-bottom-10">Projects</h2>
							
							
								
								
								<div class="plugin-container riva-sorting margin-top-20" id="project1-sorting">

								<!-- Filter //-->

								<div class="filters align-left">

									<span data-value="*" class="active">show all</span>

									<span data-value="php">php</span>

									<span data-value="cakephp">cake php</span>
									
									<span data-value="magento ">Magento </span>

									<span data-value="responsive">responsive</span>
									<span data-value="prestrashop">Prestrashop</span>

									<span data-value="Jquery">Jquery</span>

									<span data-value="wordpress">wordpress</span>

									<span data-value="yii">yii</span>
									
									<!--<span data-value="cakephp">cakephp</span>
									
									<span data-value="codeigniter">codeigniter</span>
									
									<span data-value="dataentry">dataentry</span>-->

								</div>

								<div class="listing">

									<!-- Project item start //-->

								
											<!-- 	<article class="project-item php yii responsive mysql post">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/1.jpg" alt="">

										</figure>-->

										<!-- Project image //-->
										
								
											<!-- 		
										<div class="meta-wrap">

									<!-- Post image //-->

								
											<!-- 	<figure class="border-none">
										
										<a target="_blank" href="http://assedisinc.com/">
										<img src="img/portfolio/Assedis.png" alt="">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			
					
								
											<!-- 	</figure>

									<!-- Post meta //-->

											<!-- 
									<div class="meta">

										<span>

											<i class="fa fa-map-marker"></i>Rochester, NY

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
								
											<!-- 	</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
									
											<!-- 		<div class="content">
												
												<div class="readmore margin-bottom-10" >
												<a href="http://assedisinc.com/" target="_blank" ><i class="fa fa-angle-double-right"></i> Assedis INC</a>
											</div>
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Assedis INC </p>-->
		
									
											<!-- 			<ul class="style-1">
						<li><i class="fa fa-chevron-circle-right primary-color"></i> End to End project management</li>
						<li><i class="fa fa-chevron-circle-right primary-color"></i> Applications Development & Implementation</li>
						<li><i class="fa fa-chevron-circle-right primary-color"></i> Web Site Design and Development & Implementation</li>
						<li><i class="fa fa-chevron-circle-right primary-color"></i> Social Media Integration</li>
						<!--<li><i class="fa fa-chevron-circle-right primary-color"></i> Cloud Computing</li>
						<li><i class="fa fa-chevron-circle-right primary-color"></i> Customer Relationship Management (CRM)</li>
						<li><i class="fa fa-chevron-circle-right primary-color"></i> Enterprise Resource Planning (ERP)</li>
						<li><i class="fa fa-chevron-circle-right primary-color"></i> e-Commerce</li>-->
				
											<!-- 		</ul>
		
											<!-- 
											</div>
											
											<!--<div class="readmore">
												<a href="http://assedisinc.com/" target="_blank" ><i class="fa fa-angle-double-right"></i> read more</a>
											</div>-->
											
								
											<!-- 		</div>

										

									</article>

									<!-- Project item end //-->

									<!-- Project item start //-->

							<!--		<article class="project-item responsive post wordpress mysql">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/2.jpg" alt="">

											<figcaption>

												<a href="img/projects/2.jpg" class="zoom"><i class="fa fa-search"></i></a>

												<a href="" class="title">Morbid Tidy Sledgehammer</a>

											</figcaption>			

										</figure>-->

										<!-- Project image //-->
										
										
									<!--	<div class="meta-wrap">

									<!-- Post image //-->

								<!--	<figure class="border-none">
										<a target="_blank"  href="http://aviannegreen.com/">
										<img src="img/portfolio/aviannegreen.png" alt="">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

								<!--	</figure>

									<!-- Post meta //-->
<!--
									<div class="meta">

										<span>

											<i class="fa fa-map-marker"></i>  Kent, UK

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
								<!--	</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
									<!--		<div class="content">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Aviannegreen </p>-->
												
											<!--	<div class="readmore margin-bottom-10">
											<a href="http://aviannegreen.com/" target="_blank" > <i class="fa fa-angle-double-right"></i> Aviannegreen</a>
											</div>
		
												<ul class="style-1">
												<li><i class="fa fa-chevron-circle-right primary-color"></i> Aviannegreen, OEM & manufacturing services.</li>
												<li><i class="fa fa-chevron-circle-right primary-color"></i> Avicom, telecoms & related equipment.</li>
												<li><i class="fa fa-chevron-circle-right primary-color"></i> Aviclean, office equipment cleansing products. </li>
												<li><i class="fa fa-chevron-circle-right primary-color"></i> Aviconnect, Busbar and Insulator products     </li>
												
												</ul>
		
											</div>
											
											
											
										</div>

											<article class="project-item yii  php  post  ">
										<div class="meta-wrap">
									<figure class="border-none">
										<a target="_blank"  href="http://appoingo.com/">
										<img src="img/portfolio/appoingo_com Logog.png" alt="">
										</a>
									</figure>
									<div class="meta">
										<span>
											 &nbsp;YII

										</span>
									</div>
								</div>

										<div class="content-wrap text-left">
		
											<div class="content">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
		<article class="project-item yii  php  post  ">
										<div class="meta-wrap">
									<figure class="border-none">
										<a target="_blank"  href="#">
										<img src="img/portfolio/appoingo_com Logog.png" alt="">
										</a>
									</figure>
									<div class="meta">
										<span>
											 &nbsp;YII

										</span>
									</div>
								</div>

										<div class="content-wrap text-left">
		
											<div class="content">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> appoingo</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> A business directory that will list and promote each business based on countries, city and categories.
</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> An Appointment booking system is incorporated with business directory. </li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Language will be provided in English and Chinese.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Site developed in LAMP and HTML 5 to cater for users using different mobile device to visit the site with high-grade SSL encryption to protect the data.</li>
													<!--<li><i class="fa fa-chevron-circle-right primary-color"></i> Complete servers and workstations, storage systems</li>-->
													
													<!--<li>components</li>
													<li></li>
													<li>media</li>
													<li>accessories</li>-->
												</ul>
											</div>
										</div>
									</article>
										<!--

									</article>-->
								<article class="project-item responsive php mysql post wordpress Jquery">

									
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a target="_blank"  href="#">
										<img src="img/portfolio/Kathiravan Logo.png" alt="">
										</a>
									
									</figure>

								

									<div class="meta">

										<span>

										 &nbsp;	WORDPRESS

										</span>
										
								
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> kathiravan</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Unlimited number of dynamic news sections.</i>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Professionally publishes and manages an online news publication quickly and easily.
.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Simple, dynamic front page and section page publication presentation controls.
 </li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Schedule the activation/display date of a story.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Stories can be rated and reviewed by your audience with the Ratings and Reviews portlet.</li>
													
													<!--<li>components</li>
													<li></li>
													<li>media</li>
													<li>accessories</li>-->
													
												</ul>
		
											</div>
											
											
											
										</div>

										

									</article>		
									<!-- Project item end //-->
						
									<!-- Project item start 4 //-->
									<article class="project-item post php">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/1.jpg" alt="">

										</figure>-->

										<!-- Project image //-->
										
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/mettimatrimony Logo.png" alt="mettimatrimony">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

										 &nbsp;	PHP

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Tinselit </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> mettimatrimony.in</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Paid and Free Member Registrations.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Alerts on registration, express interest, activation.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Featured profile listings on homepage along with thumbnail images.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Print Multiple Profiles.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Daily Automatic Backup of DB (CronJob).</li>
												</ul>
											</div>
											
											
											
										</div>

										

									</article>
									<article class="project-item Jquery php post  yii">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/1.jpg" alt="">

										</figure>-->

										<!-- Project image //-->
										
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/Kids Activities & Kids Services Logo.png" alt="Kids">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

											YII

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:250px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Tinselit </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> kidoserv</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Unlimited custom fields.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> GEO targeting website.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Manage payments, ads moUsers can post ads with photos and videos.deration, unlimited categories, subcategories, locations and sub-locations.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> SEO pages and URLs.</li>
													<!--<li><i class="fa fa-chevron-circle-right primary-color"></i> Invite your friends via social media</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Friends confirm attending your event and purchase on-line from your wishlist!</li>-->
												</ul>
											</div>
											
											
											
										</div>

										

									</article>

									
					
									<article class="project-item wordpress php   post  ">
										<div class="meta-wrap">
									<figure class="border-none">
										<a target="_blank"  href="#">
										<img src="img/portfolio/Events Animal Logo.png" alt="">
										</a>
									</figure>
									<div class="meta">
										<span>
										 &nbsp;	WORDPRESS

										</span>
									</div>
								</div>

										<div class="content-wrap text-left">
		
											<div class="content" style="height:250px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> event animal</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Effective Event search.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Different ways to display events on your web page. </li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Event Management System.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Integration with Event Calendar.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Share Events in Social Media Networks.</li>
													<!--<li><i class="fa fa-chevron-circle-right primary-color"></i> Complete servers and workstations, storage systems</li>-->
													
													<!--<li>components</li>
													<li></li>
													<li>media</li>
													<li>accessories</li>-->
												</ul>
											</div>
										</div>
									</article>
									
									<!--<article class="project-item magento  php  post  ">
										<div class="meta-wrap">
									<figure class="border-none">
										<a target="_blank"  href="http://www.yourpatiofurniture.com/">
										<img src="img/portfolio/Your Furniture.png" alt="">
										</a>
									</figure>
									<div class="meta">
										<span>
											<i class="fa fa-map-marker"></i> CA, USA

										</span>
									</div>
								</div>

										<div class="content-wrap text-left">
		
											<div class="content">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
												
											<!--	<div class="readmore margin-bottom-10">
											<a href="http://www.yourpatiofurniture.com/" target="_blank" ><i class="fa fa-angle-double-right"></i> yourpatiofurniture</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Product Variants</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Color swatch variants</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Customized Homepage</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Item Clearance Module with Secured Payment gateways.</li>
													<!--<li><i class="fa fa-chevron-circle-right primary-color"></i> Complete servers and workstations, storage systems</li>-->
													
													<!--<li>components</li>
													<li></li>
													<li>media</li>
													<li>accessories</li>-->
											<!--	</ul>
											</div>
										</div>
									</article>-->
								
									
									
									<article class="project-item yii  php  post  ">
										<div class="meta-wrap">
									<figure class="border-none">
										<a target="_blank"  href="#">
										<img src="img/portfolio/Livehere Logo.png" alt="">
										</a>
									</figure>
									<div class="meta">
										<span>
										 &nbsp;	YII

										</span>
									</div>
								</div>

										<div class="content-wrap text-left">
		
											<div class="content" style="height:250px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> Livehere</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> South African property listing website similar to Zumpar & Urbancompass.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Custom property listing features.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Gallery Builder with Watermarking options. </li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Private Seller and Agent Sections.</li>
								
													<!--<li><i class="fa fa-chevron-circle-right primary-color"></i> Complete servers and workstations, storage systems</li>-->
													
													<!--<li>components</li>
													<li></li>
													<li>media</li>
													<li>accessories</li>-->
												</ul>
											</div>
										</div>
									</article>

									<article class="project-item responsive php mysql post wordpress Jquery">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/3.jpg" alt="">

											<figcaption>

												<a href="img/projects/3.jpg" class="zoom"><i class="fa fa-search"></i></a>

												<a href="" class="title">Eternal Early Backpack</a>

											</figcaption>			

										</figure>-->

										<!-- Project image //-->
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a target="_blank"  href="#">
										<img src="img/portfolio/LexgoLogo.png" alt="">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

											 &nbsp;PHP

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:230px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> Lexgo</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Add shipment product directly into the website if it's eBay product.</i>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Bidding and Hiring System.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Integrated with MOLPay API. </li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Secured Chatting system between Transporters and Customers.</li>
													
													<!--<li>components</li>
													<li></li>
													<li>media</li>
													<li>accessories</li>-->
													
												</ul>
		
											</div>
											
											
											
										</div>

										

									</article>

							<article class="project-item post">

										
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/nanotek.png" alt="Nanotek">
										</a>

										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

										 &nbsp;	PHP

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:230px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Nanotek </p>-->
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> Nanotek</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Cloud Computing.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Enterprise Security.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> End User and Infrastructure Support Services.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Application Management and Customization.</li>
												</ul>
		
											</div>
											
											
											
										</div>

										
										

									</article>
								

								<article class="project-item magento  php  post  ">
										<div class="meta-wrap">
									<figure class="border-none">
										<a target="_blank"  href="#">
										<img src="img/portfolio/Your Furniture.png" alt="">
										</a>
									</figure>
									<div class="meta">
										<span>
											 &nbsp; MAGENTO

										</span>
									</div>
								</div>

										<div class="content-wrap text-left">
		
											<div class="content" style="height:230px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> your patio furniture</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Product Variants.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Color swatch variants.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Customized Homepage.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Item Clearance Module with Secured Payment gateways.</li>
													<!--<li><i class="fa fa-chevron-circle-right primary-color"></i> Complete servers and workstations, storage systems</li>-->
													
													<!--<li>components</li>
													<li></li>
													<li>media</li>
													<li>accessories</li>-->
												</ul>
											</div>
										</div>
									</article>
									
									<article class="project-item responsive php cakephp post  ">
										<div class="meta-wrap">
									<figure class="border-none">
										<a target="_blank"  href="#">
										<img src="img/portfolio/imusti Logo.png" alt="">
										</a>
									</figure>
									<div class="meta">
										<span>
											  &nbsp;CAKE PHP

										</span>
									</div>
								</div>

										<div class="content-wrap text-left">
		
											<div class="content" style="height:190px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> Imusti.com</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Media management wizard backends.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Amazon S3 & EC2 Setup.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> FFMPEG Conversions.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Secure Media Streaming.</li>
													<!--<li><i class="fa fa-chevron-circle-right primary-color"></i> Complete servers and workstations, storage systems</li>-->
													
													<!--<li>components</li>
													<li></li>
													<li>media</li>
													<li>accessories</li>-->
												</ul>
											</div>
										</div>
									</article>
									
									<!-- Project item start 3 //-->
													
									
									<!-- Project item end //-->
									
									<!--<div class="col-lg-12 margin-bottom-30">
										
  <div class="col-lg-4"></div>
									
								 <div class="col-lg-4">	<p><a class="biss-btn biss-btn-primary text-trans-none width-100 nav-toggle" href="#collapse1"> SHOW MORE</a></p></div>
   <div class="col-lg-4"></div>
									
									</div>--->

									<!-- Project item start //-->
									
									<!--<div id="collapse1" style="display:none">-->
								
                                                                    <article class="project-item post prestrashop">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/1.jpg" alt="">

										</figure>-->

										<!-- Project image //-->
										
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/SOCANEWS LOGO.png" alt="socanews">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

											 &nbsp;Prestrashop

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:190px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Tinselit </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> socanews</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> SocialEngine Package.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Plenty of customizations & design integrations.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Interactive Tools CMS Software.</li>
												</ul>
											</div>
											
											
											
										</div>

										

									</article>

									<article class="project-item responsive post wordpress  Jquery">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/2.jpg" alt="">

											<figcaption>

												<a href="img/projects/2.jpg" class="zoom"><i class="fa fa-search"></i></a>

												<a href="" class="title">Morbid Tidy Sledgehammer</a>

											</figcaption>			

										</figure>-->

										<!-- Project image //-->
										
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/arulhospice_com Logo.png" alt="Nanotek">
										</a>

										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

											 &nbsp;WORDPRESS

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:190px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Nanotek </p>-->
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> arul hospice</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Online Calendar in backend to track charity schedule.
</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Unlimited Pages Management.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Support Mobile Devices.</li>
										
												</ul>
		
											</div>
											
											
											
										</div>

										
										

									</article>

							
									<article class="project-item responsive php mysql post  Jquery">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/3.jpg" alt="">

											<figcaption>

												<a href="img/projects/3.jpg" class="zoom"><i class="fa fa-search"></i></a>

												<a href="" class="title">Eternal Early Backpack</a>

											</figcaption>			

										</figure>-->

										<!-- Project image //-->
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a target="_blank"  href="#">
										<img src="img/portfolio/DEC Trader Logo.png" alt="">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

											 &nbsp;PHP

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:180px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> Dectrader</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> 100K products inventory.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Customized Tax rules.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Google Checkout Integration.</li>
													<!--<li><i class="fa fa-chevron-circle-right primary-color"></i> Complete servers and workstations, storage systems</li>-->
													
													<!--<li>components</li>
													<li></li>
													<li>media</li>
													<li>accessories</li>-->
													
												</ul>
		
											</div>
											
											
											
										</div>

										

									</article>
					

									<article class="project-item php post">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/3.jpg" alt="">

											<figcaption>

												<a href="img/projects/3.jpg" class="zoom"><i class="fa fa-search"></i></a>

												<a href="" class="title">Eternal Early Backpack</a>

											</figcaption>			

										</figure>-->

										<!-- Project image //-->
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a target="_blank"  href="#">
										<img src="img/portfolio/NTL Taxi Logo.png" alt="">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

										 &nbsp;	PHP

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:180px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Dectrader </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> ntl taxi</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Booking Area.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Route, Trip management.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Online payments.</li>
						
													
													<!--<li>components</li>
													<li></li>
													<li>media</li>
													<li>accessories</li>-->
													
												</ul>
		
											</div>
											
											
											
										</div>

										

									</article>
																		
	<article class="project-item Jquery php post  ">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/1.jpg" alt="">

										</figure>-->

										<!-- Project image //-->
										
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/Super Time Logo.png" alt="suppertime">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

											PHP

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:180px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Tinselit </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> Supper Time</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> A point of sale Software Development for restaurant.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Advanced security management.</li>
													<!--<li><i class="fa fa-chevron-circle-right primary-color"></i> Invite your friends via social media</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Friends confirm attending your event and purchase on-line from your wishlist!</li>-->
												</ul>
											</div>
											
											
											
										</div>

										

									</article>
								
									<!-- Project item end //-->
									
									<!--<div class="col-lg-12 margin-bottom-30">
										
  <div class="col-lg-4"></div>
									
								 <div class="col-lg-4">	<p><a class="biss-btn biss-btn-primary text-trans-none width-100 nav-toggle" href="#collapse1"> SHOW MORE</a></p></div>
   <div class="col-lg-4"></div>
									
									</div>--->

									<!-- Project item start //-->
									
									<!--<div id="collapse1" style="display:none">-->
							<!--		<article class="project-item post">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/1.jpg" alt="">

										</figure>-->

										<!-- Project image //-->
										
										
								<!--		<div class="meta-wrap">

									<!-- Post image //-->

								<!--	<figure class="border-none">
										<a href="http://tinselit.com/" target="_blank" >
										<img src="img/portfolio/tinselit.png" alt="tinselit">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

								<!--	</figure>

									<!-- Post meta //-->

								<!--	<div class="meta">

										<span>

											<i class="fa fa-map-marker"></i> Toronto, ON 

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
								<!--	</div>

								</div>

									<!--	<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
										<!--	<div class="content">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Tinselit </p>-->
												
										<!--		<div class="readmore margin-bottom-10">
											<a href="http://tinselit.com/" target="_blank" ><i class="fa fa-angle-double-right"></i> Tinselit</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Select date and venue for your special event</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Create your own wishlist</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Invite your friends via social media</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Friends confirm attending your event and purchase on-line from your wishlist!</li>
												</ul>
											</div>
											
											
											
										</div>

										

									</article>-->
									<article class="project-item  wordpress post">

									
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/Kathir PalaceLogo.png" alt="Nanotek">
										</a>

										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

										 &nbsp;	WORDPRESS

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:150px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Nanotek </p>-->
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> hotel kathir palace</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Hotel Booking Engine.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> High level Statistical Report.</li>
					
												</ul>
		
											</div>
											
											
											
										</div>

										
										

									</article>
										<article class="project-item php post">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/2.jpg" alt="">

											<figcaption>

												<a href="img/projects/2.jpg" class="zoom"><i class="fa fa-search"></i></a>

												<a href="" class="title">Morbid Tidy Sledgehammer</a>

											</figcaption>			

										</figure>-->

										<!-- Project image //-->
										
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/assedis Logo.png" alt="assedisinc">
										</a>

										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

											 &nbsp;PHP

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:150px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Nanotek </p>-->
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> assedisinc</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Quick and Simple Page Management.</li>
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Mobile friendly design.</li>
					
												</ul>
		
											</div>
											
											
											
										</div>

										
										

									</article>
									<article class="project-item post php">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/1.jpg" alt="">

										</figure>-->

										<!-- Project image //-->
										
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/Bookingnow_biz Logo.png" alt="tinselit">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

										 &nbsp;	PHP

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:150px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Tinselit </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> bookingnow.biz</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Integrated with EAN & Travel Now API (White Label Concept).</li>
												</ul>
											</div>
											
											
											
										</div>

										

									</article>
									
			

									<!-- Project item end //-->

									<!-- Project item start //-->

									
					
			
									<article class="project-item  wordpress post">

									
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/tutorbright_com Logog.png" alt="Nanotek">
										</a>

										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

										 &nbsp;	 WORDPRESS

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:100px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Nanotek </p>-->
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> tutorbright</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Simple and Clean Content Management Webpage.</li>
			
					
												</ul>
		
											</div>
											
											
											
										</div>

										
										

									</article>	
						                     <article class="project-item post php">

										<!-- Post image //-->

										<!--<figure>

											<img src="img/projects/1.jpg" alt="">

										</figure>-->

										<!-- Project image //-->
										
										
										<div class="meta-wrap">

									<!-- Post image //-->

									<figure class="border-none">
										<a href="#" target="_blank" >
										<img src="img/portfolio/fly2_com Logo.png" alt="tinselit">
										</a>
										<!--<figcaption>

											<a href="img/posts/1.jpg" class="zoom cboxElement"><i class="fa fa-search"></i></a>

										</figcaption>//-->			

									</figure>

									<!-- Post meta //-->

									<div class="meta">

										<span>

										 &nbsp;	PHP

										</span>
										
										<!--<span>

											<i class="fa fa-folder-open"></i> <a href="">yii</a>, <a href="">responsive design</a>

										</span>-->
										
									</div>

								</div>

										<div class="content-wrap text-left">
		
											<!-- Post excerpt //-->
		
											<div class="content" style="height:100px !important;">
		
												<!--<p class="title"><i class="fa fa-hand-o-right"></i> Tinselit </p>-->
												
												<div class="readmore margin-bottom-10">
											<a href="#" target="_blank" ><i class="fa fa-angle-double-right"></i> fly2.com</a>
											</div>
		
												<ul class="style-1">
													<li><i class="fa fa-chevron-circle-right primary-color"></i> Integrated with Priceline API.</li>
												</ul>
											</div>
											
											
											
										</div>

										

									</article>
									<!-- Project item end //-->
									
									<!--<div id="loadMore">Load more</div>-->
									
									<div class="col-md-12"><div class="col-md-4"></div>
									
									<div class="col-md-4"><a id="loadMore" class="biss-btn biss-btn-primary width-100 float-left sm-width-100 md-width-100 align-center">show more results</a>
<!--<div id="showLess">Show less</div>--></div>
									
									<div class="col-md-4"></div>
									</div>

									<!-- Project item start //-->

								

								</div>

							</div>


								
							
							
							
							
							</div>

						
						<div class="col-lg-12">

						<div class="divider-1 margin-top-20 margin-bottom-20"></div>

					</div>

					</div>

				</div>

			</section>
		
      <?php include "universal/footer.php"; ?>

        <!-- Scroll to the top button start //-->

        <div id="scroll-to-the-top">

            <i class="fa fa-angle-up"></i>

        </div>

        <!-- Scroll to the top button end //-->

    </div>

    </div>


    

  
</body>

<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#portfolioform').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                row: '.name',
                validators: {
                    notEmpty: {
                        message: 'Your name is required'
                    }
                }
            },
           
            
            
            
             enquiry: {
                row: '.enquiry',
                validators: {
                    notEmpty: {
                        message: 'You must choosetype of Enquiry'
                    }
                }
            },
            
            
            
            email: {
				row: '.email',
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            
            captcha_nomail: {
				row: '.recaptcha',
                validators: {
                    callback: {
                        message: 'Enter the above code correctly',
                        callback: function(value, validator, $field) {
							console.log(getCookie('6_letters_code'));
							//console.log(document.cookie);
                            //var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return getCookie('6_letters_code') == $('#6_letters_code').val();
                            
                            //$_SESSION['6_letters_code'] = $('#6_letters_code').val();
                            
                        }
                    }
                }
            },
           
        }
    });
});
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
} 
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
//setCookie('6_letters_code',0,30); 
</script>
</html>
