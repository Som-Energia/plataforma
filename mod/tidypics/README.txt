Tidypics plugin for Elgg 1.8
Latest Version: 1.8.6
Released: 2015-01-31
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (c) iionly 2013-2015, (C) Cash Costello 2011-2015


The photo gallery plugin for Elgg 1.8 (requires Elgg 1.8.16 at minimum! Please upgrade your Elgg installation first before installing/upgrading the Tidypics plugin).

Features:

 - Photos organized in albums or group albums,
 - Commenting on photos and albums,
 - Tagging (members or word tags),
 - Slideshow,
 - Watermarking,
 - Upload multiple photos at once (HTML5/HTML4 uploader or web form),
 - Sorting photos in albums,
 - RSS feeds,
 - Notifications on new uploads,
 - Activity (river) integration,
 - Views counter,
 - Exif data support,
 - Userpoints support (requires Elggx Userpoints plugin),
 - Various listing options (All/Mine/Friends photos, All/Mine/Friends albums, listing photos sorted by number/date of views, number/date of comments, number/date/average of ratings),
 - Admin Customization: supports GD, Imagick and ImageMagick, quotas, size restrictions, and more.



Todo:

- Get watermarking fully working (original uploaded image file gets not yet watermarked but only the resized image files),
- Add option to remove the original uploaded image after resized thumbnail images have been created,
- Replace PiclensLite slideshow with Galleria slideshow (no flash required, responsive).



Installation and configuration:

IMPORTANT: If you have a previous version of the tidypics plugin installed, first disable the Tidypics plugin on your site, then remove the tidypics folder from the mod folder on your server before installing the new version!
1. Copy the tidypics plugin folder into the mod folder on your server,
2. Enable the plugin in the admin section of your site,
3. Check if there's an "Upgrade" button visible on the Tidypics plugin settings page and if yes, FIRST make a DATABASE BACKUP and then execute the upgrade.
4. Configure the plugin settings.



Changelog:

Changes for release 1.8.6 (by iionly):
- UI-improvements on thumbnails re-creation page (progress bar),
- Fine-tuning of sidebar entries with addition of "Latest comments" and "Tagcloud" blocks where appropriate.


