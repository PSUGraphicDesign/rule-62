<?php if(!defined('KIRBY')) exit ?>

title: Update
pages:
  hide: true
files: images
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date Posted
    type: date
  text:
    label: Text
    type:  textarea
  program:
    label: Program Affiliation
    type: checkboxes
    options:
      AA: AA
      Al-Anon: Al-Anon
      ALA-Teen: ALA-Teen
      Rule62: Rule62
