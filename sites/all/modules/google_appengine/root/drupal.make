 ; Drush Make (http://drupal.org/project/drush)
api = 2

; Drupal core

core = 7.x
projects[drupal][type] = core
projects[drupal][patch][appengine] = http://drupalcode.org/project/google_appengine.git/blob_plain/refs/heads/7.x-1.x:/root/core.patch

; Google Appengine

projects[google_appengine][type] = module
projects[google_appengine][version] = 1.x
