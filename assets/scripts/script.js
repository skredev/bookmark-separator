window.$_GET = location.search.substr(1).split("&"); // GET parameter

const headEl = document.getElementById("head-el");

const favicon = document.createElement("link"); // Creation of the favicon element
favicon.setAttribute("rel", "icon");

// Setting the favicon according to the requested orientation
if (window.$_GET[0] === "horizontal") {
  favicon.setAttribute("type", "image/svg+xml");
  favicon.setAttribute("sizes", "any");
  favicon.setAttribute("href", "./assets/images/horizontal.svg");
  headEl.append(favicon);
} else if (window.$_GET[0] === "vertical") {
  favicon.setAttribute("type", "image/svg+xml");
  favicon.setAttribute("sizes", "any");
  favicon.setAttribute("href", "./assets/images/vertical.svg");
  headEl.append(favicon);
} else {
  favicon.setAttribute("type", "image/x-icon");
  favicon.setAttribute("href", "./assets/icons/favicon.ico");
  headEl.append(favicon);
}
