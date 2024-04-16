class Wolf{
     constructor(){
          this.strength = Math.floor(Math.random() * 100);
     }
     howl(){
          console.log('owooooooo!');
     }
}
//mengekspor data yang dikirim
module.exports = Wolf;