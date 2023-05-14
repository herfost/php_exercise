<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="<? echo $image_src1; ?>">>
  <img class="w-full" src="<? echo $image_src2; ?>">>
  <img class="w-full" src="<? echo $image_src3; ?>">>
  <img class="w-full" src="<? echo $image_src4; ?>">>
  <img class="w-full" src="<? echo $image_src5; ?>">>
  <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden" style="padding-top: 56.25%">
    <iframe class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"
      src="<? echo $video_src1; ?>" allowfullscreen="" data-gtm-yt-inspected-2340190_699="true"></iframe>
  </div>
  <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden" style="padding-top: 56.25%">
    <iframe class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"
      src="<? echo $video_src2; ?>" allowfullscreen="" data-gtm-yt-inspected-2340190_699="true"></iframe>
  </div>

  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">
      <? echo $luogo; ?>
    </div>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
      <? echo $latitudine; ?>
    </span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
      <? echo $logitudine; ?>
    </span>
  </div>
</div>