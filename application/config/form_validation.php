<?php 

$config = array(
  'report' => array(
    array(
      'field' => 'group[name]',
      'label' => 'Group Name',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'group[organization]',
      'label' => 'School / Organization',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'group[address]',
      'label' => 'Group Address',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'group[city]',
      'label' => 'Group City',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'group[state]',
      'label' => 'Group State',
      'rules' => 'trim|required|alpha|exact_length[2]'
    ),
    array(
      'field' => 'group[zip]',
      'label' => 'Group Zip',
      'rules' => 'trim|required|integer|exact_length[5]'
    ),
    array(
      'field' => 'sponsor[name]',
      'label' => 'Adult Contact Name',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'sponsor[email]',
      'label' => 'Adult Contact Email',
      'rules' => 'trim|required|valid_email'
    ),
    array(
      'field' => 'sponsor[phone]',
      'label' => 'Adult Contact Phone',
      'rules' => 'trim|required|exact_length[14]'
    ),
    array(
      'field' => 'event[name]',
      'label' => 'Event Name',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'event[date]',
      'label' => 'Event Date',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'event[location]',
      'label' => 'Event Location',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'event[description]',
      'label' => 'Event Description',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'event[youth_reached]',
      'label' => 'Total Youth Reached',
      'rules' => 'trim|required|integer'
    ),
    array(
      'field' => 'event[adults_reached]',
      'label' => 'Total Adults Reached',
      'rules' => 'trim|required|integer'
    )
  )
  
);