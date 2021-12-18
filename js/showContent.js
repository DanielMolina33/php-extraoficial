const iframe = document.getElementById("iframe");
const defaultUrl = "./modules/home/index.html";

window.addEventListener("load", () => {
  const url = localStorage.getItem("url");

  if(url !== null){
    iframe.src = url;
  } else {
    iframe.src = defaultUrl;
  }
});

function showContent(e){
  const href = e.target.href;
  localStorage.setItem("url", href);
  iframe.src = href;
  e.preventDefault();
}