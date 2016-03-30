<?php if(!defined('KIRBY')) exit ?>

title: Faq
pages: false
files: false
fields:
  title:
    label: Title
    type:  text
  qanda:
  	label: Questions / Réponses 
  	type: structure 
  	entry: >
  		{{question}}<br/>
  		{{answer}}
  	fields: 
  		question:
  			label: Question
  			type: text 
  		answer: 
  			label: Answer
  			type: textarea