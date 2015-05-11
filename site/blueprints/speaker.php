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
  date:
    label: Date
    type: date
  url:
    label: URL
    type: url
  categories:
    label: Groups
    type: checkboxes
    default: aa
    options:
      aa: Alcoholics Anonymous
      al-anon: Al Anon
