March 2006.
This DVD-ROM contains the recovery of the 4 missing films
from the VHS tape "MOSHER HOME MOVIES."

See vhs_description.txt for information about the VHS tape.

Original: Super 8mm film (18 frames per second, color, silent) shot in 1967-1969.
Put onto VHS tape, say 1985 or 1986. It appears that there was no synchronization
between the film projector and the video taping mechanism. For analysis of this
pattern, I wrote a python calculation program (see the sync_analysis directory).
Through trial and error adjusting the film rate in this program, I was able to
determine that the film was played at a rate that was faster than normal, just
above 19 frames per second.

Captured through Panasonic GS400 (DV format) into 2 computer AVI files (4cc: "dvsd"):
mosher_home_vhs_cap1.avi contains films A and B
mosher_home_vhs_cap2.avi contains films C and D

The basic patterns, to match fields up into original film frames, are:

    PCNPCNPCNPN   and
    PCNPCNPN

(in Telecide override format):
P = this frame's bottom field matches Previous frame's top field
C = this frame's two fields match (Current)
N = this frame's bottom field matches Next frame's top field

These patterns are repeated throughout, with some breaks, at varying
frequencies. The specific patterns for all 4 films are described in
the *.ovr files used by Telecide.

See the *.avs AviSynth scripts for more information about the restoration process.



The other films on the VHS tape were not restored, because the original films
were available instead (Reel1.avi, Reel2.avi, Reel3.avi from foreverondvd.com)



As a convenience, the 4 films are provided in an MPEG4 (Part 10) / H.264 format
AVI file, compressed using the x264 software. This is to provide easy viewing.
They can be viewed using ffdshow codecs on Windows. If any other use it be made
of the films, then the original captures should be used, not these compressed videos.
