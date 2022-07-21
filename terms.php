<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Lato', 'Arial', sans-serif;
}

/* HEADINGS */

h1, p {
  color: #fff;
  text-align: center;
  line-height: 1.4;
}

h1 {
  font-size: 2.2rem;
}

h2 {
  color: #000;
  font-size: 1.3rem;
  text-align: center;
  line-height: 1.4;
  margin-bottom: 10px;
}

/* BASIC SETUP */

.page-wrapper {
  width: 100%;
  height: auto;
}

.nav-wrapper {
  width: 100%;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  background-color: #fff;
}

.grad-bar {
  width: 100%;
  height: 5px;
  background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
  background-size: 400% 400%;
  	-webkit-animation: gradbar 15s ease infinite;
	-moz-animation: gradbar 15s ease infinite;
	animation: gradbar 15s ease infinite;
}

/* NAVIGATION */

.navbar {
  display: grid;
  grid-template-columns: 1fr 3fr;
  align-items: center;
  height: 50px;
  overflow: hidden;
}

.navbar img {
  height: auto;
  width: 40%;
  justify-self: start;
  margin-left: 20px;
}

.navbar ul {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(6,1fr);
  justify-self: end;
  
}

.nav-item a {
  color: white;
  font-size: 0.9rem;
  font-weight: 400;
  text-decoration: none;
  transition: color 0.3s ease-out;
}

.nav-item a:hover {
  color: #cda45e;
}

/* SECTIONS */

.headline {
  width: 100%;
  height: 50vh;
  min-height: 350px;
  background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/jPLiQ-9/mountains-background-for-titles-intro-projects-and-etc_ew22rur3l__F0000.png');
  background-size: cover;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.features {
  width: 100%;
  height: auto;
  background-color: #f1f1f1;
  display: flex;
  padding: 50px 20px;
  justify-content: space-around;
}

.feature-container {
  flex-basis: 30%;
  margin-top: 10px;
}

.feature-container p {
  color: #000;
  text-align: center;
  line-height: 1.4;
  margin-bottom: 15px;
}

.feature-container img {
  width: 100%;
  margin-bottom: 15px;
}

/* SEARCH FUNCTION */

#search-icon {
  font-size: 0.9rem;
  margin-top: 3px;
  margin-left: 15px;
  transition: color 0.3s ease-out;
}

#search-icon:hover {
  color: #3498db;
  cursor: pointer;
}

.search {
  transform: translate(-35%);
  -webkit-transform: translate(-35%);
  transition: transform 0.7s ease-in-out;
  color: #3498db;
}

.no-search {
  transform: translate(0);
  transition: transform 0.7s ease-in-out;
}

.search-input {
  position: absolute;
  top: -4px;
  right: -125px;
  opacity: 0;
  z-index: -1;
  transition: opacity 0.6s ease;
}

.search-active {
  opacity: 1;
  z-index: 0;
}

input {
  border: 0;
  border-left: 1px solid #ccc;
  border-radius: 0; /* FOR SAFARI */
  outline: 0;
  padding: 5px;
}

/* MOBILE MENU & ANIMATION */

.menu-toggle .bar{
  width: 25px;
  height: 3px;
  background-color: #3f3f3f;
  margin: 5px auto;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.menu-toggle {
  justify-self: end;
  margin-right: 25px;
  display: none;
}

.menu-toggle:hover{
  cursor: pointer;
}

#mobile-menu.is-active .bar:nth-child(2){
  opacity: 0;
}

#mobile-menu.is-active .bar:nth-child(1){
  -webkit-transform: translateY(8px) rotate(45deg);
  -ms-transform: translateY(8px) rotate(45deg);
  -o-transform: translateY(8px) rotate(45deg);
  transform: translateY(8px) rotate(45deg);
}

#mobile-menu.is-active .bar:nth-child(3){
  -webkit-transform: translateY(-8px) rotate(-45deg);
  -ms-transform: translateY(-8px) rotate(-45deg);
  -o-transform: translateY(-8px) rotate(-45deg);
  transform: translateY(-8px) rotate(-45deg);
}

/* KEYFRAME ANIMATIONS */

@-webkit-keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

/* Media Queries */

  /* Mobile Devices - Phones/Tablets */

