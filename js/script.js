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
        //e.preventDefault();
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

function plotTemp(){
    var layout = {
        title:'Température (en °)'
    };
// traitement
    Plotly.plot('plot-temp', [{
        y: [1,2,3].map(getRandomTemp),
        marker: {
            color: '#ff8600'
        }
    }],layout);

    var cnt = 0;

    var interval = setInterval(function() {
        console.log(getRandomTemp());

        Plotly.extendTraces('plot-temp', {
            y: [[getRandomTemp()]]
        }, [0])

        if(cnt === 100) clearInterval(interval);
    }, 1000);
}
plotTemp();

function plotCard(){
    var layout = {
        title:'Fréquence cardiaque (en BPM)'
    };

    Plotly.plot('plot-card', [{
        y: [1,2,3].map(getRandomBeat)
    }],layout);

    var cnt = 0;

    var interval = setInterval(function() {
        console.log(getRandomBeat());

        Plotly.extendTraces('plot-card', {
            y: [[getRandomBeat()]]
        }, [0])

        if(cnt === 100) clearInterval(interval);
    }, 1000);
}
plotCard();




function getRandomTemp(){
    return Math.random() * (33.9 - 33.1) + 33.1;

}

function getRandomBeat(){
    return Math.random() * (80 - 70) + 70;

}