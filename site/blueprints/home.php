<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  baseline:
  	label: Baseline
  	type: text
  description:
  	label: Description
  	type: textarea
  text:
    label: Text
    type:  textarea
    size:  large
  register: 
   	label: Inscriptions
   	type: headline 
  region: 
  	label: Inscriptions actives ?
  	type: toggle 
  	text: yes/no 
  	width: 1/2
  regilink: 
  	label : Lien vers inscriptions
  	type: url 
  	width: 1/2
