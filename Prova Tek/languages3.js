let languages = ["C#", "JavaScript", "PHP", "Python", "Cobol", "Java"];

//Encontrando Cobol
let indexToRemove = languages.indexOf("Cobol");

// Removendo Cobol usando splice
if (indexToRemove !== -1) {
    languages.splice(indexToRemove, 1);
}

console.log(languages);