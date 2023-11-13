const formulario = document.querySelector('#formulario');
const buttonSubmit = document.querySelector('#submit');
const urlDesktop = 'https://wa.me/';
const urlMobile = 'https://wa.me/';
const telefonoc = '524494273797';

    function isMobile() {
        if (sessionStorage.desktop)
            return false;
        else if (localStorage.mobile)
            return true;
        var mobile = ['iphone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini', 'windows mobile', 'windows phone', 'iemobile'];
        for (var i in mobile)
            if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) return true;
        return false;
    }
    function abreWhatsApp(){
        
        let nombre = document.querySelector('#nombre').value
        let apellidos = document.querySelector('#apellido').value
        let paquete = document.querySelector('#paquete').value
        let mensaje = telefonoc + '?text=*Nombre*%0A' + nombre +' '+ apellidos + '%0A*Necesito información para:*%0A' + paquete
        if(isMobile()) {
            window.open(urlMobile + mensaje, '_blank')
        }else{
            window.open(urlDesktop + mensaje, '_blank')
        }
        buttonSubmit.innerHTML = '<i class="bi bi-check2-all"></i> Enviado'
        buttonSubmit.disabled = false
        
       alert("Abriendo Whatsapp");
    }
    
