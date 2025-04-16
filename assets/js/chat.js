  $(function () {
    // let msgOpening ="Hi there!</br> How can i help you today?";
    const urlParams = new URLSearchParams(window.location.search);
    let msgOpening ="";
    let msgAgent="";
    if (urlParams.get('lang') === 'en') {
        msgOpening ="Hello! Welcome to <b>DATAFLOW CONNECT, S.A.,</b> your partner in intelligent solutions for Call Centers. How can we help you today? <ul style='list-style:disc;margin-left:25px;'><li>Schedule a free consultation</li><li>Learn about our services</li><li>Talk to an advisor</li></ul>";
        msgAgent="One of our agents will be with you soon. </br>All our agents are currently busy. Please try again later. </br> You can also reach us via email. <a href='?page=contact-us'class='text-primary'> <b> supportdesk@dataflowconnect.biz</strong></a>  ";
    }else {
        msgOpening ="¡Hola! Bienvenido a <b>DATAFLOW CONNECT, S.A.,</b> su aliado en soluciones inteligentes para Call Centers . ¿En qué podemos ayudarle hoy? <ul style='list-style:disc;margin-left:25px;'><li>Agendar una asesoría gratuita</li><li>Conocer nuestros servicios</li><li>Hablar con un asesor</li></ul>";
        msgAgent="Uno de nuestros agentes se pondrá en contacto con usted en breve.Todos nuestros agentes están ocupados. Vuelva a intentarlo más tarde.También puede contactarnos por correo electrónico. <a href='?page=contact-us'class='text-primary'> <b> supportdesk@dataflowconnect.biz</strong></a> "
    }
    
    generate_message_bot(msgOpening, 'user');

        var INDEX = 0;
        $("#chat-submit").click(function (e) { 
            
           

            e.preventDefault();
            
            var msg = $("#chat-input").val();
            
            // generate_message(msgOpening, 'user');

            if (msg.trim() == '') {
                return false;
            }
            generate_message(msg, 'self');
            var buttons = [
                {
                    name: 'Existing User',
                    value: 'existing'
                },
                {
                    name: 'New User',
                    value: 'new'
                }
            ];
            setTimeout(function () {
                generate_message_bot(msgAgent, 'user');
            }, 6000)

        })

        function generate_message(msg, type) {
            INDEX++;
            var str = "";
            str += "<div id='cm-msg-" + INDEX + "' class=\"chat-msg " + type + "\">";
            // str += "          <span class=\"msg-avatar\">";
            // str += "            <img src=\"https:\/\/image.crisp.im\/avatar\/operator\/196af8cc-f6ad-4ef7-afd1-c45d5231387c\/240\/?1483361727745\">";
            // str += "          <\/span>";
            str += "          <div class=\"cm-msg-text\">";
            str += msg;
            str += "          <\/div>";
            str += "        <\/div>";
            $(".chat-logs").append(str);
            $("#cm-msg-" + INDEX).hide().fadeIn(300);
            if (type == 'self') {
                $("#chat-input").val('');
            }
            $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight }, 1000);
        }

        function generate_message_bot(msg, type) {
            INDEX++;
            var str = "";
            str += "<div id='cm-msg-" + INDEX + "' class=\"chat-msg-bot " + type + "\">";
            str += "          <span class=\"msg-avatar\">";
            str += "            <img src='./assets/images/chat-face.png' class='image-chat-bot'>";
            str += "          <\/span>";
            str += "          <div class=\"cm-msg-bot\">";
            str += msg;
            str += "          <\/div>";
            str += "        <\/div>";
            $(".chat-logs").append(str);
            $("#cm-msg-" + INDEX).hide().fadeIn(300);
            if (type == 'self') {
                $("#chat-input").val('');
            }
            $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight }, 1000);
        }

        function generate_button_message(msg, buttons) {
            /* Buttons should be object array 
              [
                {
                  name: 'Existing User',
                  value: 'existing'
                },
                {
                  name: 'New User',
                  value: 'new'
                }
              ]
            */
            INDEX++;
            var btn_obj = buttons.map(function (button) {
                return "              <li class=\"button\"><a href=\"javascript:;\" class=\"btn btn-primary chat-btn\" chat-value=\"" + button.value + "\">" + button.name + "<\/a><\/li>";
            }).join('');
            var str = "";
            str += "<div id='cm-msg-" + INDEX + "' class=\"chat-msg user\">";
            str += "          <span class=\"msg-avatar\">";
            str += "            <img src=\"https:\/\/image.crisp.im\/avatar\/operator\/196af8cc-f6ad-4ef7-afd1-c45d5231387c\/240\/?1483361727745\">";
            str += "          <\/span>";
            str += "          <div class=\"cm-msg-text\">";
            str += msg;
            str += "          <\/div>";
            str += "          <div class=\"cm-msg-button\">";
            str += "            <ul>";
            str += btn_obj;
            str += "            <\/ul>";
            str += "          <\/div>";
            str += "        <\/div>";
            $(".chat-logs").append(str);
            $("#cm-msg-" + INDEX).hide().fadeIn(300);
            $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight }, 1000);
            $("#chat-input").attr("disabled", true);



        }

        $(document).delegate(".chat-btn", "click", function () {
            var value = $(this).attr("chat-value");
            var name = $(this).html();
            $("#chat-input").attr("disabled", false);
            generate_message(name, 'self');
        })

        $("#chat-circle").click(function () {
            $("#chat-circle").toggle('scale');
            $(".chat-box").toggle('scale');
        })

        $(".chat-box-toggle").click(function () {
            $("#chat-circle").toggle('scale');
            $(".chat-box").toggle('scale');
        })

    })