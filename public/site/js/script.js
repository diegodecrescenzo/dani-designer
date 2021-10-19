// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.querySelectorAll('.image-jobs')
var modalImg = document.getElementById("img01");
var srcVal = ''

for(let i = 0; i < img.length; i++){
    img[i].addEventListener('click', function (){
        srcVal = img[i].getAttribute('src')
        modalImg.setAttribute('src', srcVal)
        modal.style.display = "block"
        $('body').addClass('scroll')

})
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
    $('body').removeClass('scroll')
}
