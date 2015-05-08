<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  information:
    label: Information
    type:  textarea
  address:
    label: Address
    type:  text
  email:
    label: Email
    type: text
files:
  sortable: true
  fields:
    title:
      label: Title
      type: text
    client:
      label: Client
      type: text
    year:
      label: Year
      type: text