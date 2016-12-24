var mainPortfolio = new function () {};

mainPortfolio.imagePath = '/img/m_page_portfolio/';

mainPortfolio.imageFiles = [
    'slide_01.png',
    'slide_02.png',
    'slide_03.png',
    'slide_04.png',
    'slide_05.png',
    'slide_06.png',
    'slide_07.png',
    'slide_08.png'
];


mainPortfolio.showTiles = function (id) {

    var portfolioContainer  = document.getElementById(id);
    var filesCount = this.imageFiles.length;

    for(var c = 0; c < filesCount; c++){

        var animate_class = 'flipInY';

        if(c % 2){
            animate_class = 'flipInX';
        }


        var tile = document.createElement('div');
        tile.className = "portfolio_element wow " + animate_class;
        var tileImg = document.createElement('img');
        tileImg.src = this.imagePath + this.imageFiles[c];
        tileImg.alt = this.imageFiles[c];
        tile.appendChild(tileImg);
        portfolioContainer.appendChild(tile);

    }
};