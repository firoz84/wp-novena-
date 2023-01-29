

<?php


if( class_exists( 'CSF' ) ) {

    
    // Set a unique slug-like ID
    $prefix = 'my_framework';
  
    
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Theme Options',
      'menu_slug'  => 'my-framework',
      'framework_title'=>__('Novena options','novena')
    ) );
  
    
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'email',
      'fields' => array(
  
        // A text field
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'contact email',
        ),
        array(
          'id'    => 'opt-address',
          'type'  => 'text',
          'title' => 'Present address',
        ),
        array(
          'id'    => 'opt-num',
          'type'  => 'text',
          'title' => 'Contact number',
        ),
  
      )
    ) );

    CSF::createSection( $prefix, array(
      'id' => 'banner_section',
      'title' => __('Banner Section', 'novena'),
      
    ));

    CSF::createSection( $prefix, array(
        'parent' => 'banner_section',
        'title' => __('Banner Section', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields'=>array(
          array(
            'id' => 'banner_subtitle',
            'title' => __('Banner subtitle', 'novena'),
            'type' => 'text'
          ),
          array(
            'id' => 'banner_title',
            'title' => __('Banner title', 'novena'),
            'type' => 'text'
          ),
          array(
            'id' => 'banner_desc',
            'title' => __('Banner Desciption', 'novena'),
            'type' => 'textarea'
          ),
          array(
            'id' => 'btn_link',
            'title' => __('Banner Button', 'novena'),
            'type' => 'link'
          ),
          array(
            'id' => 'banner_bg',
            'title' => __('Banner Background', 'novena'),
            'type' => 'background',
            'background_color' =>false,
            'output'=>'.banner'
          )
        )
    ));

    //Featured Show Hide Button
    CSF::createSection( $prefix, array(
      'id' => 'features_section',
      'title' => __('features  Section', 'novena'),
      
    ));
    //features show hide
    CSF::createSection( $prefix, array(
      'parent' => 'features_section',
      'title' => __('Features show', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id' => 'features_switch',
          'title' => __('Features show', 'novena'),
          'type' => 'switcher',
          'label'=> __('Features show or hide', 'novena'),
          'default' => true
        ),
       

      )
    ));


    // Features one
    CSF::createSection( $prefix, array(
      'parent' => 'features_section',
      'title' => __('Features one Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id' => 'features1_icon',
          'title' => __('Features 1', 'novena'),
          'type' => 'icon'
        ),
        array(
          'id' => 'features1_subtitle',
          'title' => __('Features 1 subtitle', 'novena'),
          'type' => 'text'
        ),
        array(
          'id' => 'features1_title',
          'title' => __('Features 1 Title', 'novena'),
          'type' => 'text'
        ),
        array(
          'id' => 'features1_desc',
          'title' => __('Features 1 description', 'novena'),
          'type' => 'textarea'
        ),

      )
    ));
    
  //features two
    CSF::createSection( $prefix, array(
      'parent' => 'features_section',
      'title' => __('Features two Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id' => 'features2_icon',
          'title' => __('Features 2 icons', 'novena'),
          'type' => 'icon'
        ),
        array(
          'id' => 'features2_subtitle',
          'title' => __('Features 2 subtitle', 'novena'),
          'type' => 'text'
        ),
        array(
          'id' => 'features2_title',
          'title' => __('Features 2 Title', 'novena'),
          'type' => 'text'
        ),
        array(
          'id' => 'features2_repeater',
          'title' => __('Features 2 Repeater', 'novena'),
          'max'=>'3',
          'button_type' => __('button title', 'novena'),
          'type'=> 'repeater',
         'fields'=>array(
            array(
              'id' => 'hours_1',
              'title' => __('Hours title', 'novena'),
              'type' => 'text'
            ),
            array(
              'id' => 'hours_2',
              'title' => __('Hours time', 'novena'),
              'type' => 'text'
            ),
         )
        ),
      )
      ));

       //feature3 section
    
    CSF::createSection( $prefix, array(
      'parent' => 'features_section',
      'title' => __('features 3 Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields' => array(
        array(
          'id' => 'feature_icon',
          'title' => __('features 3 Icons', 'novena'),
          'type'=> 'icon'
        ),
        array(
          'id' => 'features3_subtitle',
          'title' => __('features 3 subtitle', 'novena'),
          'type'=> 'text'
        ),
        array(
          'id' => 'features3_title',
          'title' => __('features 3 Title', 'novena'),
          'type'=> 'text'
        ),
        array(
          'id' => 'features3_desc',
          'title' => __('features 3 descriptions', 'novena'),
          'type'=> 'textarea'
        ),
      )
    ));
  
   //about section
   CSF::createSection( $prefix, array(
    'id' => 'About_section',
    'title' => __('about Section', 'novena'),
    
  ));

  //about section show hide feature
  CSF::createSection( $prefix, array(
    'parent' => 'About_section',
    'title' => __('About show or hide', 'novena'),
    'icon'   => 'fas fa-rocket',
    'fields'=>array(
      array(
        'id' => 'about_switch',
        'title' => __('About show or hide', 'novena'),
        'type' => 'switcher',
        'label'=> __('Show or hide', 'novena'),
        'default' =>true
      ),
    
    )
));

  // about section
  CSF::createSection( $prefix, array(
      'parent' => 'About_section',
      'title' => __('About Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id' => 'about_img1',
          'title' => __('About images', 'novena'),
          'type' => 'media'
        ),
        array(
          'id' => 'about_img2',
          'title' => __('About two images', 'novena'),
          'type' => 'media'
        ),
        array(
          'id' => 'about_img3',
          'title' => __('About three images', 'novena'),
          'type' => 'media'
        ),
        array(
          'id' => 'about_title',
          'title' => __('About Title', 'novena'),
          'type' => 'text'
        ),
        
        array(
          'id' => 'about_desc',
          'title' => __('About Descriptions', 'novena'),
          'type' => 'textarea'
        ),
        array(
          'id' => 'about_btn',
          'title' => __('About Button', 'novena'),
          'type' => 'link'
        )
       
      )
  ));

  //cpt sections 

    CSF::createSection( $prefix, array(
      'id' => 'CPT_section',
      'title' => __('CPT Section', 'novena'),
      
    ));

    CSF::createSection( $prefix, array(
      'parent' => 'CPT_section',
      'title' => __('CPT Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id' => 'ctp_bg',
          'title' => __('CTP Background', 'novena'),
          'type' => 'background',
          'background_color' =>false,
          'output'=>'.cta'
        ),
        array(
          'id' => 'cpt_repeater',
          'title' => __('CPT Repeater', 'novena'),
          'max'=>'4',
          'button_type' => __('add new button', 'novena'),
          'type'=> 'repeater',
         'fields'=>array(
              array(
                'id'=> 'ctp_icon',
                'title' => __('CTP Icon', 'novena'),
                'type' =>'icon'
              ),
              array(
                'id'=> 'ctp_number',
                'title' => __('CTP Number', 'novena'),
                'type' =>'number'
              ),
              array(
                'id'=> 'ctp_prefix',
                'title' => __('CTP Prefix', 'novena'),
                'type' =>'text'
              ),
              array(
                'id'=> 'ctp_title',
                'title' => __('CTP title', 'novena'),
                'type' =>'text'
              ),
         )
        )

       
      )
  ));

  // service items 
  CSF::createSection( $prefix, array(
    'id' => 'services_section',
    'title' => __('services Section', 'novena'),
    
  ));

  CSF::createSection( $prefix, array(
    'parent' => 'services_section',
    'title' => __('Service Section', 'novena'),
    'icon'   => 'fas fa-rocket',
    'fields'=>array(
      array(
        'id'=> 'service_title',
        'title' => __('Service Title', 'novena'),
        'type' =>'text'
      ),
      array(
        'id'=> 'service_description',
        'title' => __('Service Description', 'novena'),
        'type' =>'textarea'
      ),
      array(
        'id' => 'service_repeater',
        'title' => __('services Repeater', 'novena'),
        'max'=>'6',
        'button_type' => __('add new button', 'novena'),
        'type'=> 'repeater',
       'fields'=>array(
            array(
              'id'=> 'service_icon',
              'title' => __('service Icon', 'novena'),
              'type' =>'icon'
            ),
            array(
              'id'=> 'service_item_title',
              'title' => __('service item title ', 'novena'),
              'type' =>'text'
            ),
            array(
              'id'=> 'service_item_description',
              'title' => __('service item description ', 'novena'),
              'type' =>'textarea'
            )
            
       )
      )

     
    )
));

