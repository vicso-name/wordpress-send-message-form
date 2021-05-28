<div class="contact-form__wrapp">

    <h1>Let's contact</h1>

    <form id="contact-form" class="contact-form" action="">

        <div class="contact-form_row">
            <div class="input-wrapp">
                <input type="text" name="name" id="" require placeholder="Name">
            </div>
            <div class="input-wrapp">
                <input type="tel" name="phone" id="" require placeholder="Contact phone number">
            </div>
        </div>

        <div class="contact-form_row">
            <div class="input-wrapp">
                <input type="email" name="mail" id="" require placeholder="E-mail">
            </div>
            <div class="input-wrapp">
                <input type="text" name="subject" id="" placeholder="Message subject">
            </div>
        </div>

        <div class="input-wrapp">
            <textarea placeholder="Enter your message here..." class="form-message" name="message" id="message"></textarea>
        </div>

        <button class="contact-form-btn" type="button">Send Message</button>

    </form>

</div>

<!-- Success Message -->

<div id="success-sent" class="success-sent">
    <div id="close-form-success" ><i class="far fa-times-circle"></i></div>
    <div class="success-sent__guts">
        <div class="success-sent__guts-content">
            <h2>Thanks for messaging!</h2>
            <p>Your message was successfully sent.</p>
        </div>
    </div>
</div>

<div class="modal-overlay" id="modal-overlay">

<!-- Success Message END-->