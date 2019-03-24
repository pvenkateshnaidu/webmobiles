<?php

$config = array(
        'checkEmail' => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|is_unique[users.email]'
        )
    ),
    'addCollege' => array(
        array(
            'field' => 'college_name',
            'label' => 'College Name',
            'rules' => 'trim|required|is_unique[colleges.college_name]'

        ),
		  array(
            'field' => 'priniciple_name',
            'label' => 'Principle Name',
            'rules' => 'trim|required'

        ),
		  array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'trim|required'

        ),
       
    ),
  
 
    
      
      
);
