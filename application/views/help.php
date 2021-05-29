<?php
/*
 * Aplikasi BMT (Aplikasi Keuangan Mikro Masyarakat Ekonomi Syariah) ver. 1.0
 * Copyright (c) 2014
 *
 * file   : help.php
 * author : Edi Suwoto S.Komp
 * email  : edi.suwoto@gmail.com
 */
/*----------------------------------------------------------*/
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>BMT</title>
    <link rel="icon" href="<?php echo base_url('') ?>assets/images/favicon.jpg" type="image/jpg" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<link href="<?php echo base_url('') ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('') ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('') ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo base_url('') ?>assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url('') ?>assets/css/style-responsive.css" rel="stylesheet" />
	<link href="<?php echo base_url('') ?>assets/css/themes/default.css" rel="stylesheet" id="style_color" />
	<link href="<?php echo base_url('') ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('') ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('') ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('') ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('') ?>assets/plugins/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" type="text/css"  />
	<link href="<?php echo base_url('') ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    
    <script src="<?php echo base_url('') ?>assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>	
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->	
	<script src="<?php echo base_url('') ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>		
	<script src="<?php echo base_url('') ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo base_url('') ?>assets/plugins/excanvas.js"></script>
	<script src="<?php echo base_url('') ?>assets/plugins/respond.js"></script>	
	<![endif]-->	
	<script src="<?php echo base_url('') ?>assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>	
	<script src="<?php echo base_url('') ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('') ?>assets/plugins/jquery.blockui.js" type="text/javascript"></script>	
	<script src="<?php echo base_url('') ?>assets/plugins/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?php echo base_url('') ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>	
	<script src="<?php echo base_url('') ?>assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="<?php echo base_url('') ?>assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="<?php echo base_url('') ?>assets/plugins/jquery.peity.min.js" type="text/javascript"></script>	
	<script src="<?php echo base_url('') ?>assets/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>	
    <script type="text/javascript" src="<?php echo base_url('') ?>assets/js/jq/jquery.jclock.js"></script>
    <script type="text/javascript" src="<?php echo base_url('') ?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
   
    <script src="<?php echo base_url('') ?>assets/scripts/app.js" type="text/javascript"></script>
	<script src="<?php echo base_url('') ?>assets/scripts/form-components.js"></script> 
	<script>
		jQuery(document).ready(function() {		
			App.init(); // initlayout and core plugins
			FormComponents.init();
		});
	</script>
    <?php $this -> load -> view( 'header' );?>
    <link type="text/css" href="assets/css/welcome.css" rel="stylesheet" />
    <script type="text/javascript" src="assets/js/help.js"></script>
    <script type="text/javascript" src="assets/js/menu.js"></script>
