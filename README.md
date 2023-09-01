# TYPO3 extension `josefglatz/seo-aspect-ratios`

![Supported TYPO3 versions: 9LTS 10 LTS 11 LTS 12 LTS](https://img.shields.io/badge/Supported%20TYPO3%20versions-9LTS%2010LTS%2011LTS%2012LTS-brightgreen.svg)

# A simple TYPO3 extension which extends the table configuration array for ext:seo (a TYPO3 CMS system extension) related image fields.

**Useful for TYPO3 integrators and developers which wants to add common,
useful aspect ratios for the opengraph-/twitter image field other than
`1.91:1` and `free`.**

> *This extension maintains common and known aspect ratios for TYPO3 CMS
> opengraph- and twitter image fields. It is related to an
> [abandoned work-in-progress patch](https://review.typo3.org/#/c/58546/)
> on the TYPO3 review system.*

> This extension acts also as an example extension how to add more
> aspect ratios
> ([TYPO3 9.3: Feature #85147 Render SEO Meta Tags In Frontend](https://docs.typo3.org/typo3cms/extensions/core/latest/Changelog/9.3/Feature-85147-RenderSEOMetaTagsInFrontend.html),
> [Forge Issue](https://forge.typo3.org/issues/85147))

## Overview

- [Installation Methods](#installation)
- [Configuration](#configuration)

---

## Installation

The extension needs to be installed as any other TYPO3 CMS extension:

### via Composer

**Require extension**

```bash
composer require josefglatz/seo-aspect-ratios
```

**Require master branch of the extension** (for testing latest
development state)

```bash
composer require --dev josefglatz/seo-aspect-ratios:dev-master
```

### via TYPO3 Extension Repository

#### Get it from the Extension Manager

Press the “Retrieve/Update” button and search for the extension key
*seo_aspect_ratios* and import the extension from the repository.

#### Get it from typo3.org:

You can always get current version from
[http://typo3.org/extensions/repository/view/seo_aspect_ratios/current/](http://typo3.org/extensions/repository/view/seo_aspect_ratios/current/)
by downloading the zip version. Upload the file afterwards in the
Extension Manager.

---

## Configuration

**No configuration needed.** This extension ships a common set of known
real world aspect ratios for SEO related share-images. Please [file an
issue](https://github.com/josefglatz/seo_aspect_ratios/issues/new) if
you think we have to extend the set of available aspect ratios.

### Underlying Research (2018-09)

##### Facebook

```
1.91:1 Sharing images: 1,200 x 628 pixels
1.91:1 Sharing links with an image: 1,200 x 628 pixels
9:16   Sharing Stories: 1,080 x 1,920 pixels*
```

##### Instagram

```
1:1    Sharing square images: 1,080 x 1,080 pixels
1.91:1 Sharing horizontal images: 1,080 x 566 pixels
4:5    Sharing vertical images: 1,080 x 1,350 pixels
9:16   Sharing Stories: 1,080 x 1,920 pixels*
```

##### Twitter

```
16:9   Sharing a single image: 1,200 x 675 pixels
16:9   Sharing multiple images: 1,200 x 675 pixels
1.91:1 Sharing links with an image: 800 x 418 pixels
```

##### LinkedIn

```
3:2    Sharing images to Company Page or personal profile: 1,104 x 736 pixels
1.91:1 Sharing links with an image to Company Page or personal profile: 1,200 x 628 pixels
```

##### Pinterest

```
2:3    Sharing images: 800 x 1,200 pixels
```

##### Google+

```
1.91:1 Sharing images or links with an image: 1,200 x 628 pixels
```

##### Snapchat

```
9:16   Sharing images: 1,080 x 1,920 pixels*
```

---

## Thanks to

Open-Source is all about community and support! I want to thank everyone
who contributed reports, feedback on any channel and code!
