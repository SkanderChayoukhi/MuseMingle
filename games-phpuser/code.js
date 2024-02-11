let errors = 0 ;
let cardlist=[
   "card1",
   "card2",
   "card3",
   "card4",
   "card5",
   "card6",
   "card7",
   "card8",
   "card9",
   "card10"
] 
let cardset ;
let board =[];
let rows=4;
let columns=5;
let card1selected;
let card2selected;

window.onload= function(){ /*when we reload the page on fait appel a cette fonction*/
    shufflecards(); 
    startgame(); 
}

function shufflecards(){
    cardset= cardlist.concat(cardlist); /*concatination de 2 listes cardlist dans cardset ====> for each card we have 2*/
    console.log(cardset) ;
    // now we shuffle the cards
    for( let i=0; i< cardset.length ; i++){
        let j=Math.floor(Math.random() * cardset.length); /*get random index , tq math.random()*cardset.length donne valeur aleatoire entre 0 et length (float) et math.floor gives a the round value*/
        let temp= cardset[i];
        cardset[i]=cardset[j];
        cardset[j]= temp;
    }
    console.log(cardset) ;   /* shows the list shuffled */
}

function startgame(){
    //arrange the board 4*5
    for(let r=0; r< rows;r++){
        let row=[];
        for(let c=0 ; c<columns; c++){
            let cardimg= cardset.pop() ; /*pop ==> removes and retuns the last elt of cardset*/
            row.push(cardimg); /*adds that elt*/

            let card=document.createElement('img'); /*<img>*/
            card.id = r.toString()+ '-' +c.toString() ; /*<img id="0-1" ..."0-2"...etc // on a fiat tostring juste car dans id on ecrit une chaine*/
            card.src= 'photo/'+cardimg+'.png' ;
            card.addEventListener('click' , selectcard)
            card.classList.add('card') ;
            document.getElementById('board').append(card) ;
        }
        board.push(row) ;/* row liste te5ou ligne loula baad on passe lel ligne 2 etc....====> donc board te5ou liste de liste (length=4)*/
    }
    console.log(board) ;
    setTimeout(hidecards,1500); // it calls the haidecards function after 1000ms=1s 
}

function hidecards(){
    for(let r=0 ;r<rows; r++){
        for(let c=0 ; c<columns; c++){
            let card=document.getElementById(r.toString()+ '-' +c.toString());
            card.src='photo/back.jpg'
        }
    }
}

function selectcard(){
    if(this.src.includes('back')){ //'this' ==> refers to the selected card
        if(!card1selected){ // the '!card1selected' is true yet the crad1selected is undefined so js takes it as falsy wel 3akes bel 3akes
            
            card1selected = this;
            let coord = card1selected.id.split('-') ; //'0-1' ==> ['0','1']
            let r=parseInt(coord[0]);
            let c=parseInt(coord[1]); //parseint() : convertir chaine to integer
            card1selected.src= 'photo/'+board[r][c]+'.png' ;

        }else if(!card2selected && this != card1selected){ // to make sure we are selectiong the same card twice

            card2selected = this;
            let coord = card2selected.id.split('-') ; 
            let r=parseInt(coord[0]);
            let c=parseInt(coord[1]); 
            card2selected.src= 'photo/'+board[r][c]+'.png' ;
            setTimeout(update,1000) ;//lezem tkoun houni apres selectionner la 2eme card on fait appel a update

        }
    }
}

function update(){
    if(card1selected.src != card2selected.src){
        card1selected.src='photo/back.jpg';
        card2selected.src='photo/back.jpg';
        errors+=1 ;
        document.getElementById('errors').innerText=errors;
    }
    //on doit reinstaller snn on ne peut pas selectionner les cartes une autre fois
    card1selected=null ;
    card2selected=null ;
}




