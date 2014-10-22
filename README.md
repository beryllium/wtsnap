wtsnap
======

A web interface and API for rehosting images. Similar to imgur, but allowing for self-hosting.

[![Build Status](https://travis-ci.org/beryllium/wtsnap.svg?branch=master)](https://travis-ci.org/beryllium/wtsnap)

The project is still in its infancy, and doesn't actually do anything whatsoever at the moment.

Overview
---

The plan is to get this basic functionality implemented first:

* Web form that posts to Snaps endpoint
* Snaps POST endpoint 
    * Retrieves & stores images
    * Basic error checking to try and eliminate corrupted/dangerous files & invalid formats
    * Returns a clean destination URL
* Snaps GET endpoint for displaying stored images (the clean destination URL)

After that groundwork is in place, then the fancy stuff can be considered:

* Thumbnails & multiple size options
* Optimizations (e.g., a message queue)
* Converting/transcoding image formats
* GIFV support
* Support for non-image formats

Contributing
---

Interested in using this project? 

Know of a killer feature you want it to have? 

**Let me know!** Your feedback will help me gauge interest and focus on delivering a useful system.

Contact me on [Twitter](https://twitter.com/beryllium9) or use the issue tracker for feedback.

---  
Kevin Boyd  
[http://whateverthing.com](http://whateverthing.com)
