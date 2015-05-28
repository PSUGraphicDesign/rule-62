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
  url:
    label: Website
    type: url
  categories:
    label: Groups
    type: checkboxes
    default: aa
    options:
      Alcoholics Anonymous: Alcoholics Anonymous
      Al Anon: Al Anon