@media only screen and (max-width: 720px) { 
  .features {
    flex-direction: column;
    padding: 50px;
  }
  
  /* MOBILE HEADINGS */
  
  h1 {
    font-size: 1.9rem;
  }
  
  h2 {
    font-size: 1rem;
  }
  
  p {
    font-size: 0.8rem;
  }
  
  /* MOBILE NAVIGATION */
     
  .navbar ul {
    display: flex;
    flex-direction: column;
    position: fixed;
    justify-content: start;
    top: 55px;
    background-color: #fff;
    width: 100%;
    height: calc(100vh - 55px);
    transform: translate(-101%);
    text-align: center;
    overflow: hidden;
  }
  
  .navbar li {
    padding: 15px;
  }
  
  .navbar li:first-child {
    margin-top: 50px;
  }
  
  .navbar li a {
    font-size: 1rem;
  }
   
  .menu-toggle, .bar {
    display: block;
    cursor: pointer;
  }
  
  .mobile-nav {
  transform: translate(0%)!important;
}
  
  /* SECTIONS */
  
  .headline {
    height: 20vh;
  }
    
  .feature-container p {
    margin-bottom: 25px;
  }
  
  .feature-container {
    margin-top: 20px;
  }
  
  .feature-container:nth-child(2) {
    order: -1;
  }
  
  /* SEARCH DISABLED ON MOBILE */
  
  #search-icon {
    display: none;
  }
  
  .search-input {
  display: none;
 }
  
}


h1, h2,h3,h4,p{
  color:black;  
}
</style>

<script>
    $("#search-icon").click(function() {
  $(".nav").toggleClass("search");
  $(".nav").toggleClass("no-search");
  $(".search-input").toggleClass("search-active");
});

$('.menu-toggle').click(function(){
   $(".nav").toggleClass("mobile-nav");
   $(this).toggleClass("is-active");
});

</script>







<div class="page-wrapper">
 <div class="nav-wrapper">
 
  <nav  style="background-color:black;"  class="navbar">
    <img src="logo.png" alt="Royal Garden">
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    <ul class="nav no-search">
      <li  style="color:white;"  class="nav-item"><a href="index.html">Home</a></li>
      
    </ul>
  </nav>
  </div>
  <section style="background-color:black;" class="headline">
    <h1 style="color:white; font-size:4em;">Terms & Conditions</h1>
   
  </section>
  
  
  
  
  
  
  
  
  
  <section align="center" style="padding-left:15%; padding-right:15%;">
      
      <br/><br/>
      
<h2 >Effective date: November 04, 2019</h2><br/>

<p>These Terms and Conditions ("Terms", "Terms and Conditions") govern your relationship with <a href="http://www.royalgardenme.com">http://www.royalgardenme.com</a> website (the "Service") operated by Royal Garden General Trading ("us", "we", or "our").</p>

<b>Please read these Terms and Conditions carefully before using the Service.</b><br/>
<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.<br/>
By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p><br/>



<h2 id="purchase">Purchases</h2>
<p>
    	If you wish to purchase any product or service made available through the Service ("Purchase"), you may be asked to supply certain information relevant to your Purchase including, without limitation, your credit card number, the expiration date of your credit card, your billing address, and your shipping information.<br/>
	You represent and warrant that: (i) you have the legal right to use any credit card(s) or other payment method(s) in connection with any Purchase; and that (ii) the information you supply to us is true, correct and complete.<br/>
	By submitting such information, you grant us the right to provide the information to third parties for purposes of facilitating the completion of Purchases.<br/>
	We reserve the right to refuse or cancel your order at any time for certain reasons including but not limited to: product or service availability, errors in the description or price of the product or service, error in your order or other reasons.<br/>
	We reserve the right to refuse or cancel your order if fraud or an unauthorized or illegal transaction is suspected.<br/>
	
	
	<h2>Availability, Errors And Inaccuracies</h2>
We are constantly updating our offerings of products and services on the Service. The products or services available on our Service may be mispriced, described inaccurately, or unavailable, and we may experience delays in updating information on the Service and in our advertising on other web sites.<br/>
We cannot and do not guarantee the accuracy or completeness of any information, including prices, product images, specifications, availability, and services. We reserve the right to change or update information and to correct errors, inaccuracies, or omissions at any time without prior notice.<br/>

<h2>Contests, Sweepstakes And Promotions</h2>
Any contests, sweepstakes or other promotions (collectively, "Promotions") made available through the Service may be governed by rules that are separate from these Terms. If you participate in any Promotions, please review the applicable rules as well as our Privacy Policy. If the rules for a Promotion conflict with these Terms, the Promotion rules will apply.

