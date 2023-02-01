const articles = [
    {
        id: 1,
        denomination: "Coquillettes blanches",
        timing: '7 à 9 minutes',
        conseil: '',
        img: '/IMG/Photos temps de cuisson/IMG_20201030_164211.jpg'
    },
    {
        id: 2,
        denomination: "Coquillettes 1/2 complètes",
        timing:'11 à 13 minutes',
        conseil: '',
        img: '/IMG/Photos temps de cuisson/IMG_20201030_164900.jpg'
    },
    {
        id: 3,
        denomination: "Farfalle blanches",
        timing:'11 à 13 minutes',
        conseil: '',
        img: '/IMG/Photos temps de cuisson/IMG_20201030_164432.jpg'
    },
    {
        id: 4,
        denomination: "Penne blanches",
        timing: '11 à 13 minutes',
        conseil: '',
        img: '/IMG/Photos temps de cuisson/IMG_20201030_164604.jpg'
    },
    {
        id: 5,
        denomination: "Tagliatelles linguine blanches",
        timing:'8 à 9 min',
        conseil: '',
        img: '/IMG/Aliments/tagliatelle_blanche_optimized_jpg.jpg'
    },
    {
        id: 6,
        denomination: "Spaghettis 1/2 complètes",
        timing:'7 à 8 min',
        conseil: '',
        img: '/IMG/Aliments/spaghettis_completes.png'
    },
    {
        id: 7,
        denomination: "Tortil citron safran",
        timing: '5 à 7 minutes',
        conseil: '',
        img: '/IMG/Photos temps de cuisson/IMG_20201030_170055.jpg'
    },
    {
        id: 8,
        denomination: "Torsades lentilles corail (sans gluten)",
        timing:'3 à 4 minutes',
        conseil: '',
        img: '/IMG/Photos temps de cuisson/IMG_20201030_165213.jpg'
    },
    {
        id: 9,
        denomination: "Macaroni sarrasin (sans gluten)",
        timing:'9 à 10 minutes',
        conseil: '',
        img: '/IMG/Aliments/macaroni-sarrasin.jpg'
    },
    {
        id: 10,
        denomination: "Riz basmati blanc",
        timing: '13 à 15 minutes',
        conseil: '',
        img: '/IMG/Photos temps de cuisson/IMG_20201030_170313.jpg'
    },
    {
        id: 11,
        denomination: "Riz basmati complet",
        timing:'10 à 15 min',
        conseil: '',
        img: '/IMG/Photos temps de cuisson/IMG_20201030_170720.jpg'
    },
    {
        id: 12,
        denomination: "Riz long blanc de Camargue IGP",
        timing:'7 à 9 min',
        conseil: '',
        img: '/IMG/Aliments/riz-long blanc.jpg'
    },
    {
        id: 13,
        denomination: "Riz long 1/2 complet",
        timing:'16 à 18 minutes',
        conseil: '',
        img: '/IMG/Aliments/riz-long-demi-complet-camargue-min.jpg'
    },
    {
        id: 14,
        denomination: "Trio de lentilles",
        timing:'15 minutes',
        conseil: 'Rincer et amener juste à ébullition dans un grand volume d’eau salée.Égoutter puis cuire 1 volume de lentilles dans un volume d’eau avec aromates, à feu doux.',
        img: '/IMG/Aliments/trio de lentilles.jpg'
    },
    {
        id: 15,
        denomination: "Boulgour",
        timing: '17 minutes',
        conseil: 'Faire revenir le Boulgour dans du beurre. Couvrir d’eau bouillante salée. Laisser cuire 2 minutes. Couvrez 15 minutes. 2 volumes d’eau pour 1 volume de boulgour.',
        img: '/IMG/Aliments/boulgour-gros-demi-complet-min.jpg'
    },
    {
        id: 16,
        denomination: "Couscous",
        timing:'5 minutes',
        conseil: 'Verser 1 volume d’eau bouillante salée sur 1 volume de couscous et couvrir 5 minutes.',
        img: '/IMG/Aliments/couscous-blanc-min.jpg'
    },
    {
        id: 17,
        denomination: "Quinoa",
        timing:'15 minutes',
        conseil: 'Rincer le quinoa. Dans une casserole ajouter 1,5 à 2 fois son volume d’eau salée, selon si vous préférez une cuisson « al dente » ou bien cuit. Couvrez. Portez à ébullition. Baisser le feu et laisser cuire 10 minutes. Ôter du feu et laisser gonfler 5 minutes toujours à couvert.',
        img: '/IMG/Aliments/quinoa-min.jpg'
    },
    {
        id: 18,
        denomination: "Taboulé",
        timing:'5 minutes',
        conseil: 'Verser un volume d’eau bouillante salée et le jus d’un ou deux citrons sur un volume de préparation. Couvrir. Laisser gonfler 5 minutes. Égrainer à la fourchette.',
        img: '/IMG/Aliments/Taboulé.jpg'
    },
    {
        id: 19,
        denomination: "Mélange méditerranéen",
        timing: '13 à 14 minutes',
        conseil: '',
        img: '/IMG/Aliments/riz-mediterraneen.jpg'
    },
    {
        id: 20,
        denomination: "Mélange forestier",
        timing:'13 à 14 minutes',
        conseil: '',
        img: '/IMG/Aliments/riz-melange-forestier.jpg'
    },
    {
        id: 21,
        denomination: "Mélange des Incas",
        timing:'20 minutes',
        conseil: 'Faire revenir la préparation avec un peu d’huile d’olive pendant 5 minutes. Couvrir d’un grand volume d’eau bouillante salée, 75cl pour 250g, et laisser cuire 15 minutes.',
        img: '/IMG/Aliments/mélange-incas.jpg'
    },
]



const articleContainer = document.querySelector('.articles_container');   // point d'entrée

const displayArticle =() => {
    const articlesNode = articles.map ( (article) =>{
        return createArticleElement(article);
    });
    articleContainer.innerHTML = "";
    articleContainer.append(...articlesNode)
}


const createArticleElement = (article) => {      //fonction qui crée un article


    const divArticle = document.createElement('div');
    divArticle.classList.add('article');

    const image = document.createElement('img');
    image.src = article.img;
    image.alt = "";

    const h2 = document.createElement('h2');
    h2.innerText = article.denomination;

    const paragraph = document.createElement('p');
    paragraph.innerText = article.timing;

    const paragraph2 = document.createElement('p');
    paragraph2.innerText = article.conseil;


    divArticle.append(image, h2, paragraph,paragraph2);
    return divArticle

}


displayArticle();