function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
document.form1.mail.focus();
return true;
}
else if(inputText.value == ""){
    alert("Vyplňte prosím email")
    document.form1.mail.focus();
return false;
}
else
{
alert("Zadali jste neplatnou emailovou adresu");
document.form1.mail.focus();
return false;
}
}