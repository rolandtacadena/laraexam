                </div>
                <footer class="main">
                    <div class="zurb-footer-top bg-fblue">
                        <div class="row property">
                            <div class="medium-4 columns">
                                <div class="property-info">
                                    <h3>{{ appName() }}</h3>
                                    <p>{{ appName() }} lets you test your knowledge in different Web Development trends.
                                    It promotes knowledge and training. It suites for beginners who are new in Web Development.</p>
                                </div>
                            </div>
                            <div class="medium-8 columns">
                                <div class="row collapse">
                                    <div class="medium-4 columns">
                                        <div class="learn-links">
                                            <h4 class="hide-for-small">Want more?</h4>
                                            <ul>
                                                <li><a href="emails">{{ appName() }}</a></li>
                                                <li><a href="apps">PHP</a></li>
                                                <li><a href="apps">MySQL</a></li>
                                                <li><a href="http://zurb.com/notable">HTML</a></li>
                                                <li><a href="http://zurb.com/university/courses">CSS</a></li>
                                                <li><a href="http://zurb.com/library">Javascripts</a></li>
                                                <li><a href="apps">More...</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="medium-4 columns">
                                        <div class="support-links">
                                            <h4 class="hide-for-small">Talk to us</h4>
                                            <p>Tweet us at <br> <a href="https://twitter.com/zurbfoundation">@{{ appName() }}</a></p>
                                            <p><a href="support/premium-support.html">Premium Support</a></p>
                                            <p>Or check our <a href="support/support.html">support page</a></p>
                                        </div>
                                    </div>
                                    <div class="medium-4 columns">
                                        <div class="connect-links">
                                            <h4 class="hide-for-small">Stay Updated</h4>
                                            <p>Keep up with the latest on {{ appName() }}. Find us on <a href="https://github.com/zurb/foundation">Github</a>.</p>
                                            <a href="learn/foundation-insider.html" class="small button stay-connected">Stay Connected</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

<!-- footer scripts -->
<script src="{{ URL::asset('js/vendor/jquery.js') }}"></script>
<script src="{{ URL::asset('js/vendor/what-input.js') }}"></script>
<script src="{{ URL::asset('js/vendor/foundation.min.js') }}"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
<script src="{{ URL::asset('js/vendor/vue.js') }}"></script>
<script src="{{ URL::asset('js/vendor/vue-resource.js') }}"></script>
<script src="{{ URL::asset('js/vendor/sweetalert.min.js') }}"></script>

@yield('additional-footer-scripts')

<!-- sweet alert flash -->
@include('flash')
</body>
</html>
