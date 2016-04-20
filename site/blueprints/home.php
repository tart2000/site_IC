<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: true
files: 
  width: 2500
  height: 2500
fields:
  title:
    label: Title
    type:  text
  baseline:
  	label: Baseline
  	type: text
  bg: 
    label: Background image selection
    type:  selector
    mode:  single
    types:
      - image
  description:
  	label: Description
  	type: textarea
  text:
    label: Text
    type:  textarea
    size:  large
  footer:
    label: Footer
    type: headline
  foottext:
    label: Footer text
    type: textarea
