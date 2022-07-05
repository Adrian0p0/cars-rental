@extends('layouts.front')
@section('body')
<x-head-banner title="Contact" />

<section class="py-28">
    <div class="container">
        <div class="section-area">
            <div class="row">
                <div class="col-md-6 col-lg-3 pt-10">
                    <div class="b-contacts">
                        <i class="ic fa-solid fa-diamond-turn-right"></i>
                        <div class="b-contacts__title">Oficiu</div>
                        <div class="b-contacts__info">Otto-Scheugenpflug-Str. 20<br>63073, Offenbach am Main</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pt-10">
                    <div class="b-contacts">
                        <i class="ic fa-solid fa-phone bg-primary"></i>
                        <div class="b-contacts__title">Telefon</div>
                        <div class="b-contacts__info">(+49) 69 830 047 3110<br> <br></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pt-10">
                    <div class="b-contacts">
                        <i class="ic fa-solid fa-fax"></i>
                        <div class="b-contacts__title">Fax</div>
                        <div class="b-contacts__info">(+49) 69 830 047 3191<br> <br></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pt-10">
                    <div class="b-contacts">
                        <i class="ic fa-solid fa-envelope bg-primary"></i>
                        <div class="b-contacts__title">Email</div>
                        <div class="b-contacts__info">info@ibb-cars.com<br> <br></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-40">
    <div class="container">
        <div class="section-area">
            <div class="row">
                <div class="col-md-6">
                    <div class="pb-10">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10239.940129401255!2d8.8325929!3d50.0865671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaeb29c5004eb5986!2sIBB%20Logistik%20GmbH!5e0!3m2!1sru!2sro!4v1655194605486!5m2!1sru!2sro" width="100%" height="556px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="ui-title-inner">Contacteaza-ne<span class="text-primary"> Acum</span></h2>
                    <p>
                        Nulla pariatur excepteur sint occaecat cupidatat no proident culpa qui officia des mollit anim id est lab orum ut perspiciatis unde omnis iste natuser sit volupta tem accusantium sed ipsum laudantium.
                    </p>
                    <form class="b-form-contacts ui-form" id="contactForm" action="#" method="post">
                        <div class="form-group">
                            <input class="form-control" id="user-name" type="text" name="user-name" placeholder="Nume Prenume" required="required"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="user-phone" type="phone" name="user-phone" placeholder="Telefon"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="user-email" type="email" name="user-email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="user-company" type="company" name="user-company" placeholder="Firma"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="user-message" rows="5" placeholder="Mesaj" required="required"></textarea>
                        </div>
                        <div class="form-check pb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Prin completarea formularului sunt de acord <a href="#" target="_blank" class="text-primary">cu politica de confidențialitate</a>.
                            </label>
                        </div>
                        <button class="btn-contact-form btn-primary">TRIMITE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

