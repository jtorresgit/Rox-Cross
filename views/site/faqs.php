<?php

 /*@var $this yii\web\View; */
use yii\helpers\Html;


$this->title = 'FAQs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the FAQ's page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
<!-- Inicio-Accordion-Collapse jtorres@itmgroup.mx 16-05-2019-->
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Can I select the time for my tour? 
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        When you book your tour, you will be asked to select the time you prefer. Actual tour time may be adjusted in your final confirmation.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Where do we go to begin our tour?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Individual tours have different meeting points. Please check your confirmation for specific instructions on where to meet. Costa Maya Tours has an office called V@MOS! in the center of the village of Mahahual also for your convenience. (map)
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          How far is the village of Mahahual from the port?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Mahahual, the actual village of Costa Maya, is only 5 minutes from the cruise ship port. Many people arriving by cruise ship mistakenly view the port facility as the ‘village’. Even if you do not have a tour booked with us, feel free to stop by our office in the village for information, to use the Internet or telephone or rent a bicycle.
      </div>
    </div>
  </div>
  <div class="card">
  	<div class="card-header" id="headingFor">
  		<h2 class="mb-0">
  			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFor" aria-expanded="false">
  				How do we get to the village of Mahahual?
  			</button>  			
  		</h2>  		
  	</div> 
  	<div id="collapseFor" class="collapse" aria-labelledby="headingFor" data-parent="#accordionExample">
  		<div class="card-body">
  			Simply take a taxi or any transportation available at the port. The cost to get there with a local taxi is only $2 USD per person. (map)
  		</div>  		
  	</div> 	
  </div>
  <div class="card">
  	<div class="card-header" id="headingFive">
  		<h2 class="mb-0">
  			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false">
  				Do we get picked up at the port?
  			</button>  			
  		</h2>
  	</div>
  	<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
  		<div class="card-body">
  			Pickup at the port can be arranged in some cases, however because the port controls transportation in and out, special pickup adds considerably to the price of the tour. The transportation provided by the port usually works well enough, but please pay close attention to your specific confirmation instructions. If there is a long wait for the port transportation, you may also walk to the local taxi station located 2 blocks outside of the port entrance.
  		</div>  		
  	</div>
  </div>
  <div class="card">
  	<div class="card-header" id="headingSix">
  		<h2 class="mb-0">
  			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false">
  				When do we pay the remainder of the tour?
  			</button>
  		</h2>
  	</div>
  </div>
  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
  	<div class="card-body">
  		You will pay the balance of your tour when you arrive. For your protection, we only charge a small percentage of your tour up front, and the remainder when you arrive.
  	</div>  	
  </div>
  <div class="card">
  	<div class="card-header" id="headingSeven">
  		<h2 class="mb-0">
  			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false">
  				How can I pay the balance? Cash, Traveler’s Checks or Credit Card?
  			</button>
  		</h2>
  	</div>
  	<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
  		<div class="card-body">
  			Costa Maya is a newly developing destination and has no banks. Credit Cards are difficult here and will cost you at least 10% more due to bank and currency exchange charges. Traveler's checks are generally not accepted throughout Costa Maya and many parts of Mexico. You save money and time by paying the balance of your tour in cash.
  		</div>
  	</div>
  </div>
  <div class="card">
  	<div class="card-header" id="headingEight">
  		<h2 class="mb-0">
  			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false">
  				Are reservations required?
  			</button>
  		</h2>
  	</div>  
  	<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
  		<div class="card-body">
  		Space and availability are limited on many tours. Tours do sell out and prices will change. Making your reservations now insures your space when you arrive and also guarantees the price. Reserving in advance saves you valuable vacation time as well.
  		</div>  	
  	</div>
  </div>
  <div class="card">
  	<div class="card-header" id="headingNine">
  		<h2 class="mb-0">
  			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false">
  				Is a refund given if the weather doesn’t allow for water sports?
  			</button>
  		</h2>
  	</div>
  	<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
  		<div class="card-body">
  			If we have to cancel any tour due to weather, you will receive a fulll refund.
  		</div>
  	</div>
  </div>
  <div class="card">
  	<div class="card-header" id="headingTen">
  		<h2 class="mb-0"> 
  			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false">
  				What if our ship does not stop at Costa Maya?
  			</button>
  		</h2>
  	</div>
  	<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
  		<div class="card-body">
  			We have a NO PORT NO PAY policy. Occasionally ships cannot stop at a port due to weather or ocean conditions. If that happens here, your refund will be automatic, usually the same day. If your ship is diverted to another port where we offer the same services, we can transfer your reservation there and send you new instructions.
  		</div>
  	</div>
  </div>
  <div class="card">
  	<div class="card-header" id="headingEleven">
  		<h2 class="mb-0">
  			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false"> How can I be sure I will get back to my ship on time?  				
  			</button>
  		</h2>
  	</div>
  	<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
  		<div class="card-body">
  			We have NEVER had a client miss their ship, and this is a record we protect with direct contact with the cruise lines (they don't want you to miss the ship either), good communication with our guides and drivers, backup transportation and more. Cruise lines use this reasoning often to promote sales of their own tours, but for us, after years operating and thousands of happy clients, you need not worry.
  		</div>  		
  	</div>
  </div>
  <div class="card">
  	<div class="card-header" id="headingTwelve">
  		<h2 class="mb-0">
  			<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false">
  				What is your cancellation policy?
  			</button>
  		</h2>
  	</div>
  	<div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="accordionExample">
  		<div class="card-body">
  			Most tours simply require that you let us know at least 24 hours in advance at info@costa-maya-tours.com to receive a full refund. 
  			<div class="card">
  				<div class="card-header" id="headingThirteen">
  					<h3 class="mb-0">
  						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false">
  							Refund and Cancellation Policies
  						</button>
  					</h3>
  				</div>
  				<div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
  					<div class="card-body">
  													Costa Maya Tours Refund Policy
							REFUND POLICY: We have a very simple and reasonable refund policy. Basically you will receive a 100% refund if your tour does not occur. Occasionally ships cannot stop at a port due to weather or ocean conditions, that's just part of going on a cruise. If that happens here we want you to come back so your refund will be automatic. We also withhold the right to cancel a tour due to weather or other reasons. If we are unable to operate your tour we will apply your payment to any other tour available or issue a refund.

							LATE SHIP ARRIVAL: If your ship arrives late or on a different day than originally scheduled, your confirmation is still valid and we will adjust your tour time as necessary to accommodate your ship’s arrival and departure. Please come to our office as soon as you arrive. Your guides will be waiting for you.

							CANCELLATION POLICY: To cancel a tour, please notify us at least 24 hours in advance at info@Costa-Maya-Tours.com. With 24 hour notification we will issue a full refund. Cancellations made within 24 hours of tour time will be subject to a loss of deposit only. Why 24 hours? We need to coordinate food, guides, and transportation for your tours and need time to inform everybody who is working to make your visit the best it can be.
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  <div class="card">
  	<div class="card-header" id="headingFourteen">
  		<h2 class="mb-0">
  			<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false">
  				Got a question we didn't answer?
  			</button>
  		</h2>
  	</div>
  	<div id="collapseFourteen" class="collapse" aria-labeledby="headingFourteen" data-parent="#accordionExample">
  		<div class="card-body">
  			Email it to us at info@Costa-Maya-Tours.com
  		</div>
  	</div>
  </div>
</div>
<!--Fin del accordion collapse jtorres@itmgroup.mx 16-05-2019-->

        <div class="modal-body">
  <h5>Popover in a modal</h5>
  <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
  <hr>
  <h5>Tooltips in a modal</h5>
  <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
</div>
