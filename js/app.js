function global() {
    var global = "Hola desde global";
    function interna() {
        var internas = "Hola desde Interna";
    }
    return interna;

}
console.log(global() + interna());