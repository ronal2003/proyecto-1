function bubbleSort(arr) {
    let n = arr.length;
    let swapped;

    // Bucle externo para controlar las pasadas
    for (let i = 0; i < n - 1; i++) {
        swapped = false;

        for (let j = 0; j < n - i - 1; j++) {
            if (arr[j] > arr[j + 1]) {
                // Intercambio
                let temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;

                swapped = true; // Marcamos que hubo un intercambio
            }
        }

        if (!swapped) break;
    }

    return arr;
}

let numeros = [64, 34, 25, 12, 22, 11, 90];
console.log("Arreglo original:", numeros);
console.log("Arreglo ordenado:", bubbleSort(numeros));