Changes for release 1.8.5 (by iionly):
- Fixed an error in 2013121301.php upgrade script on handling of ElggBatches that could have resulted in the upgrade getting stuck (script in new version is now 2013121401.php),
- Do not show "Upgrade" button on a new install of Tidypics,
- Added script for re-sizing all image thumbnails after changing thumbnail size settings (available on Thumbnail Creation tab on Tidypics plugin settings page). NOTICE: when changing the default thumbnail sized it's very likely that you need to make adjustments in Tidypics' CSS (that's for YOU to do),
- Corrections in group access check to prevent full view display of group albums and group images in hidden group to non-members of the group,
- Added "Upload photos" link to "Latest group photos" widget on group profile pages (without and with Widget Manager plugin in use),
- Display of filter tabs (no tab selected) and owner block when viewing the images of another user (i.e. made the siteimagesowner page to behave like pages of other type of content),
- Display the categories selected for a photo in its full view output,
- Image file extension "jpeg" added to list of allowed extension for html5 uploader,
- Allow tagging of all site members (including yourself) on an image,
- Prevent the photo to be opened in the lightbox popup while adding a tag,
- Added plugin setting to allow for restricting tagging of a photo to the owner of the photo (and admins) only,
- Change in tag labels for a better indication of difference between word-tags ("Tag(s): bla") and member tags ("Member: Mr. X (tagged by Mr. Y)"),
- Fixes in page views (siteimagesowner, siteimagesgroup, tagged) in case of missing guid on input or viewer is logged out,
- Added missing CSS classes for tagging borders again that were mistakenly removed in release 1.8.1beta14,
- French translations added (thanks to Facyla).


Changes for release 1.8.4 (by iionly):
- "No-Flash required" fallback for slideshow.


Changes for release 1.8.3 (by iionly):
- "Upload photos" / "Upload photos to this album" buttons hidden within group context for non-group members,
- "Upload photos" link removed from groups images profile module / widget (failed to work correctly, i.e. not open in a lightbox popup as desired),
- "Create album" link removed from groups images profile module / widget for for non-members of groups,
- Disable unintended text shadow within html5 uploader at least in some cases if this text styling has been enabled by other plugins and unwantedly inherited by plupload (can't prevent text shadow in all circumstances as a theme plugin might override Tidypics' CSS).


Changes for release 1.8.2 (by iionly):
- No longer beta! Apart from the things mentioned in the ToDo section everything should work. If not, please tell me.
- Rework of river activity settings (check the settings and make adjustments if necessary):
  * new option to set preview image size for all kind of Tidypics' river entries,
  * click on preview image in river now opens full size version of the image in a lightbox popup.


Changes for release 1.8.1beta16 (by iionly):

- Fix in latest upgrade script that might resulted in not all database entries having been updated successfully (new "Upgrade" run necessary to complete),
- Fix for HTML5 uploader to correctly disable/enable the "Add files" button if the maximum number of allowed photos (or more) had been selected for upload,
- Using ElggBatch for image deletion when deleting an album (and its possibly numberous images) to avoid memory issues.


Changes for release 1.8.1beta15 (by iionly):

- Fix of limitation to 10 images to be uploaded in one batch when using Plupload HTML5/HTML4 uploader.


Changes for release 1.8.1beta14 (by iionly, YaNoo and Joaquín):

- Uploadify flash uploader replaced by Plupload HTML5/HTML4 uploader (thanks to YaNoo for taking the initiative and providing a PR - otherwise you would have had to wait longer for me to implement it),
- Spanish language file added (provided by Joaquín).


Changes for release 1.8.1beta13 (by iionly and Juho Jaakkola):

ATTENTION: this new release contains an update script that changes database entries related to comments and likes made on Tidypics image upload river entries. Read the changelog carefully BEFORE running the upgrade to understand what it does and in any case make a database backup before executing the upgrade to be able to revert to the former state if you are not content with the result. The backup is also important because the script might possibly take some time to finish depending on how many database entries are in need to be updated.

- Code cleanup,
- Flash uploader: limit number of images that can be added in one go to 10,
- Fix on friends tab pages of "All Photos" and "All photo albums" to check if user has friends and display a fitting message if not instead of saying the friends would not have uploaded image yet (which shows when the user has friends but they have not yet uploaded images),
- Removed plugin setting to turn commenting on albums on/off. Commenting on albums is now always on,
- Commenting on image uploads on the Activity page (commenting on Tidypics_batch entities): when commenting on an upload of a single image the comment will be added to this image and when commenting on an upload of more than a single image the comment will be added to the corresponding album (in both cases the comment made will still be shown also on the activity page below this river entry),
- the same with liking image uploads entries on the Activity page: if a single image was uploaded this image will get the like and if more than a single image was uploaded the corresponding album will get the like (in both cases the like will also be shown on the activity page in the river menu of this entry),
- IMPORTANT!!!!!! Please read: upgrade script to assign existing comments and likes made on image upload river entries either to the corresponding image or album. This script makes the existing comments and likes consistent with the future comments and likes created on Tidypics 1.8.1beta13. The update script (mod/tidypics/upgrades/2013121201.php) does the folling:
		1. upgrading of comments on river entries that were made with Tidypics 1.8.0rc1 or earlier,
		2. slightly different procedure for upgrading comments on river entries made with a Tidypics 1.8.1betaXX version: for these comments a second database entry was created for the comment to show not only on the activity page but also on the albums' pages. The upgrade script identifies these second comment entries by the lack of corresponding river entries in the database and then deletes these entries. If you have by any means deleted entries on the activity page informing about comments made on album pages or if you prevent such entries to be created on your site somehow then these comments will also get deleted. Unfortunately, there's no other way of getting rid of the duplicate comments entries that are now no longer needed. If in doubt, comment out "Part 3" of the upgrade code in mod/tidypics/upgrades/2013121201.php.
		3. upgrading of likes on river entries: here's a check included if a user has already liked the album or image the like made to the river entry would get moved to. If there's not already an existing like the like will get moved from the river entry and added to the album/image. If the user has already liked the image or corresponding album the like will not get added to avoid duplicate likings.


Changes for release 1.8.1beta12 (by iionly):

- Added placeholder images to be displayed in case no images have been uploaded to an album yet in the image sizes previously missing,
- On deletion of an album the corresponding album folder in data directory gets deleted and no longer the (empty) album folder remains,
- Flash uploader fixed in the case of group albums when someone else than the album creator wants to upload images to a group album,
- Navigation arrows hidden if an album contains only a single image,
- Correction of title of group pages "Most recent albums" widget,
- "View all" link in Latest Photos widget on profile pages working for site visitors not logged in,
- Fixed list of offered existing albums to select from for image uploads when in group context,
- Fixed display of image and album gallery pages when images or albums exist that belong to groups with restricted access (The images or albums shown in the gallery pages depend on the viewing user having the necessary right for viewing depending on the access level defined for these albums including the images within these albums. For example a user gets to see all albums with "public" access level regardless if logged in or not. But if you set the access level "public" or "logged in" for a group album this results in even a non-group member being able to get access to such albums and their content. But if the group itself is a restricted group certain problems arise when this group contains "public" or "logged-in" content. In case of the gallery views within Tidypics the outcome is a fatal error occuring on these pages. This fix avoids the fatal error from happening. Still the group images and albums of restricted albums are included in the listings due to the access level set for them. If you don't want any albums or images of restricted groups to be seen by non-group-members you must set the access level of these albums to the corresponding group's level).


Changes for release 1.8.1beta11 (by iionly):
- Some general code cleanup,
- Fix of river entries appearing twice on image uploads in case the Flash uploader is used and the plugin option is set to create separate entries for each uploaded image (issue introduced in beta10),
- Added TidypicsBatch class (that extends ElggObject class) used for creation of objects of subtype "tidypics_batch" (used for handling "batches" of uploaded images) instead of creation the objects as ElggObject and assinging the subtype,
- Improvements on slideshow:
  * a slideshow can be started on all pages that display a suitable list of images (but the slideshow feature is only available if the slideshow plugin option introduced in beta10 is enabled in the plugin settings),
  * start of slideshow via title menu button,
  * slideshow will include the next 64 images (i.e. 5 pages of images) of the current displayed image list taking into account the current page offset (i.e. on page 1 the slideshow will display pages 1-5 while on page 10 it will display the images of pages 10-14 etc.). (Longtime goal for future Tidypics versions: no limitation of number of images in slideshow and most likely replacing the PicLensLite slideshow by something else / something better. Currently, the number of images to be included in a slideshow is somewhat limited by avoiding running into memory issues. Also, the PicLensLite slideshow library requires the Flash plugin on client browsers which is annoying and the 3D wall feature does no longer work),
- Improvements on image orientation correction at image uploading:
  * using best methods available depending on image library selected,
  * update orientation information saved in image file after a change of image orientation if the image library used supports this (GD library unfortunately does not support it but the exif info saved in the image file is lost on image orientation correction anyway),
  * support of orientation correction not only of rotated but also of mirrowed (and possibly additionally rotated) images,
  * some remarks regarding which image library to use for Tidypics:
    - if possible and available on your server use the "ImageMagick executable". Generally, this library has a much smaller memory requirement compared to the GD library both for image resizing (i.e. creation of thumbnail preview images) and orientation correction of images. Additionally, the exif information saved in an image file will be preserved both during resizing and orientation correction processing,
    - next best choice after "ImageMagick executable" is the "imagick PHP extension". It also has a low memory consumption compared to the GD library but you might lose exif information during image processing,
    - the GD library should be available on any server (as Elgg core requires it anyway). The memory requirement of the GD library can be quite high both for creation of thumbnails and image orientation corrections. The memory requirement is depending not on the image file size in the first place but on image resolution, color depth per pixel and color channels per pixel (so even a small sized image file might require more memory than available on the server). If you use the GD library for Tidypics on your server, your users might not be able to upload larger images. Additionaly, exif information saved in the image files might get lost during image orientation correction.


Changes for release 1.8.1beta10 (by iionly):
- Some preparations for compatibility with Elgg 1.9 (though I will release a separate version of Tidypics for Elgg 1.9!),
- Replacement of a deprecated function,
- Small improvement in Flash uploader error handling,
- New plugin option: use of slideshow optional,
- Fixed check of memory requirement for image re-sizing on upload when using GD php extension,
- Slightly better catching of missing images / thumbnail situations,
- Improved image orientation correction on image upload. When using GD library it will only be done when memory requirement is fullfilled. Additionally, Imagick php extension or ImageMagick library is used when defined as image library in Tidypics plugin settings,
- New tab on Tidypics plugin settings: image deletion by providing GUID of image (in case the image entry can't be deleted via site front-end),
- Includes the following changes in Tidypics from official Tidypics repo at https://github.com/cash/Tidypics:
  * correction of text in notifications about image uploads in case the uploader is not the owner of the album (by Jerome Bakker).


Changes for release 1.8.1beta9 (by iionly):
- Fixed php syntax error introduced in beta8 preventing group profile pages to be rendered (thanks to Pasley70 for reporting).


Changes for release 1.8.1beta8 (by iionly):
- Requires Elgg 1.8.16 due to bugfix https://github.com/Elgg/Elgg/issues/5564 for the pagination on list pages to work,
- Pagination support for the list pages (like "Most views" / "Recently commented" etc.) to show more than only a hardcoded number of photos in each list view,
- List pages (like "Most views" / "Recently commented" etc.) to work correctly when logged out and to show only photos that the viewer is allowed to see based on access level settings,
- "All", "Friends", "Mine" tabs hidden on "All photos" page when logged-out,
- "Upload photos" button hidden when logged-out,
- "Photos you are tagged in" sidebar entry hidden when logged-out,
- "Tag" entity menu entry hidden when logged out,
- "Photos you are tagged in" page revised,
- List of members tagged in a image in sidebar when viewing an image (by including a code snippet of the Tagged People plugin by Kevin Jardine),
- Fix in image and album save actions for deleting all image/album tags to work (referring to the usual Elgg Entity tags),
- Improvements in handling Tidypics user and word tags of images (including CSS improvements) to play well together with the image entity tags (avoiding double tags to be added, removal of corresponding image entity tags when an Tidypics image word tag is removed),
- River entry on adding word tags to an image,
- Includes the following changes in Tidypics from official Tidypics repo at https://github.com/cash/Tidypics:
  * made the albums notifications overridable rather than calling object_notifications() directly (by Cash Costello),
  * fixed: security issue with showing malicious exif data (by Jerome Bakker).


Changes for release 1.8.1beta7 (by iionly):
- auto-correction of image orientation on image upload (thanks to Jimmy Coder for the code snippet for image rotation),
- word tags (as opposed to tagging a user): tags that don't correspond with a username will be added to the tags of the photo (searchable),
- Includes the following changes in Tidypics from official Tidypics repo at https://github.com/cash/Tidypics:
  * set tiny size for sites that may not have it set (e.g. possibly sites updated from Elgg 1.6) (by Cash Costello),
  * stripping non word characters from title when pulled from image filename (by Cash Costello),
  * added tagging to river with notification to user (by Cash Costello, Kevin Jardine).


Changes for release 1.8.1beta6 (by iionly):
- Fix for Tidypics to work in Elgg 1.8.15 (creating new albums),
- Updated uploadify flash uploader to version 3.2 (this might only be a preliminary solution as I might need to switch to another flash (html5) uploader as the Uploadify uploader has some limitations and also seems no longer fully supported),
- Fixed some deprecated function calls (they were not in actively used code but some people might have wondered about it nonetheless as the Code Analyzer plugin gave some warnings about them),
- Fixed html code in widgets' content.php for better theme compatibility (as suggested by ura soul).


Changes for release 1.8.1beta5 (by iionly):
- Fix in river entry creation (hopefully last fix necessary for now...).


Changes for release 1.8.1beta4 (by iionly):
- River entries code reworked (solution introduced in beta3 did not work as intended),
- Option to include preview images in river entries when comments were made on albums and images,
- Fix a few errors in language files (en and de),
- Permission handling of tidypics_batches: on permission change of an album the permissions of corresponding tidypics_batches are changed to same new permission.


Changes for release 1.8.1beta3 (by iionly):
- River entries fixed (note: commenting on existing "batch" river entries does not work. It will only work for river entries created after upgrading to 1.8.1beta3!)


Changes for release 1.8.1beta2 (by iionly):
- Fixed quota support,
- Fixed issue with image entries (without images available) getting created on failed image uploads,
- Fixed an issue introduced in beta1 that resulted in (harmless but many) log entries getting created,
- Fixed Highest vote counts page,
- Display of Elggx Fivestar rating widget defined via Elggx Fivestar default view (requires version 1.8.3 of Elggx Fivestar plugin).


Changes for release 1.8.1beta1 (by iionly):
- removal of option to set access level for images. Images always get the same access level as the album they are uploaded to. On changing the access level of an album all its images get assigned the same access level, too.
- new plugin navigation / pages: more centered on (recent) images than albums,
- support of Widget Manager index page and groups' pages widgets,
- Elggx Fivestar voting widget included on detailed image views,
- some code-cleanup.


Changes since 1.8.0 Release Candidate 1:
- Pull requests made on github included. These PR were made by
   * Cash Costello
   * Brett Profitt
   * Kevin Kardine
   * Sem (sembrestels)
   * Steve Clay
   * Luciano Lima
