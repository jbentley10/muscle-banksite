<?php
//This code must be included at the top of your script before any output is sent to the browser
//-even before <!DOCTYPE> declaration
require_once realpath(dirname(__FILE__)."/resources/konnektiveSDK.php");
$pageType = "leadPage"; //choose from: catalogPage, checkoutPage, upsellPage1, upsellPage2, upsellPage3, upsellPage4, thankyouPage
$deviceType = "ALL"; //choose from: DESKTOP, MOBILE, ALL
$ksdk = new KonnektiveSDK($pageType,$deviceType);

?>
<!doctype html>

<html>

	<head>
	<?php
//this line of code must go either inside the <head> </head> tags or inside the <body></body> tags
$ksdk->echoJavascript();
?>

		<meta charset="UTF-8" />

		<title>AMES Eye Serum</title>

		<link href="css/reset.css" type="text/css" rel="stylesheet" />

		<link href="css/style.css?v=1.41" type="text/css" rel="stylesheet" />

		<link href='https://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'><!--font-family: 'Oswald', sans-serif;-->

    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Merriweather:400,700' rel='stylesheet' type='text/css'><!--font-family: 'Merriweather', serif;-->

	</head>



	<body class="landing">

		<header>

			<div class="right">

				<!-- <form action="checkout.html">
 -->






				<div class='ktemplate_pageContainer'>









    <div class='ktemplate_boxRight'>


                <form id='kform' class='kform'>
 <p class="trail-bottle"> Tell us Where to Send </br>

						<span class="bold" style="font-size: 29px; color: #fff !important;" >YOUR TRIAL BOTTLE</span>

					</p>


				<div class="kform_spacer">
                    <input name="firstName" type="TEXT" isRequired>
                </div>

                <div class="kform_spacer">
                    <input name="lastName" type="TEXT" isRequired>
                </div>

				<div class="kform_spacer">
                    <input name="emailAddress" type="TEXT" isRequired>
                </div>

				<div class="kform_spacer">
                    <input name="phoneNumber" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" type="TEXT" isRequired>
                </div>
                    <div class='kform_spacer'>
                        <input name='shipAddress1' type='TEXT' isRequired>
                    </div>

                    <div class='kform_spacer'>
                        <input name='shipAddress2' type='TEXT'>
                    </div>

                    <div class='kform_spacer'>
                        <input name='shipCity' type='TEXT' isRequired>
                    </div>

                    <div class='kform_spacer'>
                        <select name='shipState' isRequired>
                        </select>
                    </div>

                    <div class='kform_spacer'>
                        <select name='shipCountry'></select>
                    </div>

                     <div class='kform_spacer'>
                        <input name='shipPostalCode' maxlength="5" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" type='TEXT' isRequired>
                    </div>
            <div class="kform_spacer kform_checkbox">
                        <label for="confirmTOS"  style="width: 265px; margin-top: -1px; text-align: justify; font-size: 12px; margin-bottom: 10px;">

                        <!--I agree to the <a href="terms.html" target="_blank">terms and conditions</a>-->

						<span class="agree"><input type="CHECKBOX" style="width: 16px; margin-bottom:0;" isRequired name="confirmTOS">By placing an order with us, you agree to our full <a href="terms.html" target="_blank">Terms and Conditions</a> and the enrollment our monthly auto-ship program, where you will immediately be billed the shipping and handling amount of $4.95. We will then immediately ship you your first bottle of AMES Eye Serum. In 18 days ( approximately 4 days for shipping and 14 days to try the product ), your credit card will be automatically charged the full retail price of $84.95. Then on day 45 and every 30 days after, we will send you a fresh 30-day supply of Ames Eye Serum and you will be charged $84.95+$4.95 for each recurring product that is shipped to you until you cancel. If our product is not right for you, simply call 888-599-5086 or contact us via email at care@ameseyeserum.com to cancel your membership and owe nothing more.</span>

                    </label>

                </div>



            <input class="btn" type='submit' value='Order Now!' class='kform_submitBtn' id='kformSubmit'>

        </form>

    </div>