//appoinment section
CSF::createSection( $prefix, array(
  'id' => 'appoinment_section',
  'title' => __('appoinment Section', 'novena'),
  
));

CSF::createSection( $prefix, array(
  'parent' => 'appoinment_section',
  'title' => __('appoinment Section', 'novena'),
  'icon'   => 'fas fa-rocket',
  'fields'=>array(
    array(
      'id'=> 'appoinment_title',
      'title' => __('appoinment Title', 'novena'),
      'type' =>'text'
    ),
    array(
      'id'=> 'appoinment_description',
      'title' => __('Service Description', 'novena'),
      'type' =>'textarea'
    ),
    array(
      'id'=> 'appoinment_imge',
      'title' => __('appoinment images', 'novena'),
      'type' =>'media'
    ),
    array(
      'id'=> 'appoinment_phone',
      'title' => __('appoinment Phone', 'novena'),
      'type' =>'text'
    ),
   
   
  )
));


//testimonial section
 // service items 
 CSF::createSection( $prefix, array(
  'id' => 'testimonial_section',
  'title' => __('testimonial Section', 'novena'),
  
));
CSF::createSection( $prefix, array(
  'parent' => 'testimonial_section',
  'title' => __('testimonial Section', 'novena'),
  'icon'   => 'fas fa-rocket',
  'fields'=>array(
    array(
      'id'=> 'testimonial_title',
      'title' => __('testimonial Title', 'novena'),
      'type' =>'text'
    ),
    array(
      'id'=> 'testimonial_description',
      'title' => __('testimonial Description', 'novena'),
      'type' =>'textarea'
    ),
    array(
      'id' => 'testimonial_repeater',
      'title' => __('testimonial Repeater', 'novena'),
      'max'=>'4',
      'button_type' => __('add new button', 'novena'),
      'type'=> 'repeater',
     'fields'=>array(
          array(
            'id'=> 'testimonial_imge',
            'title' => __('testimonial images', 'novena'),
            'type' =>'media'
          ),
          array(
            'id'=> 'testimonial_name',
            'title' => __('testimonial Name ', 'novena'),
            'type' =>'text'
          ),
          array(
            'id'=> 'testimonial_degis',
            'title' => __('testimonial degisninal ', 'novena'),
            'type' =>'text'
          ),
          array(
            'id'=> 'testimonial_desc',
            'title' => __('testimonial Description ', 'novena'),
            'type' =>'textarea'
          ),
          
     )
    )

   
  )
));


