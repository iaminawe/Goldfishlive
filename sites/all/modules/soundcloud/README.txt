// $Id: 
README
======
The SoundCloud module helps Drupal module developers in authenticating user using the OAUTH protocol as implemented by SoundCloud.

The module generally wraps two libraries:
- the official SoundCloud connect library to be found at http://github.com/soundcloud/sc-connect
- the php-soundcloud PHP library to be found at http://github.com/mptre/php-soundcloud

USAGE
=====
Main functions that can be used are:
- soundcloud_generate_button() //This returns the soundcloud connect and disconnect button

- soundcloud_me() // Returns the current users user object

- soundcloud_create_soundcloud($uid) // returns the php-soundcloud main object


CONTRIB
=======
Contrib modules can be written that use this module to provide more SoundCloud functionality.

IDEAS
=====
- SoundCloud CCK.
- Create a SoundCloud master profile for the website.
- Build up a SoundCloud master pofile page
- ...
