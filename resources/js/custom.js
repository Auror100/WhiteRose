function send_Task_Type(key_Php,button_Php){

    id = key_Php.value;
    button_Id = button_Php;

    console.log(button_Id);

    radio = document.getElementById(id);
    radio.checked = true;

    /*
    buttons_Options = ["iuButton","inuButton","uniButton","ninuButton"];

    console.log(buttons_Options.length);

    for(i=0;i < buttons_Options.length;i++){

        if(button_Id != buttons_Options[i]){

            button = document.getElementById( buttons_Options[i]);
            button.style.backgroundColor = "#fff";
            button.style.borderColor = "#000";
            console.log(button);

        }

    }


    button = document.getElementById(button_Id);
    button.style.backgroundColor = "#5cdb5c";
    button.style.borderColor = "#5cdb5c";
    console.log(button);

    */
    //button.style.backgroundColor = "red";

    path_url = key_Php.value;
    console.log(path_url);

    send_url = document.getElementById("send_form").action = "/"+path_url;
    console.log(send_url);

}
window.send_Task_Type = send_Task_Type;
