<div class="review">
    <div class="col-md-12 review-main">
        <div class="review-top-heading">
            <h4>WHAT OUR CLIENTS HAVE TO SAY</h4>
        </div>
        <div class="line-bar">
            <hr>
        </div>
        <div class="slide-div">
            <div class="slide-content">
                <?php
                $count = 1;
                ?>
                <script>var totalImages = 0;</script>
                @foreach($reviews as $review)
                    <div id="{{"im_".(string)$count}}" style="display: none;">
                        <div class="slide-img">
                            <img src="{{asset('img/home-icon/reviewerimage/'.$review['photo'])}}" class="img-circle">
                        </div>
                        <p> “{{$review['review']}}”
                        </p>
                        <span>{{$review['reviewer']}}</span><br>
                        <span>{{$review['designation']}}</span>
                        <?php
                        $count++;
                        ?>
                        <script>totalImages++;</script>
                    </div>
                @endforeach

            </div>
            <div class="testimonial-next-prev">
                <a   class="prev fa fa-angle-left" id="previous"></a>
                <a  class="prev fa fa-angle-right next" id="next"></a>
            </div>
        </div>
        <div class="count-div">
            <span id="slide-num"></span> <?php echo '/'.(string)($count-1) ?>
            <div class="testimonial-next-prev2">
                <a  class="prev2 fa fa-angle-left" id="left-arrow2"></a>
                <a  class="prev2 fa fa-angle-right next2" id="right-arrow2"></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var timer=0;

        $('#im_1').show();

        var int = setInterval(nextImage, 5000);

        $("#slide-num").text("1");
        $('#previous').on('click', function(){
            // Change to the previous image
            clearInterval(int);
            int = setInterval(nextImage, 5000);
            $('#im_' + currentImage).stop(false,true).hide();
            decreaseImage();
            $('#im_' + currentImage).stop(false,true).show("slide", { direction: "right" }, 500);
        });
        $('#next').on('click', function(){
            // Change to the next image
            clearInterval(int);
            int = setInterval(nextImage, 5000);
            nextImage();
        });
        function nextImage() {
            $('#im_' + currentImage).stop(false,true).hide();
            increaseImage();
            $('#im_' + currentImage).stop(false,true).show("slide", { direction: "right" }, 500);
        }
        var currentImage = 1;

        function increaseImage() {
            /* Increase currentImage by 1.
            * Resets to 1 if larger than totalImages
            */
            ++currentImage;

            if(currentImage > totalImages) {
                currentImage = 1;

            }
            $("#slide-num").text(currentImage);

        }
        function decreaseImage() {
            /* Decrease currentImage by 1.
            * Resets to totalImages if smaller than 1
            */
            --currentImage;
            if(currentImage < 1) {
                currentImage = totalImages;
            }
            $("#slide-num").text(currentImage);

        }
    });
</script>