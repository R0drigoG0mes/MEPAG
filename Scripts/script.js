const btn_entrar = document.getElementById("btn_entrar");
const btn_registrar = document.getElementById("btn_registrar");
const formulario_entrar = document.getElementById("entrar");
const formulario_registrar = document.getElementById("registrar");
const formulario_nova_cobrança = document.getElementById("formulario_nova_cobrança");
const btn_cancelar_registro = document.getElementById("btn_cancelar_registro");
const btn_cancelar_entrar = document.getElementById("btn_cancelar_entrar");
const cumprimento = document.getElementById("cumprimento");
const main = document.getElementById("main");
const nav_cobrar = document.getElementById("nav_cobrar");
const nova_cobrança = document.getElementById("nova_cobrança");
const salvar_nova_cobrança = document.getElementById("salvar_nova_cobrança");


/* VARIÁVEIS GLOBAIS */

var usuario_atual = "";
var nome_atual = "";

                        /* Registrar */


btn_registrar.addEventListener("click", function(e){
    formulario_registrar.style.display = "block";
});

btn_cancelar_registro.addEventListener("click", function(e){
    formulario_registrar.style.display = "none";
    nome_registro.value = "";
    usuario_registro.value = "";
    senha_registro.value = "";
});

btn_salvar_registro.addEventListener("click", function(e){
    var novo_nome = document.createElement("li");
    var novo_usuario = document.createElement("li");
    var nova_senha = document.createElement("li");

    novo_nome.innerHTML = usuario_registro.value + " - " + nome_registro.value;
    novo_usuario.innerHTML = usuario_registro.value;
    nova_senha.innerHTML = senha_registro.value;

    lista_nomes.appendChild(novo_nome);
    lista_usuarios.appendChild(novo_usuario);
    lista_senhas.appendChild(nova_senha);

    nome_registro.value = "";
    usuario_registro.value = "";
    senha_registro.value = "";

    formulario_registrar.style.display = "none";

    formulario_entrar.style.display = "block";
});

                        /* ENTRAR */

function logado(){

}

btn_entrar.addEventListener("click", function(e){
    formulario_entrar.style.display = "block";
})

btn_cancelar_entrar.addEventListener("click", function(e){
    formulario_entrar.style.display = "none";

    usuario_entrar.value = "";
    senha_entrar.value = "";
})


                    /* NOVA COBRANÇA */

cancelar_nova_cobrança.addEventListener("click", function(e){
    nome_nova_cobrança.value = "";
    numero_nova_cobrança.value = "";
    valor_nova_cobrança.value = "";
    descriçao_nova_cobrança.value = "";
    formulario_nova_cobrança.style.display = "none";
});

