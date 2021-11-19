<?php 

function vypisKontakty(array $kontakty) : string {
  $vystup = '';
  foreach($kontakty as $kontakt) {
      $vystup .= '<div class="col-lg-4">
              <div class="contact-box">
                <a class="row" href="#">
                  <div class="col-4">
                    <div class="text-center">
                      <img
                        alt="image"
                        class="rounded-circle m-t-xs img-fluid"
                        src='. $kontakt['obrazek'] . '
                      />
                      <div class="m-t-xs font-bold">' . $kontakt['prace'] . '</div>
                    </div>
                  </div>
                  <div class="col-8">
                    <h3><strong>' . $kontakt['jmeno'] . '</strong></h3>
                    <address>
                      <i class="fa fa-map-marker"></i> ' . $kontakt['adresa'] . '
                    </address>
                  </div>
                </a>
              </div>
             </div>
          ';
              
  }
  return $vystup;
}