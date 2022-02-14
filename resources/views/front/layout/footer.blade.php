
	 <!--footer start-->
	 <div class="homepage-footer">
        <div class="container ">
            <div class="row d-flex align-items-center py-4">
                <div class="col-lg-6 col-12 mt-5 px-0 px-xl-5">
                    <div class="news-sub">
                        <h5 class="news-sub-heading text-white">
                            News Subscribe Now for Updates!
                        </h5>
                        <form>
                            <div class="footer-form">
                                <input type="email" required placeholder="Email Address" class="form=conteol w-100 " />
                                <input type="submit" class="footer-news-btn form-control" value="submit" />
                            </div>
                            
                            
                        </form>

                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="footer-logo text-lg-center text-start">
                        <img loading="lazy" src="{{asset('img/white-logo.png')}}" alt="footer-logo">
                    </div>

                    <h2>Thank You for Visiting Our website</h2>
                </div>

                <div class="col-lg-3 col-6 d-flex justify-content-center">
                    <div class="contact-us">
                        <h4>
                            Contact Us
                        </h4>
                        <div class="d-flex " style="gap:10px;">
                            <a href="mailto:
                            @if(isset($setting)){{$setting->email}} 
							@else  Example@gmail.com
                            @endif
                            ">
                                <div class="footer-links">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </a>
                            <a href="tel:
                            @if(isset($setting)){{$setting->phone}} 
							@else 1234456788
                            @endif
                            ">
                                <div class="footer-links">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
               
            </div>
            <div class="row footer-buttom">
                <div class="col-12">
                    <p class="text-center text-white">
                        @if(isset($setting)){{$setting->footer_name}} 
							@else  Copyrights © 2022-2023 All Rights Reserved by website.
                            @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--footer end -->
	<!-- JS Scripts -->

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			var webpMachine = new webpHero.WebpMachine()
			webpMachine.polyfillDocument()
		});
	</script>

<script src="{{asset('js/jQuery/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('js/libs/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('js/libs/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/libs/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/libs/material.min.js')}}"></script>
<script src="{{asset('js/libs/selectize.min.js')}}"></script>
<script src="{{asset('js/libs/moment.min.js')}}"></script>
<script src="{{asset('js/libs/daterangepicker.min.js')}}"></script>
<script src="{{asset('js/libs/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/libs/ajax-pagination.min.js')}}"></script>
<script src="{{asset('js/libs/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/libs-init/libs-init.js')}}"></script>

<script src="{{asset('Bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- SVG icons loader -->
<script src="{{asset('js/svg-loader.js')}}"></script>
<!-- /SVG icons loader -->

</body>

</html>
