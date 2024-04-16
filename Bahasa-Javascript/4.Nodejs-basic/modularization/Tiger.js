class Tiger {
     constructor(){
          this.strength = Math.floor(Math.random() * 100);
     }
     growl(){
          console.log('grrrrrrrrr!');
     }
}
//mengekspor data yang dikirim
module.exports = Tiger;