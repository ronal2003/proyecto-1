// Durante la noche de Halloween 🎃, una bruja 🧙‍♀️ está preparando una mezcla mágica. Tiene una lista de pociones, cada una con un poder asociado, y quiere combinar dos de ellas para obtener un poder total específico.

// Dada una lista de enteros donde cada número representa el poder de una poción 🧪 y un número entero que representa el poder objetivo, debes encontrar el índice de las dos primeras pociones que sumen exactamente el poder objetivo.

function encontrarPociones(pociones, poderObjetivo) {
  // Crear un mapa para almacenar los poderes ya vistos
  const mapaPociones = new Map();

  // Iterar sobre la lista de pociones
  for (let i = 0; i < pociones.length; i++) {
    const poderActual = pociones[i];
    const complemento = poderObjetivo - poderActual;

    // Verificar si el complemento ya está en el mapa 
    if (mapaPociones.has(complemento)) {
      return [mapaPociones.get(complemento), i]; // Retornar índices del complemento y el actual
    }

    // Si no está, registrar el poder actual con su índice
    mapaPociones.set(poderActual, i);
  }

  // Si no se encuentran dos pociones que cumplan, retornar un valor indicativo
  return null;
}

// Ejemplo de uso
const potions = [4, 5, 6, 2]
const goal = 8

const resultado = encontrarPociones(potions, goal);
if (resultado) {
  console.log(`Las pociones están en los índices: ${resultado[0]} y ${resultado[1]}`);
} else {
  console.log("No se encontraron dos pociones que sumen el poder objetivo.");
}
