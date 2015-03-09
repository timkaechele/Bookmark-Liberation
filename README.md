# Bookmark Liberation

## Draft

### General Ideas

Bookmark Liberation should be a bookmarking service that is suitable for the average
casual user as much as for the power user who just wants a fast and open
alternative to existing services. The whole system should be as open as possible.

### Pricing

The whole system will be free (as in beer and freedom) open source software,
but to support further development we may include an optional Gittip.

### Features


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

### Design

- clean and unobtrusive
- snappy user experience on mobile devices (no imitation of iOS or Android)

### Frontend

- Responsive

### Backend

- Kirby Toolkit
- Sqlite/MySQL
- speed and efficiency as goals

### Exporters

Your data belongs to you and by following this approach we will support a
variety of exporters. You should not be locked inside one system.

#### Possible Exporters

- Bookmark List
- JSON
- Complete Datastructure (including images) in an human readable form like YAML

### Plugin System

#### Spiders

- parse content properly
- pass page content to internal bookmark creation (image, title, description)
- define template for bookmark (image, video, plain_link, custom)

### Types/Templates

Every Bookmark can has its own type. The type of the bookmark dictates its
presentation. By doing so the Bookmark Liberation is useable by power users that don't
want a visual bookmarking service, but an open source alternative to share
and archive links easily.

- Image
- Video
- Link

## Custom Importers

Similar to GimmeBar it will be possible to backup social media streams like
Instagram or Twitter. These custom importers are not part of the core
experience of the Bookmark Liberation but are addable as a plugin.

## API Endpoints

- [GET/POST/PUT/DELETE] /bookmarks/(:uuid)?search_query=(…)
- [GET/PUT] /user/(:uuid)
- [GET] /tags/(:uuid)

### Examples

#### Bookmark (First Draft)

```json
{
  "bookmark": {
    "uuid": "6dc37800-f13e-11e3-ac10-0800200c9a66",
    "title": "Ameowadeus",
    "description": "no dog, much fun",
    "note": "so cat video",
    "url": "http://youtube.com/cat_video",
    "type": "video",
    "thumb_url": "http//my_awesome_domain.com/image.png",
    "image_url": "http//my_awesome_domain.com/full_size_image.png",
    "video_url": "http://embedded.youtube.com/cat_video",
    "tags": [
      "awesome",
      "yeah",
      "cat",
      "video",
      "kevin_spacey_rocks_it_again"
    ],
    "custom": {
      "my_custom_key": "custom value"
    },
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
