<!-- ***** Footer Area Start ***** -->
<footer class="footer-area clearfix">
    <!-- Top Fotter Area -->
    <div class="top-footer-area section_padding_100_0">
        <div class="container">
                <div class="row">
                    <div class="col col-sm-6 col-lg-4">
                        <div class="single-footer-widget mb-100">
                            <a href="#" class="mb-50 d-block"><img src="img/core-img/iucbk2.png" alt=""></a>
                        </div>
                    </div>

                    <div class="single-footer-widget mb-100 col-4" style="text-align:left;">
                        <h5>İLETİŞİM</h5>
                        <div class="footer-single-contact-info d-flex ">
                            <div class="marker-icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <p class="address-text">Adres: İstanbul Üniversitesi-Cerrahpaşa <br> Avcılar Kampüsü 34320<br> Avcılar/İstanbul</p>
                        </div>

                        <div class="footer-single-contact-info d-flex text-center">
                            <div class="contact-icon">
                                <img src="img/core-img/message.png" alt="">
                            </div>
                            <a title="" href="mailto:iubkorg@gmail.com" target=" _blank" style="color :#FFFFFF;">iubkorg@gmail.com</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="social-icon ">
                            <a href="https://www.linkedin.com/company/iucbk"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="social-icon">
                            <a href="https://www.instagram.com/iucbk/?hl=tr"><i class="fa fa-instagram"
                                                                                aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="social-icon">
                            <a href="https://twitter.com/iucbk"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="social-icon">
                            <i><a href="https://www.facebook.com/iucbk/"><i class="fa fa-facebook"
                                                                            aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="social-icon">
                            <i><a href="https://github.com/iucbk"><i class="fa fa-github" aria-hidden="true"></i></a>
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
        ["Pzt", 3],
        ["#3C65B7", "#3C65B7", "#ffffff", "#ffffff"],
        {
            days: ["Pazar", "Pzt", "Sali", "Çar", "Perş", "Cuma", "Cts"],
            months: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
            indicator: true,
            placeholder: "<span>Bizi Takipte Kalın!</span>"
        });

    var data = {
        2020: {
            3: {
                5: [
                    {
                        startTime: "17:00",
                        endTime: "19:00",
                        text: "CoffeeTalks"
                    }
                ],
                6: [
                    {
                        startTime: "09:00",
                        endTime: "17:00",
                        text: "TEB'de 1 Gün "
                    },
                    {
                        startTime: "12:00",
                        endTime: "24:00",
                        text: "BilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfestBilfest"
                    },
                ],
                7: [
                    {
                        startTime: "10:00",
                        endTime: "17:00",
                        text: "DSC Mobil Programlama Workshop "
                    }
                ],
                15: [
                    {
                        startTime: "12:00",
                        endTime: "19:00",
                        text: "Blokchain Workshop#1 "
                    }
                ],
                22: [
                    {
                        startTime: "12:00",
                        endTime: "19:00",
                        text: "Blokchain Workshop#2 "
                    }
                ],
                29: [
                    {
                        startTime: "12:00",
                        endTime: "19:00",
                        text: "Blokchain Workshop#3 "
                    }
                ],

            },
            4: {
                20: [
                    {
                        startTime: "10:00",
                        endTime: "17:00",
                        text: "BilFest'20"
                    }
                ],

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
    .cjslib-month {
        width: 100% !important;
    }

    .cjslib-year {
        width: 100% !important;
    }
</style>
</body>

</html>