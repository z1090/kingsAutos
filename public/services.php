<? include './partials/header.php'; ?>
<main class="container">
    <header class="page__header">
        <h1>Services</h1>
        <a class="btn btn-sm btn--green" href="#">Request a Service</a>
    </header>
    <section class="services-list">
        <p class="page__intro-para">Our workshop in Semington is fully equipped with everything we need to offer the following work for cars and for Light Commercial Vehicles:</p>
        <ul class="services-list__ul">
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 3.png" alt="MOTs">
                <span class="services-list__text">Car MOTs</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 3.png" alt="MOTs">
                <span class="services-list__text">LCV MOTs</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 4.png" alt="MOTs">
                <span class="services-list__text">Servicing</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 10.png" alt="MOTs">
                <span class="services-list__text">Steering</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 15.png" alt="MOTs">
                <span class="services-list__text">Clutch</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 8.png" alt="MOTs">
                <span class="services-list__text">Diagnostics</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 14.png" alt="MOTs">
                <span class="services-list__text">Transmissions</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 6.png" alt="MOTs">
                <span class="services-list__text">Brakes</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 11.png" alt="MOTs">
                <span class="services-list__text">Cam belt</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 7.png" alt="MOTs">
                <span class="services-list__text">Battery Fitting</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 13.png" alt="MOTs">
                <span class="services-list__text">Air Conditioning</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 5.png" alt="MOTs">
                <span class="services-list__text">Suspension</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 1.png" alt="MOTs">
                <span class="services-list__text">Exhaust Fittings</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 9.png" alt="MOTs">
                <span class="services-list__text">General Repairs</span>
            </li>
            <li class="services-list__li">
                <img class="services-list__img" src="../assets/icons/Artboard 12.png" alt="MOTs">
                <span class="services-list__text">Head Gasket</span>
            </li>
        </ul>
        <p class="services-list__end-para">Please fill out the Service Request form below, or if you’d prefer to speak to us, call us on either <a href="tel:+4413801380870999">01380 870 999</a> or <a href="tel:+447552160647">07552 160 647</a>.</p>
    </section>
    <aside class="services-images">
        <div style="width: 48%; height: 222px; background: #C4C4C4;"></div>
        <div style="width: 48%; height: 222px; background: #C4C4C4;"></div>
    </aside>
</main>
<section class="form__container--dark">
    <section class="container form__container--dark">
        <header class="header">
            <h2 class="form__title">Service Request</h2>
            <section class="form__subtitle-section">
                <p class="form__subtitle">Already registered?</p>
                <a class="btn btn-xs btn--green" href="#">Login</a>
            </section>
        </header>
        <form action="POST">
            <section class="form__section">
                <h3 class="form__h3">Your Details</h3>
                <div class="form__group form__group--half">
                    <label>First Name</label>
                    <input class="form__input" type="text">
                </div>
                <div class="form__group form__group--half">
                    <label>Last Name</label>
                    <input class="form__input" type="text">
                </div>
                <div class="form__group form__group--half">
                    <label>Email</label>
                    <input class="form__input" type="email">
                </div>
                <div class="form__group form__group--half">
                    <label>Contact Phone Number</label>
                    <input class="form__input" type="tel">
                </div>
                <h4 class="form__h4">Home/Billing Address</h4>
                <div class="form__group form__group--half">
                    <label>Postcode</label>
                    <input class="form__input" type="text">
                </div>
                <div class="form__group form__group--half form__group--button">
                    <button class="btn btn-xl btn--green">Find Your Address</button>
                </div>
                <h5 class="form__h5">Enter address manually >></h5>
                <div class="form__group form__group--full">
                    <label>Address Line 1</label>
                    <input class="form__input" type="text">
                </div>
                <div class="form__group form__group--full">
                    <label>Address Line 2</label>
                    <input class="form__input" type="text">
                </div>
                <div class="form__group form__group--half">
                    <label>Town</label>
                    <input class="form__input" type="text">
                </div>
                <div class="form__group form__group--half">
                    <label>County</label>
                    <? include './partials/counties.php'; ?>
                </div>
            </section>
        </form>
    </section>
</div>
<? include './partials/footer.php'; ?>
