// // lightbox

let images = [].slice.call(document.getElementsByClassName("article")[0].getElementsByTagName("img"));
let imagesHrefs = [];

for (var i = 0; i < images.length; i++) {
  imagesHrefs.push(images[i].src);

  images[i].outerHTML = '<a target="_blank" href="' + images[i].src + '" data-toggle="lightbox" title="test" data-gallery="project-photos">' + images[i].outerHTML + '</a>';
}

// console.log(imagesHrefs)

// images.forEach((item, idx) => {
//   item.addEventListener('click', event => {
//     lightbox(idx);
//     //handle click
//   })
// });

// function lightbox(idx){

//   document.getElementsByClassName("lightbox_cont")[0].style.display = "block";
//   document.getElementsByClassName("lightbox_exit")[0].addEventListener('click', event => {
//     document.getElementsByClassName("lightbox_cont")[0].style.display = "none";
//     //handle click
//   })

//   lightbox_slide(idx);

// }

// function lightbox_slide(idx){

//   document.getElementsByClassName("lightbox_cont")[0].getElementsByClassName("img_canvas")[0].src = imagesHrefs[idx];

// }

$(document).on("click", '[data-toggle="lightbox"]', 'click', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
