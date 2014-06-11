# Draft

## General Assumptions

one Installation = one user (no multi user support -> maybe later)

## Content Folder Structure

```yaml
bookmarks:
  unique_token_folder: #UUIDv4 or UUIDv6
    - (bookmark_type).txt # e.g. (bookmark_image.txt|bookmark_video.txt|…) 
    - image.jpg           # optional 
```



## Features

```yaml
- RSS Feed:
  - where(public: true)
  - possible to subscribe to other users 

- API
  - authentication only (maybe Oauth, maybe simple HTTP-Basic Auth)
  - RESTful JSON
```

## CSS
- Inuit.css
- BEM 

## Design 

- clean and unobtrusive


## Plugin System

### Spiders
- parse content properly
- pass page content to internal bookmark creation (image, title, description) 
- define template for bookmark (image, video, plain_link, custom)

## Standard Templates:
  - Images
  - Video
  - Plain Link


## API Endpoints

- [GET/POST/PUT/DELETE] /bookmarks/(:uuid)

- [GET/PUT] /user/(:uuid)

- [POST] /search



## Examples


### Standard Bookmark.txt

```md
Title: Awesome Bookmark
---
Description: that's so awesome i nearly fell off my dinosaur
---
note: wuhu another useless Facebook Redesign
---
thumb_image: (image: awesomepic.jpg)
---
type: (image|video|link) # type resolving could be solved with different templates
---
url: http://dribbble.com/yet_another_facebook_redesign
---
tags: awesome, bookmark, yeah, design, stuff, useless, dribbble,
---
created_at: TIMESTAMP
---
updated_at: TIMESTAMP
---
public: (true|false)
```


### API Example (First Draft)

```json
{ bookmark: {
    'uuid': '6dc37800-f13e-11e3-ac10-0800200c9a66',
    'title': 'Ameowadeus',
    'description': 'no dog, much fun',
    // optional
    'note': 'so cat video',
    'url': 'http:\/\/youtube.com/cat_video',
    'type': 'video',
    // type specific 
    'video_url': 'http:\/\/embedded.youtube.com/cat_video',
    // not type specific 
    'thumb_url': 'http\/\/my_awesome_domain.com/image.png, 
    'tags': [
      'awesome',
      'yeah',
      'cat',
      'video',
      'kevin_spacey_rocks_it_again'
    ],
    'public': true,
    'created_at': 20120919,
    'updated_at': 20120919,
  },
  // embedded user object for less http request overhead 
  'user': {
    'username': 'TimKaechele',
    'gravatar': 'super_complex md5 hash',
    'created_at': 20120919,
    'updated_at': 20120919
  }
}
```









