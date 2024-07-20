function Logar() {
    let login = document.querySelector("#login").value;
    let senha = document.querySelector("#senha").value;
    
    //Redirecionamento para tela ao usuário inserir suas informações no login

    if (login === "professor" && senha ==="SenacProf123") {
        window.location.href = 'professor.html';
    } else if(login === "aluno" && senha ==="Senacaluno123") {
        window.location.href = 'aluno.html';
    }else if (login === "gestor" && senha ==="Senacgestor123"){
        window.location.href = 'painel.html';
    } else{
        alert("Você não tem permissão para isso! Contacte sua Coordenação")
    }
}