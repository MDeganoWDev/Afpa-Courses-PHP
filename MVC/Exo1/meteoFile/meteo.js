function myAjax(oVille, callback) {
  $.ajax({
    url: "https://www.prevision-meteo.ch/services/json/" + oVille.ville,
    type: "POST",
    dataType: "json",
    async: true,
    success: function (result) {
      callback(result);
    },
    error(result) {
      console.log("Erreur");
      errorMeteo();
    },
    complete: function () {
      console.log("fini");
    },
  });
}

function errorMeteo() {
  var composant = "";
  composant += "<h1>erreur serveur</h1>";

  $("div#madiv").html(composant);
}

function prevMeteo(data) {
  console.log(data);
  console.log(data.errors);
  if (data.errors == undefined) {
    var composant = "";
    composant += "<h1>" + data.city_info.name + "</h1>";
    composant += "<h2>" + data.current_condition.date + "</h2>";
    composant += "<table id='prev_jours'>";
    composant += "<thead>";
    composant +=
      "<tr><th>Jour</th><th>Icône</th><th>Cond.</th><th>Tmin</th><th>Tmax</th></tr>";
    composant += "</thead>";
    composant += "<tbody>";
    for (var i = 0; i < 5; i++) {
      composant += "<tr>";
      composant += "<td>" + data["fcst_day_" + i].day_long + "</td>";
      composant += "<td><img src='" + data["fcst_day_" + i].icon + "'/></td>";
      composant += "<td>" + data["fcst_day_" + i].condition + "</td>";
      composant += "<td>" + data["fcst_day_" + i].tmin + "°C</td>";
      composant += "<td>" + data["fcst_day_" + i].tmax + "°C</td>";
      composant += "</tr>";
    }
    composant += "</tbody>";
    composant += "</table>";
    $("div#madiv").html(composant);
  } else {
    var composant = "";
    composant += "<h1>" + data.errors[0].text + "</h1>"; //securité pour controler l'erreur dans le json

    $("div#madiv").html(composant);
  }
}
