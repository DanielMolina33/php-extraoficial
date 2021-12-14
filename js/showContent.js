const iframe = document.getElementById("iframe");

window.addEventListener("load", () => {
  const url = localStorage.getItem("url");

  if(url !== null){
    iframe.src = url;
  } 
});

function showContent(e){
  const href = e.target.href;
  localStorage.setItem("url", href);
  iframe.src = href;
  e.preventDefault();
}