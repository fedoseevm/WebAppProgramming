let newY = 0;
let rotateAngle = 0;

function DrawFigure() {
    const shape = document.getElementById('shape').value;
    const color = document.getElementById('color').value;
    let size = document.getElementById('size').value;

    switch (size){
        case "small":
            size = 20;
            break;
        case "big":
            size = 40;
            break;
    }

    let svg = "";
    if (shape == "rect") {
        svg = `<svg viewBox="0 0 100 100">
            <g id="figure">
                <rect x="${(100 - size) / 2}" y ="${(100 - size) / 2}" width="${size}" height="${size}" fill="${color}" stroke="black" />
            </g>
        </svg>`;
    }
    else if (shape == "circle") {
        svg = `<svg viewBox="0 0 100 100">
            <g id="figure">
                <circle cx="50%" cy="50%" r="${size}" fill="${color}" stroke="black" />
            </g>
        </svg>`;
    }

    document.getElementById("rightBlock").innerHTML = svg;

    // Remove "disabled" attributes from moveButton and rotateButton
    document.getElementById('moveButton').removeAttribute('disabled');
    document.getElementById('rotateButton').removeAttribute('disabled');
}

function MoveFigure() {
    newY += 25;
    Transform();
}

function RotateFigure() {
    rotateAngle += 45;
    Transform();
}

function Transform() {
    const figure = document.getElementById('figure');
    figure.setAttribute('transform', `translate(0, ${newY}) rotate(${rotateAngle} 50 50)`);

    // The translate(<x> [<y>]) transform function moves the object by x and y. If y is not provided, it is assumed to be 0

    // The rotate(<a> [<x> <y>]) transform function specifies a rotation by a degrees about a given point. If optional parameters x and y are not supplied, the rotation is about the origin of the current user coordinate system. If optional parameters x and y are supplied, the rotation is about the point (x, y)
}