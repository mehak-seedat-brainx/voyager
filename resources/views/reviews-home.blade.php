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
                <div id="im_1">
                    <div class="slide-img">
                        <img src="{{asset('img/home-icon/reviewerimage/peter.webp')}}" class="img-circle">
                    </div>
                    <p> “BrainX Technology has been instrumental in delivering quality mobile SDKs in a very short time frame. Their team is responsive at all hours of the day- willing to address new issues and bugs almost instantly. Along with engineering, they have their own testing, design, and QA which makes BrainX a product manager's dream.”
                    </p>
                    <span>Peter Johnson</span><br>
                    <span>Product Manager, Kustomer</span>
                </div>
                <div id="im_2">
                    <div class="slide-img">
                        <img src="{{asset('img/home-icon/reviewerimage/Gail (Umergency) .jpg')}}" class="img-circle">
                    </div>
                    <p>
                        “BrainX performed exceptionally well. Our project was bogged down due to another agent and they continually stepped up to do their part well and on-time, even supporting the other parts of the development that was not part of their contract. We would absolutely hire them again.”
                    </p>
                    <span>Gail Schenbaum</span><br>
                    <span>CEO Umergency App</span>
                </div>
                <div id="im_3">
                    <div class="slide-img">
                        <img src="{{asset('img/home-icon/reviewerimage/Fredy.png')}}" class="img-circle">
                    </div>
                    <p>
                        “BrainX is Excellent to work with. Always on time, keeps communication to make sure everything is
                        done correctly the first time. It has been an excellent opportunity to work with BrainX.”
                    </p>
                    <span>Fredy Edison</span><br>
                    <span>CEO Drive Mouse</span>
                </div>
                <div id="im_4">
                    <div class="slide-img">
                        <img src="{{asset('img/home-icon/reviewerimage/Keith.jpg')}}" class="img-circle">
                    </div>
                    <p>
                        “The team at BrainX are top-notch professionals. They are highly available, they communicate well, and have technical competency across a variety of disciplines. We will continue to work with BrainX. ”
                    </p>
                    <span>Keith R. Thode</span><br>
                    <span>CEO & Chief Scientist, AdvanceNet Labs</span>
                </div>
            </div>
            <div class="testimonial-next-prev">
                <a   class="prev fa fa-angle-left" id="previous"></a>
                <a  class="prev fa fa-angle-right next" id="next"></a>
            </div>
        </div>
        <div class="count-div">
            <span id="slide-num"></span> / 4
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

        $('#im_2').hide();
        $('#im_3').hide();
        $('#im_4').hide();
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
        var totalImages = 4;

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