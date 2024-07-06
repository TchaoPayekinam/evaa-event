<footer>
    <div class="footer-layout2">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-12 col-sm-12"> -->
                    <div class="col-lg-3">
                        <div class="widget">
                            <a class="footer-widget-logo" href="{{ route('home.index') }}">
                                <img class="img-fluid" src="{{ asset('event/assets/img/logo.png') }}" alt="logo">
                            </a>
                            <div class="footer-widget-about">
                                <p>Nous créons des évènements sur mesure, qui ciblent toutes les catégories socioprofessionnelles.</p>
                                <p>
                                    Heures d'Ouverture : Heures: Lun-Ven: 8h00 - 17h00
                                </p>
                            </div>
                            <div class="footer-widget-social">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=61561141479602" target="_blank" title="facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/EvaaEventCom" target="_blank" title="twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/evaa-event-com/?viewAsMember=true" target="_blank" title="linkedin">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.pinterest.fr/evaaevent/_created/" target="_blank" title="pinterest">
                                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h3 class="widgettitle">Contact Info</h3>
                            <div class="footer-contact-us">
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>Lomé, carrefour nord-est du Collège d'Enseignement Général (CEG) de Djagblé</li>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>(+228) 92-04-05-94 <br>
                                        (+228) 96-02-82-82
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>evaa.event@gmail.com
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="footer-widget-menu">
                                <ul>
                                    <li>
                                        <a href="#">Online Chatting</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ’s</a>
                                    </li>
                                    <li>
                                        <a href="#">24/7 Client Support</a>
                                    </li>
                                    <li>
                                        <a href="#">Others</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-12"> -->
                    <div class="col-lg-3">
                        <div class="widget">
                            <h3 class="widgettitle">Useful Links</h3>
                            <div class="footer-widget-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('home.index') }}">Accueil</a>
                                    </li>
                                    <li>
                                        <a href="#">A Propos</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Terms &amp; Privecy</a>
                                    </li>
                                    <li>
                                        <a href="#">Support</a>
                                    </li>
                                    <li>
                                        <a href="#">Payment Policy</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-12"> -->
                    <div class="col-lg-3">
                        <div class="widget">
                            <h3 class="widgettitle">Newsletter</h3>
                            <div class="footer-widget-newsletter">
                                <p>Si vous souhaitez recevoir nos courriels, veuillez vous inscrire ici.</p>

                                <div class="input-group stylish-input-group">
                                    <input type="email" placeholder="E-mail address" name="email" class="form-control" required="">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <p>© 2024 Eva'a Event & Com. {{ trans('home.rights') }}. 
            </p>
        </div>
    </div>
</footer>