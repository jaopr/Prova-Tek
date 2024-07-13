let idades = [25, 10, 15, 30, 19, 8];

// Filtrando as idades
let idadesMenoresQue18 = idades.filter(function(idade) {
    return idade < 18;
});

console.log("Idades menores que 18: " + idadesMenoresQue18);
