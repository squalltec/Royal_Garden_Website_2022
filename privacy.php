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
    <h1 style="color:white; font-size:4em;">Privacy Policy</h1>
   
  </section>
  
  
  
  
  
  
  
  
  
  <section align="center" style="padding-left:15%; padding-right:15%;">
      
      <br/><br/>
      
<h2 >Effective date: November 04, 2019</h2><br/>

Royal Garden General Trading and its affiliated products ("us", "we", or "our") operates the http://www.royalgardenme.com website (hereinafter referred to as the "Service").<br/>
This page informs you of our policies regarding the collection, use and disclosure of personal data when you use our Service and the choices you have associated with that data.<br/>
We use your data to provide and improve our service and product range. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible from <br/><a href="http://www.royalgardenme.com">http://www.royalgardenme.com</a><br/>


<h1>Definitions</h1>

<h2>Service</h2>
<p>
Service is the <a href="http://www.royalgardenme.com">http://www.royalgardenme.com</a> website operated by Royal Garden General Trading LLC
</p>

<h2>Personal Data</h2>
<p>Personal Data means data about a living individual who can be identified from that data (or from those and any other information either in our possession or likely to come into our possession).</p>

<h2 id="data">Usage Data</h2>
<p>Usage Data is data collected automatically either generated by the use of the Services or from the Service infrastructure itself (for example, the duration of a page visit).</p>

<h2>Cookies</h2>
<p>Cookies are small files stored on your device (computer or mobile device).</p>

<h2>Information Collection And Use</h2>
<p>We collect several different types of information for various purposes to provide and improve our services to you.<br/>
<b>Types of Data Collected</b><br/>
<b>Personal Data</b><br/>
While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you ("Personal Data"). Personally identifiable information may include, but is not limited to:<br/>
	Email address<br/>
	First name and last name<br/>
	Phone number<br/>
	Address, State, Province, ZIP/Postal code, City<br/>
	Cookies and Usage Data<br/>
We may use your Personal Data to contact you with newsletters, marketing or promotional materials and other information that may be of interest to you. You may opt out of receiving any, or all, of these communications from us by following the unsubscribe link or instructions provided in any email we send or by contacting us.</p>
<h2>Usage Data</h2>
<p>We may also collect information on how the Service is accessed and used ("Usage Data"). This Usage Data may include information such as your computer's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>


<h2>Tracking & Cookies Data</h2>
	We use cookies and similar tracking technologies to track the activity on our Service and we hold certain relevant information.<br/>
	Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. <br/>
	Other tracking technologies are also used such as beacons, tags and scripts to collect and track information and to improve and analyze our services.<br/>
You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our service.<br/>
<b>Examples of Cookies we use:</b><br/>
	Session Cookies. We use Session Cookies to operate our Service.<br/>
	Preference Cookies. We use Preference Cookies to remember your preferences and various settings.<br/>
	Security Cookies. We use Security Cookies for security purposes.<br/>
<h2>Use Of Data</h2>
<p>Royal Garden General Trading uses the collected data for various purposes:<br/>
	To provide and maintain our Service<br/>
	To notify you about changes to our Service<br/>
	To allow you to participate in interactive features of our service when you choose to do so<br/>
	To provide customer support<br/>
	To gather analysis or valuable information so that we can improve our Service<br/>
	To monitor the usage of our Service<br/>
	To detect, prevent and address technical issues<br/>
	To provide you with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless you have opted not to receive such information</p>
<h2>Transfer Of Data</h2>
<p>Your information, including Personal Data, may be transferred to - and maintained on - computers located outside of your emirate/state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.<br/>
If you are located outside of the United Arab Emirates and choose to provide information to us, please note that we transfer the data, including Personal Data, to the United Arab Emirates and process it there.<br/>
Your consent to this Privacy Policy followed by your submission of such information represents your agreement to such a transfer.<br/>
Royal Garden General Trading will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy. No transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.
</p>
<h2>Disclosure Of Data</h2>
<b>Disclosure for Law Enforcement</b><br/>
<p>Under certain circumstances, Royal Garden General Trading may be required to disclose your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).<br/>
Legal Requirements
Royal Garden General Trading may disclose your Personal Data in the good faith belief that such action is necessary to:<br/>
	To comply with a legal obligation<br/>
	To protect and defend the rights or property of Royal Garden General Trading and its associated brands and product range.<br/>
	To prevent or investigate possible wrongdoing in connection with the Service<br/>
	To protect the personal safety of users of the Service or the public<br/>
	To protect against legal liability</p>
<h2>Security Of Data</h2>
<p>The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>
<h2 id="service">Service Providers</h2>
<p>We may employ third party companies and individuals to facilitate our Service ("Service Providers"), provide the Service on our behalf, perform Service-related services or assist us in analyzing how our Service is used.<br/>
These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>
<h2>Payments</h2>
<p>We may provide paid products and/or services within the Service. In that case, we use third-party services for payment processing (i.e payment processors).<br/>
We will not store or collect your payment card details. That information is provided directly to our third-party payment processors whose use of your personal information is governed by their Privacy Policy. These payment processors adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover. PCI-DSS requirements help ensure the secure handling of payment information.<br/>
The payment processors we work with are:<br/>
PayPal / Braintree<br/>
Their Privacy Policy can be viewed at<br/> <a href="https://www.paypal.com/webapps/mpp/ua/privacy-full
2Checkout">Privacy Policy</a><br/>
<a href="https://www.2checkout.com/policies/privacy-policy">Privacy Policy</a><br/>
</p>


<h2>Links To Other Sites</h2>
<p>
Our Service may contain links to other sites that are not operated by us. If you click a third-party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.
<br/>We have no control over and assume no responsibility for the content, privacy policies or practices of any third-party sites or services.
</p>
<h2 id="children">Children's Privacy</h2>
<p>Our Service does not address anyone under the age of 18 ("Children").<br/>
We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers immediately.</p>

