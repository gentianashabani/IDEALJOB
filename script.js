let listData = [
    {
        imgSrc:'images/zara_logo.png',
        location: "Prishtinë",
        category: "Asistent/e të shitjes",
        name: "Zara"
    },
    {
        imgSrc:'images/aztech_logo.png',
        location: "Fushë Kosovë",
        category: "Shitës/e",
        name: "aztech"
    },
    {
        imgSrc:'images/besa_security_logo.png',
        location: "Pejë",
        category: "Sigurim",
        name: "besa security"
    },
    {
        imgSrc:'images/sach_pizza_logo.png',
        location: "Lipjan",
        category: "Gastronomi",
        name: "sach pizza"
    },
    {
        imgSrc:'images/konstruktori_ing_logo.png',
        location: "Podujevë",
        category: "Ndërtimtari",
        name: "konstruktori ing"
    },
    {
        imgSrc:'images/neptun_logo.png',
        location: "Ferizaj",
        category: "Shitës/e",
        name: "neptun"
    }   
    ];
    function search2(){
    let key = document.getElementById("Location-Category").value;

    let filtredArray;
    filtredArray = listData.filter(el => el.location.toLowerCase().includes(key.toLowerCase()) || el.category.toLowerCase().includes(key.toLowerCase()) || el.name.toLowerCase().includes(key.toLowerCase()));
    
    
   
    document.getElementById('card-container').innerHTML ="";

    makeList(filtredArray);
}
function initList(){
    makeList(listData);
}
function makeList(listArray) {
    // Establish the array which acts as a data source for the list
    
 
    // Set up a loop that goes through the items in listItems one at a time
    let numberOfListItems = listArray.length,
    listItem,
    i;

    // Add it to the page
  var g = document.getElementById('card-container');
    for (let i = 0; i < numberOfListItems; i++) {
        // create an item for each one
        card = document.createElement('div');
        cardWrapper = document.createElement('div');
        cardWrapper.appendChild(card);
        card.className += "card";
        cardWrapper.className += "cardWrapper";

         

        img = document.createElement('img');
        img.src = listArray[i]['imgSrc'];
        img.style.height='150px';
        img.style.width='150px';
        img.style.objectFit='contain';
        img.className += "image";


        container = document.createElement('div');
        container.className += "container";

        heading = document.createElement('h4');
        heading.innerHTML = listArray[i]['category'];
        heading.style.color='black';
        heading.style.textDecoration='none'; 

        paragraph = document.createElement('p');
        paragraph.innerHTML = listArray[i]['location'];
        paragraph.style.color='black';

        container.appendChild(heading);
        container.appendChild(paragraph);
        card.appendChild(img);
        card.appendChild(container);


        
        document.getElementById('card-container').appendChild(cardWrapper);
         (function(index){
        g.children[i].onclick = function(){
        localStorage.setItem("item",index);
        localStorage.setItem("imgSrc", listArray[index]['imgSrc']);
        localStorage.setItem("location", listArray[index]['location']);
        localStorage.setItem("category", listArray[index]['category']);
        window.open("Details.html", "_self");
        }    
        })(i);
    }
}




