# TYPO3 Extension "compatibility7"

Adds some functionality from TYPO3 v7 which has been changed in TYPO3 v8, but
help makes the upgrade progress easier.

## Functionality
This extension provides the following functionality:

### Indexed Search
The old marker-based plugin for showing a search box and the search results has been
moved from the TYPO3 Core to this extension. Since TYPO3 v6, there is an equivalent
based on Extbase and Fluid in "indexed_search" provided by the core which is easier to
template.

### TypoScript and ViewHelpers for fluid_styled_content
The system extension "fluid_styled_content" shipped with TYPO3 v7 built some Menu
viewhelpers to render menus. As this functionality was completely refactored the old
viewhelpers and templates are still available in this extension, if still needed
while migrating. Same goes for the TypoScript definition used in TYPO3 v7.

### TypoScript for css_styled_content
The main TypoScript for the system extension "css_styled_content" has been refactored.
Compatibility TypoScript for keeping the rendering the same as in TYPO3 v7 is provided
by this extension.

### Page Properties "Force scheme"
The functionality having a checkbox "Force scheme" (database field pages.url_scheme)
on each page of an installation to force HTTP/HTTPS for a specific page has been moved
to this extension. We recommend putting everything secure via HTTPS nowadays which
can be done with other extensions or via a simple .htaccess change.

### TypoScript option config.sys_language_softExclude
The new translation concept is more consistent and does not allow to modify TCA
during runtime. If you have an edge-case to do so (although it should not be necessary
anymore), you still have the option available.

### TypoScript option config.beLoginLinkIPList
Rendering a login/logout link on a page based on a IP range is moved to this
extension. A more apprioriate way with more customization options to achieve the same,
can be handled via third-party extensions.

### Page Module "QuickEdit" functionality
Editing all records on a page at once via QuickEdit is now available in this
extension.

### Monitor Utility
If the frontend page reaches 90% of the memory available, it gets stored in the
registry and an info is shown in the report module. The information to check
that on each frontend request is moved to this extension. Profiling can be done
more efficiently with other tools nowadays.


## Installation
The latest version can be installed via TER (http://typo3.org) or via composer
by adding ''composer require friendsoftypo3/compatibility7'' in a TYPO3 v8 installation.

## Current state
The latest version here reflects a feature-complete state. All newly based features
will be implemented in future versions of TYPO3 v8.

## Contribution
Feel free to submit any pull request, or add documentation, tests, as you please.
We will publish a new version every once in a while, depending on the amount of changes
and pull requests submitted.

### License
The extension is published under GPL v2+, all included third-party libraries are
published under their respective licenses.

### Authors
A lot of contributors have been working on this area while this functionality was part of
the TYPO3 Core. This package is now maintained by a loose group of TYPO3 enthusiasts inside
the TYPO3 Community. Feel free to contact Benni Mack (benni.mack@typo3.org) for any questions
regarding "compatibility7".
