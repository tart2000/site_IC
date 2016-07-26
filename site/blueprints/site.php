<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
    width: 1/2
  beta: 
    label: Beta ?
    type: toggle
    text: yes/no
    width: 1/2
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  logo: 
    label: Header logo selection
    type:  selector
    mode:  single
    types:
      - image
  copyright:
    label: Copyright
    type:  textarea  
  analytics:
    label: Google Analytics ID
    type:  text
    default: UA-XXXXX-X
  socials:
    label: Social (URLs)
    type: headline
  twit:
    label: Twitter
    type: url
    width: 1/2
  faceb:
    label: Facebook
    type: url
    width: 1/2 
  linkd: 
    label: LinkedIn 
    type: url
    width: 1/2
  mail: 
    label: eMail
    type: email
    width: 1/2

