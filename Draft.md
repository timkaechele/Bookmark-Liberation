# General Assumptions
one Installation = one user (no multi user support -> maybe later)

## Content Folder Structure:

```yaml
bookmarks:
  unique_token_folder: #UUIDv4 or UUIDv6
    - (bookmark_type).txt # e.g. (bookmark_image.txt|bookmark_video.txt|…) 
    - image.jpg           # optional 
```


# Features

```yaml
- RSS Feed:
  - where(public: true)
  - possible to subscribe to other users 

- API
  - authentication only (maybe Oauth, maybe simple HTTP-Basic Auth)
  - RESTful JSON
```


# Bookmark.txt Example

```md
Title: Awesome Bookmark
---
Description: that's so funny i nearly fell off my dinosaur
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
