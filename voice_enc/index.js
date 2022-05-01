Encrypt_div = () => {
    var encrypt_div = document.getElementById('Encrypt')
    // encrypt_div.classList.add('block')
    encrypt_div.classList.toggle('hidden')

}
Decrypt_div = () => {
    var encrypt_div = document.getElementById('decrypt')
    // encrypt_div.classList.add('block')
    encrypt_div.classList.toggle('hidden')

}

encrypt = () => {
    var msgenc = document.getElementById('m_t_e').value;
    function run(message)    {
    // var message = msgenc;
        var messagearr = message.split(' ')
        for (var i = 0; i < messagearr.length; i++){
         var msg = messagearr[i];                 
         var msgarr = msg.split('');
          for (var j = 0; j < msgarr.length; j++){
        var dec = msg.charCodeAt(j);
        
        var hex = dec.toString(16);
        var hexchar = hex.split('')
        
        for (var k = 0; k < hex.length; k++){
            hexchar[k] = enc(hexchar[k]);
           
            
        }
        var hex=hexchar.join(',')
        msgarr[j] = hex+'1';
        

      }
    msg = msgarr.join('')    
    
    messagearr[i] = msg;
}
    return messagearr.join(' ')
    }
    m1 = run(msgenc);
    m2 = run(m1);
// fs.writeFileSync('./encrpted.txt',message)
    // console.log(message);
    document.getElementById('Encrypted_msg').innerHTML = m2;

}

decrypt = () => {
     var message = document.getElementById('m_t_d').value;
    function run(message)      {
     var messagearr = message.split(' ')
     for (var i = 0; i < messagearr.length; i++){
        var msg = messagearr[i];
       //   console.log(msg);
         
        var msgarr = msg.split('1');
         for (var j = 0; j < msgarr.length-1; j++){
             var msgdecrypt = msgarr[j].split(',')
             for (var k = 0; k < msgdecrypt.length; k++){
                 msgdecrypt[k] = dec(msgdecrypt[k]);
             }
             var msghex = msgdecrypt.join('')
             
             var ascii = parseInt(msghex, 16)
             
             msgarr[j] = String.fromCharCode(ascii)
             
             

             
           }
         msg = msgarr.join('')    
         
         messagearr[i] = msg;
     }
    // message= messagearr.join(' ')
    return messagearr.join(' ')
    }
    m1 = run(message);
    m2 = run(m1);
    // dobara encrypt karege for double security reason
    // dobara encrypt karege for double security reason
    // console.log(message);
    document.getElementById('Decrypted_msg').innerHTML = m2;

}







function enc(x) {
    switch (x) {
        case 'a': return '.';
        case 'A': return '..';
        case 'b': return '.+';
        case 'B': return '..+';
        case 'c': return '.++';
        case 'C': return '..++';
        case 'd': return '.+.';
        case 'D': return '.+..';
        case 'e': return '...+';
        case 'E': return '...++';
        case 'f': return '.+.+';
        case 'F': return '...+..+';
        case '1': return '.+.++';
        case '2': return '.+..++';
        case '3': return '.+++.';
        case '4': return '.+++..';
        case '5': return '.++...';
        case '6': return '..++...';
        case '7': return '+';
        case '8': return '++'; 
        case '9': return '+++'; 
        case '0': return '++++'; 
      
            
    
        default:
            return '3';
    }
}
function dec(x) {
    switch (x) {
        case '.': return 'a'
        case '..': return 'A'
        case '.+': return 'b'
        case '..+': return 'B'
        case '.++': return 'c'
        case '..++': return 'C'
        case '.+.': return 'd'
        case '.+..': return 'D'
        case '...+': return 'e'
        case '...++': return 'E'
        case '.+.+': return 'f'
        case '...+..+': return 'F'
        case '.+.++': return '1'
        case '.+..++': return '2'
        case '.+++.': return '3'
        case '.+++..': return '4'
        case '.++...': return '5'
        case '..++...': return '6'
        case '+': return '7'
        case '++': return '8'
        case '+++': return '9'
        case '++++': return '0'
            
            
    
        default:
            x = '3';
            break;
    }
}


function myFunction1() {
    /* Get the text field */
    var copyText = document.getElementById("Encrypted_msg");
  
    /* Select the text field */
    // copyText.select();
    // copyText.setSelectionRange(0, 99999); /* For mobile devices */
  
     /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.innerHTML);
  
    
  }
function myFunction2() {
    /* Get the text field */
    var copyText = document.getElementById("Decrypted_msg");
  
    /* Select the text field */
    // copyText.select();
    // copyText.setSelectionRange(0, 99999); /* For mobile devices */
  
     /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.innerHTML);
  
    
  }