</head>
<body class="fixed-top">
    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="<?php echo base_url() ?>"><img src="assets/img/logos.png" alt="MES"/></a>
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>          			
				<div class="top-nav">
					<span class="jclock"></span>				
					<ul class="nav pull-right" id="top_menu">
						<li class="divider-vertical hidden-phone hidden-tablet"></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="auth/logout" class="logut"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="container" class="row-fluid">
		<div id="sidebar" class="nav-collapse collapse">
			<div class="sidebar-toggler hidden-phone"></div>
            <?php //$this -> load -> view( 'menu' );?>
            <?php foreach($menunya as $item) {echo $item;}?>
		</div>
		<div id="body">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">		
						<h3 class="page-title">
							Help
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href=".">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Help</a></li>
							
						</ul>
					</div>
				</div>
				<div id="page" class="dashboard">
					<div class="row-fluid">
						<div class="span12">
                            <div class="tabbable tabbable-custom boxless">
                               <!--  <ul class="nav nav-tabs">
                                   <li class="active"><a href="#tabs-1" data-toggle="tab">TENTANG APLIKASI</a></li>
                                   <li><a href="#tabs-2" data-toggle="tab">LISENSI</a></li>
                                   <li><a href="#tabs-3" data-toggle="tab">KONTRIBUTOR</a></li>
                                </ul> -->
                                <!-- <div class="tab-content"> -->
                                    <!-- <div class="tab-pane active" id="tabs-1">
                                    	<ul class="unstyled profile-nav span3">
										      <li><img alt="" src="assets/images/BMT.png"></li>
										</ul>
                                        <div class="span9 profile-info">
                                             <h3>Tentang BMT</h3>
                                             <p>Ini adalah aplikasi Sistem Informasi Manajemen khusus bagi  Koperasi Jasa Keuangan Syariah (KJKS) atau Baitul Maal Wattamwil (BMT) untuk mewujudkan pengelolaan keuangan mikro syariah yang akuntabel dan profesional.</p>
                                             <p>Diproduksi dan diterbitkan pertama kali oleh Perkumpulan Masyarakat Ekonomi Syariah dengan nama "BMT" di tahun 2014 yang didukung oleh sponsorship dari Pegadaian Syariah.</p>
                                       	</div>
                                    </div> -->
                                  <!--   <div class="tab-pane" id="tabs-2">
                                        <div class="span12 profile-info">
                                             <center><h3>GNU GENERAL PUBLIC LICENSE</h3>
												<p>Version 3, 29 June 2007<br>
												Copyright © 2007 Free Software Foundation, Inc. <a href="http://fsf.org/">fsf.org</a><br>
												Everyone is permitted to copy and distribute verbatim copies of this license document, but changing it is not allowed.<br></p></center>
												<h4>Preamble</h4>
												<p>The GNU General Public License is a free, copyleft license for software and other kinds of works.</p>
                                                <p>The licenses for most software and other practical works are designed to take away your freedom to share and change the works. By contrast, the GNU General Public License is intended to guarantee your freedom to share and change all versions of a program--to make sure it remains free software for all its users. We, the Free Software Foundation, use the GNU General Public License for most of our software; it applies also to any other work released this way by its authors. You can apply it to your programs, too.</p>
                                                <p>When we speak of free software, we are referring to freedom, not price. Our General Public Licenses are designed to make sure that you have the freedom to distribute copies of free software (and charge for them if you wish), that you receive source code or can get it if you want it, that you can change the software or use pieces of it in new free programs, and that you know you can do these things.</p>
                                                <p>To protect your rights, we need to prevent others from denying you these rights or asking you to surrender the rights. Therefore, you have certain responsibilities if you distribute copies of the software, or if you modify it: responsibilities to respect the freedom of others.</p>
                                                <p>For example, if you distribute copies of such a program, whether gratis or for a fee, you must pass on to the recipients the same freedoms that you received. You must make sure that they, too, receive or can get the source code. And you must show them these terms so they know their rights.</p>
                                                <p>Developers that use the GNU GPL protect your rights with two steps: (1) assert copyright on the software, and (2) offer you this License giving you legal permission to copy, distribute and/or modify it.</p>
												<p>For the developers' and authors' protection, the GPL clearly explains that there is no warranty for this free software. For both users' and authors' sake, the GPL requires that modified versions be marked as changed, so that their problems will not be attributed erroneously to authors of previous versions.</p>
												<p>Some devices are designed to deny users access to install or run modified versions of the software inside them, although the manufacturer can do so. This is fundamentally incompatible with the aim of protecting users' freedom to change the software. The systematic pattern of such abuse occurs in the area of products for individuals to use, which is precisely where it is most unacceptable. Therefore, we have designed this version of the GPL to prohibit the practice for those products. If such problems arise substantially in other domains, we stand ready to extend this provision to those domains in future versions of the GPL, as needed to protect the freedom of users.</p>
												<p>Finally, every program is threatened constantly by software patents. States should not allow patents to restrict development and use of software on general-purpose computers, but in those that do, we wish to avoid the special danger that patents applied to a free program could make it effectively proprietary. To prevent this, the GPL assures that patents cannot be used to render the program non-free.</p>
												<p>The precise terms and conditions for copying, distribution and modification follow.</p>
                                            <h4>TERMS AND CONDITIONS</h4>         
                                        	<div class="accordion collapse in" id="accordion1" style="height: auto;">
                                        		<div class="accordion-group">
                                                	<div class="accordion-heading">
                                                    	<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">0. Definitions.</a>
                                                    </div>
                                                    <div id="collapse_1" class="accordion-body collapse in">
                                                    	<div class="accordion-inner">
                                                        	<p>"This License" refers to version 3 of the GNU General Public License.</p>
															<p>"Copyright" also means copyright-like laws that apply to other kinds of works, such as semiconductor masks.</p>
															<p>"The Program" refers to any copyrightable work licensed under this License. Each licensee is addressed as "you". "Licensees" and "recipients" may be individuals or organizations.</p>
															<p>To "modify" a work means to copy from or adapt all or part of the work in a fashion requiring copyright permission, other than the making of an exact copy. The resulting work is called a "modified version" of the earlier work or a work "based on" the earlier work.</p>
															<p>A "covered work" means either the unmodified Program or a work based on the Program.</p>
															<p>To "propagate" a work means to do anything with it that, without permission, would make you directly or secondarily liable for infringement under applicable copyright law, except executing it on a computer or modifying a private copy. Propagation includes copying, distribution (with or without modification), making available to the public, and in some countries other activities as well.</p>
															<p>To "convey" a work means any kind of propagation that enables other parties to make or receive copies. Mere interaction with a user through a computer network, with no transfer of a copy, is not conveying.</p>
															<p>An interactive user interface displays "Appropriate Legal Notices" to the extent that it includes a convenient and prominently visible feature that (1) displays an appropriate copyright notice, and (2) tells the user that there is no warranty for the work (except to the extent that warranties are provided), that licensees may convey the work under this License, and how to view a copy of this License. If the interface presents a list of user commands or options, such as a menu, a prominent item in the list meets this criterion.</p>
                                                        </div>
                                                    </div>
                                               </div>
                                               <div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">1. Source Code.</a>
                                                	</div>
                                                   	<div id="collapse_2" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>The "source code" for a work means the preferred form of the work for making modifications to it. "Object code" means any non-source form of a work.</p>
															<p>A "Standard Interface" means an interface that either is an official standard defined by a recognized standards body, or, in the case of interfaces specified for a particular programming language, one that is widely used among developers working in that language.</p>
															<p>The "System Libraries" of an executable work include anything, other than the work as a whole, that (a) is included in the normal form of packaging a Major Component, but which is not part of that Major Component, and (b) serves only to enable use of the work with that Major Component, or to implement a Standard Interface for which an implementation is available to the public in source code form. A "Major Component", in this context, means a major essential component (kernel, window system, and so on) of the specific operating system (if any) on which the executable work runs, or a compiler used to produce the work, or an object code interpreter used to run it.</p>
															<p>The "Corresponding Source" for a work in object code form means all the source code needed to generate, install, and (for an executable work) run the object code and to modify the work, including scripts to control those activities. However, it does not include the work's System Libraries, or general-purpose tools or generally available free programs which are used unmodified in performing those activities but which are not part of the work. For example, Corresponding Source includes interface definition files associated with source files for the work, and the source code for shared libraries and dynamically linked subprograms that the work is specifically designed to require, such as by intimate data communication or control flow between those subprograms and other parts of the work.</p>
															<p>The Corresponding Source need not include anything that users can regenerate automatically from other parts of the Corresponding Source.</p>
															<p>The Corresponding Source for a work in source code form is that same work.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3">2. Basic Permissions.</a>
                                                	</div>
                                                   	<div id="collapse_3" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>All rights granted under this License are granted for the term of copyright on the Program, and are irrevocable provided the stated conditions are met. This License explicitly affirms your unlimited permission to run the unmodified Program. The output from running a covered work is covered by this License only if the output, given its content, constitutes a covered work. This License acknowledges your rights of fair use or other equivalent, as provided by copyright law.</p>
															<p>You may make, run and propagate covered works that you do not convey, without conditions so long as your license otherwise remains in force. You may convey covered works to others for the sole purpose of having them make modifications exclusively for you, or provide you with facilities for running those works, provided that you comply with the terms of this License in conveying all material for which you do not control copyright. Those thus making or running the covered works for you must do so exclusively on your behalf, under your direction and control, on terms that prohibit them from making any copies of your copyrighted material outside their relationship with you.</p>
															<p>Conveying under any other circumstances is permitted solely under the conditions stated below. Sublicensing is not allowed; section 10 makes it unnecessary.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_4">3. Protecting Users' Legal Rights From Anti-Circumvention Law.</a>
                                                	</div>
                                                   	<div id="collapse_4" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>No covered work shall be deemed part of an effective technological measure under any applicable law fulfilling obligations under article 11 of the WIPO copyright treaty adopted on 20 December 1996, or similar laws prohibiting or restricting circumvention of such measures.</p>
															<p>When you convey a covered work, you waive any legal power to forbid circumvention of technological measures to the extent such circumvention is effected by exercising rights under this License with respect to the covered work, and you disclaim any intention to limit operation or modification of the work as a means of enforcing, against the work's users, your or third parties' legal rights to forbid circumvention of technological measures.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_5">4. Conveying Verbatim Copies.</a>
                                                	</div>
                                                   	<div id="collapse_5" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>You may convey verbatim copies of the Program's source code as you receive it, in any medium, provided that you conspicuously and appropriately publish on each copy an appropriate copyright notice; keep intact all notices stating that this License and any non-permissive terms added in accord with section 7 apply to the code; keep intact all notices of the absence of any warranty; and give all recipients a copy of this License along with the Program.</p>
															<p>You may charge any price or no price for each copy that you convey, and you may offer support or warranty protection for a fee.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_6">5. Conveying Modified Source Versions.</a>
                                                	</div>
                                                   	<div id="collapse_6" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>You may convey a work based on the Program, or the modifications to produce it from the Program, in the form of source code under the terms of section 4, provided that you also meet all of these conditions:</p>
															<ul type="a">
															<li>The work must carry prominent notices stating that you modified it, and giving a relevant date.</li>
															<li>The work must carry prominent notices stating that it is released under this License and any conditions added under section 7. This requirement modifies the requirement in section 4 to "keep intact all notices".</li>
															<li>You must license the entire work, as a whole, under this License to anyone who comes into possession of a copy. This License will therefore apply, along with any applicable section 7 additional terms, to the whole of the work, and all its parts, regardless of how they are packaged. This License gives no permission to license the work in any other way, but it does not invalidate such permission if you have separately received it.</li>
															<li>If the work has interactive user interfaces, each must display Appropriate Legal Notices; however, if the Program has interactive interfaces that do not display Appropriate Legal Notices, your work need not make them do so.</li>
															</ul>
															<p>A compilation of a covered work with other separate and independent works, which are not by their nature extensions of the covered work, and which are not combined with it such as to form a larger program, in or on a volume of a storage or distribution medium, is called an "aggregate" if the compilation and its resulting copyright are not used to limit the access or legal rights of the compilation's users beyond what the individual works permit. Inclusion of a covered work in an aggregate does not cause this License to apply to the other parts of the aggregate.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_7">6. Conveying Non-Source Forms.</a>
                                                	</div>
                                                   	<div id="collapse_7" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>You may convey a covered work in object code form under the terms of sections 4 and 5, provided that you also convey the machine-readable Corresponding Source under the terms of this License, in one of these ways:</p>
															<ul type="a">
															<li>Convey the object code in, or embodied in, a physical product (including a physical distribution medium), accompanied by the Corresponding Source fixed on a durable physical medium customarily used for software interchange.</li>
															<li>Convey the object code in, or embodied in, a physical product (including a physical distribution medium), accompanied by a written offer, valid for at least three years and valid for as long as you offer spare parts or customer support for that product model, to give anyone who possesses the object code either (1) a copy of the Corresponding Source for all the software in the product that is covered by this License, on a durable physical medium customarily used for software interchange, for a price no more than your reasonable cost of physically performing this conveying of source, or (2) access to copy the Corresponding Source from a network server at no charge.</li>
															<li>Convey individual copies of the object code with a copy of the written offer to provide the Corresponding Source. This alternative is allowed only occasionally and noncommercially, and only if you received the object code with such an offer, in accord with subsection 6b.</li>
															<li>Convey the object code by offering access from a designated place (gratis or for a charge), and offer equivalent access to the Corresponding Source in the same way through the same place at no further charge. You need not require recipients to copy the Corresponding Source along with the object code. If the place to copy the object code is a network server, the Corresponding Source may be on a different server (operated by you or a third party) that supports equivalent copying facilities, provided you maintain clear directions next to the object code saying where to find the Corresponding Source. Regardless of what server hosts the Corresponding Source, you remain obligated to ensure that it is available for as long as needed to satisfy these requirements.</li>
															<li>Convey the object code using peer-to-peer transmission, provided you inform other peers where the object code and Corresponding Source of the work are being offered to the general public at no charge under subsection 6d.</li>
															</ul>
															<p>A separable portion of the object code, whose source code is excluded from the Corresponding Source as a System Library, need not be included in conveying the object code work.</p>
															<p>A "User Product" is either (1) a "consumer product", which means any tangible personal property which is normally used for personal, family, or household purposes, or (2) anything designed or sold for incorporation into a dwelling. In determining whether a product is a consumer product, doubtful cases shall be resolved in favor of coverage. For a particular product received by a particular user, "normally used" refers to a typical or common use of that class of product, regardless of the status of the particular user or of the way in which the particular user actually uses, or expects or is expected to use, the product. A product is a consumer product regardless of whether the product has substantial commercial, industrial or non-consumer uses, unless such uses represent the only significant mode of use of the product.</p>
															<p>"Installation Information" for a User Product means any methods, procedures, authorization keys, or other information required to install and execute modified versions of a covered work in that User Product from a modified version of its Corresponding Source. The information must suffice to ensure that the continued functioning of the modified object code is in no case prevented or interfered with solely because modification has been made.</p>
															<p>If you convey an object code work under this section in, or with, or specifically for use in, a User Product, and the conveying occurs as part of a transaction in which the right of possession and use of the User Product is transferred to the recipient in perpetuity or for a fixed term (regardless of how the transaction is characterized), the Corresponding Source conveyed under this section must be accompanied by the Installation Information. But this requirement does not apply if neither you nor any third party retains the ability to install modified object code on the User Product (for example, the work has been installed in ROM).</p>
															<p>The requirement to provide Installation Information does not include a requirement to continue to provide support service, warranty, or updates for a work that has been modified or installed by the recipient, or for the User Product in which it has been modified or installed. Access to a network may be denied when the modification itself materially and adversely affects the operation of the network or violates the rules and protocols for communication across the network.</p>
															<p>Corresponding Source conveyed, and Installation Information provided, in accord with this section must be in a format that is publicly documented (and with an implementation available to the public in source code form), and must require no special password or key for unpacking, reading or copying.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_8">7. Additional Terms.</a>
                                                	</div>
                                                   	<div id="collapse_8" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>"Additional permissions" are terms that supplement the terms of this License by making exceptions from one or more of its conditions. Additional permissions that are applicable to the entire Program shall be treated as though they were included in this License, to the extent that they are valid under applicable law. If additional permissions apply only to part of the Program, that part may be used separately under those permissions, but the entire Program remains governed by this License without regard to the additional permissions.</p>
															<p>When you convey a copy of a covered work, you may at your option remove any additional permissions from that copy, or from any part of it. (Additional permissions may be written to require their own removal in certain cases when you modify the work.) You may place additional permissions on material, added by you to a covered work, for which you have or can give appropriate copyright permission.</p>
															<p>Notwithstanding any other provision of this License, for material you add to a covered work, you may (if authorized by the copyright holders of that material) supplement the terms of this License with terms:</p>
															<ul type="a">
															<li>Disclaiming warranty or limiting liability differently from the terms of sections 15 and 16 of this License; or</li>
															<li>Requiring preservation of specified reasonable legal notices or author attributions in that material or in the Appropriate Legal Notices displayed by works containing it; or</li>
															<li>Prohibiting misrepresentation of the origin of that material, or requiring that modified versions of such material be marked in reasonable ways as different from the original version; or</li>
															<li>Limiting the use for publicity purposes of names of licensors or authors of the material; or</li>
															<li>Declining to grant rights under trademark law for use of some trade names, trademarks, or service marks; or</li>
															<li>Requiring indemnification of licensors and authors of that material by anyone who conveys the material (or modified versions of it) with contractual assumptions of liability to the recipient, for any liability that these contractual assumptions directly impose on those licensors and authors.</li>
															</ul>
															<p>All other non-permissive additional terms are considered "further restrictions" within the meaning of section 10. If the Program as you received it, or any part of it, contains a notice stating that it is governed by this License along with a term that is a further restriction, you may remove that term. If a license document contains a further restriction but permits relicensing or conveying under this License, you may add to a covered work material governed by the terms of that license document, provided that the further restriction does not survive such relicensing or conveying.</p>
															<p>If you add terms to a covered work in accord with this section, you must place, in the relevant source files, a statement of the additional terms that apply to those files, or a notice indicating where to find the applicable terms.</p>
															<p>Additional terms, permissive or non-permissive, may be stated in the form of a separately written license, or stated as exceptions; the above requirements apply either way.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_9">8. Termination.</a>
                                                	</div>
                                                   	<div id="collapse_9" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>You may not propagate or modify a covered work except as expressly provided under this License. Any attempt otherwise to propagate or modify it is void, and will automatically terminate your rights under this License (including any patent licenses granted under the third paragraph of section 11).</p>
															<p>However, if you cease all violation of this License, then your license from a particular copyright holder is reinstated (a) provisionally, unless and until the copyright holder explicitly and finally terminates your license, and (b) permanently, if the copyright holder fails to notify you of the violation by some reasonable means prior to 60 days after the cessation.</p>
															<p>Moreover, your license from a particular copyright holder is reinstated permanently if the copyright holder notifies you of the violation by some reasonable means, this is the first time you have received notice of violation of this License (for any work) from that copyright holder, and you cure the violation prior to 30 days after your receipt of the notice.</p>
															<p>Termination of your rights under this section does not terminate the licenses of parties who have received copies or rights from you under this License. If your rights have been terminated and not permanently reinstated, you do not qualify to receive new licenses for the same material under section 10.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_10">9. Acceptance Not Required for Having Copies.</a>
                                                	</div>
                                                   	<div id="collapse_10" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>You are not required to accept this License in order to receive or run a copy of the Program. Ancillary propagation of a covered work occurring solely as a consequence of using peer-to-peer transmission to receive a copy likewise does not require acceptance. However, nothing other than this License grants you permission to propagate or modify any covered work. These actions infringe copyright if you do not accept this License. Therefore, by modifying or propagating a covered work, you indicate your acceptance of this License to do so.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_11">10. Automatic Licensing of Downstream Recipients.</a>
                                                	</div>
                                                   	<div id="collapse_11" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>Each time you convey a covered work, the recipient automatically receives a license from the original licensors, to run, modify and propagate that work, subject to this License. You are not responsible for enforcing compliance by third parties with this License.</p>
															<p>An "entity transaction" is a transaction transferring control of an organization, or substantially all assets of one, or subdividing an organization, or merging organizations. If propagation of a covered work results from an entity transaction, each party to that transaction who receives a copy of the work also receives whatever licenses to the work the party's predecessor in interest had or could give under the previous paragraph, plus a right to possession of the Corresponding Source of the work from the predecessor in interest, if the predecessor has it or can get it with reasonable efforts.</p>
															<p>You may not impose any further restrictions on the exercise of the rights granted or affirmed under this License. For example, you may not impose a license fee, royalty, or other charge for exercise of rights granted under this License, and you may not initiate litigation (including a cross-claim or counterclaim in a lawsuit) alleging that any patent claim is infringed by making, using, selling, offering for sale, or importing the Program or any portion of it.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_12">11. Patents.</a>
                                                	</div>
                                                   	<div id="collapse_12" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>A "contributor" is a copyright holder who authorizes use under this License of the Program or a work on which the Program is based. The work thus licensed is called the contributor's "contributor version".</p>
															<p>A contributor's "essential patent claims" are all patent claims owned or controlled by the contributor, whether already acquired or hereafter acquired, that would be infringed by some manner, permitted by this License, of making, using, or selling its contributor version, but do not include claims that would be infringed only as a consequence of further modification of the contributor version. For purposes of this definition, "control" includes the right to grant patent sublicenses in a manner consistent with the requirements of this License.</p>
															<p>Each contributor grants you a non-exclusive, worldwide, royalty-free patent license under the contributor's essential patent claims, to make, use, sell, offer for sale, import and otherwise run, modify and propagate the contents of its contributor version.</p>
															<p>In the following three paragraphs, a "patent license" is any express agreement or commitment, however denominated, not to enforce a patent (such as an express permission to practice a patent or covenant not to sue for patent infringement). To "grant" such a patent license to a party means to make such an agreement or commitment not to enforce a patent against the party.</p>
															<p>If you convey a covered work, knowingly relying on a patent license, and the Corresponding Source of the work is not available for anyone to copy, free of charge and under the terms of this License, through a publicly available network server or other readily accessible means, then you must either (1) cause the Corresponding Source to be so available, or (2) arrange to deprive yourself of the benefit of the patent license for this particular work, or (3) arrange, in a manner consistent with the requirements of this License, to extend the patent license to downstream recipients. "Knowingly relying" means you have actual knowledge that, but for the patent license, your conveying the covered work in a country, or your recipient's use of the covered work in a country, would infringe one or more identifiable patents in that country that you have reason to believe are valid.</p>
															<p>If, pursuant to or in connection with a single transaction or arrangement, you convey, or propagate by procuring conveyance of, a covered work, and grant a patent license to some of the parties receiving the covered work authorizing them to use, propagate, modify or convey a specific copy of the covered work, then the patent license you grant is automatically extended to all recipients of the covered work and works based on it.</p>
															<p>A patent license is "discriminatory" if it does not include within the scope of its coverage, prohibits the exercise of, or is conditioned on the non-exercise of one or more of the rights that are specifically granted under this License. You may not convey a covered work if you are a party to an arrangement with a third party that is in the business of distributing software, under which you make payment to the third party based on the extent of your activity of conveying the work, and under which the third party grants, to any of the parties who would receive the covered work from you, a discriminatory patent license (a) in connection with copies of the covered work conveyed by you (or copies made from those copies), or (b) primarily for and in connection with specific products or compilations that contain the covered work, unless you entered into that arrangement, or that patent license was granted, prior to 28 March 2007.</p>
															<p>Nothing in this License shall be construed as excluding or limiting any implied license or other defenses to infringement that may otherwise be available to you under applicable patent law.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_13">12. No Surrender of Others' Freedom.</a>
                                                	</div>
                                                   	<div id="collapse_13" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>If conditions are imposed on you (whether by court order, agreement or otherwise) that contradict the conditions of this License, they do not excuse you from the conditions of this License. If you cannot convey a covered work so as to satisfy simultaneously your obligations under this License and any other pertinent obligations, then as a consequence you may not convey it at all. For example, if you agree to terms that obligate you to collect a royalty for further conveying from those to whom you convey the Program, the only way you could satisfy both those terms and this License would be to refrain entirely from conveying the Program.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_14">13. Use with the GNU Affero General Public License.</a>
                                                	</div>
                                                   	<div id="collapse_14" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>Notwithstanding any other provision of this License, you have permission to link or combine any covered work with a work licensed under version 3 of the GNU Affero General Public License into a single combined work, and to convey the resulting work. The terms of this License will continue to apply to the part which is the covered work, but the special requirements of the GNU Affero General Public License, section 13, concerning interaction through a network will apply to the combination as such.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_15">14. Revised Versions of this License.</a>
                                                	</div>
                                                   	<div id="collapse_15" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>The Free Software Foundation may publish revised and/or new versions of the GNU General Public License from time to time. Such new versions will be similar in spirit to the present version, but may differ in detail to address new problems or concerns.</p>
															<p>Each version is given a distinguishing version number. If the Program specifies that a certain numbered version of the GNU General Public License "or any later version" applies to it, you have the option of following the terms and conditions either of that numbered version or of any later version published by the Free Software Foundation. If the Program does not specify a version number of the GNU General Public License, you may choose any version ever published by the Free Software Foundation.</p>
															<p>If the Program specifies that a proxy can decide which future versions of the GNU General Public License can be used, that proxy's public statement of acceptance of a version permanently authorizes you to choose that version for the Program.</p>
															<p>Later license versions may give you additional or different permissions. However, no additional obligations are imposed on any author or copyright holder as a result of your choosing to follow a later version.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_16">15. Disclaimer of Warranty.</a>
                                                	</div>
                                                   	<div id="collapse_16" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>THERE IS NO WARRANTY FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW. EXCEPT WHEN OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU. SHOULD THE PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING, REPAIR OR CORRECTION.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_17">16. Limitation of Liability.</a>
                                                	</div>
                                                   	<div id="collapse_17" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MODIFIES AND/OR CONVEYS THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES, INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                              	<div class="accordion-group">
                                               		<div class="accordion-heading">
                                                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_18">17. Interpretation of Sections 15 and 16.</a>
                                                	</div>
                                                   	<div id="collapse_18" class="accordion-body collapse">
                                                    	<div class="accordion-inner">
                                                        	<p>If the disclaimer of warranty and limitation of liability provided above cannot be given local legal effect according to their terms, reviewing courts shall apply local law that most closely approximates an absolute waiver of all civil liability in connection with the Program, unless a warranty or assumption of liability accompanies a copy of the Program in return for a fee.</p>
                                                        </div>
                                                    </div>
                                              	</div>
                                        	</div>
                                        	<h4>END OF TERMS AND CONDITIONS</h4> 
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-3">
                                    	<p>MES, dan Tim BMT menyatakan benar para kontributor berikut ini:</p>
                                    	<div class="accordion collapse in" id="accordion1" style="height: auto;">
                                        		<div class="accordion-group">
                                                	<div class="accordion-heading">
                                                    	<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">PROGRAMMER & ANALYS SYSTEM</a>
                                                    </div>
                                                    <div id="collapse_1" class="accordion-body collapse in">
                                                    	<div class="accordion-inner">
                                                    	<p><b><a href="http://edi.disitus.com" target="_blank">Edi Suwoto S.Kom</a></b></p>
                                                    	</div>
                                                    </div>
                                               </div>
                                               <div class="accordion-group">
                                                	<div class="accordion-heading">
                                                    	<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">ANALYS BISNIS</a>
                                                    </div>
                                                    <div id="collapse_2" class="accordion-body collapse in">
                                                    	<div class="accordion-inner">
                                                    	<p><b><a href="#" target="_blank">Rizkison Pane, SEI., M.Ak</a><br><a href="#" target="_blank">Achmad Iqbal</a></b></p>
                                                    	</div>
                                                    </div>
                                               </div>
                                         </div>
                                    </div> -->
                                <!-- </div> -->
                            </div>
                        </div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<!-- <div id="footer">
		<br>BMT (Aplikasi Keuangan Mikro Masyarakat Ekonomi Syariah) ver. 1.0 ini dipersembahkan oleh <img src="assets/img/pegadaianc.png" alt="pegadaian" class="center" />
		<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
	</div> -->
	
</body>
<!-- END BODY -->
</html>
