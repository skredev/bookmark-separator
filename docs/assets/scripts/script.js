/* MIT License

Copyright (c) 2024 Samuel Krebs

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE. */

window.$_GET = location.search.substr(1).split("&")  // GET parameter

const headEl = document.getElementById("head-el")

const favicon = document.createElement("link") // Creation of the favicon element
favicon.setAttribute('rel', 'icon')


// Setting the favicon according to the requested orientation
if(window.$_GET[0] === "horizontal"){
    favicon.setAttribute('type', 'image/svg+xml')
    favicon.setAttribute('sizes', 'any')
    favicon.setAttribute('href', './assets/images/horizontal.svg')
    headEl.append(favicon)
}else if(window.$_GET[0] === "vertical"){
    favicon.setAttribute('type', 'image/svg+xml')
    favicon.setAttribute('sizes', 'any')
    favicon.setAttribute('href', './assets/images/vertical.svg')
    headEl.append(favicon)
}else{
    favicon.setAttribute('type', 'image/x-icon')
    favicon.setAttribute('href', './assets/icons/favicon.ico')
    headEl.append(favicon)
}