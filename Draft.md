# General Assumptions
one Installation = one user (no multi user support -> maybe later)

## Content Folder Structure:

```yaml
bookmarks:
  unique_token_folder:
    - bookmark.txt
    - image.jpg
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
Description: so awesome
---
note: it is so awesome
---
picture: (image: awesomepic.jpg)
---
type: (image|video|link)
---
url: http://dribbble.com/another_facebook_redesign
---
tags: awesome, bookmark, yeah, design, stuff
---
created_at: 
---
updated_at:
---
public: true|false
```
