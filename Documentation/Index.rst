.. include:: /Includes.rst.txt

===============
Compatibility 7
===============

:Extension key:
   compatibility7

:Package name:
   friendsoftypo3/compatibility7

:Version:
   |release|

:Language:
   en

:Author:
   TYPO3 contributors

:License:
   This document is published under the
   `Creative Commons BY 4.0 <https://creativecommons.org/licenses/by/4.0/>`__
   license.

:Rendered:
   |today|

----

This extension adds some features from TYPO3 v7 that were changed in TYPO3 v8,
but makes the upgrade process easier.

----

**Table of Contents:**

.. contents::
   :backlinks: top
   :depth: 2
   :local:

Functionality
=============

This extension provides the following functionality:

Indexed Search
--------------

The old marker-based plugin for showing a search box and the search results has
been moved from the TYPO3 Core to this extension. Since TYPO3 v6, there is an
equivalent based on Extbase and Fluid in `indexed_search`_ provided by the core
which is easier to template.

.. _indexed_search: https://extensions.typo3.org/extension/indexed_search/

TypoScript and ViewHelpers for fluid_styled_content
---------------------------------------------------

The system extension `fluid_styled_content`_ shipped with TYPO3 v7 built some
Menu viewhelpers to render menus. As this functionality was completely
refactored the old viewhelpers and templates are still available in this
extension, if still needed while migrating. Same goes for the TypoScript
definition used in TYPO3 v7.

.. _fluid_styled_content: https://extensions.typo3.org/extension/fluid_styled_content/

TypoScript for css_styled_content
---------------------------------

The main TypoScript for the system extension `css_styled_content`_ has been
refactored. Compatibility TypoScript for keeping the rendering the same as in
TYPO3 v7 is provided by this extension.

.. _css_styled_content: https://extensions.typo3.org/extension/css_styled_content/

Page Properties "Force scheme"
------------------------------

The functionality having a checkbox "Force scheme" (database field
pages.url_scheme) on each page of an installation to force HTTP/HTTPS for a
specific page has been moved to this extension. We recommend putting everything
secure via HTTPS nowadays which can be done with other extensions or via a
simple .htaccess change.

TypoScript option config.sys_language_softExclude
-------------------------------------------------

The new translation concept is more consistent and does not allow to modify TCA
during runtime. If you have an edge-case to do so (although it should not be
necessary anymore), you still have the option available.

TypoScript option config.beLoginLinkIPList
------------------------------------------

Rendering a login/logout link on a page based on a IP range is moved to this
extension. A more appropriate way with more customization options to achieve the
same, can be handled via third-party extensions.

Page Module "QuickEdit" functionality
-------------------------------------

Editing all records on a page at once via QuickEdit is now available in this
extension.

Monitor Utility
---------------

If the frontend page reaches 90% of the memory available, it gets stored in the
registry and an info is shown in the report module. The information to check
that on each frontend request is moved to this extension. Profiling can be done
more efficiently with other tools nowadays.

Installation
============

The latest version can be installed via `TER`_ or via composer
by running

.. code-block:: bash

   composer require friendsoftypo3/compatibility7

in a TYPO3 v8 installation.

.. _TER: https://extensions.typo3.org/extension/compatibility7/

Current state
=============

The latest version here reflects a feature-complete state. All newly based features
will be implemented in future versions of TYPO3 v8.

Contribution
============

Feel free to submit any pull request, or add documentation, tests, as you please.
We will publish a new version every once in a while, depending on the amount of changes
and pull requests submitted.

License
-------

The extension is published under GPL v2+, all included third-party libraries are
published under their respective licenses.

Authors
-------

A lot of contributors have been working on this area while this functionality was part of
the TYPO3 Core. This package is now maintained by a loose group of TYPO3 enthusiasts inside
the TYPO3 Community. Feel free to contact `Benni Mack`_ for any questions
regarding "compatibility7".

.. _Benni Mack: benni.mack@typo3.org
