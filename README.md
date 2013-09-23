Slots and Tags
==============

Plugin for Cotonti CMF. It allows to use tpl TAGs and function calls in menu slots.

Description
-----------

Cotonti have a predefined custom tags that admin can use in templates. Content of these
tags called «menu slots» can be altered via administration web interface. As a default,
menu slots allow to use only simple html text.
With this extension you can use common TPL tags and function calls like in TPL files.

![Slots_n_tags screenshot](http://macik.github.com/cot-slots_n_tags/images/tagsinslots01.png)
![Slots_n_tags screenshot](http://macik.github.com/cot-slots_n_tags/images/tagsinslots02.png)

Features
--------

* Parses text of menu slot as a tpl file
* Allow to use tags and Unified input field for time selections
* Allow to use function calls

Requirements
------------

Works starting from `Cotonti Siena v0.9.11`.

Version info
------------

Extension must works out from the box. But as it relies on `CoTemplate->compile()` function
it works **only from Cotonti v0.9.11**.
Some of lang file strings or resource strings may be undefined in menuslots if they init after
`global` hook.

### How extension works

Runs on `global` hook. And parses all menu slots with `CoTemplate->compile()`.


Install
-------

* Unpack, copy files to plugins folder of your site.
* Install via Admin → Extensions menu (`Administration panel → Extensions`)


References
----------

* [Cotonti.com](http://Cotonti.com/) -- Home of Cotonti CMF
* [slots_n_tags on GitHub](https://github.com/macik/cot-slots_n_tags) -- Extension on GitHub

