<?php if(!defined('KIRBY')) exit ?>

title: Faq
pages: false
files: false
fields:
  title:
    label: Title
    type:  text
  qanda:
  	label: Questions / Answers 
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
  text:
    label: Text
    type: textarea