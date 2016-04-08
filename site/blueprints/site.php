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
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
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

