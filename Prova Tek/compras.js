//Criando lista de produtos
let products = [
    { barCode: 1, name: 'Sabão em pó', brand: 'OMO', qtd: 2, price: 15.00 },
    { barCode: 2, name: 'Laranja', brand: 'Fazenda Capão', qtd: 2, price: 4.99 },
    { barCode: 3, name: 'Arroz', brand: 'Prato Fino', qtd: 3, price: 19.90 },
    { barCode: 4, name: 'Contra Filé', brand: 'Friboi', qtd: 1, price: 32.00 }
];

// Calculando o preço total
let result = products.map(function(product) {
    // Calculando o preço total por produto
    let totalPricePerProduct = product.qtd * product.price;
    
    return {
        barCode: product.barCode,
        name: product.name,
        totalPricePerProduct: totalPricePerProduct.toFixed(2), // Limitando a formatação do preço por produto a duas casas decimais
        price: product.price.toFixed(2) // Limitando a formatação do preço do total de produtos a duas casas decimais
    };
});

// Calculando o preço total da compra
let totalPriceOfPurchase = products.reduce(function(acc, product) {
    return acc + (product.qtd * product.price);
}, 0);

// Limitando a formatação do preço total da compra para duas casas decimais
totalPriceOfPurchase = totalPriceOfPurchase.toFixed(2);

console.log("Produtos:");
console.log(result);
console.log(`Total da compra: R$ ${totalPriceOfPurchase}`);
