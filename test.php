<!DOCTYPE html>
<html>
  <body>
    <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player"></div>
    <div id="test"></div>
    <blockquote class="imgur-embed-pub" lang="en" data-id="3r6VWld"><a href="https://imgur.com/3r6VWld">View post on imgur.com</a></blockquote>
    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      function youtube_parser(url){
            var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
            var match = url.match(regExp);
            
            return (match&&match[7].length==11)? match[7] : false;
      }

      function imgur_parser(url){
        var regExp = /(http:|https:)?\/\/(www\.)?(imgur.com)?\/?(a\S+)?(\S+)?/;
            var match = url.match(regExp);
            document.getElementById("test").innerHTML += '<div><img src="'+match+'"><div>'
            return match[5];
      }

      console.log(imgur_parser("https://imgur.com/3r6VWld.jpg"));

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        var id = youtube_parser("https://www.youtube.com/watch?v=QeEzgAC1uY4");
        player = new YT.Player('player', {
          height: 300,
          width: "100%",
          videoId: id,
          events: {
            'onReady': onPlayerReady
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {

      }


      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
    <script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
  </body>
</html>