Spam Throttle

Set limits for the amount and type of content a user can create.

Dependencies:
reported_content

Installation:
Unzip to the mod directory.  Enable the plugin through tools administration.

Setup:
Link to settings will be on the administration menu.

The global limits cover all listed content types. For example, if a user creates 2 blog posts,
2 bookmarks, and 2 comments in 4 minutes, then they have exceeded a global limit of 5
creations in 5 minutes and will suffer the consequences. Set the global setting fairly
leniently, and use the specific content type limits to be more vigilant on certain types of
spam to reduce the number of false positives. Each site is different, and it will probably be
a trial-and-error approach to finding the right settings. Each time a user exceeds the limit they
will be reported to administrators via the reported_content plugin. Below you can set what happens
to a user that exceeds the set limits. If a setting is left blank or set to 0, then the limit will
default to the global setting (if that is set).

There are 4 potential consequences of a user breaking the limits.

    Nothing - The user is still able to log in and create content
    
    Suspend - The user can log in and view content with their normal permissions, but cannot
    		  create new content for a set amount of time.
    		  
    Ban - The user is banned from the site, cannot log in, cannot view non-public content, cannot
          create content
          
    Delete - The user account is deleted along with all of their content. Use with care as the
             deletion cannot be undone, and a false positive wouldn't be fun...