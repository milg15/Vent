const translations = {
    en_us: {
        title: "Vent with us!",
        welcome: "You can vent with us",
        description: "Tell me about a problem you have. Be as detailed as possible. This can be a big or small problem, global or personal. We will not share this information with anyone but we want to see if we can help you solve it.",
        placeholder: "Vent here all you want",
        send_btn: "Send",
        new_problem: "I want to vent again!",
        name: "Name",
        final_title: "Thanks",
        final_text: "I hope you feel better after sharing. Tell us ur email so we can tell you what can go next. We will not share this with anyone this is only for us to send you update about this product.",
        final_knowmore: "Wanna stay up to date with this sruvey?",
    },
    es_pe: {
        title: "Desahogate!",
        welcome: "Desahogate con nosotros",
        description: "Cuentame un problema que tengas. Se lo mas detallado/a posible. Este puede ser un problema grande o chico, global o personal. Esta informacion no la comportiremos con nadie mas solo queremos ver si podemos ayudarte a resolverlo.",
        send_btn: "Enviar",
        placeholder: "Escribe aqui lo que quieras",
        new_problem: "Quiero escribir otro problema",
        name: "Nombre",
        final_title: "Grcaus",
        final_text: "Espero que te sientas mejor luego de compartir. Coloca tu correo aqui para que puedas que te compartamos lo que viene. No vamos a compartir esta información.",
        final_knowmore: "Quieres conocer los resultados?",
    }
}

document.addEventListener("DOMContentLoaded", () => {
    if (localStorage.getItem("lang")){
        const curr = localStorage.getItem("lang");
        if (curr in translations){
            changeLanguage(curr)
        }
    }
    else{
        changeLanguage("en_us");
    }
});// set all the text

function changeLanguage(newLang){
    localStorage.setItem("lang", newLang)
    let lang = translations[newLang]

    document.title = lang.title;
    document.getElementById("welcome").textContent = lang.welcome;document.getElementById("description").textContent = lang.description;
    document.getElementById("problem").placeholder = lang.placeholder;
    document.getElementById("send_btn").value = lang.send_btn;
    document.getElementById("name").placeholder = lang.name;
}