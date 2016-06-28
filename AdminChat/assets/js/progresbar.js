function drawszlider(ossz, meik){
    var szazalek=Math.round((meik*100)/ossz);
    document.getElementById("szliderbar").style.width=szazalek+'%';
    document.getElementById("szazalek").innerHTML=szazalek+'%';
}
