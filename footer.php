<!-- ***** Footer Area Start ***** -->
<footer class="footer-area clearfix">
    <!-- Top Fotter Area -->
    <div class="top-footer-area section_padding_100_0">
        <div class="container">
            <div class="row">
                <div class="col-4 col-sm-4 col-lg-4">
                    <div class="single-footer-widget mb-100">
                        <a href="#" class="mb-50 d-block"><img src="img/core-img/iucbk2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-4">
                    <div class="single-footer-widget mb-100" style="text-align:left;">
                        <h5>İLETİŞİM</h5>
                        <div class="footer-single-contact-info d-flex">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker" aria-hidden="true" style="color:blue;style=" font-size:30px;"></i>
                            </div>
                            <p>Adres: İstanbul Üniversitesi-Cerrahpaşa <br> Avcılar Kampüsü No:2, 34320 Avcılar/İstanbul
                            </p>
                        </div>

                        <div class="footer-single-contact-info d-flex" style="margin-top:3rem;">
                            <div class="contact-icon">
                                <img src="img/core-img/message.png" alt="">
                            </div>
                            <a title="" href="mailto:iubkorg@gmail.com" target=" _blank" style="color :gainsboro;">iubkorg@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-2 col-lg-2"></div>

                <div class="col-2 col-sm-2 col-lg-2" style="margin-top:3rem; ">
                    <div class="single-footer-widget mb-100">
                        <div class="footer-single-contact-info d-flex">
                            <div class="contact-icon">
                                <a href="https://www.linkedin.com/company/i%CC%87%C3%BCc-bilgisayar-kul%C3%BCb%C3%BC/?trk=public_profile_volunteering_position_result-card_full-click&originalSubdomain=tr"><i
                                            class="fa fa-linkedin" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;/iucbk</a>
                            </div>
                        </div>
                        <div class="footer-single-contact-info d-flex">
                            <div class="contact-icon">
                                <a href="https://www.instagram.com/iucbk/?hl=tr"><i class="fa fa-instagram"
                                                                                    aria-hidden="true"></i>&emsp;/iucbk</a>
                            </div>
                        </div>
                        <div class="footer-single-contact-info d-flex">
                            <div class="contact-icon">
                                <a href="https://twitter.com/iucbk"><i class="fa fa-twitter" aria-hidden="true"></i>&emsp;/iucbk</a>
                            </div>
                        </div>
                        <div class="footer-single-contact-info d-flex">
                            <div class="contact-icon">
                                <a href="https://www.facebook.com/iucbk/"><i class="fa fa-facebook"
                                                                             aria-hidden="true"></i>&emsp;&nbsp;/iucbk</a>
                            </div>
                        </div>
                        <div class="footer-single-contact-info d-flex">
                            <div class="contact-icon">
                                <a href="https://github.com/iucbk"><i class="fa fa-github" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;/iucbk</a>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Fotter Bottom Area -->

</footer>
<!-- ***** Footer Area End ***** -->

<!-- jQuery-2.2.4 js -->
<script src="js/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

<script src="https://cdn.rawgit.com/nizarmah/calendar-javascript-lib/master/calendarorganizer.min.js"></script>
<script> // Basic config
    var calendar = new Calendar("calendarContainer", "medium",
        ["Monday", 3],
        ["#ffc107", "#ffa000", "#ffffff", "#ffecb3"],
        {
            days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            months: ["January", "Feburary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            indicator: true,
            placeholder: "<span>Custom Placeholder</span>"
        });

    var data = {
        2020: {
            3: {
                25: [
                    {
                        startTime: "00:00",
                        endTime: "12:00",
                        text: "BilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfest"
                    },
                    {
                        startTime: "12:00",
                        endTime: "24:00",
                        text: "BilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfest"
                    }
                ]
            }
        }
    };
    console.log(data)
    var organizer = new Organizer("organizerContainer", calendar, data);
    organizer.setOnClickListener('days-blocks',
        // Called when a day block is clicked
        function () {
           document.getElementById("organizerContainer").style.display = "block";


        }
    );
</script>
<style>
    .cjslib-month{
        width: 100% !important;
    }
    .cjslib-year{
        width: 100% !important;
    }
</style>
</body>

</html>