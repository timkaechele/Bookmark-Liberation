# Draft

## General Assumptions

one Installation = one user (no multi user support -> maybe later)

## Features

```yaml
- RSS Feed:
  - where(public: true)
  - possible to subscribe to other users (maybe better solveable via JSON)

- API
  - authentication only (maybe Oauth, maybe simple HTTP-Basic Auth)
  - RESTful JSON

- Import Utilities
  - Bookmarklet or other methods to import content quickly

- Flexible Catalog
  - group content by tag
  - full catalog search
```

## CSS
- Inuit.css
- BEM

## Design 

- clean and unobtrusive
- snappy user experience on mobile devices (no imitation of iOS or Android)

## Frontend

- SPA Approach (Ember.js)
- Responsive

## Backend
- Kirby Toolkit
- Sqlite/MySQL
- speed and efficiency as goals

## Exporters

Your data belongs to you and by following this approach we will support a variety of exporters. You should not be locked inside one system.

### Possible Exporters
- Bookmark List
- JSON 
- Complete Datastructure (includes images) in an human readable form like YAML


## Plugin System

### Spiders
- parse content properly
- pass page content to internal bookmark creation (image, title, description)
- define template for bookmark (image, video, plain_link, custom)

## Templates:
  - Images
  - Video
  - Plain Link
  - custom templates addable

## API Endpoints

- [GET/POST/PUT/DELETE] /bookmarks/(:uuid)

- [GET/PUT] /user/(:uuid)

- [POST] /search


## Examples

### Bookmark (First Draft)

```json
{
    "bookmark": {
        "uuid": "6dc37800-f13e-11e3-ac10-0800200c9a66",
        "title": "Ameowadeus",
        "description": "no dog, much fun",
        "note": "so cat video",
        "url": "http://youtube.com/cat_video",
        "type": "video",
        "video_url": "http://embedded.youtube.com/cat_video",
        "thumb_url": "http//my_awesome_domain.com/image.png",
        "tags": [
            "awesome",
            "yeah",
            "cat",
            "video",
            "kevin_spacey_rocks_it_again"
        ],
        "public": true,
        "created_at": 20120919,
        "updated_at": 20120919
    },
    "user": {
        "username": "TimKaechele",
        "gravatar": "super_complexmd5hash",
        "created_at": 20120919,
        "updated_at": 20120919
    }
}
```
