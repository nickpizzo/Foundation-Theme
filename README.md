# Foundation 6.4 Theme for Drupal 7


### June 2017

* Updated Foundation to [version 6.4](http://foundation.zurb.com/sites/docs/)
* Enabled Foundation mixins for [Motion UI](http://zurb.com/playground/motion-ui)
* Created "cws-auto" starter pack, partials include commerce-flow, commerce-mobile, and add-to-cart-overlay
* Using node sass compiler instead of ruby sass compiler in Php Storm (10x faster), new watcher settings are as follows
```
(Unix) Program: /usr/local/bin/node-sass
(Windows) Program: C:\Users\USER\AppData\Roaming\npm\node-sass.cmd

Arguments: $FileName$ --source-map true --indented-syntax --output-style compressed -o $ProjectFileDir$/sites/all/themes/Foundation-Theme/css 

Output path to refresh: $ProjectFileDir$/sites/all/themes/Foundation-Theme/css/$FileNameWithoutExtension$.css
```