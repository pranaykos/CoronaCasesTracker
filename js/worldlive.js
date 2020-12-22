// console.log("ready");
//     let mytable = document.querySelector("table#details");;
//     // console.log(mytable);
//     let row = mytable.insertRow();
//     row.insertCell(0);

//     mytable.rows[1].cells[0].innerHTML = "test for";

$(document).ready(function () {

    let mytable = document.querySelector("table#details");

    $.get("https://api.covid19api.com/summary", function (data, status) {

        let allCountruesData = data.Countries;
        allCountruesData.forEach((country) => {

            let tr = document.createElement("tr");

            let countryName = document.createElement("td");
            countryName.innerHTML = country.Country;
            
            let tConfirmed = document.createElement("td");
            tConfirmed.innerHTML = country.TotalConfirmed;

            let tRecovered = document.createElement("td");
            tRecovered.innerHTML = country.TotalRecovered;

            let tDeath = document.createElement("td");
            tDeath.innerHTML = country.TotalDeaths;

            let newConfirmed = document.createElement("td");
            newConfirmed.innerHTML = country.NewConfirmed;

            let newRecovered = document.createElement("td");
            newRecovered.innerHTML = country.NewRecovered;

            let newDeaths = document.createElement("td");
            newDeaths.innerHTML = country.NewDeaths;

            tr.appendChild(countryName);
            tr.appendChild(tConfirmed);
            tr.appendChild(tRecovered);
            tr.appendChild(tDeath);
            tr.appendChild(newConfirmed);
            tr.appendChild(newRecovered);
            tr.appendChild(newDeaths);

            mytable.appendChild(tr);

            console.log(country);
        });

    });

});