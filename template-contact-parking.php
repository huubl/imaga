<?php
/**
* Template Name: Contact - Parking
*/

use IMAGA\Theme\Assets;
?>

<?php while (have_posts()) : the_post(); ?>

  <div class="jumbotron jumbotron-fluid bg-gradient-new-life overflow-hidden mb-0">
    <div class="container text-center text-white">

      <div class="row">
        <div class="col-12">
          <h1 class="display-5 my-4">Directions to Imaga HQ and parking</h1>
          <h1 class="display-6 mb-4">We’re located at Zuiderplein 4-6, 8911 AJ Leeuwarden, the Netherlands</h1>
        </div>
      </div>

    </div>
  </div>

  <section>
    <div class="container py-5">
      <div class="row">
        <div class="col-12 text-center">

          <h2 class="display-5 mb-4">About our building</h2>
          <p class="lead mb-6">The Imaga HQ can be found at the 3rd floor of the former ING-Bank building at the Zuiderplein 4-6. The entire facade of this well known building is fitted with glazed blue tiles. It is located in the hearth of the city of Leeuwarden and is part of the protected cityscape.</p>

          <h2 class="display-5 mb-4">An easy destination whether you’re traveling by car, train or bus</h2>
          <p class="lead mb-6">Imaga HQ can easily be reached by car or public transport. It’s located almost directly across the Central Train- and Bus Station and just a 2 minute walk. <a href="#ns">Plan your journey by train</a> here.</p>

          <h2 class="display-5">Traveling by car, What to set as your destination:</h2>
          <p class="lead">The city of Leeuwarden recently renovated the entire downtown area and added a new connection to the highways around the city. This made it very simple to drive straight to downtown Leeuwarden.</p>

        </div>
      </div>

      <div class="row text-center py-5">
        <div class="col-6">
          <h3 class="display-6 mb-4">Short stay: Willemskade 55</h3>
          <img class="img-fluid img-thumbnail box-shadow mb-4" src="https://via.placeholder.com/360x200" alt="Willemskade 55">
          <p class="lead">If you plan to visit less than two hours you can park right next to our building, along side the canal. Set Willemskade 55 as your destination. The costs are low, €1.60 per uur (with a maximum of two hours). See this Google Maps link for exact location and directions.</p>
        </div>
        <div class="col-6">
          <h3 class="display-6 mb-4">Long stay: Posthoornsteeg 40</h3>
          <img class="img-fluid img-thumbnail box-shadow mb-4" src="https://via.placeholder.com/360x200" alt="Posthoornsteeg 40">
          <p class="lead">If you wish to stay longer we advice parking in ‘Parking Garage the Klanderij’. This large Parking Garage is located directly across our building. Parking all day only cost 6 euro’s. See this Google Maps link for exact location and directions.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <h3 class="display-6 mb-4">Private Parking: Set Baljéestraat as destination</h3>
          <img class="img-fluid mb-4" src="https://via.placeholder.com/1200x240" alt="Probably maps">
          <p class="lead mb-4">Our own private parking at the back of the building can be reached through the Baljéestraat. This parking is for employees and has very limited capacity for guests parking their cars.</p>
          <p class="lead">It’s only possible to park here if you have planned your visit and arranged for parking through us. If you did, we have made a reservation for you and parking here is free. Drive up to the right and request entrance by pressing the contact button. Please identify yourself to the operator and let them know what company you’re visiting. See this Google Maps link for exact location and directions.</p>
          <h3 class="display-6">Driving directions for the brand new highway</h3>
          <h4 class="lead mb-4">(that probably won’t be on your car’s navigation)</h4>
          <p class="lead mb-4">Drivers from West (Harlingen) can simply follow the new highway and avoid the traffic-jams inside the city. When on the highway take A31 to Johannes Brandsmaweg/Westelijke invalsweg in Leeuwarden. Then take the exit toward Leeuwarden/Deinum/Bolsward/N359 from N31 and turn left at the traffic lights. Keep going straight ahead and you’ll be in downtown in 5 minutes.</p>
          <p class="lead mb-4">Drivers coming from the South (Heerenveen) can follow the A32 and Take the N31 exit toward Leeuwarden-Oost/Hurdegaryp/Drachten. You’ll be in downtown in 10 minutes.</p>
        </div>
      </div>

    </div>
  </section>

<?php endwhile; ?>
