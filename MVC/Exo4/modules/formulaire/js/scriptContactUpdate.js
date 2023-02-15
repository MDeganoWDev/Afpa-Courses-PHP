$(document).ready(function () {
    document.querySelector("form#formulaireUpdate").addEventListener("submit", function (e) {
      contact.setOk(true);
      contact.setAll(
        document.getElementById("nom"),
        document.getElementById("prenom"),
        document.getElementById("tel"),
        document.getElementById("email"),
      );

      if (contact.isOk()) {       
        // console.log("ok");        
      } else {
        e.preventDefault();
        console.log("error");
      }

    });
});
