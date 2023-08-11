/**
 * Dashboard Analytics
 */

'use strict';

// Localisation
// --------------------------------------------------------------------
// IL FAUT CHANGER LES LALITUDES ET LONGITUDES DEPUIS LA BDD
// https://stackoverflow.com/questions/70689000/php-curl-geonames-oceans-api-cannot-get-response-from-api
function getAddressFromLatLng(lat, lng) {
  // Requête à l'API Nominatim
  return fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`)
    .then(response => response.json())
    .then(data => {
      // Récupération des informations sur l'emplacement
      const city = data.address ? data.address.city || data.address.town || data.address.village : undefined;
      const country = data.address ? data.address.country : undefined;
      // Retourne un objet contenant les informations sur l'emplacement
      return {city, country};
    })
    .catch(
      error => console.error("ahah")
    );
}
function getAddressFromLatLngOcean(lat, lng) {
  const url = `http://api.geonames.org/oceanJSON?lat=${lat}&lng=${lng}&username=t90moy`;
  return fetch(url)
  .then(response => response.json())
  .then(data => {
    const ocean = data.ocean ? data.ocean.name : undefined;
    return {ocean};
  })
  .catch(error => console.error(error));
}

// Exemple d'utilisation 48.856238138455275, 2.347042800237669 = paris
// océan 46.57071043884456, -36.20398992779999
// mediterannee 43.18377710762279, 3.821879902290641
// ici 48.78784675288687, 2.2194405476176633
const latitude = 48.78784675288687;
const longitude = 2.2194405476176633;

getAddressFromLatLng(latitude, longitude).then(data => {
  if(data.city == undefined || data.country == undefined){
    getAddressFromLatLngOcean(latitude, longitude).then(data => {
        if(data.ocean == undefined){
           document.getElementById("localisation").textContent = `indéfinie`;
        }
        else{
          document.getElementById("localisation").textContent = `${data.ocean}`;
        }
      });
  }
  else{
    document.getElementById("localisation").innerHTML = `<strong>Ville : <span style="color: grey;">${data.city}</span><br>Pays : <span style="color: grey;">${data.country}</span></strong>`;
  }
  document.getElementById("texte_latitude").innerHTML = `<strong>Latitude</strong> : ${latitude.toFixed(4)}`;
  document.getElementById("texte_longitude").innerHTML = `<br><strong>Longitude</strong> : ${longitude.toFixed(4)}`;
});

