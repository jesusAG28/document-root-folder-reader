"use strict";

function putGitIcon(){

}

function putGitText(){

}

window.addEventListener("load", e => {
    let git=document.getElementById("git");
    git.addEventListener('mouseover', putGitIcon);
    git.addEventListener('mouseout',putGitText);
});