function setPrice(constructionPrice, finalPrice) {
    let construction = document.getElementById('construction-price')
    construction.innerHTML = `Rp ` + constructionPrice

    let final = document.getElementById('final-price')
    final.innerHTML = `Rp ` + finalPrice
}
