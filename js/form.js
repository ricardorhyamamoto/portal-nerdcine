let btn = document.getElementById('btn');
btn.addEventListener('click', function() {
    
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let mensagem = document.getElementById('mensagem').value;

    alert(nome + '\n' + email + '\n' + mensagem);


});