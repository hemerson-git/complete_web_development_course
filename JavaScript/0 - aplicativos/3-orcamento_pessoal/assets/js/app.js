// INICIO DA CLASSE DE DESTAQUE

class Despesa {
    constructor(ano, mes, dia, tipo, descricao, valor) {
        this.ano = ano
        this.mes = mes
        this.dia = dia
        this.tipo = tipo
        this.descricao = descricao
        this.valor = valor
    }

    dataValidate() {
        for (let i in this) {
            if (this[i] === undefined || this[i] === '' || this[i] === null) {
                return false;
            }
            return true;
        }
    }
}

//FIM DA CLASSE DE DESTAQUE


// INICIO CLASSE DATABASE

class Database {
    constructor() {
        let id = localStorage.getItem('id');

        if (id === null) {
            localStorage.setItem('id', 0);
        }
    }

    save(d) {
        let id = this.getNextId();
        localStorage.setItem(id, JSON.stringify(d));
        localStorage.setItem('id', id);
        return true;
    }

    getNextId() {
        let nextId = localStorage.getItem('id');
        return parseInt(nextId) + 1;
    }

    getAllRegisters() {
        let id = localStorage.getItem('id');
        let despesas = [];

        for (let i = 1; i <= id; i++) {
            let despesa = JSON.parse(localStorage.getItem(i));
            if (despesa === null) {
                continue;
            }

            despesa.id = i;
            despesas.push(despesa);
        }

        return despesas;
    }

    search(despesa) {
        let despesasFiltradas = Array();
        despesasFiltradas = this.getAllRegisters();

        //ano
        if (despesa.ano != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.ano == despesa.ano);
        }
        
        //mes 
        if (despesa.mes != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.mes == despesa.mes);
        }

        //dia
        if (despesa.dia != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.dia == despesa.dia);
        }

        //tipo
        if(despesa.tipo != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.tipo == despesa.tipo);
        }

        //valor
        if(despesa.valor != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.valor == despesa.valor);
        }

        //descrição
        if(despesa.descricao != '') {
            despesasFiltradas = despesasFiltradas.filter(d => d.descricao == despesa.descricao);
        }

       return despesasFiltradas;
    }

    remove(id) {
        localStorage.removeItem(id);
    }
}

// FIM CLASSE DATABASE

let database = new Database();

$('#send').click(() => {
    cadastrarDespesas();
})

function cadastrarDespesas() {
    let ano = document.querySelector('#ano');
    let mes = document.querySelector('#mes');
    let dia = document.querySelector('#dia');
    let tipo = document.querySelector('#tipo');
    let descricao = document.querySelector('#descricao');
    let valor = document.querySelector('#valor');

    let despesa = new Despesa(
        ano.value,
        dia.value,
        mes.value,
        tipo.value,
        descricao.value,
        valor.value
    )


    if (despesa.dataValidate()) {
        let verify  = database.save(despesa);
        if(verify === true) {
            success();
            clearFields();
        } else {
            fail();
        }
    }

    function success() {
        document.querySelector('#modalTitle').textContent = 'Salvo com Sucesso'
        document.querySelector('.modal-header').classList.add('text-success');
        document.querySelector('.modal-header').classList.remove('text-danger');
        document.querySelector('.modal-body').textContent = 'Dados salvos com sucesso!';
        document.querySelector('#btn-close').classList.add('btn-success');
        document.querySelector('#btn-close').classList.remove('btn-danger');
    }

    function fail() {
        document.querySelector('#modalTitle').textContent = 'Erro ao salvar'
        document.querySelector('.modal-body').textContent = 'Erro ao persistir os dados';
        document.querySelector('.modal-header').classList.add('text-danger');
        document.querySelector('.modal-header').classList.remove('text-success');
        document.querySelector('#btn-close').classList.add('btn-danger');
        document.querySelector('#btn-close').classList.remove('btn-success');
    }

    function clearFields() {
        document.querySelector('#ano').value = '';
        document.querySelector('#mes').value = '';
        document.querySelector('#dia').value = '';
        document.querySelector('#tipo').value = '';
        document.querySelector('#descricao').value = '';
        document.querySelector('#valor').value = '';
    }
}

function deleteItem(item) {
    console.log(item);
}

function loadList(despesas = Array(), filtro = false) {
    let tbody = document.getElementById('dados');
    tbody.innerHTML = '';

    if(despesas.length == 0 && filtro == false) {
        despesas = database.getAllRegisters();
    }

    //percorre todos os registros 
    despesas.forEach(despesa => {

        //faz a inserção da linha ao tbody
        let row = tbody.insertRow();

        row.insertCell(0).innerHTML = `${despesa.dia}/${despesa.mes}/${despesa.ano}`;
        row.insertCell(1).innerHTML = getTipo();
        row.insertCell(2).innerHTML = despesa.descricao;
        row.insertCell(3).innerHTML = despesa.valor;

        let btn = document.createElement('button');
        btn.className = 'btn btn-danger';
        btn.innerHTML = '<i class="fas fa-times"></i>';
        btn.id = 'btn-' + despesa.id;
        btn.onclick = e => {
            let id = e.currentTarget.id.replace('btn-', '') 
            database.remove(id);
            loadList();
        }

        row.insertCell(4).append(btn);

        //adiciona as colunas às linhas

        function getTipo() {
            switch (despesa.tipo) {
                case '1':
                    despesa.tipo = 'Alimentação';
                    break;
                case '2':
                    despesa.tipo = 'Educação';
                    break;
                case '3':
                    despesa.tipo = 'Lazer';
                    break;
                case '4':
                    despesa.tipo = 'Saúde';
                    break;
                case '5':
                    despesa.tipo = 'Transporte';
                    break;
            }

            return despesa.tipo;
        }
    });
}

function searchExpense() {
    let dia  = document.getElementById('dia').value;
    let mes = document.getElementById('mes').value;
    let ano = document.getElementById('ano').value;
    let tipo = document.getElementById('tipo').value;
    let descricao = document.getElementById('descricao').value;
    let valor = document.getElementById('valor').value;

    let d = new Despesa (ano, mes, dia, tipo, descricao, valor);
    let despesas = database.search(d);

    loadList(despesas, true);
}
