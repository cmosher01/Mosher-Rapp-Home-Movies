---
layout: default
permalink: /restore
---

# History

The films were originally shot 1967 to 1978, by Barry, Linda, and Jim.
They are on Super 8mm film, at 18 frames per second, color, and silent.
As far as we can remember, there were two different cameras, both
Kodak Instamatic movie cameras. The first was the M2, which was used for
the earliest few movies. Then probably around 1970 or so, we must have
bought the M26. Maybe the old one broke.

We (Chris, Nancy, Casey, Jim, and Linda) used to watch the movies, with
our movie projector and screen, quite often as kids. The projector had
a storage compartment in the bottom where we kept some of the films,
and others we kept in a box. As far as I can determine, there were a total
of thirty films (possibly more, but if so then not many more). Some of
the reels were labeled, and some of the reel covers were labeled. Most
had no labelling. Each film was about 3 minutes long.

Sometime around 1985 or 1986, Nancy took most of the films (28 of them)
and had them copied onto a VHS tape. For this process, she labeled the
films numbered from 1 to 28, but not in chronological order.

As time went on and the kids moved away, the films remained in the house.
At some point, the projector was given to Good Will. As far as I can figure,
probably some of the films were still in the storage compartment of
the projector, because as of today there are still 5 films missing.

# Digitization and Restoration

In 2005, I began to get interested in gathering all the films and archiving
them in some way. I decided that digitizing them and storing them on the
computer would be worthwhile. Mom (Linda) gave me all the films she could
find, and gave them to me. There were 25 films in all.

I also located the VHS tape that Nancy had made, and compared what was on
the tape to the films I had in-hand. There were 4 films on the tape that
I didn't have. (There was also one film I had that wasn't on the tape.)
That makes 29 total, and I can remember one scene (from watching as a kid)
that is not on either the VHS tape or in any surviving film, so that
makes 30 films in all:

* 1 film as yet unaccounted for (covering most of 1970)
* 25 surviving films
* 4 surviving on VHS tape only

# ForeverOnDVD.com

I sent the 25 surviving films to ForeverOnDVD.com for digitizing.
The process they use is essentially to take each frame of the film
and scan it into the computer. The process uses a dim light, so as
not to "blow-out" the colors. Also, I had them specially alter their
device so that it would scan in the whole original film frame, instead
of cropping it like most places do. You can even see some of the
sprocket holes in the scanned image, to make sure none of the original
frame was lost.

The image was standard NTSC resolution, with progressive frames. This
means that each original film frame becomes one 720 by 486 pixel image
on the computer. The standard film length for these 3-minute reels is
3600 frames. Some films had a bit more, some had fewer.

In the process, the original short films were spliced together into
3 large reels. There are now in my posession, and stored in good
archival film containers in the freezer (which is the recommended
way to preserve film reels).

# VHS

I also digitized the 4 films from the VHS tape for which the original
films have been lost. These films are from the following time periods:

* 1967-10
* 1968-09 to 1968-11
* 1968-11 to 1969-04
* 1969-04 to 1969-07

I used a normal VCR to play the tape through a Panasonic GS400 video camera,
which digitized the images into DV (digital video) format. From there
they were streamed directly to the computer. I captured them into
two AVI-format files, with the video 4CC format of "dvsd". After studying
these files, I realized that when the original tape was made (1985-6),
there was no synchronization between the film projector and the video
camera tying to capture the images. Since the video was interlaced screens
at 60 frames per second, and the film was running at 18 frames per second
[NEW DISCOVERY (2017) they actually played the film too fast when recording
it, somewhere around 19 frames per second], this lead to varying "combing" of the images
as odd rows from one frame were interlaced with even rows from the
next frame. Even individual fields contained "double exposures" of
two consecutive film frames; those fields would need to be removed
as much as possible. The pattern varied throughout the films.
I used the AviSynth program, and went through each film frame-by-frame
manually and matching each one with its corresponding frame to reconstruct
the original film frames. The process achived pretty good results, with
most frames being able to match up pretty well. Of course, the quality
is not as high as the digitization directly from film.

# Cleaning Up the Videos

Once all the films and VHS tape sections were digitized and put on the
computer, I was able to process the videos to clean them up. Using the
AviSynth program, along with various other free plug-ins, I was able to
correct some of the following things:

* Stabilize image jumpiness due to camera shake
* Correct two portions that ran at double speed
* Adjust colors, especially reduce blue tone of outside scenes
* Adjust contrast and saturation
* Various other minor clean up

The images are stretched horizontally, because each image is intended for
ultimlate display on a TV screen, which shrinks images horizontally.
So, for display on the computer, I needed to squeeze them horizontally
and remove 3 pixel rows from the top and bottom to achieve the
standard size of 640 by 480 pixels.

I added some captioning in the videos of key dates and places.

# YouTube

The final step was to compress the videos using the x264 codec. This
is a high-quality compressor that maintains a high-quality image that
is nearly identical to the original, but that is small enough to be
downloaded over a DSL or Cable internet connection while watching it.
This ability is what allowed YouTube to become famous. I uploaded
each video to YouTube. You can see the set of videos on my
[Films](films) page. Click on a video to take you to
a page that lets you play the video (embedded from YouTube), and
has a brief description of the scenes in the film.

Enjoy!

&mdash;Chris Mosher