</div>













			<!-- 	</form>
 -->
			</div>

			<div class="left">

			<div class="left-1">

			  <img class="img_for_desktop" src="images/girl-bg2.png?v=1" alt="girl-model"  width="530px" height="auto" />



			</div>

			<div class="left-2">



				<div class="logo">

					<!-- <a href="#"> --> <img src="images/logo.png" alt="logo" title="logo"/> </a>

				</div>

					<div class="features" >



						<p>

							 <span class="bold1">May Reduce  </span> the Look of Dark Under-Eye Circles

						</p>

						<p>  <img src="images/star-2.png" /></p>

						<p>

							<span class="bold1">May Brighten  </span>the Look of the Skin Around Your Eyes

						</p>



						<p>  <img src="images/star-3.png" /></p>

						<p>

						<span class="bold1">May Hydrate  </span>and Help Diminish Puffiness

						</p>

						<p>  <img src="images/star-3.png" /></p>

					</div>





				</div>

			</div>

			<div class="product">

				<div class="pro-img">

					<img src="images/product-img.png" />

				</div>

				<div class="pro-banner">



				</div>

			</div>

			<div class="clearfix">

			</div>

		</header>

            <main style="margin: 0 auto;">

			<!--<div class="block-1">

                            <img class="block1_product" src="images/product-img.png">

                             <div class="block-1-right">

				</div>

				<div class="block-1-left">



					<div class="block-left-text">

						<h1>

						How Does AMES Eye Serum Work?

						</h1>

						<p class="normal">

						My AMES Eye Serum uses blend that features acetyl oxidoreductases, a material that mimics the effect on deep wrinkles of botulinum toxin. The My AMES Eye Serum relaxes the facial tension that contributes to existing deep wrinkles while also modulating stimulation of facial muscle to avoid the formation of new wrinkles.</p>







					</div>



				</div>







                            <div class="clearfix">

			</div>

			</div>-->













			<!--<div class="block-4">

				<div class="block-4-text">







                                <h1>What is Hydrolyzed Wheat Protein?</h1>





				   <p class="blue-normal">

					Hydrolyzed Wheat Protein is a superior specialty protein that is amber in color and pleasant in odor making it ideal for use in skin and hair formulations. Because of its wide range of molecular weight, it has a broad distribution range is able to condition and repair hair from the inside out while its continuous protective Film-Forming properties fills damaged gaps, and lays the cuticle down by linking platelets of protein molecules. These Penetrating, Bonding & Shielding properties leave a lustrous and mirror-like shine with excellent Conditioning effects.

				  </p>











				</div>



                            <div class="clearfix">

			</div>

			</div>-->



			<div class="block-5 bottom">

				<div class="block-5-text">

					<!--<div class="logo-2">

						<a href="#">  <img src="images/logo-2.png" alt="logo-color" /> </a>

					</div>-->
						<!--<p class="nornal-italic" > Trial Offer <span class="bold" >Only</span> Available to </br>

							<span class="bold" >   First Time Users. </span></p>-->
					 	<a href="#" class="btn" style="position: absolute; left: 37%; top: 47%;">  <img src="images/btn-arrow.png" />   Order Now </a>

				</div>



				<div class="product-2">

					<img src="images/product-copy.png"  alt="product" />

				</div>



			</div>



		</main>

		<footer>

			<p class="normal-fote"> This product has not been evaluated by the FDA. This product is not intended to diagnose, treat, cure or prevent any disease. Results in description are illustrative and may not be typical results and individual results may vary. The depictions on this page are fictitious and indicative of potential results. Representations regarding the efficacy and safety of AMES Eye Serum have not been scientifically

 substantiated or evaluated by the Food and Drug Administration.</p>



    <ul class="link">



        <li> <a href="contact.html" target="_blank" > Contact Us |</a></li>

	<li><a href="terms.html" target="_blank" >  Terms and Conditions |</a></li>

	<li><a href="privacy.html" target="_blank" >Privacy Policy  |</a></li>

        <li><a href="ingredients.html" target="_blank" >Ingredients </a></li>

	 </ul>

                        <div class="copyright"> <strong>AMES Investments LLC</strong><br><br>

				Corp Address: 9675 Brentwood way #A, Westminster, CO 80021<br>

				Phone: 888-599-5086<br>

				Support Email: <a style="color:#000;" href="mailto:care@ameseyeserum.com">care@ameseyeserum.com</a><br><br>

				 <p class="fote-note" > <?php echo date('Y');?> &COPY; AMES Eye Serum</p>

			</div>





		</footer>

	</body>



</html>
