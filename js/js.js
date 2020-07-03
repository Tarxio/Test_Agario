let canvas = document.getElementById('cl');
let ctx = canvas.getContext('2d');

canvas.width = (window.innerWidth * 90) / 100;
canvas.height = (window.innerHeight * 90) / 100;
canvas.style.setProperty ('left', (window.innerWidth - canvas.width)/2 + 'px');
canvas.style.setProperty ('top', (window.innerHeight - canvas.height)/2 + 'px');

ctx.fillRect(0, 0, canvas.width, canvas.height);

let x = canvas.width/2;
let y = canvas.height-30;

let dx = 2;
let dy = -2;

window.onload = function () {

    let a = document.getElementById('start');


    a.onclick = function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.beginPath();
        ctx.rect(x, y, 50, 50);
        ctx.fillStyle = "#FF0000";
        ctx.fill();
        ctx.closePath();
        x += dx;
        y += dy;

        setInterval(draw, 20);
    }

}








//ctx.fillStyle = 'red';
//ctx.fillRect(100,50, 75, 75);
//ctx.fillRect(x, y, width, height);
