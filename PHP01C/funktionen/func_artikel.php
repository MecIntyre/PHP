<?php
        $menge_artikel1 = 3;
        $menge_artikel2 = 5;  
        $menge_artikel3 = 1;
        
        $artikel1 = "Arbeitsspeicher"; 
        $artikel2 = "Computerzeitschrift";
        $artikel3 = "Computer";
        
        $preis_artikel1 = 59.95;
        $preis_artikel2 = 12.95;
        $preis_artikel3 = 799.00;
        
        $mehrwertsteuer1 = 7;
        $mehrwertsteuer2 = 19;
        
        $artikel4 = array(
        'bezeichnung' => 'CPU 8 Kerne',
        'menge' => 3,
        'preis' => 259.95 );
        
        $artikel5['bezeichnung'] = 'Hauptplatine Intel';
        $artikel5['menge'] = 2;
        $artikel5['preis'] = 99.95;
        
        $artikel_array = array(
          array (
            'Menge' => 5,
            'Name' => '16 GB RAM',
            'Preis' => 69.95
          ),
          array(
            'Menge' => 2,
            'Name' => '32 GB RAM',
            'Preis' => 134.95
          ),
          array(
            'Menge' => 3,
            'Name' => '2 TB Fesplatte',
            'Preis' => 59.95
          ),
          array(
            'Menge' => 5,
            'Name' => '4 TB Festplatte',
            'Preis' => 109.00
          )
        );

        function rechneGesamtpreisArtikel($preis_artikel,
          $menge_artikel) {
          $gesamtpreis_artikel = $preis_artikel * $menge_artikel;
            return $gesamtpreis_artikel;
        }
        
        $mehrwertsteuer_gesamt_artikel1 =
          rechneGesamtpreisArtikel(59.95, 3) * $menge_artikel1;
        
        function rechneGesamtpreisArtikel1($preis_artikel,
          $menge_artikel) {
          $gesamtpreis_artikel = $preis_artikel * $menge_artikel;
            return $gesamtpreis_artikel;
        }
                
        $mehrwertsteuer_gesamt_artikel2 =
          rechneGesamtpreisArtikel1(12.95, 5) * $menge_artikel2;
        
        function rechneGesamtpreisArtikel2($preis_artikel,
          $menge_artikel) {
          $gesamtpreis_artikel = $preis_artikel * $menge_artikel;
            return $gesamtpreis_artikel;
        }
                
        $mehrwertsteuer_gesamt_artikel3 =
          rechneGesamtpreisArtikel2(700, 1) * $menge_artikel3; ?>
       