<html>
<head>
<!-- Shaka Player compiled library: -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.3.4/shaka-player.compiled.js"></script>
</head>
<body>
<video
id="video"
width="640"
controls
autoplay
></video>
</body>
<script>
// Video Manifest URL
const manifestUri =
"https://plus.vmttv.pw/keo/mykplus/ksport1hd/manifest.mpd";
player.configure({
DRM: { "keys":[ { "kty":"oct", "k":"84Qye+8YlhUSRig/jgbwFQ", "kid":"9tNiDgIKTEisfZzfqpaMWg" },{ "kty":"oct", "k":"wj2qE21/4NYsALUuGROU7Q", "kid":"PhdiDgIKTEisfZzfqpaMWg" },{ "kty":"oct", "k":"KHBpWVPpuaPU/lXtuc/S0A", "kid":"NyimV1EKTEisfZzfqpaMWg" } ], "type":"temporary" }


// Install all the required Polyfill
shaka.polyfill.installAll();
if (shaka.Player.isBrowserSupported()){
throw new Error("Browser not supported !")
};
const video = document.getElementById("video");
//Shaka Player Reference provides all methods and properties.
const player = new shaka.Player(video);
player.addEventListener("error", onErrorEvent);
player
.load(manifestUri)
.then(() => console.log("Video Load successful"))
.catch((error) =>
console.error("Error code", error.code, "object", error)
);
</script>
</html>