<h2>Changes To This Privacy Policy</h2>
<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.<br/>
We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the "effective date" at the top of this site.</p>
<h2>Privacy Policy</h2>
<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

<h2>Contact Us</h2>
<p>If you have any questions about this Privacy Policy, please contact us:<br/>
ShippingTerms<br/>
Shipping, Refund and Returns Policies<br/>
General<br/>
Subject to stock availability. We try to maintain accurate stock counts on our website but from time-to-time there may be a stock discrepancy and we will not be able to fulfill all your items at time of purchase. In this instance, we will fulfill the available products to you, and contact you about whether you would prefer to await restocking of the backordered item or if you would prefer for us to process a refund.
 </p>
<h2>Shipping Costs</h2>
<p>Shipping costs are calculated during checkout based on weight, dimensions and destination of the items in the order. Payment for shipping will be collected with the purchase.<br/>
This price will be the final price for shipping cost to the customer.<br/>
 </p>
<h2 id="return">Returns</h2> 


1). Return Due To Change Of Mind<br/>
	Royal Garden General Trading will happily accept returns due to change of mind as long as a request to return is received by us within 3 days of receipt of item and are returned to us in original packaging, unused and in a resalable condition.<br/>
	Return shipping will be at the customer’s expense. The customer will also be required to arrange their own shipping.<br/>
	Once returns are received and accepted, refunds will be processed to store credit for a future purchase. We will notify you once this has been completed through email.<br/>

<b>(Royal Garden General Trading) will refund the value of the goods returned but will NOT refund the value of any shipping paid. </b><br/>
 
2). Warranty Returns
	Royal Garden General Trading will happily honor any valid warranty claims, provided a claim is submitted within 90 days of receipt of items.<br/>
	Customers will be required to pre-pay the return shipping; however, we will reimburse you upon successful warranty claim.<br/>
	Upon return receipt of items for warranty claim, you can expect Royal Garden General Trading to process your warranty claim within 7 days.<br/>
	Once the warranty claim is confirmed, you will receive the choice of:<br/>
(a) refund to your payment method<br/>
(b) a refund in store credit<br/>
(c) a replacement item sent to you (if stock is available)<br/>
 
<b>Delivery Terms</b><br/>
3). Transit Time Domestically<br/>
In general, domestic shipments are in transit for 1 - 2 days<br/>
 

4). Transit time Internationally<br/>
Generally, orders shipped internationally are in transit for 4 - 22 days. This varies greatly depending on your country of origin. We are able to offer a more specific estimate at checkout.<br/>
 
5). Change Of Delivery Address<br/>
Orders placed before 10PM - Abu Dhabi (GMT+4) will be dispatched the same day, otherwise, within the next business day.<br/>
Our warehouse operates on Monday - Friday during standard business hours, except on national holidays at which time the warehouse will be closed. In these instances, we take steps to ensure shipment delays will be kept to a minimum.<br/>
 
6). Change Of Delivery Address<br/>
For change of delivery address requests, we are able to change the address at any time before the order has been dispatched only.<br/>
 
7). Military Address Shipping<br/>
We are able to ship to military addresses using USPS. We are unable to offer this service using courier services.
 
<br/>

9). Items Out Of Stock<br/>
If an item is out of stock, we will wait for the item to be available before dispatching your order. Existing items in the order will be reserved while we await this item. This will be intimated to our customers in such events
 <br/>
10). Delivery Time Exceeded<br/>
If delivery time has exceeded the forecasted time, please contact us so that we can conduct an investigation.
 <br/>
 
 
<h2>Tracking Notifications</h2>
<p>Upon dispatch, customers will be able to track their shipment via our site from which they will be able to follow the progress of their shipment based on the latest updates made available by the shipping provider.</p>
 
<h2>Parcels Damaged In Transit</h2>
<p>If you find a parcel is damaged in-transit, if possible, please reject the parcel from the courier and get in touch with our customer service. If the parcel has been delivered without you being present, please contact customer service with next steps.</p>
 
<h2>Duties & Taxes</h2>
1) Sales Tax<br/>
Sales tax has already been applied to the price of the goods as displayed on the website<br/>
 
2) Import Duties & Taxes<br/>
Import duties and taxes for international shipments may be liable to be paid upon arrival in destination country. This varies by country, and Royal Garden General  Trading encourages you to be aware of these potential costs before placing an order with us.<br/>
If you refuse to pay duties and taxes upon arrival at your destination country, the goods will be returned to Royal Garden General Trading at the customer expense. <br/>

The customer will receive a refund for the value of goods paid, minus the cost of the return shipping. The cost of the initial shipping will not be refunded.<br/>
 

<h2 id="cancellation">Cancellations</h2>
If you change your mind before you have received your order, we are able to accept cancellations at any time before the order has been dispatched. If an order
has already been dispatched, please refer to our refund policy.
 <br/>
<h2>Insurance</h2>
Parcels are insured for loss and damage up to the value as stated by the courier.
 <br/>
<h2>Process for parcel damaged in-transit </h2>
We will process a refund or replacement as soon as the courier has completed their investigation into the claim.
  <br/>
<h2>Process for parcel lost in-transit</h2>
We will process a refund or replacement as soon as the courier has conducted an investigation and deemed the parcel lost.<br/>
 

<h2>Customer service</h2>
For all customer service enquiries, please email us at <br/><a href="mailto:info@royalgardenme.com">info@royalgardenme.com</a>

    <br/>  
  </section>
  
  
  
  
  
  
  
  
  
</div>


<br/>
<br/>

<?php
include 'footer.html';

?>