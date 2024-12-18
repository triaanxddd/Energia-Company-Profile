// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var modalImg2 = document.getElementById("img02");
var captionText = document.getElementById("caption");

function popImage(name,asset,picture,picture2){
    modal.style.display = "block";
    var directory1 = asset + picture;
    var directory2 = asset + picture2;

    modalImg.src = directory1;

    //2nd picture
    if(!picture2){
        modalImg2.style = 'hidden';
    }
    else{
        modalImg2.src = directory2;
    }
    captionText.innerHTML = name;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal and reset src img
span.onclick = function() { 
    modal.style.display = "none";
    modalImg.src = '';
    modalImg2.src = '';
    modalImg2.style = 'hidden';
}



