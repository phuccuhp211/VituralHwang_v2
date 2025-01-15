ffmpeg -i TheSlum.mov -preset veryfast -g 48 -sc_threshold 0 -hls_time 1 -hls_playlist_type vod -hls_flags independent_segments -hls_segment_type mpegts -f hls output.m3u8

ffmpeg -i input.jpg -q:v 75 output.webp
for file in *.jpg; do ffmpeg -i "$file" -q:v 75 "${file%}.webp"; done (bash)


