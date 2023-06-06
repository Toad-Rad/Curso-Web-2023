/*----------ENTRENADORES POKEMON----------*/

//CLASE: ENTRENADOR
class ENTRENADOR
{
    constructor(nombre,region,medallas,equipo)
    {
        this.n = nombre;
        this.r = region;
        this.m = medallas;
        this.e = equipo[2];
    }
}

let Entrenador1 = new ENTRENADOR("Jan","Petrofico",3,"Dedeney,Bulbasaur");
console.log(Entrenador1);

let Entrenador = new ENTRENADOR("Orion","Eolino",2,"Charmander,Butterfree,")
console.log(Entrenador);

/*----------POKEMON----------*/

//CLASE: POKEMON

class POKEMON
{
    constructor(nombre,vida,ataque,ataque_especial,defensa,defensa_especial,velocidad,set_movimientos)
    {
        this.n = nombre;
        this.hp = vida;
        this.ap = ataque;
        this.sap = ataque_especial;
        this.sp = defensa;
        this.ssp = defensa_especial;
        this.vel = velocidad;
        this.mov = set_movimientos[3];
    }
}

let Pokemon = new POKEMON("Dedeney", 10 , 5 , 7 , 6 , 9 , 11 , "Placaje,Encanto,Impactrueno,Carga");
console.log(Pokemon);

let Pokemon1 = new POKEMON("Charmander", 13 , 10 , 13, 5 , 7 , 8 ,"Ascuas,Gruñido,Cuchillada,Pirotecnia");
console.log(Pokemon1);

let Pokemon2 = new POKEMON("Bulbasaur", 12 , 8 , 10 , 10 , 12 , 7 , "Drenadoras,Derribo,Abatidoras,Bomba_Germen");
console.log(Pokemon2);

let Pokemon3 = new POKEMON("Butterfree", 9 , 6 , 8 , 5 , 7 , 12 ,"Tornado,Psicorayo,Remolino,Zumbido");
console.log(Pokemon3);

/*----------MOVIMIENTO----------*/

//CLASE: MOVIMIENTOS

class MOVIMIENTOS
{
    constructor(potencia,probabilidad,tipo)
    {
        this.p = potencia;
        this.pro = probabilidad;
        this.ty = tipo;
    }    
}

let mov_fisic = new MOVIMIENTOS(5 , 50 , "Fisico");
console.log(mov_fisic);

let mov_speci = new MOVIMIENTOS(10, 80 , "Especial");
console.log(mov_speci);














// class MOFIS extends MOVIMIENTOS
// {
//     constructor(potencia,probabilidad,tipo)
//     {
//         super(potencia,probabilidad,tipo)
//         this.p = potencia;
//         this.pro = probabilidad;
//         this.ty = tipo;
//     }    
// }

// class MOVESP extends MOVIMIENTOS
// {
//     constructor(potencia,probabilidad,tipo)
//     {
//         super(potencia,probabilidad,tipo)
//         this.p = potencia;
//         this.pro = probabilidad;
//         this.ty = tipo;
//     }    
// }