$dirname = "images/";
$images = glob($dirname);
$ignore = Array(".", "..");
    foreach($images as $curimg){
    if(!in_array($curimg, $ignore)) {
    echo "<img src='images/$curimg' /><br>\n";
}
}


<div class="gallery">
    <img src="https://31.media.tumblr.com/tumblr_loumsfBCuE1qeo682o1_500.jpg">
    <img src="https://24.media.tumblr.com/tumblr_m1yru9PNMV1qeo682o1_500.jpg">
    <img src="https://24.media.tumblr.com/tumblr_m24ic6kY6Q1qeo682o1_500.jpg">
    <img src="https://31.media.tumblr.com/tumblr_lriz0lDN2y1qeo682o1_500.jpg">
    <img src="https://24.media.tumblr.com/tumblr_lrmgjaL62O1qeo682o1_500.jpg">
    <img src="https://24.media.tumblr.com/tumblr_lqtwuiEf8j1qeo682o1_r1_500.jpg">
    <img src="https://31.media.tumblr.com/tumblr_lqsdws3ihB1qeo682o1_500.jpg">
    <img src="https://31.media.tumblr.com/tumblr_lqscbwxUt51qeo682o1_500.jpg">
    <img src="https://31.media.tumblr.com/tumblr_lq6hl0PhyN1qeo682o1_500.jpg">
    <img src="https://24.media.tumblr.com/tumblr_lo6iddvEi51qeo682o1_500.jpg">
</div>