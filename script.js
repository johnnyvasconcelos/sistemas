var body = document.querySelector('body')
let nome = document.querySelector('#nome')
let ramo = document.querySelector('#ramo')
let empresa = document.querySelector('#empresa')
let email = document.querySelector('#email')
let whatsapp = document.querySelector('#whatsapp')
let redes = document.querySelector('#redes-sociais')
let produto = document.querySelector('#produto')
let alteracao = document.querySelector('#alteracao')
let descricao = document.querySelector('#descricao')
let porque = document.querySelector('#porque')
let botao = document.querySelector('.button')
let botao2 = document.querySelector('.button-2')
let botao3 = document.querySelector('.button-3')
let botao4 = document.querySelector('.button-4')
let botao5 = document.querySelector('.button-5')
let final = document.querySelector('.final')
let menuDiv = document.querySelector('.div-menu')
let menu = document.querySelector('.menu')
let ul = document.querySelector('.menu-ul')
let menuClose = document.querySelector('.menuClose')
let firstForm = document.querySelector('.first-form')
let secondForm = document.querySelector('.second-form')
let thirdForm = document.querySelector('.third-form')
let fortyForm = document.querySelector('.forty-form')
let first = document.querySelector('.first')
let second = document.querySelector('.second')
let third = document.querySelector('.third')
let last = document.querySelector('.last')
var etapa = 0

botao.addEventListener('click', function() {
if (ramo.value == 0 || empresa.value == 0 || email.value == 0 || nome.value == 0 || whatsapp.value == 0 || redes.value == 0) {
    alert('Informe os dados corretamente')
} else {
    etapa ++
    second.classList.add('active')
    botao.style.display = 'none'
    botao2.style.display = 'block'
    firstForm.style.display = "none"
    secondForm.style.display = "flex"
}
})

botao2.addEventListener('click', function() {
    if (produto.value == 0 || descricao.value == 0) {
        alert('Informe os dados corretamente')
    } else {
        etapa ++
        botao.style.display = 'none'
        botao2.style.display = 'none'
        botao3.style.display = 'block'
        third.classList.add('active')
        firstForm.style.display = "none"
        secondForm.style.display = "none"
        thirdForm.style.display = "flex"
    }
})

botao3.addEventListener('click', function() {
    if (porque.value == 0 || alteracao.value == 0) {
        alert('Informe os dados corretamente')
    } else {
        etapa ++
        botao.style.display = 'none'
        botao2.style.display = 'none'
        botao3.style.display = 'none'
        botao4.style.display = 'block'
        last.classList.add('active-last')
        firstForm.style.display = "none"
        secondForm.style.display = "none"
        thirdForm.style.display = "none"
        fortyForm.style.display = "flex"
    }
})

botao4.addEventListener('click', function() {
    if (etapa >= 3) {
        botao4.setAttribute('type', 'submit')
        last.classList.remove('active-last')
        last.classList.add('active-last-full')
    } else {
        alert('Informe os dados corretamente')
    }
})

menu.addEventListener('click', function() {
    ul.setAttribute('style', 'transform: translateX(0%);')
    if (ul.classList.contains("show")) {
        ul.setAttribute('style', 'transform: translateX(-130%);')
        ul.classList.remove("show")
        document.querySelector('.menu-icon').style.display = "block"
       document.querySelector('.close-icon').style.display = "none"
        } else {
        ul.classList.add("show");
        document.querySelector('.menu-icon').style.display = "none"
        document.querySelector('.close-icon').style.display = "block"
        }
})

first.addEventListener('click', function() {
    secondForm.style.display = "none"
    firstForm.style.display = "flex"
    final.style.display = "none"
    thirdForm.style.display= "none"
    fortyForm.style.display = "none"
})

second.addEventListener('click', function() {
    if (etapa <= 0) {
        alert('Complete a etapa atual antes de prosseguir')
    } else {
    firstForm.style.display = "none"
    secondForm.style.display = "flex"
    final.style.display = "none"
    thirdForm.style.display= "none"
    fortyForm.style.display = "none"
    }
})

third.addEventListener('click', function() {
    if (etapa <= 1) {
        alert('Complete a etapa atual antes de prosseguir')
    } else {
    firstForm.style.display = "none"
    secondForm.style.display = "none"
    final.style.display = "none"
    fortyForm.style.display = "none"
    thirdForm.style.display = "flex"
    }
})

last.addEventListener('click', function() {
    if (etapa <= 2) {
        alert('Complete a etapa atual antes de prosseguir')
    } else {
    firstForm.style.display = "none"
    secondForm.style.display = "none"
    final.style.display = "none"
    fortyForm.style.display = "flex"
    thirdForm.style.display= "none"
    }
})