<?php if(!defined('KIRBY')) exit ?>

title: About
pages:
  hide: true
files: images
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  email:
    label: Email
    type: email
    autocomplete: false
  phone:
    label: Phone
    type: tel
  location:
    label: Location
    type: place
  directions:
    label: Driving Directions & Parking Information
    type: textarea
