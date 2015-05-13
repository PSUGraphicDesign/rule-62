<?php if(!defined('KIRBY')) exit ?>

title: Speaker
pages:
  hide: true
files: false
fields:
  title:
    label: Speaker Name
    type: text
  bio:
    label: Biographical Information
    type: textarea
  date:
    label: Date
    type: date
  years_in_program:
    label: Years of Sobriety
    type: number
  url:
    label: Website
    type: url
  categories:
    label: Groups
    type: checkboxes
    default: aa
    options:
      aa: Alcoholics Anonymous
      al-anon: Al Anon
