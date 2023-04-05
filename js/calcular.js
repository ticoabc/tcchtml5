function clicar() {
    /*
    #########Constantes Provisórias##########
    #      Padrão de Entrada = 2 Fases      #
    #      Custo Energia = 0,65649 Kw/h     #
    #      Taxa de Desempenho = 0,72        #
    #      Potência por Módulo = 275 Wp     #
    #      Para Módulo de 270 Wp = 1.63 m2  #
    #      Para Módulo de 330 Wp = 1.95 m2  #
    #      Módulo de 270 Wp = 11.1 kg/mod   #
    #      Módulo de 330 Wp = 11.5 kg/mod   #
    #########################################

    ############Dados Econômicos#############
    #      Custo Projeto    = R$ 0.50 /Wp   #
    #      Custo Instalação = R$ 0.44 /Wp   #
    #    Custo Equipamentos = R$ 3.78 /Wp   #
    #      Tempo Projeto    = 25 anos       #
    # Inflação Média Energia Anual = 9%     #
    #      IPCA Média Anual = 6%            #
    #      Queda Produção Anual = 0,80%     #
    #    Rendimento Poupança Anual = 7%     #
    #       Taxa Mínima = 50                #
    #########################################
    */
   //custoenergia = 0.65649;
    custoenergia = 0.72;
    faseentrada = 2;
    txdesempenho = 0.72;
    potmod_1 = 270;
    potmod_2 = 330;
    dias = 30;
    custoprojeto = 0.50;
    custoinstalacao = 0.44;
    custoequipamentos = 3.78;
    tempoprojeto = 25;
    inflamediaanual = 0.09;
    ipcaamediaanual = 0.06;
    quedaproduano = 0.008;
    rendimentopoupancaanual = 0.07;
    txminima = 50;


    //var consumo = document.querySelector(".consumo").value;
    var gasto = document.querySelector(".gasto").value;
	var media = document.querySelector(".media").value;
	
    var gerakwp = ( ( ( parseFloat(consumo) / dias / parseFloat(media) ) / 0.8 ) * 1000).toFixed(2);	
	//document.querySelector("#gerakwp").value = gerakwp;
	
	//Consumo Mensal Médio
    var consumo = ( ( parseFloat(gasto) / custoenergia ) ).toFixed(2);
    document.querySelector("#consumo").value = consumo;

    //Consumo Médio Corrigido
    var corrigeconsumo = ( consumo - 50 ).toFixed(2);
    document.querySelector("#corrigeconsumo").value = corrigeconsumo;

    //Potência Necessária
    var potencianecess = ( ( corrigeconsumo / ( dias * media * txdesempenho ) )*1000 ).toFixed(2);
    document.querySelector("#potencianecess").value = potencianecess;

    //Quantidade de Módulos
    var quantmod = (( potencianecess / (potmod_1 * 1) )*1000 ).toFixed(0);
    document.querySelector("#quantmod").value = quantmod;

    //Potência Gerador
    var potenciagerador = ((potmod_1 * (quantmod / 1000))).toFixed(2);
    document.querySelector("#potenciagerador").value = potenciagerador;

    //Inversor Potência Mínima
    var invrsorpotmin = ( potenciagerador / 1.05 ).toFixed(2);
    document.querySelector("#invrsorpotmin").value = invrsorpotmin;

    //Área Coberta
    if(potmod_1 <= 310){
        var areacobrt = (((quantmod * 1.63) * 1.1)).toFixed(2);
        document.querySelector("#areacobrt").value = areacobrt;
    }else{
        var areacobrt = ((quantmod * 1.95) * 1.1);
        document.querySelector("#areacobrt").value = areacobrt;
    }

    //Geração Média Estimada
    var geracaomediaestim = (( potenciagerador * media * txdesempenho * dias ) / 1000).toFixed(2);
    document.querySelector("#geracaomediaestim").value = geracaomediaestim;

    //Geração Estimada 1° Ano
    var gerestimano = (geracaomediaestim * 12).toFixed(2);
    document.querySelector("#gerestimano").value = gerestimano;

    //Consumo Corrigido Anual
    var corrigeconsumoanual = (( corrigeconsumo * 12 )).toFixed(2);
    document.querySelector("#corrigeconsumoanual").value = corrigeconsumoanual;

    //Custo Mínimo Projeto
    var custominprojeto = ((custoprojeto + custoinstalacao + custoequipamentos) * potenciagerador * 1000).toFixed(2);
    document.querySelector("#custominprojeto").value = custominprojeto;

    //Custo Mensal Energia Atual
    document.querySelector("#gasto").value = gasto;

    //Custo Mensal Energia Novo
    /*var custominprojeto = ((custoprojeto + custoinstalacao + custoequipamentos) * potenciagerador * 1000).toFixed(2);*/

    //Valor Energia Novo
    var valorenergianovo = (txminima * custoenergia).toFixed(2);
    document.querySelector("#valorenergianovo").value = valorenergianovo;

    //Valor Energia Conc.( Consumo Mensal Médio * custoenergia )
    var valorenergiaconc = (consumo * custoenergia).toFixed(2);
    document.querySelector("#valorenergiaconc").value = valorenergiaconc;

    //Retorno 1º ano:
    var retorno1ano = ( ( valorenergiaconc - valorenergianovo ) * 12 ).toFixed(2);
    document.querySelector("#retorno1ano").value = retorno1ano;

    //Valor Prestação
	


    //resultado.innerHTML = fluxo;
}

var btExibir = document.getElementById("btExibir");
    btExibir.addEventListener("click", function(){
        var inValor = document.getElementById("inValor")
        var outValor = document.getElementById("outValor")
    })

var valor = Number(inValor.value)
var lista = ""
    for(i = 1; i <=5; i++){
        lista += i + " - " + (valor * (gerestimano - corrigeconsumoanual)) + "\n"

        outValor.textContent = " " + lista
    }

function Financiamento(){
    var vlrEmprest = parseFloat(document.getElementById("custominprojeto").value);
    var result = document.getElementById("result");
}

function fluxo(){
    var numero = parseFloat(document.getElementById("numero").value);
    var resultado = document.getElementById('resultado');
    var fluxo = '';

    resultado.innerHTML = fluxo;
}