<h2 id="subscription">Subscriptions</h2>
Some parts of the Service are billed on a subscription basis ("Subscription(s)"). You will be billed in advance on a recurring and periodic basis ("Billing Cycle"). Billing cycles are set on a monthly basis.<br/>
	At the end of each Billing Cycle, your Subscription will automatically renew under the exact same conditions unless you cancel it or Tea Squad Tea Trading cancels it. You may cancel your Subscription renewal either through your online account management page or by contacting the Royal Garden General Trading customer support team.<br/>
	A valid payment method, including credit card or PayPal, is required to process the payment for your Subscription. You shall provide Royal Garden General Trading with accurate and complete billing information including full name, address, Emirate/State, zip code, telephone number, and a valid payment method information. By submitting such payment information, you automatically authorize Royal Garden General Trading to charge all Subscription fees incurred through your account to any such payment instruments.<br/>
	Should automatic billing fail to occur for any reason, Royal Garden General Trading will issue an electronic invoice indicating that you must proceed manually, within a certain deadline date, with the full payment corresponding to the billing period as indicated on the invoice.<br/>
	

<h2>Fee Changes</h2>
	Royal Garden General Trading, in its sole discretion and at any time, may modify the Subscription fees for the Subscriptions. Any Subscription fee change will become effective at the end of the then-current Billing Cycle.<br/>
	Royal Garden General Trading will provide you with a reasonable prior notice of any change in Subscription fees to give you an opportunity to terminate your Subscription before such change becomes effective.<br/>
	Your continued use of the Service after the Subscription fee change comes into effect constitutes your agreement to pay the modified Subscription fee amount.<br/>
	
	
	<h2 id="refund">Refunds</h2>
Certain refund requests for Subscriptions may be considered by Royal Garden General Trading on a case-to-case basis and granted in sole discretion of Royal Garden General Trading .


<h2>Accounts</h2>
	When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.<br/>
	You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.<br/>
	You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.<br/>


	You may not use as a username the name of another person or entity or that is not lawfully available for use, a name or trade mark that is subject to any rights of another person or entity other than you without appropriate authorization, or a name that is otherwise offensive, vulgar or obscene.<br/>
	
<h2>	Links To Other Web Sites </h2>
	Our Service may contain links to third-party web sites or services that are not owned or controlled by Royal Garden General Trading .<br/>
	Royal Garden General Trading has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Royal Garden General Trading shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.<br/>
	We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.<br/>
	
	<h2>Termination</h2>
We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.<br/>
Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.<br/>


<h2>Limitation Of Liability</h2>
In no event shall Royal Garden General Trading, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from (i) your access to or use of or inability to access or use the Service; (ii) any conduct or content of any third party on the Service; (iii) any content obtained from the Service; and (iv) unauthorized access, use or alteration of your transmissions or content, whether based on warranty, contract, tort (including negligence) or any other legal theory, whether or not we have been informed of the possibility of such damage, and even if a remedy set forth herein is found to have failed of its essential purpose.


<h2 id="disclaimer">Disclaimer</h2>
Your use of the Service is at your sole risk. The Service is provided on an "AS IS" and "AS AVAILABLE" basis. The Service is provided without warranties of any kind, whether express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, non-infringement or course of performance.<br/>
Royal Garden General Trading its subsidiaries, affiliates, and its licensors do not warrant that a) the Service will function uninterrupted, secure or available at any particular time or location; b) any errors or defects will be corrected; c) the Service is free of viruses or other harmful components; or d) the results of using the Service will meet your requirements.

<h2>Governing Law</h2>

These Terms shall be governed and construed in accordance with the laws of United Arab Emirates, without regard to its conflict of law provisions.<br/>
Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service. <br/>



<h2>Changes</h2>

We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is required, we will try to provide a minimum of 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.<br/>
By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.

<h2>Contact Us</h2>
If you have any questions about these Terms, please contact us at <br/> <a href="mailto:info@royalgardenme.com">info@royalgardenme.com</a><br/>


<b>CONTACT</b><br/>
<b>Contact The Royal Garden Tea-m :)</b><br/>
<b>Customer Service WhatsApp:</b><br/><a href="http://wa.me/971506509976"> +97150 6509976</a><br/>
<b><a href="mailto:Info@royalgardenme.com">Info@royalgardenme.com</a>









    <br/>  


    <br/>  







    <br/>  
  </section>
  
  
  
  
  
  
  
  
  
</div>



<?php
include 'footer.html';

?>