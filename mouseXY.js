function muuXY(e, that) {
    if (!e) e = window.event;
    var x, y;
    if (e.targetTouches) {
        x = e.targetTouches[0].pageX - e.target.offsetLeft;
        y = e.targetTouches[0].pageY - e.target.offsetTop;
    }else if (that){
        x = e.pageX - that.offsetLeft;
        y = e.pageY - that.offsetTop;
    }
    return [x,y];
}

const room = document.querySelector("#room");
let xEcho = document.querySelector(".xecho");
let yEcho = document.querySelector(".yecho");
room.onmousemove = function(e){
    var xy = muuXY(e, this);
    xEcho.innerHTML = xy[0];
    yEcho.innerHTML = xy[1];
}