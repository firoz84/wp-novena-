

<?php 

if(class_exists('CSF')){


      // Set a unique slug-like ID
  $prefix = 'novena_doctor_metabox';


  // Create department a metabox
  CSF::createMetabox( $prefix, array(
    "id" =>"doctors_metabox",
    'title'     => __('Doctors','novena'),
    'post_type' => 'doctors',
  ) );

   // images file a section
   CSF::createSection( $prefix, array(
    'parent' =>'doctors_metabox',
    'title'  => __('Doctors','novena'),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
    // A text field
    array(
        'id'    => 'doctor-single-image',
        'type'  => 'media',
        'title' => __('Doctor image','novena'),
    ),
   
    array(
        'id'    => 'doctor-name',
        'type'  => 'text',
        'title' => __('Doctor name','novena'),
    ),
    array(
        'id'    => 'doctor-degisnation',
        'type'  => 'text',
        'title' => __('Doctor Designation','novena'),
    ),
    array(
        'id' => 'doctor_repeater',
        'title' => __('Doctor Repeater', 'novena'),
        'max'=>'5',
        'button_type' => __('add new button', 'novena'),
        'type'=> 'repeater',
        'fields' => array(
            array(
                'id' =>'social_icons',
                'type' => 'icon',
                'title' => __('Doctor social icon','novena')
                
                )
        )
        )


 )
) );

// about doctors
   CSF::createSection( $prefix, array(
    'parent' =>'doctors_metabox',
    'title'  => __('About Doctors ','novena'),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
    // A text field
    array(
        'id'    => 'doctor-single-title',
        'type'  => 'text',
        'title' => __('Doctor title','novena'),
    ),
    array(
        'id'    => 'doctor-single-desc',
        'type'  => 'textarea',
        'title' => __('Doctor Description','novena'),
    ),
    array(
        'id' => 'doctor_btn',
        'title' => __('doctor Button', 'novena'),
        'type' => 'link'
    )
    
 )
) );
// about doctors
   CSF::createSection( $prefix, array(
    'parent' =>'doctors_metabox',
    'title'  => __('My Educational Quality ','novena'),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
    // A text field
    array(
        'id'    => 'doctor-education-title',
        'type'  => 'text',
        'title' => __('Doctor aducation title','novena'),
    ),
    
    array(
        'id' => 'doctor_repeater',
        'title' => __('Doctor Repeater', 'novena'),
        'max'=>'6',
        'button_type' => __('add new button', 'novena'),
        'type'=> 'repeater',
        'fields'=> array(
            array(
                "id" => 'education_year',
                'title' => __('Education Year','novena'),
                'type' => 'text',
            ),
            array(
                "id" => 'education_title',
                'title' => __('Education Title','novena'),
                'type' => 'text',
            ),
            array(
                "id" => 'education_desc',
                'title' => __('Education Description','novena'),
                'type' => 'textarea',
            ),

        )
    ),
    
    
 )
) );


}