(function () {
  let cardColor, headingColor, axisColor, shadeColor, borderColor;

  cardColor = config.colors.white;
  headingColor = config.colors.headingColor;
  axisColor = config.colors.axisColor;
  borderColor = config.colors.borderColor;

  // Température Graphique
  // --------------------------------------------------------------------
  const temperatureGraphiqueEl = document.querySelector('#temperatureGraphiqueChart'),
    temperatureGraphiqueOptions = {
      series: [{
        name: "Température",
        data: [20,21,23,27,29,24,25,26.8,27.9,28,28.3,27.3,20,21,23,27,29,24,25,26.8,27.9,28,28.3,27.3]
      }],
      chart: {
        height: 350,
        type: 'line',
        zoom: {
          enabled: false
        },
        toolbar: {
          show: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'straight'
      },
      title: {
        text: 'Température sur les dernières 24 heures',
        align: 'center',
        style: {
              color: '#6e6768',
              fontSize: '18px',
          }
      },
      grid: {
        row: {
          colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
          opacity: 0.5
        },
      },
      xaxis: {
        tickAmount: 12,
        /*categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],*/
        /*categories: [0,"",2,"",4,"",6,"",8,"",10,"",12,"",14,"",16,"",18,"",20,"",22,""],*/
        categories: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23],
        title: {
          text: 'Heure (en h)',
          style: {
              color: '#6e6768',
              fontSize: '18px',
          }
        },
      },
      yaxis: {
        title: {
          text: 'Température (en °C)',
          style: {
              color: '#6e6768',
              fontSize: '18px',
          },
        }
      }
    };
  if (typeof temperatureGraphiqueEl !== undefined && temperatureGraphiqueEl !== null) {
    const temperatureGraphiqueChart = new ApexCharts(temperatureGraphiqueEl, temperatureGraphiqueOptions);
    temperatureGraphiqueChart.render();
  }

  // Batterie Graphique
  // --------------------------------------------------------------------
  const batterieGraphiqueEl = document.querySelector('#batterieGraphiqueChart'),
    batterieGraphiqueOptions = {
      series: [{
        name: "Batterie",
        data: [100,95,90,85,70,50,30,10,30,50,80,90,100,95,90,85,70,50,30,10,30,50,80,90]
      }],
      chart: {
        height: 350,
        type: 'line',
        zoom: {
          enabled: false
        },
        toolbar: {
          show: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'straight'
      },
      title: {
        text: 'Batterie sur les dernières 24 heures',
        align: 'center',
        style: {
          color: '#6e6768',
          fontSize: '18px',
        }
      },
      grid: {
        row: {
          colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
          opacity: 0.5
        },
      },
      xaxis: {
        tickAmount: 12,
        /*categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],*/
        /*categories: [0,"",2,"",4,"",6,"",8,"",10,"",12,"",14,"",16,"",18,"",20,"",22,""],*/
        categories: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23],
        title: {
          text: 'Heure (en h)',
          style: {
            color: '#6e6768',
            fontSize: '18px',
          }
        }
      },
      yaxis: {
        title: {
          text: 'Chargement (en %)',
          style: {
            color: '#6e6768',
            fontSize: '18px',
          }
        }
      }
    };
  if (typeof batterieGraphiqueEl !== undefined && batterieGraphiqueEl !== null) {
    const batterieGraphiqueChart = new ApexCharts(batterieGraphiqueEl, batterieGraphiqueOptions);
    batterieGraphiqueChart.render();
  }

  // Accelerometre - Radar Chart
  // --------------------------------------------------------------------
const radarChartEl = document.querySelector('#accelerometreRadarChart'),
    accelerometreRadarChartOptions = {
      series: [{
        name: 'Accelerometre',
        data: [0.2, 5, 1.4],
      }],
      chart: {
        height: 300,
        sparkline: {
          enabled: false
        },
        type: 'radar',
        toolbar: {
          show: false
        }
      },
      dataLabels: {
        enabled: true
      },
      markers: {
        size: 4,
        colors: ['#0055A4'],
      },
      colors: ['#009DCC'],
      plotOptions: {
        radar: {
          size: 120,
          polygons: {
            strokeColors: 'white',
            fill: {
              colors: ['#ccc4c5']
            }
          }
        }
      },
      xaxis: {
        categories: ['x', 'y', 'z'],
        labels:{
          style:{
            fontSize:'18px'
          }
        }
      },
      tooltip: {
        enabled: false
      }
    };
  if (typeof radarChartEl !== undefined && radarChartEl !== null) {
    const accelerometreRadarChart = new ApexCharts(radarChartEl, accelerometreRadarChartOptions);
    accelerometreRadarChart.render();
  }

  // Jauge Batterie
  // --------------------------------------------------------------------

  var options_jauge_batterie = {
    batterie : 0, /* il faut changer cette valeur depuis la BDD */
    valeur_jauge : 0, /* pour 0%, je souhaite afficher une jauge de 100 % avec une opacité très faible*/
    couleur : null,
    opacite : 1
  };

  if(options_jauge_batterie["batterie"] == 0){
    options_jauge_batterie["couleur"] = config.colors.primary;
    options_jauge_batterie["opacite"] = 0.6;
    options_jauge_batterie["valeur_jauge"] = 100;
  }
  else if(options_jauge_batterie["batterie"] > 0 && options_jauge_batterie["batterie"] < 21 ){
    options_jauge_batterie["couleur"] = "#FF0000";
  }
  else if(options_jauge_batterie["batterie"] > 20 && options_jauge_batterie["batterie"] < 51 ){
    options_jauge_batterie["couleur"] = "#FF8000";
  }
  else if(options_jauge_batterie["batterie"] > 50 && options_jauge_batterie["batterie"] < 71 ){
    options_jauge_batterie["couleur"] = "#FFFF00";
  }
  else{
    options_jauge_batterie["couleur"] = "#00FF00";
  }


  const batterieJaugeEl = document.querySelector('#batterieJaugeChart'),
    batterieJaugeOptions = {
      series: [options_jauge_batterie["valeur_jauge"]],
      labels: ['Batterie'],
      chart: {
        height: 240,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          size: 150,
          offsetY: 10,
          startAngle: -150,
          endAngle: 150,
          hollow: {
            size: '55%'
          },
          track: {
            background: cardColor,
            strokeWidth: '100%'
          },
          dataLabels: {
            name: {
              offsetY: 15,
              color: headingColor,
              fontSize: '22px',
              fontWeight: '600',
              fontFamily: 'Public Sans'
            },
            value: {
              formatter: function (val) {
                return options_jauge_batterie["batterie"] + "%"; // changer "Nouvelle valeur" pour afficher la valeur souhaitée
              },
              offsetY: -25,
              color: headingColor,
              fontSize: '22px',
              fontWeight: '600',
              fontFamily: 'Public Sans'
            }
          }
        }
      },
      colors: [options_jauge_batterie["couleur"]],
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          shadeIntensity: 0.5,
          gradientToColors: [options_jauge_batterie["couleur"]],
          inverseColors: false,
          opacityFrom: options_jauge_batterie["opacite"],
          opacityTo: options_jauge_batterie["opacite"],
          stops: [0, 100]
        }
      },
      stroke: {
        dashArray: 5
      },
      grid: {
        padding: {
          top: -35,
          bottom: -10
        }
      },
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof batterieJaugeEl !== undefined && batterieJaugeEl !== null) {
    const batterieJauge = new ApexCharts(batterieJaugeEl, batterieJaugeOptions);
    batterieJauge.render();
  }
})();

  // Map
  // --------------------------------------------------------------------