// client section 


 CSF::createSection( $prefix, array(
  'id' => 'claint_section',
  'title' => __('Cleint Section', 'novena'),
  
));
CSF::createSection( $prefix, array(
  'parent' => 'claint_section',
  'title' => __('Cleint Section', 'novena'),
  'icon'   => 'fas fa-rocket',
  'fields'=>array(
    array(
      'id'=> 'Cleint_title',
      'title' => __('Cleint Title', 'novena'),
      'type' =>'text'
    ),
    array(
      'id'=> 'Cleint_description',
      'title' => __('Cleint Description', 'novena'),
      'type' =>'textarea'
    ),
    array(
      'id' => 'Cleint_repeater',
      'title' => __('Cleint Repeater', 'novena'),
      'max'=>'8',
      'button_type' => __('add new button', 'novena'),
      'type'=> 'repeater',
     'fields'=>array(
          array(
            'id'=> 'Cleint_imge',
            'title' => __('Cleint images', 'novena'),
            'type' =>'media'
          ),
           
     )
    )
  )
));


//about page 

CSF::createSection( $prefix, array(
  'id' => 'about_page',
  'title' => __('About page', 'novena'),
  
));

//bredecum section
    CSF::createSection( $prefix, array(
      'parent' => 'about_page',
      'title' => __('About Breadcoum Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'about_subtitle',
          'title' => __('About subTitle', 'novena'),
          'type' =>'textarea'
        ),
        array(
          'id'=> 'about_title',
          'title' => __('About Title', 'novena'),
          'type' =>'text'
        ),
        array(
          'id'=> 'about_background',
          'title' => __('About background', 'novena'),
          'type' =>'background',
          'output'=>'.page-title'
        )
      )
    ));
  
