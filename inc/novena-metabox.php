<?php 


if(class_exists('CSF')){

    // Set a unique slug-like ID
  $prefix = 'novena_metabox';


    // Create department a metabox
    CSF::createMetabox( $prefix, array(
        "id" =>"department_metabox",
        'title'     => __('Department','novena'),
        'post_type' => 'departments',
      ) );

        // images file a section
        CSF::createSection( $prefix, array(
            'parent' =>'department_metabox',
            'title'  => __('Department','novena'),
            'icon'   => 'fas fa-rocket',
            'fields' => array(
            // A text field
            array(
                'id'    => 'depart-single-image',
                'type'  => 'media',
                'title' => __('department featured image','novena'),
            )
         )
        ) );
        // deescription file a section
        CSF::createSection( $prefix, array(
            'parent' =>'department_metabox',
            'title'  => __('Department','novena'),
            'icon'   => 'fas fa-rocket',
            'fields' => array(
            // A text field
            array(
                'id'    => 'depart-single-title',
                'type'  => 'text',
                'title' => __('department featured title','novena'),
            ),
            array(
                'id'    => 'depart-subtitle',
                'type'  => 'textarea',
                'title' => __('department Sub Heading','novena'),
            ),
            array(
                'id'    => 'depart-desc',
                'type'  => 'textarea',
                'title' => __('department Description','novena'),
            ),

         )
        ) );
        // Services features
        CSF::createSection( $prefix, array(
            'parent' =>'department_metabox',
            'title'  => __('Services features','novena'),
            'icon'   => 'fas fa-rocket',
            'fields' => array(
            // A text field
            array(
                'id'    => 'depart-single-title',
                'type'  => 'text',
                'title' => __('department featured title','novena'),
            ),
            array(
                'id'=> 'doctor_service',
                'title' => __('Doctor  service', 'novena'),
                'max'=>'6',
                'button_type' => __('add new button', 'novena'),
                'type' =>'repeater',
                'fields'=>array(
                    array(
                        'id'=> 'service_features',
                        'title' => __(' Doctor server ', 'novena'),
                        'type' =>'text'
                      ),
                )
            )

         )
        ) );
        //Time Schedule
        CSF::createSection( $prefix, array(
            'parent' =>'department_metabox',
            'title'  => __('Time Schedule','novena'),
            'icon'   => 'fas fa-rocket',
            'fields' => array(
            // A text field
            array(
                'id'    => 'depart-shedule-title',
                'type'  => 'text',
                'title' => __('department shedule title','novena'),
            ),
            array(
                'id'=> 'doctor_Tchedule',
                'title' => __('Doctor  Time Schedule', 'novena'),
                'max'=>'6',
                'button_type' => __('add new button', 'novena'),
                'type' =>'repeater',
                'fields'=>array(
                    array(
                        'id'=> 'Doctor_shedule',
                        'title' => __(' Doctor server ', 'novena'),
                        'type' =>'text'
                      ),
                    array(
                        'id'=> 'Doctor_time',
                        'title' => __(' Doctor Time ', 'novena'),
                        'type' =>'text'
                      ),
                )
                    ),
                    array(
                        'id'    => 'depart-shedule-text',
                        'type'  => 'text',
                        'title' => __('department shedule contact','novena'),
                    ),
                    array(
                        'id'    => 'depart-shedule-phone',
                        'type'  => 'text',
                        'title' => __('department shedule phone','novena'),
                    ),


         )
        ) );
}