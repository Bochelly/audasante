var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
var names = ["Amir Hobbs",
"Felix Nedelec",
"Antoine Borrelly",
"Nigel Salas",
"Allistair Booth",
"Addison Reese",
"Eric Tucker",
"Kennedy Norris",
"Alec Mccray",
"Salvador Cain",
"Rigel Cooke",
"Michael Pratt",
"Charles Benson",
"Carter Roberson",
"Keith Freeman",
"Clinton Mendez",
"Linus Dodson",
"Dane Howell",
"Caleb Wilcox",
"Justin Reynolds",
"Chester Calderon",
"Harlan Spencer",
"Seth Mayo",
"Zane Strickland",
"Deacon Bird",
"Joshua Haynes",
"Bert Dixon",
"Emmanuel Witt",
"Rafael Stuart",
"Alvin Maldonado",
"Samson Boone",
"Erasmus Blackburn",
"Thaddeus Mullen",
"Amery Landry",
"Scott Haynes",
"Baker Francis",
"Plato Ware",
"Kennan Navarro",
"Hilel Walker",
"Grady Guerra",
"Henry Murphy",
"Griffith Moon",
"Tyrone Garner",
"Ulysses Joyner",
"Mark Nguyen",
"Garrison Hensley",
"Omar Mendez",
"Myles Fry",
"Benedict Simmons",
"Barry Cline",
"Thane Mcfarland",
"Emmanuel Bruce",
"Julian Hall",
"Malachi Logan",
"Nasim Galloway",
"Louis Cunningham",
"Francis Haney",
"Christian Knight",
"Howard Curtis",
"Macaulay Beard",
"Drake Britt",
"Abel Logan",
"Burke Oneill",
"Noah Case",
"Allen Kane",
"Jarrod Glover",
"Owen Sheppard",
"Owen Howell",
"Kamal Ellison",
"Eric Ayers",
"Jonas Eaton",
"Duncan Hoffman",
"Yardley Mejia",
"Silas Harding",
"Merrill Huber",
"Silas Mays",
"Aristotle Acevedo",
"Steel Small",
"Aidan Booth",
"Seth Potts",
"Caesar Charles",
"Xavier Hale",
"Ray Burt",
"Elijah Pope",
"Hasad Mccall",
"Aaron Mooney",
"Levi Sharp",
"Hilel Sellers",
"Perry Foley",
"John Buckner",
"Berk Morales",
"Cadman Guy",
"Troy Gilliam",
"Stephen Mann",
"Clarke Mercado",
"Vladimir Cote",
"Marvin Travis",
"Carlos Ray",
"Nolan Briggs",
"Brennan Odonnell",
"Keaton Crane",
"Reece Faulkner",];

autocomplete(document.getElementById("search-text"), names);

function autocomplete(inp, arr) {

  var selectionActuelle;

  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      selectionActuelle = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the selectionActuelle variable:*/
        selectionActuelle++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the selectionActuelle variable:*/
        selectionActuelle--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (selectionActuelle > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[selectionActuelle].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (selectionActuelle >= x.length) selectionActuelle = 0;
    if (selectionActuelle < 0) selectionActuelle = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[selectionActuelle].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
} 


function openForm(firstName,lastName,nSecu,email) {
  console.log('calld open form', nSecu);
  document.getElementById("edit-form").style.display = "block";

  var nameTitle = document.getElementById("name-title");
  nameTitle.innerHTML = firstName + ' ' + lastName ;

  var surnameInput = document.getElementById("surname-input").value = firstName ;
  var nameInput = document.getElementById("name-input").value = lastName ;
  var nSecuInput = document.getElementById("no-input").value = nSecu ;
  var emailInput = document.getElementById("email-input").value = email ;

}

function openFormFAQ(id,subject,answer) {
 //console.log('calld open form', subject);
  document.getElementById("edit-form").style.display = "block";

  var nameTitle = document.getElementById("subject");
  nameTitle.innerHTML = subject ;

  var id = document.getElementById("id").value = id ;
  var nameInput = document.getElementById("subject-input").value = subject ;
  var nSecuInput = document.getElementById("answer-input").value = answer ;

}

function openFormAddFAQ() {
 //console.log('calld open form', subject);
  document.getElementById("add-form").style.display = "block";

  var id = document.getElementById("id").value = id ;
  var nameInput = document.getElementById("subject-input").value = subject ;
  var nSecuInput = document.getElementById("answer-input").value = answer ;

}

function closeForm() {
  document.getElementById("edit-form").style.display = "none";
} 

/*document.getElementByClass('delete').onSubmit(function(e){
  e.preventDefault();
  if (confirm("Voulez-vous vraiment continuer ?")){
    //rediriger vers user_delete.php

  } else {

    document.getEleme
  }

}


  )*/

function confirmMessage(n_secu) {
  if (confirm("Cette action est iréversible. Voulez-vous vraiment continuer ?")){
    var nSecuInput = document.getElementById("user-to-delete").value = n_secu ;
    document.getElementById("delete-form").submit();

  }
} 

function confirmMessageFAQ(id) {
  if (confirm("Cette action est iréversible. Voulez-vous vraiment continuer ?")){
    var nSecuInput = document.getElementById("user-to-delete").value = id ;
    document.getElementById("delete-form").submit();

  }
} 