//title section
    CSF::createSection( $prefix, array(
      'parent' => 'about_page',
      'title' => __('About Personal doctor Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'about_Personal_title',
          'title' => __('About Personal  Title', 'novena'),
          'type' =>'text'
        ),
        array(
          'id'=> 'about_Personal_desc',
          'title' => __('About Personal Description', 'novena'),
          'type' =>'textarea'
        ),
        array(
          'id'=> 'about_Personal_single',
          'title' => __('About single', 'novena'),
          'type' =>'media',
         
        )
      )
    ));
  
//Team  section
    CSF::createSection( $prefix, array(
      'parent' => 'about_page',
      'title' => __('About Team doctor Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id' => 'team_repeater',
          'title' => __('team Repeater', 'novena'),
          'max'=>'4',
          'button_type' => __('add new button', 'novena'),
          'type'=> 'repeater',
          'fields' => array(
            array(
              'id' => 'team_imae',
              'title'=>__('team thubnail','novena'),
              'type'=>'media'
            ),
            array(
              'id' => 'team_title',
              'title'=>__('team title','novena'),
              'type'=>'text'
            ),
            array(
              'id' => 'team_desc',
              'title'=>__('team description','novena'),
              'type'=>'textarea'
            )
          ),
        ),
       
      )
    ));
  
    //doctor team section

    CSF::createSection( $prefix, array(
      'parent' => 'about_page',
      'title' => __('About doctor Team Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'about_doctor_title',
          'title' => __('About Doctor  Title', 'novena'),
          'type' =>'text'
        ),
        array(
          'id'=> 'about_doctor_desc',
          'title' => __('About Doctors Description', 'novena'),
          'type' =>'textarea'
        ),
        array(
          'id'=> 'doctor_repeator',
          'title' => __('Doctor  single', 'novena'),
          'button_type' => __('add new button', 'novena'),
          'max'=>'4',
          'type' =>'repeater',
          'fields'=>array(
            array(
              'id'=>'doctor_imge',
              'title' => __('Doctor Piture', 'novena'),
              'type' =>'media'
            ),
            array(
              'id'=>'doctor_name',
              'title' => __('Doctor Name', 'novena'),
              'type' =>'text'
            ),
            array(
              'id'=>'doctor_degn',
              'title' => __('Doctor Desgnation', 'novena'),
              'type' =>'text'
            ),
          )
         
        )
      )
    ));
  
     //doctor team achivement

     CSF::createSection( $prefix, array(
      'parent' => 'about_page',
      'title' => __('About doctor achivement Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'about_achivement_title',
          'title' => __('About Doctor achivement Title', 'novena'),
          'type' =>'text'
        ),
        
        array(
          'id'=> 'doctor_achivement',
          'title' => __('Doctor  achivement', 'novena'),
          'max'=>'6',
          'button_type' => __('add new button', 'novena'),
          'type' =>'repeater',
          'fields'=>array(
            array(
              'id'=>'doctor_achivement_imge',
              'title' => __('Doctor achivement', 'novena'),
              'type' =>'media'
            ),
           
          )
         
        )
      )
    ));

     //doctor team testimonial s

     CSF::createSection( $prefix, array(
      'parent' => 'about_page',
      'title' => __('About doctor testimonial Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'about_testimonial_imge',
          'title' => __('About testimonial Images', 'novena'),
          'type' =>'background',
          'output'=>'.testimonial:before'
        ),
        array(
          'id'=> 'about_testimonial_title',
          'title' => __('About testimonial Title', 'novena'),
          'type' =>'text'
        ),
        
        array(
          'id'=> 'doctor_testimonial',
          'title' => __('Doctor testimonial', 'novena'),
          'max'=>'6',
          'button_type' => __('add new button', 'novena'),
          'type' =>'repeater',
          'fields'=>array(
            array(
              'id'=>'testimonial_desg',
              'title' => __('Doctor degnation', 'novena'),
              'type' =>'text'
            ),
            array(
              'id'=>'testimonial_name',
              'title' => __('testimonial Name', 'novena'),
              'type' =>'text'
            ),
            array(
              'id'=>'testimonial_desc',
              'title' => __('testimonial Description', 'novena'),
              'type' =>'textarea'
            ),
           
          )
         
        )
      )
    ));


    //services page 

    CSF::createSection( $prefix, array(
      'id' => 'services_page',
      'title' => __('service page', 'novena'),
      
    ));


   //service bredecum 

    CSF::createSection( $prefix, array(
      'parent' => 'services_page',
      'title' => __('About doctor services Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'about_service_subtitle',
          'title' => __('About Doctor services subTitle', 'novena'),
          'type' =>'text'
        ),
        array(
          'id'=> 'about_service_title',
          'title' => __('About Doctor services Title', 'novena'),
          'type' =>'text'
        ),
        
        array(
          'id'=> 'about_service_bg',
          'title' => __('About Doctor services background', 'novena'),
          'type' =>'background',
          'output'=>'.servie-page'
        ),
        
       
      )
    ));


    // doctor services
    
    CSF::createSection( $prefix, array(
      'parent' => 'services_page',
      'title' => __(' doctor service Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
       
        
        array(
          'id'=> 'doctor_service',
          'title' => __('Doctor  service', 'novena'),
          'max'=>'6',
          'button_type' => __('add new button', 'novena'),
          'type' =>'repeater',
          'fields'=>array(
            array(
              'id'=> 'service_imge',
              'title' => __(' Doctor server imge', 'novena'),
              'type' =>'media'
            ),
            array(
              'id'=> 'service_title',
              'title' => __(' Doctor server title', 'novena'),
              'type' =>'text'
            ),
            array(
              'id'=> 'service_desc',
              'title' => __(' Doctor server description', 'novena'),
              'type' =>'textarea'
            ),
           
          )
         
        )
      )
    ));

    //ctp a section 

    CSF::createSection( $prefix, array(
      'parent' => 'services_page',
      'title' => __('About doctor services Section', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'service_ctp_title',
          'title' => __('About Doctor services subTitle', 'novena'),
          'type' =>'background',
          'output'=>'.cta-page'
        ),
        array(
          'id'    => 'opt-code-editor-1',
          'type'  => 'wp_editor',
          'title' => 'Code Editor',
        ),
        
        
       
      )
    ));

     //Department page 

     CSF::createSection( $prefix, array(
      'id' => 'department_page',
      'title' => __('Department page', 'novena'),
      
    ));

    CSF::createSection( $prefix, array(
      'parent' => 'department_page',
      'title' => __('Department header ', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'department_ctp_bge',
          'title' => __('Doctor ctp background', 'novena'),
          'type' =>'background',
          'output'=>'.department'
        ),
        array(
          'id'    => 'department_ctp_subtitle',
          'type'  => 'text',
          'title' => __('Department Subtitle', 'novena'),
        ),
        array(
          'id'    => 'department_ctp_title',
          'type'  => 'text',
          'title' => __('Department title', 'novena'),
        ),
        
        
       
      )
    ));
    CSF::createSection( $prefix, array(
      'parent' => 'department_page',
      'title' => __('Department about section ', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'department_ctp_her_title',
          'title' => __('Department heading', 'novena'),
          'type' =>'text',
          
        ),
        array(
          'id'    => 'department_ctp_Description',
          'type'  => 'textarea',
          'title' => __('Department Description', 'novena'),
        ),
       
      )
    ));

     //Doctors page 

     CSF::createSection( $prefix, array(
      'id' => 'doctors_page',
      'title' => __('Doctors page', 'novena'),
      
    ));
    // doctor bredecum section
    CSF::createSection( $prefix, array(
      'parent' => 'doctors_page',
      'title' => __('Doctor about section ', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'doctor_subtitle',
          'title' => __('doctor subtitle', 'novena'),
          'type' =>'text',
          
        ),
        array(
          'id'    => 'doctor_title',
          'type'  => 'text',
          'title' => __('Doctor Title', 'novena'),
        ),
        array(
          'id'    => 'doctor_background',
          'type'  => 'background',
          'title' => __('Doctor background', 'novena'),
          'output' =>'.doctorsbrede'
        ),
       
      )
    ));
    // doctor Title section
    CSF::createSection( $prefix, array(
      'parent' => 'doctors_page',
      'title' => __('Doctor Title section ', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields'=>array(
        array(
          'id'=> 'doctor_heading',
          'title' => __('doctor Header', 'novena'),
          'type' =>'text',
          
        ),
        array(
          'id'    => 'doctor_subheading',
          'type'  => 'textarea',
          'title' => __('Doctor subheading', 'novena'),
        ),
       
       
      )
    ));

  }