<div id="contact">
    <div class="content">
        <p>
            Shoot me a note! <a class="inline" href="#top" onclick="leavingContact();">Click here to go back</a>.
        </p>
        <div id="form">
            <form id="ajax-contact-form" action="javascript:alert('success!');">
                <fieldset class="info_fieldset">
                    <div id="note"></div>
                    <div id="fields">
                        <label for="name">Name</label>
                        <input id="name" class="textbox" type="text" tabindex="1" name="name" value="" spellcheck="false" /><br />
                        <label for="email">Email</label>
                        <input id="email" class="textbox" type="email" tabindex="2" name="email" value="" spellcheck="false" /><br />
                        <label for="comments">Comments</label>
                        <textarea id="comments" class="textbox textbox2" tabindex="3" name="message" rows="10" cols="50" spellcheck="true"></textarea>
                        <input class="formSend btn btn-large btn-primary" type="submit" tabindex="4" value="Send Message" />
                        <input class="formClear btn btn-large btn-danger" type="reset" tabindex="5" value="Clear" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>