<?php if(!defined('KIRBY')) exit ?>

title: Speaker
pages: 
  hide: true
files: true
fields:
  title:
    label: Name
    type:  text
  text:
    label: Description
    type:  textarea
fields:
  categories:
    label: Groups
    type: checkboxes
    default:
      - AA
    options:
      aa: Alcoholics Anonymous
      al-anon: Al Anon
