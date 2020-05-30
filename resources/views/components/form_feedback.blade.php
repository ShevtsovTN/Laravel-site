<form action="#" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="name" id="contact-name" placeholder="@lang('content.contacts.contact_form.0')">
    </div>
    <div class="form-group">
        <input type="tel" class="form-control" name="phone" id="contact-number" placeholder="@lang('content.contacts.contact_form.1')">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" id="contact-email" placeholder="@lang('content.contacts.contact_form.2')">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="@lang('content.contacts.contact_form.3')"></textarea>
    </div>
    <button type="submit" class="btn south-btn">@lang('content.contacts.contact_form.4')</button>
</form>
