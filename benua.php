<?php
$benua = array(
    array('Benua Asia','Indonesia','Bandung','Jakarta','Bali','Lombok','Yogyakarta',
                     'Korea Selatan','Seoul','Busan','Incheon','Gwangju','Daejeon',
                     'Malaysia','Kuching','Pulau Pinang','Miri','Johor Bahru','Kota Melaka'),
    array('Benua Afrika','Afrika Selatan','Cape Town','Durban','Polokwane','Soweto','Kimberley',
                        'Madagaskar','Ambalavao','Tolanaro','Morondava','Sambava','Manakara',
                        'Mesir','Kairo','Luxor','Giza','Zagazig','Bursaid'),
    array('Benua Amerika','Brazil','Manaus','Fortaleza','Salvador','Porto Velho','Natal',
                        'Argentina','Santa Fe','San Juan','La Plata','Mendoza','Salta',
                        'Chili','Arica','Temuco','La Serena','Rancagua','Talca'),
    array('Benua Eropa','Yunani','Athena','Kavala','Pireas','Megara','Patras',
                      'Italia','Roma','Milan','Firenze','Napoli','Bologna',
                      'Prancis','Paris','Nice','Lyon','Nantes','Dijon'),
); 
foreach ($benua as $key => $value) {
    echo "<p>";
    echo  $value[0] . '<br>' . $value[1]. ' : ' . $value[2]. ', '.$value[3].', '. $value[4]. ', '.$value[5].', '. $value[6];
    echo "<br>";
    echo  $value[7]. ' : ' . $value[8]. ', '.$value[9].', '. $value[10]. ', '.$value[11].', '. $value[12];
    echo "<br>";
    echo  $value[13]. ' : ' . $value[14]. ', '.$value[15].', '. $value[16]. ', '.$value[17].', '. $value[18];
    
}
