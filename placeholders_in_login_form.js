<script>
jQuery(document).ready(function ($) {

    placeholder_login = $('#loginform label[for="user_login"]').text();
    placeholder_password = $('#loginform label[for="user_pass"]').text();

    $('#loginform input[type="text"]').attr('placeholder', placeholder_login);
    $('#loginform input[type="password"]').attr('placeholder', placeholder_password);

    $('#loginform label[for="user_login"]').contents().filter(function () {
        return this.nodeType === 3;
    }).remove();
    $('#loginform label[for="user_pass"]').contents().filter(function () {
        return this.nodeType === 3;
    }).remove();

    $('input[type="checkbox"]').click(function () {
        $(this + ':checked').parent('label').css("background-position", "0px -20px");
        $(this).not(':checked').parent('label').css("background-position", "0px 0px");
    });

});
