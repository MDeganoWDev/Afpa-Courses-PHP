var contact = {
  nom: "",
  prenom: "",
  tel: "",
  email: "",
  ok: true,

  // SETTER AND FUNCTION OK
  setOk: function (b) {
    this.ok = b;
  },

  isOk: function () {
    return this.ok;
  },

  //SETTER FOR ALL VALUE
  setAll: function (eNom, ePrenom, eTel, eEmail) {
    this.setNom(eNom);
    this.setPrenom(ePrenom);
    this.setTel(eTel);
    this.setEmail(eEmail);
  },

  setNom: function (element) {
    if (this.isAlpha(element.value)) {
      this.nom = element.value;
      this.notError(element);
    } else {
      this.error(element);
      this.ok = false;
    }
  },

  setPrenom: function (element) {
    if (this.isAlpha(element.value)) {
      this.prenom = element.value;
      this.notError(element);
    } else {
      this.error(element);
      this.ok = false;
    }
  },

  setTel: function (element) {
    if (this.isNumerique(element.value)) {
      this.tel = element.value;
      this.notError(element);
    } else {
      this.error(element);
      this.ok = false;
    }
  },

  setEmail: function (element) {
    if (this.isEmail(element.value)) {
      this.email = element.value;
      this.notError(element);
    } else {
      this.error(element);
      this.ok = false;
    }
  },

  //FUNCTION REGEX FOR FILTER
  isNumerique: function (val) {
    var ok = false;
    if (val != "") {
      var regex = /^[0-9\.]*$/;
      ok = regex.test(val);
    }
    return ok;
  },

  isAlpha: function (val) {
    var ok = false;
    if (val != "") {
      var regex = /^[a-zA-Z\-]*$/;
      ok = regex.test(val);
    }
    return ok;
  },

  isEmail: function (val) {
    var ok = false;
    if (val != "") {
      var regex = /^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$/i;
      ok = regex.test(val);
    }
    return ok;
  },

  //FUNCTION COLOR FOR ERROR
  error: function (element) {
    //element.parentNode.style.backgroundColor = "red";
    element.parentNode.classList.add("has-error");
  },
  notError: function (element) {
    //element.parentNode.style.backgroundColor = "transparent";
    element.parentNode.classList.remove("has-error");
  },
};
