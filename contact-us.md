---
layout: default
title: Contact Us
permalink: /contact-us/
---

<form method="post" class="home-value" action="http://formspree.io/chip@lakerealty.com" onsubmit="return setReturn()">
    <fieldset>
        <p id="thanks"></p>
        <label for="name">Name<span class="asterisk">*</span>
        </label>
        <input type="text" name="name" required>

        <!--9-->
        <label for="email">Email<span class="asterisk">*</span>
        </label>
        <input type="email" name="_replyto" required>
        <!--10-->
        <label for="phone">Phone Number</label>
        <input type="tel" name="phone">
        <label for="message">Message</label>
        <textarea></textarea>
        <input type="submit" class="submit button" value="Submit" name="submitBuyerForm">
        <span class="asterisk">*</span>required

    </fieldset>
      <!-- Cloud cannon settings field -->
      <div class="hidden">
        <input type="hidden" name="_to" value="{{site.data.settings.client.email}}">
        <input type="hidden" name="_subject" value="Contact Message From Your Video Blog">
        <input type="text" name="_gotcha">
      </div>
    </form>
<script>
function setReturn(){
  localStorage.setItem("thanks", "Your request was sent successfully!");
  document.getElementById("thanks").innerHTML =    localStorage.getItem("thanks");
  localStorage.clear();
}
</script>
