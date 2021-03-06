; To ensure modules etc are downloaded change in profiles/aaayurvedawellbeing
; and run the following:
;
; drush make --no-core --contrib-destination=. ./ayurvedawellbeing.make

core = 7.x
api = 2

; Contrib
; --------
projects[admin_menu][version] = 3.0-rc4
projects[admin][type] = "module"
projects[context][version] = 3.2
projects[context][type] = "module"
projects[ctools][version] = 1.4
projects[ctools][type] = "module"
projects[features][version] = 1.0
projects[features][type] = "module"
projects[filefield_nginx_progress][version] = 2.3
projects[filefield_nginx_progress][type] = "module"
projects[google_analytics][version] = 1.3
projects[google_analytics][type] = "module"
projects[imce][version] = 1.9
projects[imce][type] = "module"
projects[imce_wysiwyg][version] = 1.0
projects[imce_wysiwyg][type] = "module"
projects[libraries][version] = 2.0
projects[libraries][type] = "module"
projects[metatag][version] = 1.0-beta9
projects[metatag][type] = "module"
projects[mollom][version] = 2.10
projects[mollom][type] = "module"
projects[oauth][version] = 3.2
projects[oauth][type] = "module"
projects[pathauto][version] = 1.2
projects[pathauto][type] = "module"
projects[panels][version] = 3.4
projects[panels][type] = "module"
projects[piwik][version] = 2.4
projects[piwik][type] = "module"
projects[redirect][version] = 1.0-rc1
projects[redirect][type] = "module"
projects[token][version] = 1.5
projects[token][type] = "module"
projects[twitter][version] = 5.8
projects[twitter][type] = "module"
projects[views][version] = 3.8
projects[views][type] = "module"
projects[webform][version] = 3.20
projects[webform][type] = "module"
projects[wysiwyg][version] = 2.2
projects[wysiwyg][type] = "module"
projects[xmlsitemap][version] = 2.0
projects[xmlsitemap][type] = "module"


; Themes
; --------
;projects[solaris][type] = "theme"
;projects[solaris][version] = 3.2
  
  
; Libraries
; ---------
:libraries[jquery][download][type] = "file"
:libraries[jquery][download][url] = "https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"
:libraries[jqueryui][download][type] = "file"
:libraries[jqueryui][download][url] = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"

libraries[profiler][download][type] = "get"
libraries[profiler][download][url] = "http://ftp.drupal.org/files/projects/profiler-7.x-2.0-beta1.tar.gz"
libraries[profiler][destination] = "libraries"
