<?php
 // created: 2014-07-31 09:08:41
$dictionary['TDR_Type']['fields']['reference_memorial_c']['formula']='related($tdr_type_accounts,"reference_memorial_c")';
$dictionary['TDR_Type']['fields']['reference_memorial_c']['enforced']='false';
$dictionary['TDR_Type']['fields']['reference_memorial_c']['dependency']='equal(toString($role_sur_compte),"GestionnaireOF")';

 ?>